<?php // index.php
/*
 * Página principal del sistema
 * @author Daniel (Nasty35)
 */

require 'core/brain.php'; // Núcleo del CMS

if(Logued) { // Comprobamos si está logado, y si lo está lo llevamos al me.php
    header('Location: me.php');
} else { // Importamos la plantilla del documento index (cabecera y index-body.tpl)
    $tpl->setHeader('Acceso', 'index.php');
    if(isset($_GET['error'])) { // Nombre de usuario o contraseña incorrectos
        echo '<h2 class="w3-card w3-center w3-red">'. 
            ($_GET['error'] == 'incorrectos' ? 'Datos incorrectos' : 'No existe ese tag de error') .
             '</h2>';
    }
    if(isset($_GET['registro'])) { // Se ha registrado el usuario con éxito
        echo '<h2 class="w3-card w3-center w3-green">Usuario ' . $_GET['registro'] . ' registrado</h2>';
    }
    $tpl->add('index-body');
}
?>