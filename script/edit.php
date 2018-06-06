<?php

include("koneksi.php");

// kalau tidak ada id di query string

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM barang WHERE id_barang='$id'";
$query = mysqli_query($koneksi, $sql);
$barang = mysqli_fetch_array($query);

// jika data yang di-edit tidak ditemukan


?>



<html>
<head>
    <title>Form Edit Barang Toko Maju Jaya</title>
   <Style type="text/css">
        .a{
    font : font: 95% Arial;
    max-width: 300;
    margin: auto;
    margin-top: 200;
    padding: 16;
    background:Silver;
    }
body{background: orangered;}
    .a h3{
    background: orange;
    padding: 15;
    font-size: 140%;
    font-weight: 300;
    text-align: center;
    color: #fff;
    margin: -16px -16px 16px -16px;
}


    
    </Style>
</head>

<body>
<div class="a">
    <header>
        <h3>Form Edit Barang Toko Maju Jaya</h3>
    </header>

    <form action="editproses.php" method="POST">

        <table align="center">

            <input type="hidden" name="id" value="<?php echo $barang['id_barang'] ?>" />

		<tr>
        <td>ID Barang : </td>
        <td>
        <input type="text"  name="id_barang" disabled value="<?=$barang['id_barang']?>">
        </td>
        </tr>	
			
		<tr>
			<td>Nama: </td>
			<td>
			<input type="text"  name="nama" value="<?=$barang['nama']?>">
			</td>
        </tr>

        <tr>
			<td>Harga : </td>
			<td>
			<input type="text"  name="harga" value="<?=$barang['harga']?>">
			</td>
        </tr>

        <tr>
		
		
                <th colspan="3"><input type="submit" value="Edit"> 
        <a href="list.php">Batal</a></td>
            </tr>
        
    </table>


    </form>
</div>
    </body>
</html>