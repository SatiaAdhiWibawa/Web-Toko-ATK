<?php

session_start();
if (!isset($_SESSION['username'])) {
header('location:login.php'); }
else { $username = $_SESSION['username'];}
require_once("../config.php");
$sql = "SELECT * FROM tbl_user WHERE username = '$username'";
$query = mysqli_query($db, $sql);
$hasil = mysqli_fetch_array($query);

?>


<!DOCTYPE html>
<html>
<head>

	<link rel="shortcut icon" href="../images/bookworm.ico">
	<link rel="stylesheet" href="../css/style2.css">
	<title>Administrator Toko ATK</title>

<head>
<body background="../images/logo1.png">

<table width="1047" border="0" align="center" class="table">

	<tr>
		<td height="100" colspan="2" align="center" valign="middle">
			<table width="100%" height="100" border="0" cellpadding="7">
				<tr>
					<td align="center" valign="middle">
						<font color="#FFFFFF" size="7px"> // HALAMAN ADMIN // </font>
					</td>
				</tr>
			</table>
		</td>
	</tr>

	<tr>
		<td width="21%" valign="top">
			<table width="100%" border="0" cellpadding="5">
				<tr>
					<td align="center" bgcolor="blue">
					<strong><font color="#FFFFFF">MENU</font></strong>
					</td>
				</tr>
				<tr>
					<td align="left">
						<a href="beranda_admin.php">Beranda</a><br>
						<a href="data_atk.php">Kelola ATK</a><br>
						<a href="data_kategori.php">Kelola Kategori</a><br>
						<a href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar?');">Logout</a><br>
					</td>
				</tr>
			</table>
		</td>
	 	<td width="79%" valign="top">
	 		<table width="100%" border="0" cellpadding="5">
	 			<tr>
	 			<?php echo "Hello, <b>".$_SESSION['username']."</b>! Apa Kabar? :)";?>
	 			<br><br>
	 				<td>
						<div style="margin-bottom: 5px; margin-left: 3px;"><strong>Daftar ATK</strong></div>
							<table width="100%" align="center" cellpadding="3" bgcolor="white">
								<tr bgcolor="blue" align="center" style="font-weight: bold;">
									<td width="5%">No.</td>
									<td width="10%">Gambar</td>
									<td width="20%">Nama ATK</td>
									<td width="20%">Kategori</td>
									<td width="30%">Deskripsi</td>
								</tr>
								<tr>
<?php

include '../config.php';
$sql = "SELECT * FROM tbl_atk as ta JOIN tbl_category as tc on ta.id_category = tc.id_category order by id_atk desc";
$query = mysqli_query($db, $sql);
$no=1;
while ($data=mysqli_fetch_array($query)) {
echo "<tr>";
echo "<td>".$no++."</td>";
echo "<td><img src='../images/atk/".$data['gambar']."' width='100px'
height='100px'></td>";
echo "<td>".$data['nama_atk']."</td>";
echo "<td>".$data['category_name']."</td>";
echo "<td>".$data['deskripsi']."</td>";
echo "</tr>";
}

?>
								</tr>
							</table>
							<br><br>
							<div><strong>Daftar Kategori ATK</strong></div>
							<table width="100%" align="center" cellpadding="3" bgcolor="white">
								<tr bgcolor="blue" align="center" style="font-weight: bold;">
									<td width="5%">No.</td>
									<td width="20%">Kategori</td>
								</tr>
								<tr>
<?php

include '../config.php';
$sql = "SELECT * FROM tbl_category order by id_category asc";
$query = mysqli_query($db, $sql);
$no=1;
while ($data=mysqli_fetch_array($query)) {
echo "<tr>";
echo "<td>".$no++."</td>";
 echo "<td>".$data['category_name']."</td>";
 echo "</tr>";
 }
 
?>
								</tr>
							</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>


	<tr>
		<td colspan="2">
			<hr>
			<table width="100%" border="0" cellpadding="7">
				<tr>
					<td align="center">
						<p> &copy; <?php echo date('Y')?> | Created by Satia Adhi Wibawa</p>
					</td>
				</tr>
			</table>
		</td>
	</tr>

</table>


</body>
</html>


<script>
function hapus() {
var conf=confirm("Apakah data ini ingin dihapus ?");
if (conf==true)
{
return true;
}else
{
return false;
}
}
</script>