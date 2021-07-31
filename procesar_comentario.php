<?php // procesar_comentario.php
/*
 * Página para añadir comentarios en noticias
 * @author Daniel (Nasty35)
 */

require 'core/brain.php';

$id = $_POST['id'];
$comentario = $_POST['comentario']; 

Comentarios::insertar($id, $_SESSION['username'], $comentario);

header('location: comentarios.php?id=' . $_GET['id']);
?>