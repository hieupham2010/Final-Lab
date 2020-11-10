<?php require 'Handle/SetCookie.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="View/Style/style.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Amatic+SC" />
    <title>Home</title>
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="top_nav">
                <a href="index" class="active_background">Home</a>
                <a href="View/Menu">Menu</a>
                <a href="View/Contact">Contact</a>
                <a href="View/About">About</a>
            </div>
            <div class="slideshow-container">
                <div class="mySlides">
                    <img src="View/Images/Chicken.jpg" style="width:100%" height="600px">
                </div>
                <div class="mySlides">
                    <img src="View/Images/Hamburger.jpg" style="width:100%" height="600px">
                </div>

                <div class="mySlides">
                    <img src="View/Images/Pizza.jpg" style="width:100%" height="600px">
                </div>

                <div class="mySlides">
                    <img src="View/Images/kfc.jpg" style="width:100%" height="600px">
                </div>
            </div>
            <div class="Go-Menu">
                <a href="View/Menu">LET ME SEE THE MENU</a>
            </div>
            <div style="text-align:center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </div>
    <footer>&copy; Copyright By Hieu Pham</footer>
</body>
<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 2000);
    }
</script>

</html>