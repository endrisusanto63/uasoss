<?php include("koneksi.php"); ?>

<html>
<head>
    <title>Data Barang Toko Maju Jaya</title>
    <Style type="text/css">
        .a{
    font : font: 95% Arial;
    max-width: 800;
    margin: auto;
    padding: 16;
    background:Silver;
    }

    body{background: green;}

    .a h1{
    background: blue;
    padding: 20px;
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
        <h1 align="center">Data Barang Toko Maju Jaya</h1>
    </header>
        <a href="home.php">[<] Kembali</a>
    <table border="1" align="center"><br>
		<a href="daftar.php">[+] Tambah Data Baru</a>
    <table border="1" align="center">
    </head>
        <tr>
            <th>ID Barang</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Opsi</th>
        </tr>
    </thead>
    </body>

        <?php
        $view=mysqli_query($koneksi,"select*from barang");
        while($kos=mysqli_fetch_array($view)){
            echo "<tr>

            <td>".$kos['id_barang']."</td>
            <td>".$kos['nama']."</td>
            <td>".$kos['harga']."</td>

            <td>
            <a href='edit.php?id=".$kos['id_barang']."'>Edit</a> | 
            <a href='hapus.php?id=".$kos['id_barang']."'>Hapus</a>
            </td>
            </tr>";

        }
        ?>

        <p >Barang yang Terdaftar: <?php echo mysqli_num_rows($view) ?></p>

   
    </table>

</div>
    </body>
</html>