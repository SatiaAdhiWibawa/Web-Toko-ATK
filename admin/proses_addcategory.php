<?php
include('../config.php');

// cek apakah tombol daftar sudah diklik atau blum?

if(isset($_POST['simpan'])){
// ambil data dari formulir
	$category_name = $_POST['category_name'];
	// buat query
	$sql = "INSERT INTO tbl_category (category_name) VALUE ('$category_name')";
	$query = mysqli_query($db, $sql);
	// apakah query simpan berhasil?
	if( $query ) {
		header('Location: data_kategori.php');
		} else {
		die("Gagal menyimpan perubahan...");
		}
		} else {
		die("Akses dilarang...");
		}

?>