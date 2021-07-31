<?php // register.php
/*
 * Página de registro de usuarios
 * @author Daniel (Nasty35)
 */

require 'core/brain.php'; // Núcleo del CMS

if(Logued) { // Comprobamos si está logado, y si lo está lo llevamos al me.php
    header('Location: me.php');
} else { // Importamos la plantilla del documento register (cabecera y register-body.tpl)
    $tpl->setHeader('Registro', 'register.php');
    if(isset($_GET['error'])) { // Error de nombre ya escogido
        echo '<h2 class="w3-card w3-center w3-red">'. 
            ($_GET['error'] == 'name' ? 'El nombre ya est&aacute; escogido' : 'No existe ese tag de error') .
             '</h2>';
    }
    $tpl->add('register-body');
}
?>