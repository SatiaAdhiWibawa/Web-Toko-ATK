
<?php
session_start();
require_once ('../config.php');
$username=$_POST['username'];
$password=$_POST['password'];



$sql = "SELECT * FROM tbl_user where username='$username' ";
$query = mysqli_query($db, $sql);
$rows=mysqli_num_rows($query);
$hasil=mysqli_fetch_array($query);

if ($rows == 0){
	echo "user belum terdaftar";
	echo "<a href=\"login.php\"> back</a>";
}else {
if ($password <> $hasil['password']) {
	echo "Password yang anda masukan salah";
	echo "<a href=\"login.php\"> back</a><br><br><br>";
	echo "Belum punya akun silahkan regristrasi terlebih dahulu ";
	echo "<b><a style=\"text-align: center;\" href=\"regristrasi.php\"> Regristrasi di sini!</a></b>";
	}else{
		$_SESSION['username']= "$username";
		header('location:beranda_admin.php');
		}
}




?>
