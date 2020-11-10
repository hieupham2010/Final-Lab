<?php
    if(isset($_GET["msg"]) && !empty($_GET["msg"])) {
        $Title = "";
        $Message = "";
        if($_GET["msg"] === "DeleteSuccess") {
            $Title = "Delete Product";
            $Message = "Delete product success";
        }else if($_GET["msg"] === "AddSuccess") {
            $Title = "Add Product";
            $Message = "Add product success";
        }else if($_GET["msg"] === "InvalidFile") {
            $Title = "Add Product";
            $Message = "Only JPG, JPEG, PNG files are allowed ";
        }else if($_GET["msg"] === "UpdateSuccess") {
            $Title = "Update Product";
            $Message = "Update product success ";
        }
    }
?>