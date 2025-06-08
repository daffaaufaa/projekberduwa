<?php
include "koneksi.php";

$id = $_GET['id'];
$sql = "DELETE FROM movies WHERE id_movies = '$id'";
$query = mysqli_query($koneksi,$sql);

if($query){
    header("location:hal.php?hapus=sukses");
}else{
    header("location:hal.php?hapus=gagal");
}

?>