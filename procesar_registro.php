<?php // registering.php
/*
 * P�gina de registro de usuarios
 * @author Daniel (Nasty35)
 */

require 'core/brain.php';

$username = $sql->cleanVars($_POST['username']);
$password = $sql->cleanVars($_POST['password']);
$email = $sql->cleanVars($_POST['email']);

if(empty($username) || empty($password) || empty($email)) {
    header('Location: register.php?error=empty');
} else if(Users::checkName($_POST['username'])) {
    header('Location: register.php?error=name');
} else {
    Users::create($username, $password, $email, $_SERVER['REMOTE_ADDR']);
    header('Location: index.php?registro=' . $username);
}
?>