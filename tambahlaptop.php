<?php 

require "function.php";
if(isset($_POST["submit"])){
    if(tambah($_POST)>0){
        echo"
        <script>
            alert('Product Baru Berhasil Ditambahkan');
            document.location.href = 'index.php' ;
        </script>";
    }else{
        echo"
         <script>
            alert('Product Baru Berhasil Ditambahkan');
            document.location.href = 'index.php' ;
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
</head>
<body>
    <h1>Tambah Product</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama Product </label>
                <input type="text" id="nama" required name="nama">
            </li>
            <li>
                <label for="harga">Harga Product </label>
                <input type="text" id="harga" required name="harga">
            </li>
            <li>
                <label for="merek">MerekProduct</label>
                <input type="text" id="merek" required name="merek">
            </li>
            <li>
                <label for="gambar">Gambar Product</label>
                <input type="text" id="gambar" required name="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Kirim Data Product</button>
            </li>
        </ul>
    </form>
</body>
</html>