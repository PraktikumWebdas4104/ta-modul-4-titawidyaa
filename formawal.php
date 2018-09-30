<body bgcolor="#ff66cc" align="center">
<marquee><h1>MENU LOGIN</h1></marquee>
<hr>
<form action="#" method="post">  
  <b>Nama : <input type="text" name="nama"><br/><br/>
  NIM : <input type="password" name="nim"><br/><br/></b>
  <input type="submit" name="login" value="Login">
</form>
</body>

<?php 
if (isset($_POST['login'])) {
  $nama=$_POST['nama'];
  $nim=$_POST['nim'];

  if ($nama=="admin"&&$nim=="admin") {
    echo "LOGIN SUKSES";
?>
  <a href="proses.php"> LINK KE PROSES </a>
<?php 
  }else{
    echo "LOGIN GAGAL";
  }
}
?>
