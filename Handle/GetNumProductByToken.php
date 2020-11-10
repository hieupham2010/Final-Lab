<?php
    if(isset($_COOKIE["UserToken"]) && !empty($_COOKIE["UserToken"])) {
        require_once 'DatabaseAccess.php';
        $Token = $_COOKIE["UserToken"];
        $query = "SELECT DISTINCT ProductID FROM user WHERE Token = ?";
        $stmt = $connection->prepare($query);
        $stmt->bind_param("s", $Token);
        $stmt->execute();
        $result = $stmt->get_result();
        $Item = $result->num_rows;
    }else {
        $Item = 0;
    }
    
?>