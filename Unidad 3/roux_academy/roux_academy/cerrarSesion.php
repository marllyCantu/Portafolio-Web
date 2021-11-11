<?php
	require("layouts/header.php");

	require "inicioSesion.php";
	$_SESSION= array();
	session_destroy();
	header('Location: mensajeCierre.php');
?>

