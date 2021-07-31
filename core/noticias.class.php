<?php // noticias.class.php
/*
 * Clase de las noticias
 * @author Daniel (Nasty35)
 */
 
class Noticias {

	public static function mostrarTodas() {
        global $sql;
        $result = $sql->query('SELECT * FROM noticias ORDER BY fecha DESC');
        $totalregistros = $result->num_rows;
        while($row = $result->fetch_array()) {
        $result2 = $sql->prepare('SELECT * FROM comentarios WHERE id_noticia = ?');
        $result2->bind_param('i', $row['id_noticia']);
        $result2->execute();
        $result2->store_result();
        $totalcomentarios = $result2->num_rows;
        echo '<div class="w3-container w3-blue w3-margin">' . PHP_EOL .
        '<h3>'.$row['titulo'].'</h3>'.$row['autor'].' | '.$row['categoria'].' | '.$row['fecha']. PHP_EOL .
        '<br>' . PHP_EOL . '<div class="w3-container w3-white">'. PHP_EOL . $row['noticia'] .
        '</div><br> <a href="comentarios.php?id='.$row['id_noticia'].'" class="w3-btn w3-blue">comentarios('.$totalcomentarios.')</a>';
		if(Users::getInfoForName($row['autor'], 'id') == Users::getInfoForName($_SESSION['username'], 'id')) {
			echo '<a href="editar_noticia.php?id='.$row['id_noticia'].'">editar</a> | <a href="borrar_noticia.php?id='.$row['id_noticia'].'">borrar</a><br><br>';
        }
		echo '</div>';
        }
    }

    public static function mostrar($id) {
        global $sql;
        $result2 = $sql->prepare('SELECT * FROM noticias WHERE id_noticia = ?');
        $result2->bind_param('i', $id);
        $result2->execute();
        $row = $result2->get_result()->fetch_array();
        echo '<h1>'.$row['titulo'].'</h1>'.$row['autor'].' | '.$row['categoria'].' | '.$row['fecha'].'<hr>'.$row['noticia'].'<hr>';
		if(Users::getInfoForName($row['autor'], 'id') == Users::getInfoForName($_SESSION['username'], 'id')) {
			echo '<a href="editar_noticia.php?id='.$row['id_noticia'].'">editar</a> | <a href="borrar_noticia.php?id='.$row['id_noticia'].'">borrar</a><br><br>';
		}
	}

    public static function crear($titulo, $autor, $categoria, $articulo) {
        global $sql;
        $query = $sql->prepare('INSERT INTO noticias (id_noticia, autor, titulo, categoria, noticia, fecha) VALUES(NULL, ?, ?, ?, ?, NOW())');
        $query->bind_param('ssss', $autor, $titulo, $categoria, $articulo);
        $query->execute();
    }

    public static function borrar($id) {
        global $sql;
        $id = $sql->cleanVars($id);
        $result = $sql->prepare('DELETE FROM noticias WHERE id_noticia = ?;');
        $result->bind_param('i', $id);
        $result->execute();
    }

    public static function editar($id, $titulo, $autor, $categoria, $noticia) {
        global $sql;
        $result = $sql->prepare('UPDATE noticias SET id_noticia=?, titulo = ?, autor = ?, noticia = ?, categoria = ? WHERE id_noticia = ?');
        $result->bind_param('issssi', $id, $titulo, $autor, $noticia, $categoria, $id);
        $result->execute();
    }

    public static function getData($id) {
        global $sql;
        $result = $sql->prepare('SELECT * FROM noticias WHERE id_noticia = ?');
        $result->bind_param('i', $id);
        $result->execute();
        return $result->get_result()->fetch_array();
    }

}