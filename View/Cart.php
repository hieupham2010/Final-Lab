<?php require '../Handle/SetCookie.php' ; include 'DialogOrder.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/CartStyle.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Amatic+SC" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Cart</title>
</head>

<body>
    <div class="container-cart">
        <div class="content">
            <div class="top_nav">
                <a href="../index" class="active_background">Home</a>
                <a href="Menu">Menu</a>
                <a href="Contact">Contact</a>
                <a href="About">About</a>
            </div>
            <div class="product">
                <table>
                    <tr class="header">
                        <th>Items</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                    <?php include '../Handle/LoadCartProcess.php' ?>
                </table>
                <div class="final">
                    <h1>Total Price: <i><?php echo $TotalPrice  ?>&#36;</i></h1>
                    <button type="button" id="button-order" class="btn btn-primary font-weight-bold" data-toggle="modal" data-target="#Order">
                        Order
                    </button>
                </div>

            </div>
        </div>
    </div>
    <footer>&copy; Copyright By Hieu Pham</footer>
</body>

</html>