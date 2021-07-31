<?php // borrar.php
/*
 * Página de borrar noticias
 * @author Daniel (Nasty35)
 */

require 'core/brain.php'; // Núcleo del CMS

if(Users::getInfoForName(Noticias::getData($_GET['id'])['autor'], 'id') == Users::getInfoForName($_SESSION['username'], 'id')) {
  Noticias::borrar($_GET['id']);
}
  header('location: noticias.php');
?>