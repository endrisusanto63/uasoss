<?php

include "koneksi.php";
 // ambil id dari query string
$id=$_GET['id'];

// buat query hapus
$query=mysqli_query($koneksi, "delete from barang where id_barang='$id'");
header("Location:list.php");

// apakah query hapus berhasil?
if( $query ){
        header("Location:list.php");
    } else {
        die("gagal menghapus...");
    }


?>
