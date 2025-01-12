<?php 
$conn = mysqli_connect("localhost", "root", "", "proyekuas");

function query($data){
    global $conn;
    $result = mysqli_query($conn, $data);
    $rows=[];
    while($row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    };
    return $rows;
}

// Tambah product
function tambah($data){
    global $conn;
    $nama = $data["nama"];
    $harga = $data['harga'];
    $merek = $data["merek"];
    $gambar = $data["gambar"];

    $query = "INSERT INTO laptop VALUES ('','$gambar','$nama','$harga','$merek')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
    
}


?>