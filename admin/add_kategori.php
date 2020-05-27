<?php

include('../config.php');

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
						<form action="../admin/proses_addcategory.php" method="post">
						<table width="621" height="163" border="0">
							<tr>
								<td width="101">Kategori</td>
								<td width="510">
									<input class="search-input" type="text" name="category_name" required/>
									<font size="-1" color="#FF0000">*wajib di isi </font>
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
						<p> &copy; <?php echo date('Y')?> | Created by Satia Adhi Wibawa</p>
					</td>
				</tr>
			</table>
		</td>
	</tr>

</table>


</body>
</html>