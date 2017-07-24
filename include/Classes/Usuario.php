<?php  
	require '../config/Database.php';

	class Usuario{
		
		function _construct(){
			
		}

		public static function existeUsuario($email) {
	        $sql = "SELECT * from usuario WHERE correo = ?";
	        $result= Database::getInstance()->getDb()->prepare($sql);
	        $result->execute(array($email));
			return 1;
    	}

		public static function getDatosL_Usuario($token,$email,$password){
			if (self::existeUsuario($email)==1) {
				self::subirToken($token,$email);
				$sql="SELECT id_usuario,id_rol,id_mesa,nombre,correo,contrasenia,telefono,domicilio,foto FROM usuario WHERE correo=? AND contrasenia=?";
				$result= Database::getInstance()->getDb()->prepare($sql);
				$result->execute(array($email,$password));
				$tabla=$result->fetchAll(PDO::FETCH_ASSOC);
				return $tabla;
			}
		}

		public static function getDatos_Usuario($email){
			if (self::existeUsuario($email)==1) {
				$sql="SELECT id_usuario,id_rol,id_mesa,nombre,correo,telefono,domicilio,foto,puesto,empresa FROM usuario WHERE correo=?";
				$result= Database::getInstance()->getDb()->prepare($sql);
				$result->execute(array($email));
				$tabla=$result->fetch(PDO::FETCH_ASSOC);
				return $tabla;
			}
		}

		public static function subirToken($token,$mail){
			$sql="UPDATE usuario SET token=? WHERE correo=?";
			$result= Database::getInstance()->getDb()->prepare($sql);
			return $result->execute(array($token,$mail));
		}

		public static function subirFoto($name_foto,$mail,$foto){
     		$path= $_SERVER['DOCUMENT_ROOT']."/spinup_web/fotos/$name_foto";
     		imagerotate($foto, 90, 0);
	        file_put_contents($path,base64_decode($foto));
			$sql="UPDATE usuario SET foto = ? WHERE correo =?;";
 			$result= Database::getInstance()->getDb()->prepare($sql);
			$result->execute(array($name_foto,$mail));
            return $result;
		}
	}
?>