<?php 
$conn = mysqli_connect("localhost", "root", "", "proyekuas");


// ===============LAPTOP============
function laptop($data){
    global $conn;
    $result = mysqli_query($conn, $data);
    $rows=[];
    while($row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    };
    return $rows;
}
// ==========TUTUP LAPTOP============


// ===========MONITOR===============

function monitor($data){
    global $conn;
    $result = mysqli_query($conn, $data);
    $rows=[];
    while($row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    };
    return $rows;
}
// ============TUTUP MONITOR==========
// ============PERIPHERALS============

function pheripearls($data){
    global $conn;
    $result = mysqli_query($conn, $data);
    $rows=[];
    while($row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    };
    return $rows;
}
// ============TUTUP PERIPHERALS=============




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
    
};
function tambahmonitor($data){
    global $conn;
    $nama = $data["nama"];
    $harga = $data["harga"];
    $tipe = $data["tipe"];
    $gambar = $data["gambar"];

    $query = "INSERT INTO monitor VALUES ('','$nama','$tipe','$gambar','$harga')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function tambahperlengkapan($data){
    global $conn;
    $nama = $data["nama"];
    $harga = $data["harga"];
    $tipe = $data["tipe"];
    $gambar = $data["gambar"];

    $query = "INSERT INTO perlengkapan VALUES ('','$gambar','$tipe','$nama','$harga')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
// ==========Hapus Laptop=============
function hapuslaptop($data){
    global $conn;
    mysqli_query($conn, "DELETE FROM laptop WHERE ID = $data");
    return mysqli_affected_rows($conn);
}

// ===========TUTUP HAPUS LAPTOP =================


// =========== UBAH LAPTOP ===================
function dataubahlaptop($data){
    global $conn;
    $result = mysqli_query($conn, $data);
    $rows=[];
    while($row = mysqli_fetch_assoc($result)){
        $rows = $row;
    }
    return $rows;
}
function ubahdatalaptop($data){
    global $conn;
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $gambar = $_POST["gambar"];
    $harga = $_POST["harga"];
    $merek = $_POST["merek"];

    $query = "UPDATE laptop SET nama = '$nama', gambar = '$gambar', harga = '$harga', merek='$merek' WHERE id = $id";
    $result = mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);


}



// =========== TUTUP UBAH LAPTOP =================
?>