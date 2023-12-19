<?php
	session_start();
	unset(
		$_SESSION['usuarioIdSite'],
		$_SESSION['usuarioNomeSite'],
		$_SESSION['usuarioEmailSite']
	);
	
	$_SESSION['loginDeslogado'] = "Deslogado com Sucesso";
	header("Location: ../home");
?>