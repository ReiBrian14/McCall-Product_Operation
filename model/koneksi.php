<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "db_mccall";

$koneksi    = mysqli_connect('localhost', 'root', '', 'db_mccall');
if (!$koneksi) { //cek koneksi
	die("Tidak bisa terkoneksi ke database");
}
?>