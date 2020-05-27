<?php

include('../config.php');
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){
// ambil data dari formulir
	$nama_atk = $_POST['nama_atk'];
	$id_category = $_POST['id_category'];
	$deskripsi = $_POST['deskripsi'];
	$name = $_FILES['gambar']['name'];
	$file = $_FILES['gambar']['tmp_name'];
	move_uploaded_file($file,"../images/atk/$name");
	$sql = "INSERT INTO tbl_atk (nama_atk,id_category,deskripsi,gambar,tanggal) VALUE ('$nama_atk','$id_category','$deskripsi','$name',now())";
	$query = mysqli_query($db, $sql);
	// apakah query simpan berhasil?
		if( $query ) {
			header('Location: data_atk.php');
			} else {
			die("Gagal menyimpan perubahan...");
			}
			} else {
			die("Akses dilarang...");
			}

?>