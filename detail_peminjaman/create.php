<?php
// menghubungkan ke koneksi
include '../koneksi.php';
//menangkap data yang dikirim dari inputan
$tanggal_pinjam = $_POST['tanggal_pinjam'];
$tanggal_kembali = $_POST['tanggal_kembali'];
$status_peminjaman = $_POST['status_peminjaman'];
$nama_peminjam = $_POST['nama_peminjam'];
$nama_barang = $_POST['nama_barang'];
//menyeleksi data yang sesuai di database
$result = mysqli_query($kon,"INSERT INTO detailpeminjaman (tanggal_pinjam,tanggal_kembali,status_peminjaman,nama_peminjam,nama_barang)
VALUES ('$tanggal_pinjam',$tanggal_kembali,'$status_peminjaman','$nama_peminjam','$nama_barang')");
//mengambil jumlah data dari query
$num = mysqli_affected_rows($kon);

?>
<!--tampilan / proses-->
<center>
    <h1>
    <?php
    if($num > 0){
        echo "Berhasil menambahkan data";
    }
    else{
        echo "Gagal menambahkan data";
    }
    ?>
    </br>
    <a href='read.php'>Lihat Data</a>
    </h1>
</center>