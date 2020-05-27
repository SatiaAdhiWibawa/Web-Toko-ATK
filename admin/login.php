<?php
session_start();
if(isset($_SESSION['username'])) {
header('location:beranda_admin.php'); }
require_once("../config.php");
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Login Administrator</title>
	<link rel="stylesheet" href="../css/login1.css">
	<link rel="shortcut icon" href="../images/bookworm.ico">

</head>
<body>
<!-- Satia Adhi Wibawa -->
<?php if( isset($error) ) : ?>
		<p style="color: red; font-style: italic; text-align: center;">Username / Password Salah!!!</p>
	<?php endif; ?>

<form action="cek_login.php" method="post" name="login">

<div class="login-box">
	<h1>Login</h1>
	<div class="textbox">
		<i class="fas fa-user"></i>
		<input name="username" type="text" required="required" placeholder="Username" autocomplete="off">
	</div>
	<div class="textbox">
		<i class="fas fa-lock"></i>
		<input name="password" type="password"  required="required" placeholder="Password" autocomplete="off">
	</div>
		<input name="Login" type="submit" class="btn" value="Login">
		<div class="btn"> <a href="regristrasi.php">Regristrasi</a></div>
		<div><p class="copy">Copyright  &copy;  <?php echo date('Y')?> - Satia Adhi Wibawa</p></div>
</div>


</form>

</body>
</html>