<?php
session_start();
if(!(isset($_SESSION['user']))){
    header ("location: ../login/form-login.html");
}

include '../koneksi.php';
include_once('../header.php');

$query = "SELECT * FROM jenis
          ORDER BY id_jenis ";
$result = mysqli_query($kon,$query);
$num = mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Barang</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
</br>
<center>
<h1>Data Barang</h1>
</br>
</form>
    <table border=1>
    
    <tr>
    <th>Id Barang</th>
    <th>Nama Barang</th>
    <th>Kode Barang</th>
    <th>Keterangan</th>
    <th>Aksi</th>
    </tr>


    <?php
    if($num > 0){
        while($data = mysqli_fetch_assoc($result)){?>

        <tr>

        <td><?php echo $data['id_jenis'];?></td>
        <td><?php echo $data['nama_jenis'];?></td>
        <td><?php echo $data['kode_jenis'];?></td>
        <td><?php echo $data['keterangan'];?></td>
        <td><a class="button update" href="form-update.php?id_jenis=<?php echo $data['id_jenis'];?>">Update</a> 
        <a class="button delete" href="delete.php?id_jenis=<?php echo $data['id_jenis'];?>"onclick="return confirm('Anda Yakin Ingin Menghapus Data ?')">Hapus</a></td>

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