<?php
//mengaktifkan session
session_start();
// menghubungkan ke koneksi
include '../koneksi.php';
//menangkap data yang dikirim dari inputan
$username = $_POST['username'];
$password = $_POST['password'];
//menyeleksi data yang sesuai di database
$result = mysqli_query($kon,"SELECT * FROM user WHERE username = '$username' AND password = '$password'");
//mengambil jumlah data dari query
$num = mysqli_affected_rows($kon);
//proses
if($num > 0){
    header ("location: ../detail_peminjaman/read.php");
    $_SESSION['user'] = $username;
}else{
    header ("location: form-login.php");
}

?>