<?php
    if(isset($_POST["ProductID"]) && !empty($_POST["ProductID"])
    && isset($_COOKIE["UserToken"]) && !empty($_COOKIE["UserToken"])) {
        require_once 'DatabaseAccess.php';
        $ProductID = $_POST["ProductID"];
        $Token = $_COOKIE["UserToken"];
        $query = "DELETE FROM user WHERE Token = ? AND ProductID = ?";
        $stmt = $connection->prepare($query);
        $stmt->bind_param("si", $Token , $ProductID);
        $stmt->execute();
        $connection->close();
        header("Location: ../View/Cart");
    }
?>