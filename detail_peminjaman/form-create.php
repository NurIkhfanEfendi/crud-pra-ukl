<?php
include_once('../header.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Create</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<h1>Tambah Data Barang</h1>
</div>

<section id="input-form">
    <form action="create.php" method="post">
    <div class="form">
            <label>Tanggal Pinjam</label>
            <input type="date" name="tanggal_pinjam">
        </div>
        <div class="form">
            <label>Tanggal Kembali</label>
            <input type="date" name="tanggal_kembali" >
        </div>
        <div class="form">
            <label>Status</label>
            <input type="text" name="status_peminjaman" >
        </div>
        <div class="form">
            <label>Nama peminjam</label>
            <input type="text" name="nama_peminjam" >
        </div>
        <div class="form">
            <label>Nama barang</label>
            <input type="text" name="nama_barang" >
        </div>
        <div class="form">
        <input class="button tambah" type="submit" name="btnSimpan" value="Simpan">  
        </div>
    </form>
</section>
</body>
</html>