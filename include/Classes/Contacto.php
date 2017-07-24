<?php 
	require '../config/Database.php';

	class Contacto {
		
		function _construct(){
			
		}

		public static function getID_Usuario($email){
			$sql="SELECT * FROM usuario WHERE correo=?";
			$result= Database::getInstance()->getDb()->prepare($sql);
			$result->execute(array($email));
			while($tabla=$result->fetch(PDO::FETCH_ASSOC)){
				$id=$tabla["id_usuario"];
               	$mesa=$tabla["id_mesa"];
			return self::getContactosMesa($id,$mesa);
			}
		}

		public static function getContactosMesa($id_usuario,$id_mesa){
			$sql="SELECT id_rol,nombre,correo,telefono,domicilio,foto FROM usuario WHERE id_mesa=? and id_usuario !=? ORDER BY id_rol ASC";
			$result=Database::getInstance()->getDb()->prepare($sql);
			$result->execute(array($id_mesa,$id_usuario));
			$tabla= $result->fetchAll(PDO::FETCH_ASSOC);
			return $tabla;
		} 
	}

?>