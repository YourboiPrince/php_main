<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container">

<form method="POST" action="signup.php">
    <div class="input-group">
        <input type="text" id="name" name="username" required>
        <label for="Name"><i class="fa-solid fa-user-tie"></i> UserName</label>
    </div>

    <div class="input-group">
        <input type="email" id="number" name="email" required>
        <label for="email"><i class="fa-solid fa-phone-square-alt"></i> Email</label>
    </div>

    <div class="input-group">
        <input type="password" id="password" name="password"required>
        <label for="email"><i class="fa-solid fa-envelope"></i> Password</label>
    </div>

    <button type="submit">SignUp <i class="fas fa-paper-plane"></i></button>

    
</form>
                

     </div>
</body>
</html>

<?php
if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
}

// connect to the db
include_once 'db-connect.php';

// SQL query
$sql = "INSERT INTO users (username, email, password) VALUES ('$username','$email', '$password')";

// Execute the query
$database_connection->query($sql);
?>