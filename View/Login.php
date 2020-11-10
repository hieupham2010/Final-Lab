<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/loginStyle.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Amatic+SC" />
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="card-login">
            <div class="header">
                <h2>Login</h2>
            </div>
            <div class="input">
                <form action="../Handle/LoginProcess" method="POST">
                    <input type="text" name="txtUserName" placeholder="User Name" required>
                    <input type="password" name="txtPassword" placeholder="Password" required>
                    <span style="font-size:15px; color:red"><?php if(isset($_GET["msg"]) && $_GET["msg"] === "InvalidAccount") echo "Invalid user name or password please try again" ?></span>
                    <input type="submit" name="Login" value="Login">
                </form>
            </div>
        </div>
    </div>
    <footer>&copy; Copyright By Hieu Pham</footer>
</body>

</html>