<?php // comentarios.class.php
/*
 * Clase de los comentarios
 * @author Daniel (Nasty35)
 */
 
class Comentarios {

	public static function mostrar($id) {
        global $sql;
        $result = $sql->prepare('SELECT author, comentario FROM comentarios WHERE id_noticia = ?');
        $result->bind_param('i', $id);
        $result->execute();
        $result->bind_result($author, $comentario);
        //Bucle while para visualizarlos
        while($row = $result->fetch()) {
            echo '<div class="w3-container w3-blue w3-margin">' . PHP_EOL .
			'<h4>'.$author.'</h4>Comentario: '.$comentario.'<br><br>' .
			'</div>';
        }
    }

    public static function insertar($id, $author, $comentario) {
        global $sql;
        $result = $sql->prepare('INSERT INTO comentarios (id_noticia,author,comentario) VALUES(?, ?, ?)');
        $result->bind_param('iss', $id, $author, $comentario);
        $result->execute();
    }

}