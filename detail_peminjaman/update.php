<?php
// menghubungkan ke koneksi
include '../koneksi.php';
//menangkap data yang dikirim dari inputan
$id = $_POST['id'];
$tanggal_pinjam = $_POST['tanggal_pinjam'];
$tanggal_kembali = $_POST['tanggal_kembali'];
$status_peminjaman = $_POST['status_peminjaman'];
$nama_peminjam = $_POST['nama_peminjam'];
$nama_barang = $_POST['nama_barang'];
//menyeleksi data yang sesuai di database
$result = mysqli_query($kon,"UPDATE detailpeminjaman SET tanggal_pinjam = '$tanggal_pinjam',tanggal_kembali = '$tanggal_kembali', status_peminjaman = '$status_peminjaman', nama_peminjam = '$nama_peminjam', nama_barang = '$nama_barang' WHERE id = $id ");
//mengambil jumlah data dari query
$num  = mysqli_affected_rows($kon);
?>
<!--tampilan / proses-->
<center>
    <h1>
    <?php
    if($num > 0){
        echo "Berhasil Update data";
    }
    else{
        echo "Gagal Update data";
    }
    ?>
    </br>
    <a href='read.php'>Lihat Data</a>
    </h1>
</center>