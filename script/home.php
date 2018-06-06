<html>
<head>
    <title> Data Barang Toko Maju Jaya</title>
    <Style type="text/css">
        .a{
    font : font: 95% Arial;
    max-width: 300;
    margin: auto;
    margin-top: 200;
    padding: 16;
    background:Silver;
    }

    body{background: green;}

    .a h1,h3{
    background: blue;
    padding: 5;
    font-size: 140%;
    font-weight: 300;
    text-align: center;
    color: white;
    margin: -16px -16px 16px -16px;
}
    </Style>
</head>

<body>

<div class="a">
    <header>
    <center>
        <h3>Barang Toko Maju Jaya</h3>
    </center>
    </header>
<table align="center">
    <h4 align="center">Menu</h4>
            <li><a href="daftar.php">Barang Baru</a></li>
            <li><a href="list.php">Tampilkan Data</a></li>
			<li><a href="logout.php">Keluar</a></li>
            </table>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Data Penghuni Kos Sudah Ditambah";
            } else {
                echo "Data Gagal di tambah!";
            }
        ?>
    </p>
<?php endif; ?>
</div>
</body>
</html>

