<?php // fichaje.php
/*
 * Página de fichaje del usuario
 * @author Daniel (Nasty35)
 */

require 'core/brain.php'; // Núcleo del CMS

if(!Logued) { // Comprobamos si no está logado, y si no lo está lo llevamos al index.php
    header('Location: index.php');
} else { // Importamos la plantilla del documento fichaje (cabecera y fichaje-body.tpl)
    $fichar = new Fichar();
    if(isset($_POST['reloj'])) {
        // Se ha pulsado un botón del formulario
        $fecha = $_POST['reloj'];
        if(isset($_POST['entrada'])) { // Se ha pulsado el envío de hora entrada
            $fichar->entrada($fecha);
        } else if(isset($_POST['salida'])) { // Se ha pulsado el envío de hora salida
            $fichar->salida($fecha);
        }
    }
    $tpl->setHeader('Registro jornada', 'fichaje.php');
    $tpl->add('fichaje-body');
}
?>