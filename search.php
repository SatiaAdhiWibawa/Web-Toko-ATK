<?php
include "config.php";
$cari=$_POST['query'];
$sql = "select * from tbl_atk where nama_atk like '%$cari%' order by id_atk desc";
$query = mysqli_query($db, $sql);
echo "<center><u>Hasil pencarian ATK dengan keyword <b>$cari</b> :</u></center><BR>";
if (mysqli_num_rows($query) == 0) {
echo "<center>Mohon ma'af! Data yang anda cari tidak ada dalam database kami
!</center><br><br><br><br><br><br><br>";
}
else {
while ($data=mysqli_fetch_array($query)) {
$post=substr($data['deskripsi'],0,205);
?>
<link href="css/imghover.css" rel="stylesheet" type="text/css" />
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
5px;" />
</span>
<span style="text-align: justify;"><?php echo $post; echo "..."; ?></span>
<div align="right"><a href="index.php?page=tampil_atk&id=<?php echo $data['id_atk'];
?>"><b>Read more</b></a></div>
<br/>
<hr color="white"/>
<br><br><br>
<?php
}
}
?>