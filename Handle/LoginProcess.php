<?php 
    session_start();
    if(isset($_POST["txtUserName"]) && !empty($_POST["txtUserName"])
    && isset($_POST["txtPassword"]) && !empty($_POST["txtPassword"])) {
        require_once 'DatabaseAccess.php';
        $UserName = $_POST["txtUserName"];
        $Password = $_POST["txtPassword"];
        $query = "SELECT * FROM account WHERE UserName = ? AND Password = ?";
        $stmt = $connection->prepare($query);
        $stmt->bind_param("ss" , $UserName , $Password);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows == 1) {
            $_SESSION["UserName"] = $UserName;
            header("Location: ../View/Product");
        }else {
            header("Location: ../View/Login?msg=InvalidAccount");
        }

    }
?>