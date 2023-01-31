<?php include "connlog.php" ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="login-form">
            <div class="container">
                <form action="login.php" method="post">
                <input type="text" id="username" name="username" placeholder="Username" required><br>
                <input type="password" id="password" name="password" placeholder="Password" required><br>
                <input type="submit" value="Login"><br>
                <a href="register.php">Don't have an Account yet?</a>
                </form>
            </div>
        </div>    
    </body>
</html>