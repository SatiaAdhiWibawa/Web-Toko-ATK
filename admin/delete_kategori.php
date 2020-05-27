<?php

include('../config.php');

if( isset($_GET['id_category']) ){
 // ambil id_category dari query string
 $id_category = $_GET['id_category'];
 // buat query hapus

$sql = "DELETE FROM tbl_category WHERE id_category=$id_category";
$query = mysqli_query($db, $sql);
 // apakah query hapus berhasil?
if( $query ){
	header('Location: data_kategori.php');
	 } else {
	 die("gagal menghapus...");
	 }
	} else {
	 die("akses dilarang...");
}

?>
