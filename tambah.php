<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: yellow;">
   <button style="border-radius: 100px;"> <a href="index.php">lihat semua data</a></button>
    <h3>INSERT DATA KELAS</h3>
    <form action="insert.php" method="post">
        <table>
            <tr>
                <td>Id:</td>
                <td><input type="text" name="Fidkelas"></td>
            </tr>

            <tr>
                <td>Nama siswa:</td>
                <td><input type="text" name="Fnamakelas"></td>
            </tr>

            <tr>
                <td>Kelas:</td>
                <td><input type="text" name="Fwalikelas"></td>
            </tr>
            <tr>
                <td>Siswa aktif:</td>
                <td><input type="text" name="Fsiswa_aktif"></td>
            </tr>
            <tr>
                <td>Tahun masuk:</td>
                <td><input type="text" name="Ftahun_masuk"></td>
            </tr>

            
            <tr>
                <td></td>
                <td><input type="submit" value="simpan"><a href="index.php"></a></td>
            </tr>
        </table>
    </form>
</body>
</html>