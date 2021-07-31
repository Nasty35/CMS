<?php // procesar_noticia.php
/*
 * Página de procesar noticias
 * @author Daniel (Nasty35)
 */

require 'core/brain.php'; // Núcleo del CMS

$titulo = $sql->cleanVars($_POST['titulo']);
$categoria = $sql->cleanVars($_POST['categoria']);
$articulo =  $sql->cleanVars($_POST['articulo']);

Noticias::crear($titulo, $_SESSION['username'], $categoria, $articulo);

header('location: noticias.php?titulo=' . $titulo); 
?>
?>