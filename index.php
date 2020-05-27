<!DOCTYPE html>
<html lang="en">
<head>
	<title>TOKO ATK</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">


</head>

<body background="images/logo1.png">
	<header class="banner">
		<nav>
			<!-- <img src="images/bg1.jpg" width="910" height="200"> -->
			<h1 style="font-size: 28px; color: white; font-style: bold; font-family: arial; padding: 5px;  ">TOKO ATK</h1>
		</nav>
	<!--<p>Satia Adhi Wibawa Kelas 2 Karyawan A</p>-->
	</header>
	<nav>
		<ul>
			<li><a href="admin/beranda_admin.php">Beranda</a></li>
			<li><a href="admin/login.php">Login</a></li>
			<li><a href="admin/regristrasi.php">Regristrasi</a></li>
			<li><a href="tamu.php">Halaman Tamu</a></li>
			<li><a href="me.php">Tentang Penulis</a></li>
		</ul>
	</nav>

	<main>
		<section>
			<article>
			<table width="100%" border="0" align="center" cellpadding="5">
				<tr>
					<td valign="top">
						<div style='text-align: justify;'><?php include 'switch_page.php'; ?></div>
					</td>
				</tr>
			</table>
			</article>
		</section>
	</main>

	<aside>
		<form id="searchbox" name="searchbox" action="index.php?page=search" method="POST" onSubmit="return check(this)">
			 <input type='text' class="search" value='' name='query'>
			 <input type='submit' class="button" name="search" value='Cari'>
		</form>
	</aside>

	<aside>
		<?php include 'time.php'; ?>
	</aside>

	<aside>
		<h2>Latest Post</h2>
	 	<p><?php include "latest_post.php"; ?></p>
	</aside>

	<footer>
	<center><p>Copyright Satia Adhi Wibawa <?php echo date('Y')?></p></center>
	</footer>


</body>
</html>