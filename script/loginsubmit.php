<?php
include "koneksi.php";

$username=$_POST['username'];
$password=$_POST['password'];
$login=mysqli_query($koneksi,"select*from user where username='$username' and password='$password'");
$jumlah=mysqli_num_rows($login);
if ($jumlah == 1) {
 session_start(); 
 $_SESSION['username'] = $username;
header("location:home.php");
}
else{
header("location:index.php");
}
?>