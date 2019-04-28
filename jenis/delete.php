<?php
include '../koneksi.php';

$id_jenis = $_GET['id_jenis'];

$query = "DELETE FROM jenis WHERE id_jenis = $id_jenis";

$result = mysqli_query($kon,$query);

$num = mysqli_affected_rows($kon);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    </head>
<body>
<?php
if($num > 0){?>
    <div id="hore"><p>Berhasil Hapus Data</p></div>
    <?php
}
else{?>
    <div id="zonk"><p>Gagal Hapus Data</p></div>
    <?php
}
?>
<a href='read.php'>Lihat Data</a>

</body>
</html>