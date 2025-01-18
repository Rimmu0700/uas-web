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
    window.location.href= 'index.php'
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
</head>
<body>
    <h1>Ubah Data Laptop</h1>
    <form action="" method="post">
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