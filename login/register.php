<?php include "connreg.php" ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
    <div class="login-form">
        <div class="container">
            <form action="register.php" method="post" enctype="multipart/form-data">
            <input type="text" id="username" name="username" placeholder="Username" required><br>   
            <input type="email" id="email" name="email" placeholder="Email" required><br>
            <input type="password" id="password" name="password" placeholder="Password" required><br>
            <input type="age" id="age" name="age" placeholder="Age" required><br>
            <input type="text" id="address" name="address" placeholder="Address" required><br> 
            <label for="gender">Gender</label>
            <select id="gender" name="gender">
                <option value="">--Select--</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select> <br>
            <input type="file" id="image" name="image" placeholder="Upload Image" required><br>
            <input type="submit" value="Register"><br>
            <a href="login.php">Already have an account? Log in</a>
        </div>
    </div>
    </form>
</html>