<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?


    // ambil data dari formulir
	$id = $_POST['id'];
    $nama = $_POST['nama'];
	$harga = $_POST['harga'];

    // buat query update
    
$query = mysqli_query($koneksi,"UPDATE barang SET id_barang='$id',nama='$nama', harga='$harga' WHERE id_barang='$id'");
    // apakah query update berhasil?
   
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list.php');
    




?>