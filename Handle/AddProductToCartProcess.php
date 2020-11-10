<?php
    if(isset($_COOKIE["UserToken"]) && !empty($_COOKIE["UserToken"])
    && isset($_POST["ProductID"]) && !empty($_POST["ProductID"])) {
        require_once 'DatabaseAccess.php';
        $Token = $_COOKIE["UserToken"];
        $ProductID = $_POST["ProductID"];
        $query = "SELECT * FROM user WHERE Token = ? AND ProductID = ?";
        $stmt = $connection->prepare($query);
        $stmt->bind_param("si", $Token , $ProductID);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $Quantity = $row["Quantity"] + 1;
            $query = "UPDATE user SET Quantity = ? WHERE Token = ? AND ProductID = ?";
            $stmt = $connection->prepare($query);
            $stmt->bind_param("isi", $Quantity , $Token , $ProductID);
            $stmt->execute();
        }else {
            $query = "INSERT user(Token , ProductID) VALUES(? , ?)";
            $stmt = $connection->prepare($query);
            $stmt->bind_param("si", $Token , $ProductID);
            $stmt->execute();
        }
        $connection->close();
        header("Location: ../View/Menu");
    }
?>