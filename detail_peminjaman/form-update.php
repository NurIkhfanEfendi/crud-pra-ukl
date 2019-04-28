<?php
include '../koneksi.php';
include_once('../header.php');

$id = $_GET['id'];

$query = "SELECT * FROM detailpeminjaman WHERE id = $id";

$result = mysqli_query($kon,$query);
$data = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Update</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    
</head>
<body>
<h1>Update Data Barang</h1>
<section id="input-form">
    <form method="POST" action="update.php">
        <div class="form">
            <label>Tanggal Pinjam</label>
            <input type="date" name="tanggal_pinjam" value="<?php echo $data['tanggal_pinjam'];?>">
        </div>
        <div class="form">
            <label>Tanggal</label>
            <input type="date" name="tanggal_kembali" value="<?php echo $data['tanggal_kembali'];?>">
        </div>
        <div class="form">
            <label>Status</label>
            <input type="text" name="status_peminjaman" value="<?php echo $data['status_peminjaman'];?>">
        </div>
        <div class="form">
            <label>Nama Peminjam</label>
            <input type="text" name="nama_peminjam" value="<?php echo $data['nama_peminjam'];?>">
        </div>
        <div class="form">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" value="<?php echo $data['nama_barang'];?>">
        </div>
        <div class="form">
        <input type="hidden" name="id" value="<?php echo $data['id'];?>">
        </div>
        <div class="form">
        <input class="button update" type="submit" name="btnSimpan" value="Simpan">  
        </div>
    </form>
</section>
</body>
</html>