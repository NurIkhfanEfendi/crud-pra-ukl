<?php
// menghubungkan ke koneksi
include '../koneksi.php';
// mengirimkan/mengambil data pablik
$id = $_GET['id'];
//menyeleksi data yang sesuai di database
$result = mysqli_query($kon,"DELETE FROM detailpeminjaman WHERE id = $id");
//mengambil jumlah data dari query
$num = mysqli_affected_rows($kon);

?>
<!--tampilan / proses-->
<center>
    <h1>
    <?php
    if($num > 0){
        echo "Berhasil Hapus data";
    }
    else{
        echo "Gagal Hapus data";
    }
    ?>
    </br>
    <a href='read.php'>Lihat Data</a>
    </h1>
</center>