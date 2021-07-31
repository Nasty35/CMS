<?php // procesar_login.php
/*
 * Página que verifica credenciales de usuario para login
 * @author Daniel (Nasty35)
 */

require 'core/brain.php';

if(empty($_POST['username']) && empty($_POST['password'])) {
	header('Location: index.php?error=campos');
} else {
	$username = $sql->cleanVars($_POST['username']);
	$password = hash('sha256', $_POST['password']);
	if(Users::login($username, $password) < 1) {
		header('Location: index.php?error=incorrectos');
	} else {
    $_SESSION['userid'] = Users::getInfoForName($username, 'id');
    $_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['logued'] = true;
		header('Location: me.php');
	}
}
?>