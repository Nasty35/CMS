<?php // users.class.php
/*
 * Clase de los usuarios
 * @author Daniel (Nasty35)
 */
 
class Users {

	public static function login($usr, $pwd) {
		global $sql;
		$query = $sql->query("SELECT * FROM users WHERE user = '".$usr."' AND pass = '".$pwd."'");
		return $query->num_rows;
	}

	// getInfoForId(1, 'email'); - Object
	public static function getInfoForId($id, $data) {
		global $sql;
		return $sql->query("SELECT ".$data." FROM users WHERE id = ".$id."")->fetch_assoc()[$data];
	}
	
	// getInfoForName('Daniel', 'email'); - Object
	public static function getInfoForName($name, $data) {
		global $sql;
		return $sql->query("SELECT ".$data." FROM users WHERE user = '".$name."'")->fetch_assoc()[$data];
	}
	
	// createUser('Daniel', 'Trololo', 'dani@cms.es', '192.168.1.1'); - Void
	public static function create($name, $pass, $email, $ip) {
		global $sql;
	    $sql->query("INSERT INTO `users` (`id`, `user`, `pass`, `mail`, `ip`) VALUES (NULL, '".$name."', '".hash('sha256', $pass)."', '".$email."', '".$ip."')");
	}
	
	// deleteUserForId(1); - Void
	public static function deleteUserForId($id) {
		global $sql;
	    $sql->query("DELETE FROM users WHERE id = ".$id);
    }
	
	// deleteUserForName('Nasty'); - Void
	public static function deleteUserForName($username) {
		global $sql;
	    $sql->query("DELETE FROM users WHERE user = '".$username."'");
	}
	
	// checkName('Nasty'); - Boolean
	public static function checkName($name) {
		global $sql;
		return $sql->query("SELECT * FROM users WHERE user = '".$name."'")->num_rows;
	}
	
}
