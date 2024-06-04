<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>azfar</title>
</head>
<br>
    <h2>DATA KELAS</h2>
</br>
<a href="tambah.php">+ TAMBAH KELAS</a>

<table border="1">
<tr>
    <th>Id </th>
    <th>Nama</th>
    <th>kelas</th>
    <th>status_siswa</th>
    <th>aktifasi</th>
    <th>Tahun_masuk</th>
    <th>Angkatan</th>
    <th>Aksi</th>
</tr>

<?php 
include 'koneksi1.php';
$data = mysqli_query($koneksi,"select * from tb_siswa");
while($d = mysqli_fetch_array($data)){
    ?>
<tr>
<td><?= $d['id_siswa']; ?></td>
<td><?= $d['nama_siswa']; ?></td>
<td><?= $d['kelas']; ?></td>
<td><?= $d['siswa_aktif']; ?></td>
<td >  <?php
        if($d["siswa_aktif"] == 1 ){
          echo  "<button>nonaktif</buttpon>";
        }else{
          echo "<button>aktif</buttpon>";
        }
        ?></td>



<td><?= $d['tahun_masuk']; ?></td>
<td >  <?php
         if($d["tahun_masuk"] < 2021){
         echo "Angkatan purba";
      }else if($d["tahun_masuk"] > 2021){
        echo "Angkatan mitos";
      }
        ?></td>
        
<td>
    <a href="edit.php?id=<?php echo $d['id_siswa']; ?>">EDIT</a>
    <a href="edit.php?id=<?php echo $d['id_siswa']; ?>">hapus</a>
</td>
</tr>
    <?php
}
?>



</table>


</body>
</html>