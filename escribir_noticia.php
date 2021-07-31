<?php // escribir.php
/*
 * Página para escribir noticias
 * @author Daniel (Nasty35)
 */

require 'core/brain.php'; // Núcleo del CMS

if(!Logued) {
    header('Location: index.php');
} else {
    $tpl->setHeader('Noticias', 'noticias.php');
    $tpl->add('escribir-body');
}
?>