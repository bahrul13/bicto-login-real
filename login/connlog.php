<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "logins";

    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "<script>alert('Connection failed: ')</script>" . $e->getMessage();
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        //validation and sanitizing of input
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch();
        if(!$user){
            echo "<script>alert('username not found')</script>";
        }elseif(!password_verify($password, $user['password'])){
            echo "<script>alert('password is incorrect')</script>";
        }else{
            //start session and redirect to desired page
            header('Location: /welcome.php');
        }
    }
?>