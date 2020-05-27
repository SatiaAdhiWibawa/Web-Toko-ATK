<?php

include('../config.php');
// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){
	 // ambil data dari formulir
	$id_atk = $_POST['id_atk'];
	$nama_atk = $_POST['nama_atk'];
	$id_category = $_POST['id_category'];
	$deskripsi = $_POST['deskripsi'];
	$name = $_FILES['gambar']['name'];
	$file = $_FILES['gambar']['tmp_name'];
	 // buat query update
	move_uploaded_file($file,"../images/atk/$name");
	 $sql = "UPDATE tbl_atk SET nama_atk='$nama_atk', id_category='$id_category',
	deskripsi='$deskripsi', gambar='$name' WHERE id_atk='$id_atk'";
	 $query = mysqli_query($db, $sql);
		 // apakah query update berhasil?
		 if( $query ) {
		 // kalau berhasil alihkan ke halaman index.php
			 header('Location: data_atk.php');
			 } else {
			 // kalau gagal tampilkan pesan
			 die("Gagal menyimpan perubahan...");
			 }
			} else {
			 die("Akses dilarang...");
			}

?>