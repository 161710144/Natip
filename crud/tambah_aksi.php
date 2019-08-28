<?php
include_once'C:\xampp\htdocs\tesrs\koneksi.php';

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "insert into mahasiswa values('','$nama','$nim','$alamat')");

header("location:index.php")

?>