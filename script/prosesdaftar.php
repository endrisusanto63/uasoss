<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['input'])){

    // ambil data dari formulir
	$id_barang = $_POST['id_barang'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];

    // buat query
    $query=mysqli_query($koneksi,"insert into barang (id_barang, nama, harga) values ('$id_barang', '$nama', '$harga')");

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: home.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: list.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>