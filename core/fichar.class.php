<?php // fichar.class.php
/*
 * Clase del fichaje de usuario
 * @author Daniel (Nasty35)
 */

class Fichar {
    
    public function entrada($fecha) {
        global $sql;
        global $_SESSION;
        $query = $sql->query("SELECT id FROM registros WHERE usuario = '" . $_SESSION['username'] . "' AND salida = ''");
        if ($query->num_rows == 0) {
            $query = $sql->query("INSERT INTO `registros` (`id`, `usuario`, `entrada`, `salida`) VALUES (NULL, '".$_SESSION['username']."', '".$fecha."', '');");
        } else {
            echo '<h2 class="w3-card w3-center w3-red">Ya tienes un fichaje en curso</h2>';
        }
    }

    public function salida($fecha) {
        global $sql;
        global $_SESSION;
        $query = $sql->query("SELECT id FROM registros WHERE usuario ='" . $_SESSION['username'] . "' AND salida = '';");
        if ($query->num_rows > 0) {
            $query = $sql->query("SELECT * FROM registros WHERE usuario = '" . $_SESSION['username'] . "' AND salida = '';");
            $id = $query->fetch_assoc()['id'];
            $query = $sql->query("UPDATE `registros` SET `salida` = '".$fecha."' WHERE `registros`.`id` = ".$id.";");
        } else {
            echo '<h2 class="w3-card w3-center w3-red">No tienes fichaje en curso</h2>';
        }
    }

    public function registros() {
        global $sql;
        global $_SESSION;
        $query = $sql->query("SELECT * FROM registros WHERE usuario = '" . $_SESSION['username'] . "';");
        if ($query->num_rows > 0) {
            while($row = $query->fetch_assoc()) {
                 echo '<tr>' . PHP_EOL . '    <td>' . $row['entrada'] . '</td>' . PHP_EOL;
                 echo '    <td>' . $row['salida'] . '</td>' . PHP_EOL . '</tr>' . PHP_EOL;
            }
        }
    }

}
?>