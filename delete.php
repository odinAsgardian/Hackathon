<?php

	session_start();

	$id = $_GET['id'];
	unset($_SESSION['dados'][$id]); // remover algo de um array

	header('location: index.php');
	
?>
