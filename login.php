<?php
$conn = mysqli_connect("localhost", "root", "", "login_user");

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $query= "INSERT INTO users (username, password, email) VALUES ('$username', '$password')";
    $result = mysqli_query($conn, $query);
    echo($result);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <form method="POST" class="data" action="">
        <div class="container">
            <h2>Login</h2>
            <div class="nama">
                <input type="text" name="username" id="username" placeholder="Username">
            </div>
            <div class="pass">
                <input type="password" name="password" id="password" placeholder="Password">
            </div>
            <button type="submit" id="button" name="submit">Login</button>
            <button type="submit" id="button" name="submit"><a href="register.php">Register</a></button>
        </div>
    </form>
    <script src="login.js"></script>
</body>
</html>
