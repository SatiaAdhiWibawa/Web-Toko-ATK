<?php 

require '../config.php';

if (isset($_POST["register"]) ) {
	
	if ( register($_POST) > 0 ) {
		echo "<script>
			alert('User Berhasil Ditambahkan!');
			</script>";
	}else {
		echo mysqli_error($db);
	}
}


function register($dataa) {
	global $db;
	$username = strtolower(stripslashes($dataa["username"]));
	$password = mysqli_real_escape_string($db, $dataa["password"]);
	$password2 = mysqli_real_escape_string($db, $dataa["password2"]);

	// cek username sudah ada / belum di databas
	$result = mysqli_query($db, "SELECT username FROM tbl_user WHERE username = '$username'");

	if ( mysqli_fetch_assoc($result) ) {
		echo "<script>
			alert('Username yang sama sudah terdaftar!');
			</script>";
		return false;
	}

	// cek konfirmasi apakah password 1 dan 2 sama
	if ($password !== $password2) {
	echo "<script>
			alert('Konfirmasi password tidak sesuai!');
			</script>";	
		return false;
	}
	// enkripsi password
	
	// $password = pas()($password, PASSWORD_DEFAULT);
	// // untuk cek hasil enkripsi password

	// tambahkan userbaru ke database
	mysqli_query($db, "INSERT INTO tbl_user VALUES('$username', '$password')");

	return mysqli_affected_rows($db);
}


?>



<!DOCTYPE html>
<html>
<head>

	<title>Halaman Registrasi</title>
	<link rel="stylesheet" href="../css/login1.css">

</head>
<body>


<form action="" method="post">
<table width="280" border="0" align="center" cellpadding="3" class="loginstyle">

	<br><br><br><br><br>
	<tr>
		<td colspan="4" align="center">
			<strong>Halaman Regristrasi</strong><br><br><br><br><br>
		</td>
	</tr>
	<tr class="textbox">
		<td width="190" align="left" class="textbox">
			<label for="username">Username</label>
		</td>
		<td width="3" align="center">:</td>
		<td width="293">
			<input type="text" name="username" id="username" placeholder="Username...." required autocomplete="off">
		</td>
	</tr>
	<tr>
		<td align="left">
			<label for="password">Password</label>
		</td>
		<td align="center">:</td>
		<td>
			<input type="password" name="password" id="password" placeholder="Password ...." required>
		</td>
	</tr>
	<tr>
		<td align="left">
			<label for="password2"></label>Konfirmasi Password
		</td>
		<td align="center">:</td>
		<td>
			<input type="password" name="password2" id="password2" class="input" placeholder="Password 2" required >
		</td>
	</tr>
	<tr>
		<td colspan="2">&nbsp;</td>
		<td>
			<button type="submit" name="register" class="btn"> Regristrasi !</button>
			<div class="cancel"> <a href="../index.php">Cancel</a></div>
		</td>
	</tr>
</table>
<br><br>
<div style=" text-align: center;"><a href="../index.php" style="text-decoration: none">Kembali ke Halaman Utama</a></div>
<div><p class="copy">Copyright  &copy;  <?php echo date('Y')?> - Satia Adhi Wibawa</p></div>

</body>
</html>