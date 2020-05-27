<?php
include "config.php";
$sql = "select * from tbl_atk order by id_atk desc";
$query = mysqli_query($db, $sql);
while ($data=mysqli_fetch_array($query)) {
?>
&bull; <a href="index.php?page=tampil_atk&id=<?php echo $data['id_atk']; ?>"><?php echo
$data['nama_atk']; ?></a>
<br /><font size="-2" style="margin-left: 10px; color: black;">(Posted on : <?php echo
$data['tanggal']; ?>)</font><br /><br/>
<?php
}
?>