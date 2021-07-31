<?php // brain.php
/*
 * Cerebro del sistema
 * @author Daniel (Nasty35)
 */

// Incluimos todas las clases
require('tpl.class.php');
require('mysql.class.php');
require('users.class.php');
require('fichar.class.php');
require('noticias.class.php');
require('comentarios.class.php');

// Variables & Init
$tpl = new Tpl('core/templates/');
$sql = new MySQL('localhost', 'daniel', '', 'cms');

// Session
session_start();
define('Logued', isset($_SESSION['logued']));
?>
