<?php
include 'koneksi1.php';

$id_siswa = $_POST['Fid_siswa'];
$nama_siswa = $_POST['Fnama_siswa'];
$kelas = $_POST['Fkelas'];
$siswa_aktif = $_POST['Fsiswa_aktif'];
$tahun_masuk = $_POST['Ftahun_masuk'];



mysqli_query($koneksi1, "INSERT INTO nama_kelas VALUES('$id_siswa','$nama_siswa','$kelas','$siswa_aktif','$tahun_masuk')");
header("localhost:index.php");

?>