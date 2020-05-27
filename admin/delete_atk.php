<?php

include('../config.php');
if( isset($_GET['id_atk']) ){
	// ambil id_atk dari query string
	$id_atk = $_GET['id_atk'];
	// buat query hapus

	$sql = "DELETE FROM tbl_atk WHERE id_atk=$id_atk";
	$query = mysqli_query($db, $sql);
	$data=mysqli_fetch_array($query);
	unlink("images/atk/$data[gambar]");
	// apakah query hapus berhasil?
	
		if( $query ){
		header('Location: data_atk.php');
		} else {
		die("gagal menghapus...");
		}
		} else {
		die("akses dilarang...");

}
?>