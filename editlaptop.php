<?php
require "function.php";
$data = laptop("SELECT * FROM laptop");


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 70%;
            margin: 0 auto;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        a {
            color: #007BFF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button a {
            color: white;
            text-decoration: none;
        }

        button:hover {
            background-color: #0056b3;
            
        }
    </style>
</head>
<body>
    <h1>Daftar Product</h1>
    <table border="2px" cellspacing="0" cellpadding="5px">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>ID</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($data as $dt){ ?>
        <tr>
          
            <td><?php echo($i) ?></td>
            <td><a href="ubah.php">ubah</a> | <a href="hapuslaptop.php?name=<?php echo($dt["id"]) ?>">hapus</a></td>
            <td><?php echo($dt["nama"]) ;?></td>
            <td><?php echo($dt["harga"]) ;?></td>
            <td><?php echo($dt["id"]) ?></td>
          
        </tr>
        <?php $i++; ?>
        <?php } ?>
        
    </table>
<br>
<button><a href="index.php">Pergi ke Main Web</a></button>
</body>
</html>