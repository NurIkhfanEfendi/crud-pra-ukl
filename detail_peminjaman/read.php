<?php
session_start();
if(!(isset($_SESSION['user']))){
    header ("location: ../login/form-login.html");
}

include '../koneksi.php';
include_once('../header.php');

$result = mysqli_query($kon,"SELECT * FROM detailpeminjaman ORDER BY id ");
$num = mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Detail Peminjaman</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
</br>
<center>
<h1>Detail Peminjaman</h1>
</br>
</form>
    <table border=1>
    
    <tr>
    <th>Id Peminjaman</th>
    <th>Tanggal Pinjam</th>
    <th>Tanggal Kembali</th>
    <th>Status</th>
    <th>Nama Peminjaman</th>
    <th>Nama Barang</th>
    <th>Aksi</th>
    </tr>

    <?php
    if($num > 0){
        while($data = mysqli_fetch_assoc($result)){?>

        <tr>
        <td><?php echo $data['id'];?></td>
        <td><?php echo $data['tanggal_pinjam'];?></td>
        <td><?php echo $data['tanggal_kembali'];?></td>
        <td><?php echo $data['status_peminjaman'];?></td>
        <td><?php echo $data['nama_peminjam'];?></td>
        <td><?php echo $data['nama_barang'];?></td>
        <td><a class="button update" href="form-update.php?id=<?php echo $data['id'];?>">Update</a> 
        <a class="button delete" href="delete.php?id=<?php echo $data['id'];?>"onclick="return confirm('Anda Yakin Ingin Menghapus Data ?')">Hapus</a></td>
        </tr>
        <?php
        }
    }
    else{   
    }
    ?>
    </table>
    </br>
    </br>
    <a class="button tambah" href="form-create.php">Tambah</a>
    </center>
</body>
</html>