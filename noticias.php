<?php // noticias.php
/*
 * Página de noticias
 * @author Daniel (Nasty35)
 */

require 'core/brain.php'; // Núcleo del CMS

if(!Logued) {
    header('Location: index.php');
} else {
    $tpl->setHeader('Noticias', 'noticias.php');
    if(isset($_GET['titulo'])) { // Se ha registrado la noticia con éxito
        echo '<h2 class="w3-card w3-center w3-green">Noticia ' . $_GET['titulo'] . ' registrada</h2>';
    }
    $tpl->add('noticias-body');
}
?>