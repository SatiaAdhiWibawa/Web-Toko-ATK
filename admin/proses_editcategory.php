<?php

include('../config.php');
// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){
 // ambil data dari formulir
 $id_category = $_POST['id_category'];
 $category_name = $_POST['category_name'];
 // buat query update
 $sql = "UPDATE tbl_category SET category_name='$category_name' WHERE id_category=$id_category";
 $query = mysqli_query($db, $sql);
 // apakah query update berhasil?
 if( $query ) {
 // kalau berhasil alihkan ke halaman index.php
 header('Location: data_kategori.php');
 } else {
 // kalau gagal tampilkan pesan
 die("Gagal menyimpan perubahan...");
 }
} else {
 die("Akses dilarang...");
}

?>