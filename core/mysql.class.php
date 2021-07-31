<?php // mysql.class.php
/*
 * Clase de la conexi�n MySQL
 * @author Daniel (Nasty35)
 */

class MySQL {

	private $sql;
	
	public function __construct($host, $user, $pass, $db) {
		$this->sql = new mysqli($host, $user, $pass, $db);
		if($this->sql->connect_errno) {
			die($this->sql->connect_errno);
		}
	}

	public function query($query) {
		return $this->sql->query($query);
	}

	public function prepare($query) {
		return $this->sql->prepare($query);
	}
	
	// cleanVars($_POST['username']); - String
	public function cleanVars($str) {
        $str = htmlspecialchars($str);
        $str = strip_tags($str);
        $str = $this->sql->real_escape_string($str);
        $str = str_replace("<","&lt;", $str);
        $str = str_replace(">","&gt;", $str);
        return $str;
    }
	
}
?>
