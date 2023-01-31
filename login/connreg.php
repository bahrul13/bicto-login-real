<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logins";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// try {
//     $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     // set the PDO error mode to exception
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch(PDOException $e) {
//     die("ERROR: Could not connect. " . $e->getMessage());
// }

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $username = $_POST['username'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $age = $_POST['age'];
//     $address = $_POST['address'];
//     $gender = $_POST['gender'];
//     // Perform validation and sanitization on the form data
//     // Hash the password for storage
//     $password = password_hash($password, PASSWORD_DEFAULT);
//     //checking if username or email already exist
//     $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
//     $stmt->execute([$username,$email]);
//     $user = $stmt->fetch();
//     if($user){
//         echo "<script>alert('username or email already exist')</script>";
//     }else{
//         $stmt = $pdo->prepare("INSERT INTO users (username, email, password, age, address, gender) VALUES (?, ?, ?, ?, ?, ?)");
//         $stmt->execute([$username, $email, $password, $age, $address, $gender]);
//         echo "<script>alert('user registered successfully')</script>";
//     }
// }
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $password = password_hash($password, PASSWORD_DEFAULT);
    $target_dir = "uploads/";
    $image = $_FILES['image']['name'];
    $target_file = $target_dir . $image;
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    
    $sql = "INSERT INTO users (name, email, password, image, age, address, gender)
    VALUES ('$name', '$email', '$password', '$target_file', '$age', '$address', '$gender')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>