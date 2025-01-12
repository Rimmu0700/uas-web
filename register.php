<?php
$conn = mysqli_connect("localhost", "root", "", "login_user");

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $query = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
    $result = mysqli_query($conn, $query);
    echo($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <form method="POST" class="data" action="" >
        <div class="container">
            <h2>Register</h2>
            <div class="nama">
                <input type="text" name="username" id="username" placeholder="Username" required>
            </div>
            <div class="pass">
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <div class="email">
                <input type="email" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="button">
                <button type="submit" id="button" name="submit">Register</button>
            </div>
        </div>
    </form>
    <script src="login.js"></script>
</body>
</html>
