<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sarpra";

$kon = mysqli_connect($host,$user,$pass,$db);

if(!$kon){
    echo "Gagal Terhubung ". mysqli_connect_error();
}
?>