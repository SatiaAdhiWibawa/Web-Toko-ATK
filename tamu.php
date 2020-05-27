<?php 


require 'config.php';

if (isset($_POST["tamu"]) ) {
	
	if ( tamu($_POST) > 0 ) {
		echo "<script>
			alert('User Berhasil Ditambahkan!');
			</script>";
	}else {
		echo mysqli_error($db);
	}
}


function tamu($tamua) {
	global $db;
	$nama = strtolower(stripslashes($tamua["nama"]));
	$email = mysqli_real_escape_string($db, $tamua["email"]);
	$website = mysqli_real_escape_string($db, $tamua["website"]);
	$komentar = mysqli_real_escape_string($db, $tamua["komentar"]);

	// tambahkan ke database tabel tamu
	mysqli_query($db, "INSERT INTO tbl_tamu 
			VALUES ('$nama', '$email', '$website', '$komentar')");

	return mysqli_affected_rows($db);
}

?>

<html>
</head>

	<title>Buku Tamu</title>
	<link rel="stylesheet" href="css/tamu.css">

</head>
<body>
 
	<div id="container">
		<h1 style="text-align: center; color: #00ff00">Buku Tamu</h1>
		<p style="text-align: center;">Silahkan isi buku tamu di bawah ini untuk meninggalkan pesan Anda!</p>
 
		
 
		<form action="" method="post">
			<p><b>Nama Lengkap :</b><br><input type="text" name="nama" required placeholder="satia adhi" autocomplete="off"></p>
			<p><b>Email :</b><br><input type="text" name="email" required placeholder="satiaadhi13@gmail.com" autocomplete="off"></p>
			<p><b>Website :</b><br><input type="text" name="website" ></p>
			<p><b>Pesan :</b><br><textarea name="komentar" rows="5" cols="50" placeholder="silahkan masukan pesan untuk komentar anda tentang kami" required></textarea></p>
			<p>
				<input class="input" type="submit" name="tamu" value="Kirim">
				<input class="input" type="reset" name="del" value="Hapus">
			</p>
			<h3><a href="index.php" style="text-decoration: none; color: blue;">Kembali ke Halaman Utama</a></h3>
		</form>
	</div>



</body>
</html>