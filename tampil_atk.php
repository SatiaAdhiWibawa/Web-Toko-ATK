<html>
<head>
<title>ATK</title>
</head>
<body>
<?php
include "config.php";
include "pagination.php";
/*pagination*/
$sql = "SELECT * FROM tbl_atk ORDER BY id_atk desc LIMIT $mulaiawal,$batasawal";
$query = mysqli_query($db, $sql);
while ($data = mysqli_fetch_array($query)) {
$post=substr($data['deskripsi'],0,135);
?>
<div align="right">
<font size="3">(Posted on : <?php echo $data['tanggal']; ?>)</font>
</div>
<strong>
<font size="4">
<?php echo $data['nama_atk']; ?>
</font>
</strong><br>
<span class="zoom">
<img alt="<?php echo $data['nama_atk']; ?>" title="<?php echo $data['nama_atk']; ?>"
src="images/atk/<?php echo $data['gambar']; ?>" align="left" hspace="5px" vspace="5px"
style="width: 125px; height: 95px; border: 1px solid #ccc; box-shadow: 0 0 4px #888; margin-top:
5px;" /></span>
<span style="text-align: justify;"><?php echo $post; echo "..."; ?></span>
<div align="right">
<a href="index.php?page=tampil_atk&id=<?php echo $data['id_atk']; ?>"><b>Read more</b>
</a>
</div>
<br><br><br>
<br>
<hr color="blue"/>
<?php
}
?>
<?php
//navigasi
$sql = "SELECT * FROM tbl_atk";
$query = mysqli_query($db, $sql);
$jumlahdata = mysqli_num_rows($query);
if ($jumlahdata > $batasawal) {
echo '<center><ul class="pagination pagination-sm">';
$a = explode(".", $jumlahdata / $batasawal);
$b = $a[0];
$c = $b + 1;
for ($i = 1; $i <= $c; $i++) {
echo '<li class="active"><a style="text-decoration:none; color:salmon;';
if ($_GET['page'] == $i) {
echo 'color:blue';
}
echo '" href="?page=' . $i . '">' . $i . '</a></li>';
}
echo '</ul></center>';
}
?>
</body>
</html>