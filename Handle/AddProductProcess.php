<?php 
    if(!empty($_POST["txtName"]) && !empty($_POST["txtDescription"])
    && !empty($_POST["txtPrice"]) && !empty($_POST["txtCategory"]) && $_FILES["ImageUpload"]["name"] != "") {
        $ProductName = $_POST["txtName"];
        $Description = $_POST["txtDescription"];
        $Price = $_POST["txtPrice"];
        $Category = $_POST["txtCategory"];
        $Hash = md5(rand(0,1000));
        $destination = "../View/Images/";
        $imageUpload = $Hash . $_FILES["ImageUpload"]["name"];
        $destinationFile = $destination . basename($imageUpload);
        $imageFileType = strtolower(pathinfo($destinationFile,PATHINFO_EXTENSION));
        $ImageSrc = "Images/" . $imageUpload;
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            header("Location: ../View/Product?msg=InvalidFile");
        }else {
            require_once 'DatabaseAccess.php';
            move_uploaded_file($_FILES["ImageUpload"]["tmp_name"], $destinationFile);
            $query = "INSERT products(ProductName, Price, Description, Category, ImageSrc) VALUES(?,?,?,?,?)";
            $stmt = $connection->prepare($query);
            $stmt->bind_param("sssss", $ProductName , $Price , $Description , $Category, $ImageSrc);
            $stmt->execute();
            $connection->close();
            header("Location: ../View/Product?msg=AddSuccess");
        }
    }
?>