<?php
include '../koneksi.php';

$nama_jenis = $_POST['nama_jenis'];
$kode_jenis = $_POST['kode_jenis'];
$keterangan = $_POST['keterangan'];

$query = "INSERT INTO jenis (nama_jenis,kode_jenis,keterangan)
          VALUES ('$nama_jenis',$kode_jenis,'$keterangan')";

$result = mysqli_query($kon,$query);
$num = mysqli_affected_rows($kon);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<center>
    <h1>
<?php
if($num > 0){
    echo "Berhasil menambahkan data jenis";
}
else{
    echo "Gagal menambahkan data jenis";
}
?>
</br>
<a href='read.php'>Lihat Data</a>
</h1>
</center>
</body>
</html>