<?php
	require 'Database.php';

	class Registro{
		function _construct(){

		}

		public static function obtenerRangos(){
			$sql="SELECT * FROM rol";
			$result= Database::getInstance()->getDb()->prepare($sql);
			$result->execute();
			return $result;
		}
		public static function obtenerMesas(){
			$sql="SELECT * FROM mesa";
			$result= Database::getInstance()->getDb()->prepare($sql);
			$result->execute();
			return $result;
		}

		public static function obtenerEvento(){
			$sql="SELECT id_evento,nombre_evento FROM evento";
			$result= Database::getInstance()->getDb()->prepare($sql);
			$result->execute();
			return $result;
		}

		public static function registroUsuario($rol,$mesa,$nombre,$mail,$pass,$tel,$domicilio){
			$sql="CALL sp_registro(?,?,?,?,?,?,?)";
			$result= Database::getInstance()->getDb()->prepare($sql);
			return $result->execute(array($rol,$mesa,$nombre,$mail,$pass,$tel,$domicilio));

		}
		public static function crearMesa($mesa){
			$sql="CALL sp_setMesa(?)";
			$result= Database::getInstance()->getDb()->prepare($sql);
			return $result->execute(array($mesa));
		}
		public static function crearEvento($id_mesa,$evento,$fecha,$hora){
			$sql="CALL sp_evento(?,?,?,?)";
			$result= Database::getInstance()->getDb()->prepare($sql);
			return $result->execute(array($id_mesa,$evento,$fecha,$hora));

		}
		public static function subirArchivo($id_evento,$archivo){
			$sql="CALL sp_subirArchivo(?,?)";
			$result= Database::getInstance()->getDb()->prepare($sql);
			return $result->execute(array($id_evento,$archivo));
		}

	}
?>
