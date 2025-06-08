<?php
include "koneksi.php";

$id_iklan = $_GET['id'];
$sql = "DELETE FROM iklan WHERE id_iklan = '$id_iklan' ";
$query = mysqli_query($koneksi,$sql);

if($query){
    header("location:hal.php");
}else{
    header("location:hal.php?hapusGagal");
}


?>