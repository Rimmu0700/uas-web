<?php 

require "function.php";
if(isset($_POST["submit"])){
    if(tambah($_POST)>0){
        echo"
        <script>
            alert('Product Baru Berhasil Ditambahkan');
            document.location.href = 'manage.php' ;
        </script>";
    }else{
        echo"
         <script>
            alert('Product Baru Berhasil Ditambahkan');
            document.location.href = 'manage.php' ;
        </script>";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nambahin product</title>
    <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
    }

    .container {
    width: 50%;
    margin: 50px auto;
    background: #ffffff;
    padding: 20px 30px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    }

    h1 {
    text-align: center;
    color: #333;
    }

    ul {
    list-style-type: none;
    padding: 0;
    }

    li {
    margin-bottom: 15px;
    }

    label {
    font-size: 16px;
    font-weight: bold;
        display: block;
    margin-bottom: 2px;
    color: #555;
    }

    input[type="text"] {
    width: 100%;
    padding: 10px;
    font-size: 14px;
        border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    }

    input[type="text"]:focus {
    border-color: blue;
    outline: none;
    }

    button {
    background-color: #007bff;
     color: white;
          padding: 10px 20px;
          font-size: 16px;
    border: none;
        border-radius: 5px;
    cursor: pointer;
    width: 100%;
    }

    button:hover {
    background-color: #0056b3;
    }

    button:focus {
    outline: none;
    }

    .form {
    max-width: 400px;
    margin: 0 auto;
    }
    </style>
</head>
<body>
    <div class="container">
    <h1>Tambah Laptop</h1>

    <form action="" method="post" class="form">
        <ul>
            <li>
                <label for="nama">Nama Product </label><br>
                <input type="text" id="nama" required name="nama" placeholder="Contoh : Acer Nitro 5 AN515">
            </li>
            <li>
                <label for="harga">Harga Product </label><br>
                <input type="text" id="harga" required name="harga" placeholder="Contoh : RP. *********">
            </li>
            <li>
                <label for="merek">MerekProduct</label><br>
                <input type="text" id="merek" required name="merek" placeholder="Contoh : Acer/Lenovo/Asus/dll">
            </li>
            <li>
                <label for="gambar">Gambar Product</label><br>
                <input type="text" id="gambar" required name="gambar" placeholder="Contoh : *******.png/jpg/dll">
            </li>
            <li>
                <button type="submit" name="submit">Kirim Data Product</button>
            </li>
        </ul>
    </form>
    </div>
</body>
</html>