<html>
<head>
    <title>Form Barang Toko Maju Jaya</title>

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

    .a h3{
    background: blue;
    padding: 15;
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
        <h3>Input Data Barang</h3>
        </center>
    </header>

    <form action="prosesdaftar.php" method="POST">

        <table align="center" >
        <tr>
            <td>ID Barang : </td>
            <td>
            <input type="int" name="id_barang" placeholder="ID Barang">
            </td>
        </tr>

        <tr>
            <td>Nama : </td>
            <td>
            <input type="text" name="nama" placeholder="Nama">
            </td>
        </tr>
        
        <tr>
            <td>Harga : </td>
            <td>
            <textarea name="harga" placeholder="Harga"></textarea>
            </td>
        </tr>
        </table>
<tr>
        <td><center>
            <input type="submit" value="Input" name="input" />
            <a href="home.php">Batal</a> </center>
        </td>
        </tr>
    </form>
</div>
    </body>
</html>