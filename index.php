<?php
$mod = $_GET['mod'];
if (!$mod || $mod == "main") {
	include 'modules/main/index.php';
} else {
	include 'modules/error.php';
}
?>