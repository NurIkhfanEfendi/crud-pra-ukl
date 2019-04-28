<?php
include_once('../header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Create</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<h1>Tambah Data Barang</h1>
</div>

<section id="input-form">
    <form action="create.php" method="post">
    <div class="form">
            <label>Nama Barang</label>
            <input type="text" name="nama_jenis">
        </div>
        <div class="form">
            <label>Kode Barang</label>
            <input type="text" name="kode_jenis" >
        </div>
        <div class="form">
            <label>Keterangan</label>
            <input type="text" name="keterangan" >
        </div>
        <div class="form">
        <input class="button tambah" type="submit" name="btnSimpan" value="Simpan">  
        </div>
    </form>
</section>
</body>
</html>