<?php
    if(isset($_POST["ProductID"]) && !empty($_POST["ProductID"])) {
        require_once 'DatabaseAccess.php';
        $ProductID = $_POST["ProductID"];
        $query = "SELECT * FROM products WHERE ProductID = ?";
        $stmt = $connection->prepare($query);
        $stmt->bind_param("i", $ProductID);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        unlink("../View/".$row["ImageSrc"]);
        $query = "DELETE FROM products WHERE ProductID = ?";
        $stmt = $connection->prepare($query);
        $stmt->bind_param("i", $ProductID);
        $stmt->execute();
        $connection->close();
        header("Location: ../View/Product?msg=DeleteSuccess");
    }
?>