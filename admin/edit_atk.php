<?php

include('../config.php');

// kalau tidak ada id_atk di query string
if( !isset($_GET['id_atk']) ){
//header('Location: index.php');
}
//ambil id_atk dari query string
$id_atk = $_GET['id_atk'];
// buat query untuk ambil data dari database
$sql = "SELECT * FROM tbl_atk WHERE id_atk=$id_atk";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);

/*
$gambarLama = htmlspecialchars($data["gambarLama"]);

	// cek apakah user pilih gambar baru atau tidak
	if($_FILES['gambar']['error'] === 4 ) {
		$gambar = $gambarLama;
	} else {
		$gambar = upload();
	}
	// query insert data
	$query = "UPDATE mahasiswa SET
				nama = '$nama', npm = '$npm', email = '$email', jurusan = '$jurusan', gambar = '$gambar'
				WHERE id = $id ";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
*/



// jika data yang di-edit tidak ditemukan

if( mysqli_num_rows($query) < 1 ){
die("data tidak ditemukan...");
}


?>

<?php
include('../config.php');

$sql2 = "SELECT * FROM tbl_category";
$qr = mysqli_query($db, $sql2);

?>

<html>
<head>

	<link rel="shortcut icon" href="../images/bookworm.ico">
	<link rel="stylesheet" href="../css/style2.css">
	<title>Administrator Toko ATK</title>

</head>
<body background="../images/logo1.png">

<table width="1047" border="0" align="center" class="table">

	<tr>
		<td height="100" colspan="2" align="center" valign="middle">
			<table width="100%" height="100" border="0" cellpadding="7">
				<tr>
					<td align="center" valign="middle">
						<font color="white" size="7px">// HALAMAN ADMIN //</font>
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
				<td>
					<form action="../admin/proses_editatk.php" method="post" enctype="multipart/form-data">
						<table width="621" height="163" border="0">
						<input type="hidden" name="id_atk" value="<?php echo $data['id_atk'] ?>" />
							<tr>
								<td width="101">Nama ATK </td>
								<td width="510"> <input class="search-input" type="text" name="nama_atk" value="<?php echo $data['nama_atk'] ?>" required/>
								<font size="-1" color="#FF0000">*wajib di isi </font></td>
							</tr>
							<tr>
								<td>Kategori</td>
								<td>
								<select name="id_category" class="search-input" required>

<?php 

while ($row = mysqli_fetch_array($qr)){ ?>
<option value="<?php echo $row['id_category']; ?>" <?php if ($data['id_category'] == $row['id_category']) { echo "selected = 'selected'"; } ?> ><?php echo $row['category_name']; ?>
</option>
<?php } ?>
</select>
	<span style="color: red;">*<font size="-1">(pilih salah satu kategori)</font></span></td>
							</tr>
							<tr>
								<td>Deskripsi ATK</td>
								<td>
									<textarea name="deskripsi" cols="40" rows="4" class="search-input" required><?php echo $data['deskripsi'] ?></textarea>
								</td>
							</tr>
							<tr>
								<td>File Gambar</td>
								<td>
									<input class="search-input" name="gambar" type="file" id="nama_file" size="30" />
									<font size="-1" color="#FF0000"></font>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>
									<br><img src="../images/atk/<?php echo $data['gambar'] ?>" width="100px" height="100px">
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<p>&nbsp;</p>
								</td>
							</tr>
						</table>
						<p><input type="submit" class="search-button" name="simpan" value="Simpan"></p>
						<p><a href="beranda_admin.php">Kembali ke Beranda</a></p>
					</form>
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
					<p> &copy; <?php echo date('Y')?> | Created by Satia Adhi Wibawa</p></td>
				</tr>
			</table>
		</td>
	</tr>

</table>

</body>
</html>