<!DOCTYPE HTML>
<html lang="en">
<marquee><h1>HALAMAN PROSES</h1></marquee>
<hr>
<body bgcolor="pink">
<form action="#" method="post" enctype="multipart/form-data">  
<table>
  <tr>
    NAMA :
    <input type="text" name="nama[]"><br/>
  </tr>
  <tr>
    NIM :
    <input type="text" name="nim[]"><br/>
  </tr>
  <tr>
    HOBI : <br/>
    <input type="checkbox" name="hobi[]" value="berenang">Berenang<br/>
    <input type="checkbox" name="hobi[]" value="membaca novel/komik">Membaca Komik/Novel<br/>
    <input type="checkbox" name="hobi[]" value="menyanyi">Menyanyi<br/>
    <input type="checkbox" name="hobi[]" value="main alat musik">Main Alat Musik<br/>
    <input type="checkbox" name="hobi[]" value="lari">Lari<br/>
    <input type="checkbox" name="hobi[]" value="basket">Basket<br/>
    <input type="checkbox" name="hobi[]" value="sepak bola">Sepak Bola<br/>
    <input type="checkbox" name="hobi[]" value="voli">Voli<br/>
    <input type="checkbox" name="hobi[]" value="menulis cerita">Menulis Cerita<br/>
    <input type="checkbox" name="hobi[]" value="badminton">Badminton<br/>
    <input type="checkbox" name="hobi[]" value="travelling">Travelling<br/><br/>
    <input type="reset" name="delete" value="Delete Hobi"><br/><br/>
  </tr>
  <tr>
    Genre Film yang Disukai : <br/>
    <input type="checkbox" name="genre[]" value="horor">Horor<br/>
    <input type="checkbox" name="genre[]" value="action">Action<br/>
    <input type="checkbox" name="genre[]" value="anime">Anime<br/>
    <input type="checkbox" name="genre[]" value="thiller">Thiller<br/>
    <input type="checkbox" name="genre[]" value="animasi">Animasi<br/>
    <input type="checkbox" name="genre[]" value="romance">Romance<br/><br/>
    <input type="reset" name="delete" value="Delete Genre"><br/><br/>
  </tr>
  <tr>
    Tujuan Travelling yang Diinginkan : <br/>
    <input type="checkbox" name="tujuan[]" value="bali">Bali<br/>
    <input type="checkbox" name="tujuan[]" value="raja ampat">Raja Ampat<br/>
    <input type="checkbox" name="tujuan[]" value="pulau derawan">Pulau Derawan<br/>
    <input type="checkbox" name="tujuan[]" value="bangka belitung">Bangka Belitung<br/>
    <input type="checkbox" name="tujuan[]" value="labuan bajo">Labuan Bajo<br/><br/>
    <input type="reset" name="delete" value="Delete Tujuan"><br/><br/>
  </tr>
   <tr>
    PILIH GAMBAR :</td><br/>
    <input type="file" name="upgambar[]" id="upgambar">
    <input type="submit" value="Upload Gambar" name="submit">
  </tr>
  <tr>
  <td><input type="submit" name="kirim" value="kirim"/></td>
  </tr>
</table>
</form>
</body>
</html>

<hr/>
<?php 
if (isset($_POST ['kirim'])) {
  $data=$_POST["nama"];
  foreach ($data as $nilai) {
    echo "Nama = ".$nilai."<br/>";
  }
}

if (isset($_POST ['kirim'])) {
  $data1=$_POST["nim"];
  foreach ($data1 as $nilai1) {
    echo "NIM = ".$nilai1."<br/>";
  }
}


if (isset($_POST ['kirim'])) {
  $data2=$_POST["hobi"];
  foreach ($data2 as $nilai2) {
    echo "Hobi = ".$nilai2."<br/>";
  }
}

if (isset($_POST ['kirim'])) {
  $data3=$_POST["genre"];
  foreach ($data3 as $nilai3) {
    echo "Genre Film yang Disukai = ".$nilai3."<br/>";
  }
}

if (isset($_POST ['kirim'])) {
  $data4=$_POST["tujuan"];
  foreach ($data4 as $nilai4) {
    echo "Tujuan Travelling yang Diinginkan = ".$nilai4."<br/>";
  }
}
?>
