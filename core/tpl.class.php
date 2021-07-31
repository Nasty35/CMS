<?php // tpl.class.php
/*
 * Clase de las plantillas de diseño (tpl/templates)
 * @author Daniel (Nasty35)
 */

class Tpl {
    
	private $folder;
	
	public function __construct($folder) {
	    if (empty($folder)) {
			echo 'Dejaste el nombre de la carpeta de las templates vac&iacute;o';
		} else {
		    if (!file_exists($folder)) {
				echo 'La carpeta ' . $folder . ' no existe.';
			} else {
				$this->folder = $folder;
			}
		}
	}
	
	public function add($file) {
	    if (empty($file)) {
			echo 'Dejaste el nombre de un tpl vac&iacute;o';
		} else {
		    if (!file_exists($this->folder . '/' . $file . '.tpl')) {
				echo 'El tpl ' . $file . '.tpl no existe';
			} else {
				require $this->folder . '/' . $file . '.tpl';
				require $this->folder . '/footer.tpl';
			}
		}
	}
	
	public function setHeader($title, $page) {
		require $this->folder . '/header.tpl';
		// Navegation bar
		if($page == 'index.php' || $page == 'register.php') {
			echo(str_replace($page . '" class="', '#" " class="w3-blue ', '<nav class="w3-bar w3-card w3-small">
	  <a href="index.php" class="w3-bar-item w3-button w3-border-right w3-border-blue ">Acceder</a>
	  <a href="register.php" class="w3-bar-item w3-button w3-border-right w3-border-blue ">&iexcl;Reg&iacute;strate!</a>
	</nav>'));
		} else {
			echo(str_replace($page . '" class="', '#" " class="w3-blue ', '<nav class="w3-bar w3-card w3-small">
		<a href="me.php" class="w3-bar-item w3-button w3-border-right w3-border-blue ">Home</a>
		<a href="fichaje.php" class="w3-bar-item w3-button w3-border-right w3-border-blue ">Registro jornada</a>
		<a href="noticias.php" class="w3-bar-item w3-button w3-border-right w3-border-blue ">Noticias</a>
		<a href="logout.php" class="w3-bar-item w3-button w3-border-left w3-border-blue w3-right">Cerrar sesi&oacute;n</a>
	</nav>'));
		}
	}
}
?>