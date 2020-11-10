<?php
    if(!empty($_POST["txtName"]) && !empty($_POST["txtDescription"])
    && !empty($_POST["txtPrice"]) && !empty($_POST["txtCategory"])
    && !empty($_POST["ProductID"])) {
        require_once 'DatabaseAccess.php';
        $ProductName = $_POST["txtName"];
        $Description = $_POST["txtDescription"];
        $Price = $_POST["txtPrice"];
        $Category = $_POST["txtCategory"];
        $ProductID = $_POST["ProductID"];
        $Hash = md5(rand(0,1000));
        $destination = "../View/Images/";
        if($_FILES["ImageUpload"]["name"] != "") {
            $imageUpload = $Hash . $_FILES["ImageUpload"]["name"];
            $destinationFile = $destination . basename($imageUpload);
            $imageFileType = strtolower(pathinfo($destinationFile,PATHINFO_EXTENSION));
            $ImageSrc = "Images/" . $imageUpload;
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                header("Location: ../View/Product?msg=InvalidFile");
            }else {
                $query = "SELECT * FROM products WHERE ProductID = ?";
                $stmt = $connection->prepare($query);
                $stmt->bind_param("i", $ProductID);
                $stmt->execute();
                $result = $stmt->get_result();
                $row = $result->fetch_assoc();
                unlink("../View/".$row["ImageSrc"]);
                move_uploaded_file($_FILES["ImageUpload"]["tmp_name"], $destinationFile);
                $query = "UPDATE products SET ProductName = ?, Price = ?, Description = ?, Category = ?, ImageSrc = ? WHERE ProductID = ?";
                $stmt = $connection->prepare($query);
                $stmt->bind_param("sssssi", $ProductName , $Price , $Description , $Category, $ImageSrc , $ProductID);
                $stmt->execute();
                $connection->close();
                header("Location: ../View/Product?msg=UpdateSuccess");
            }
        }else{
            $query = "UPDATE products SET ProductName = ?, Price = ?, Description = ?, Category = ? WHERE ProductID = ?";
            $stmt = $connection->prepare($query);
            $stmt->bind_param("ssssi", $ProductName , $Price , $Description , $Category, $ProductID);
            $stmt->execute();
            $connection->close();
            header("Location: ../View/Product?msg=UpdateSuccess");
        }
    }
?>