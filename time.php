<html>
<head>
<title>Untitled Document</title>
<script type="text/javascript">
 // 1 detik = 1000
 window.setTimeout('jam()',1000);
 function jam() {
 var tanggal = new Date();
 setTimeout('jam()',1000);
document.getElementById('output').innerHTML =
tanggal.getHours()+':'+tanggal.getMinutes()+':'+tanggal.getSeconds();
}
 </script>
</head>
<body onload="jam()">
<center>
<?php echo date('l, j F Y'); ?>
</center>
<font size="5px" style="text-align: center;">
<div id="output"></div></font>
</body>
</html>
