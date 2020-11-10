<?php require '../Handle/SetCookie.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Amatic+SC" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Style/style.css">
    <title>Menu</title>
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="top_nav">
                <a href="../index" class="active_background">Home</a>
                <a href="Menu">Menu</a>
                <a href="Contact">Contact</a>
                <a href="About">About</a>
                <?php include '../Handle/GetNumProductByToken.php' ?>
                <form action="Cart" method="GET">
                    <button id="button-cart"><i class="fa fa-shopping-cart"> (<?php echo $Item ?>)</i></button>
                </form>
                <div class="search-container">
                    <form action="Menu" method="GET">
                        <input type="text" placeholder="Search..." name="SearchKey" value="<?php if (isset($_GET["SearchKey"])) echo $_GET["SearchKey"] ?>">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="body-left column">
                <div class="category">
                    <h3 style="text-align: center; font-size: 50px; margin-bottom: 20px;">Category</h3>
                    <a href="Menu?Category=Hamburger">Hamburger</a>
                    <a href="Menu?Category=Beverages">Beverages</a>
                    <a href="Menu?Category=Pizza">Pizza Hut</a>
                    <a href="Menu?Category=KFC">KFC</a>
                </div>
            </div>
            <div class="body-right column">
                <div class="card-container">
                    <?php include '../Handle/LoadMenuProcess.php'?>
                </div>
            </div>
        </div>
    </div>
    <footer>&copy; Copyright By Hieu Pham</footer>
</body>

</html>