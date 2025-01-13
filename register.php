<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "proyekuas");

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    
    if (empty($username) || empty($password)) {
        echo "Username dan Password harus diisi!";
    } else {
        $query = "INSERT INTO register1 (username, password, email) VALUES ('$username', '$password','$email')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "<script>
            alert('data berhasil disimpan!')</script>";
        } else {
            echo "<script>
            alert('data gagal disimpan!')</script>";
        }
    }
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
            <h2>Registrasi</h2>
            <div class="nama">
                <input type="text" name="username" id="username" placeholder="Username">
            </div>
            <div class="pass">
                <input type="password" name="password" id="password" placeholder="Password">
            </div>
            <div class="email">
                <input type="text" name="email" id="email" placeholder="Email">
            </div>
            <br>
            <button type="submit" id="button" name="submit">Register</button>

        </div>
    </form>
    <script src="login.js"></script>
</body>
</html>
