<?php
require "function.php";

$id = $_GET["name"];

if (hapuslaptop($id)>0){
    echo " 
    <script>
    alert('Data Berhasil Dihapus');
    document.location.href = 'editlaptop.php' 
    </script>
    ";
}else{
    echo " 
    <script>
    alert('Data Gagal Dihapus');
    document.location.href = 'editlaptop.php' 
    </script>
    ";
}

?>