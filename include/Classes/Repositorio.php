<?php  
	require '../config/Database.php';

	class Repositorio{

		function _construct(){
			
		}

		public static function obtenerRepositorio(){
			
			$sql="SELECT distinct evento.id_evento,nombre_evento,fecha_evento FROM repositorio INNER JOIN  evento ON evento.id_mesa=repositorio.id_evento";
			$result= Database::getInstance()->getDb()->prepare($sql);
			$result->execute();
			$tabla=$result -> fetchAll(PDO::FETCH_ASSOC);
			return $tabla;
		}

		public static function getArchivos($id_evento){
			$sql="SELECT * FROM repositorio WHERE id_evento=? ORDER BY archivo ASC";
			$result=Database::getInstance()->getDb()->prepare($sql);
			$result->execute(array($id_evento));
			$tabla= $result->fetchAll(PDO::FETCH_ASSOC);
			return $tabla;
		} 

	}
?>