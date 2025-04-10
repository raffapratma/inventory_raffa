<?php

$hostname = 'localhost';
$username = 'root';
$pasword = '';
$db_name ='db_inventory_raffa';

$conn = mysqli_connect($hostname, $username, $pasword, $db_name);
if (!$conn) {
    die ("koneksi gagal : " .mysqli_connect_error());
}
?>



