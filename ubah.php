<?php 
require "function.php";


$id = $_GET["id"];

$query = "SELECT * FROM laptop WHERE id = $id";
$dataubahlaptop = dataubahlaptop($query);





if (isset($_POST["submit"])){
    if(ubahdatalaptop($_POST)>0){
    echo"
    <script>
    alert('Data Anda Berhasil Diubah')
    window.location.href= 'editlaptop.php'
    </script>
    ";
    }else{
        echo"
    <script>
    alert('Data Anda Gagal Diubah')
    </script>
    ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Laptop</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

/* Tampilan body */
body {
    background-color: #f9f9f9;
    font-family: 'Arial', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Form Container */
form {
    background-color: white;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 500px;
}

/* Judul */
h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

/* Styling List dan Input */
ul {
    list-style-type: none;
    padding: 0;
}

li {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #555;
}

input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: #f9f9f9;
}

input:focus {
    outline: none;
    border-color: #007bff;
    background-color: #fff;
}

/* Tombol submit */
button {
    width: 100%;
    padding: 10px;
    border: none;
    background-color: #007bff;
    color: white;
    font-size: 16px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #0056b3;
}
    </style>
</head>
<body>
    
    <form action="" method="post">
    <h1>Ubah Data Laptop</h1>
        <input type="hidden" name="id" value="<?php echo($id); ?>">
        <ul>
            <li>
                <label for="product">Nama Product</label>
                <input type="text" name="nama" id="product" value="<?php echo($dataubahlaptop["nama"]); ?>">
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <input type="text" name="gambar" id="gambar" value="<?php echo($dataubahlaptop["gambar"]); ?>">
            </li>
            <li>
                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga" value="<?php echo($dataubahlaptop["harga"]); ?>">
            </li>
            <li>
                <label for="merek">Nama merek</label>
                <input type="text" name="merek" id="merek" value="<?php echo($dataubahlaptop["merek"]); ?>">
            </li>
        </ul>
        <button type="Submit" name="submit">Kirim Pembaruan Data</button>

    </form>
</body>
</html>