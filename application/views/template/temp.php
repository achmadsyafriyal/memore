<!DOCTYPE html>
<html>
<head>
 <title>Form Sederhana Suckittrees.com</title>
</head>
<body>
<h2>Form sederhana Suckittrees.com</h2>
 <form method = 'post' action= "aksiForm.php">
  <table>
   <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type='text' name='nama'></td>
   </tr>
   <tr>
    <td>Umur</td>
    <td>:</td>
    <td><input type='text' name='umur'></td>
   </tr>
   <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><input type='text' name='alamat'></td>
   </tr>
   <tr>
    <td></td>
    <td></td>
    <td><input type='submit' value='KIRIM'></td>
   </tr>
  </table>
 </form>
</body>
</html>



  <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type='text' name='nama'></td>
   </tr>

<input type='submit' value='KIRIM'>



<?php
 $nama = $_POST['nama'];
 $umur = $_POST['umur'];
 $alamat = $_POST['alamat'];

echo "Selamat $nama , anda berhasil membuat form sederhana<br><br>";
echo "nama = $nama <br>umur = $umur <br>alamat = $alamat";

 ?>
