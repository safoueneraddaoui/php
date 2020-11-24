<?php
if(!isset($_SESSION['login']) || !isset($_SESSION['password']))
{
	echo "<script>window.location.href='login.php';</script>";
	die;
}
?>