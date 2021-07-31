<?php // comentarios.php
/*
 * Página para ver comentarios de noticias
 * @author Daniel (Nasty35)
 */

require 'core/brain.php'; // Núcleo del CMS

if(!Logued) { // Comprobamos si no está logado, y si no lo está lo llevamos al index.php
    header('Location: index.php');
} else {
    $tpl->setHeader('Comentarios', 'noticias.php');
    $tpl->add('comentarios-body');
}
?>