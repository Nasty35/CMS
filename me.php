<?php // me.php
/*
 * Página del usuario
 * @author Daniel (Nasty35)
 */

require 'core/brain.php'; // Núcleo del CMS

if(!Logued) { // Comprobamos si no está logado, y si no lo está lo llevamos al index.php
    header('Location: index.php');
} else { // Importamos la plantilla del documento index (cabecera y index-body.tpl)
    $tpl->setHeader('Página web', 'me.php');
    $tpl->add('me-body');
}
?>