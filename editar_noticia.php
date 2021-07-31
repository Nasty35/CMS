<?php // editar.php
/*
 * Página para editar noticias
 * @author Daniel (Nasty35)
 */

require 'core/brain.php'; // Núcleo del CMS

if(!Logued) { // Comprobamos si no está logado, y si no lo está lo llevamos al index.php
    header('Location: index.php');
} else {
    if(isset($_POST['id'])) {
        $id = $_POST['id'];
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $categoria = $_POST['categoria'];
        $noticia = $_POST['noticia'];
        if(Users::getInfoForName($autor, 'id') == Users::getInfoForName($_SESSION['username'], 'id')) { // Comprobamos que sea el due�o de la noticia
          Noticias::editar($id, $titulo, $autor, $categoria, $noticia);
          header('location: comentarios.php?id=' . $_POST['id']);
        } else {
          header('location: comentarios.php?id=' . $_POST['id']);
        }
    } else {
        $tpl->setHeader('Editar noticia', 'noticias.php');
        $tpl->add('editar-body');
    }
}
?>