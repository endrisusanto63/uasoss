<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "barang";

$koneksi = mysqli_connect($server, $username, $password, $database) 
or die(mysqli_connect_error());
?>