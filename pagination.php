<?php

//paging index
$batasawal = 4;
if (!empty($_GET['page'])) {
$hal = $_GET['page'] - 1;
$mulaiawal = $batasawal * $hal;
} else if (!empty($_GET['page']) and $_GET['page'] == 1) {
$mulaiawal = 0;
} else if (empty($_GET['page'])) {
$mulaiawal = 0;
}

?>