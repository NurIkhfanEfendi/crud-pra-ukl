<?php
include '../koneksi.php';
include_once('../header.php');

$id_jenis = $_GET['id_jenis'];

$query = "SELECT * FROM jenis WHERE id_jenis = $id_jenis";

$result = mysqli_query($kon,$query);
$data = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Update</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    
</head>
<body>
<h1>Update Data Barang</h1>
<section id="input-form">
    <form method="POST" action="update.php">
        <div class="form">
            <label>Nama Barang</label>
            <input type="text" name="nama_jenis" value="<?php echo $data['nama_jenis'];?>">
        </div>
        <div class="form">
            <label>Kode Barang</label>
            <input type="text" name="kode_jenis" value="<?php echo $data['kode_jenis'];?>">
        </div>
        <div class="form">
            <label>Keterangan</label>
            <input type="text" name="keterangan" value="<?php echo $data['keterangan'];?>">
        </div>
        <div class="form">
        <input type="hidden" name="id_jenis" value="<?php echo $data['id_jenis'];?>">
        </div>
        <div class="form">
        <input class="button update" type="submit" name="btnSimpan" value="Simpan">  
        </div>
    </form>
</section>
</body>
</html>