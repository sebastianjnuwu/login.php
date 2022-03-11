<?php
session_start();
if(!isset($_SESSION['usuario']) || !$_SESSION['usuario']) {
	header('Location: index.php');
	exit();
}
