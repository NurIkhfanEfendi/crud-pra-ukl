<?php

include '../koneksi.php';

$id_jenis = $_POST['id_jenis'];
$nama_jenis = $_POST['nama_jenis'];
$kode_jenis = $_POST['kode_jenis'];
$keterangan = $_POST['keterangan'];

$query = "UPDATE jenis SET nama_jenis = '$nama_jenis',kode_jenis = $kode_jenis, keterangan = '$keterangan' WHERE id_jenis = $id_jenis ";
$result = mysqli_query($kon,$query);
$num  = mysqli_affected_rows($kon);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    </head>
<body>
<center><h1>
<?php
if($num > 0){?>
    <div><p>Berhasil Update Data</p></div>
    <?php
}
else{?>
    <div><p>Gagal Update Data</p></div>
    <?php
}
?>
<a href='read.php'>Lihat Data</a>
</center></h1>
</body>
</html>