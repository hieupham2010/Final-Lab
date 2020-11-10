<?php session_start(); if(!isset($_SESSION["UserName"])) {header("Location: Login"); exit;}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/productStyle.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Amatic+SC" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <?php include 'DialogAdd.php';
   include 'DialogMessage.php'?>
    <title>Products</title>
</head>

<body>
    <div class="container">
        <h1 style="font-size: 60px; font-weight: bold; display:inline; margin-left:90px">Products</h1>
        <button id="button-logout" type="button"> <a href="../Handle/LogoutProcess">Logout</a> </button>
        <button type="button" id="button-add" class="btn btn-primary font-weight-bold" data-toggle="modal" data-target="#AddProduct">
            Add Product
        </button>
        <?php include '../Handle/NumProduct.php' ?>
        <?php if ($NumProduct > 1) { ?>
            <p id="num-product"><?php echo $NumProduct ?> Products</p>
        <?php } else { ?>
            <p id="num-product"><?php echo $NumProduct ?> Product</p>
        <?php } ?>
        <div class="product">
            <table>
                <tr class="header">
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                <?php include '../Handle/LoadProductProcess.php' ?>
            </table>
        </div>
    </div>
    <footer>&copy; Copyright By Hieu Pham</footer>
</body>
<script src="Javascript/javascript.js"></script>

<?php
if (isset($_GET["msg"])) {
  echo "<script>$('#DialogMessage').modal({show: true})</script>";
}
?>
</html>