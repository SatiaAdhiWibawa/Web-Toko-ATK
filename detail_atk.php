<html>
<head>
<title>article</title>
</head>
<body>
<?php
include "config.php";
$id=$_GET['id'];
$sql = "select * from tbl_atk where id_atk='$id'";
$query = mysqli_query($db, $sql);
$data=mysqli_fetch_array($query);
?>
<div align="right">
<font size="3">(Posted on : <?php echo $data['tanggal']; ?>)</font>
</div>
<strong>
<div align="left">
<font size="4">
<?php echo $data['nama_atk']; ?>
</font>
</div>
</strong><br>
<span class="zoom">
<img alt="<?php echo $data['nama_atk']; ?>" title="<?php echo $data['nama_atk']; ?>"
src="images/atk/<?php echo $data['gambar']; ?>" align="left" style="width: 200px; height: 170px;
border: 1px solid #ccc; box-shadow: 0 0 4px #888; margin-top: 5px; margin-right: 7px;" />
</span>
<span style="text-align: justify;"><?php echo $data['deskripsi']; ?></span>
</body>
</html>
