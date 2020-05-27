<?php
// switch ($_GET['page']) {
$pg = !empty($_GET['page']) ? $_GET['page'] : "" ;
switch($pg){
default:
include 'tampil_atk.php';
break;
case 'tampil_atk':
if (!file_exists('detail_atk.php')) {
echo "<center><b>Mahon ma'af ! Halaman yang anda minta untuk sementara tidak dapat di
akses. Cobalah beberapa saat lagi !</b></center>";
} else {
include 'detail_atk.php';
}
break;
case 'search':
if (!file_exists('search.php')) {
echo "<center><b>Mohon ma'af ! Halaman yang anda minta untuk sementara waktu tidak
dapat di akses. Cobalah beberapa saat lagi !</b></center>";
} else {
include 'search.php';
}
break;
}

?>