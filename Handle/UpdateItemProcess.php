<?php
    if(isset($_POST["UserID"]) && !empty($_POST["UserID"])
    && isset($_POST["Quantity"]) && !empty($_POST["Quantity"])){
        require_once 'DatabaseAccess.php';
        $UserID = $_POST["UserID"];
        $Quantity = $_POST["Quantity"];
        $query = "UPDATE user SET Quantity = ? WHERE UserID = ?";
        $stmt = $connection->prepare($query);
        $stmt->bind_param("ii", $Quantity , $UserID);
        $stmt->execute();
        $connection->close();
        header("Location: ../View/Cart");
    }
?>