<?php
	require 'Database.php';

	class Login{
		function _construct(){

		}

		public static function existeUsuario($email) {
	        $sql = "SELECT * from usuario WHERE correo = ?";
	        $result= Database::getInstance()->getDb()->prepare($sql);
	        $result->execute(array($email));
			return 1;
    	}

		public static function obtenerUsuario($token,$email,$password){
			if (self::existeUsuario($email)==1) {
				self::subirToken($token,$email);
				$sql="SELECT * FROM usuario WHERE correo=? AND contrasenia=?";
				$result= Database::getInstance()->getDb()->prepare($sql);
				$result->execute(array($email,$password));
				$tabla=$result->fetch(PDO::FETCH_ASSOC);
				return $tabla;
			}
		}
		public static function obtenerUsuarios($id_mesa){
			$sql="SELECT * FROM usuario WHERE id_mesa=?";
			$result= Database::getInstance()->getDb()->prepare($sql);
			$result->execute(array($id_mesa));
			$tabla=$result->fetchAll(PDO::FETCH_ASSOC);
			return $tabla;
		}
		
		public static function obtenerUsuariosMesa(){
			$sql="SELECT * FROM usuario";
			$result= Database::getInstance()->getDb()->prepare($sql);
			$result->execute();
			$tabla=$result->fetchAll(PDO::FETCH_ASSOC);
			return $tabla;
		}
		public static function obtenerRepositorio(){
			$sql="SELECT distinct evento.id_evento,nombre_evento,fecha_evento FROM repositorio INNER JOIN  evento ON evento.id_mesa=repositorio.id_evento";
			$result= Database::getInstance()->getDb()->prepare($sql);
			$result->execute();
			$tabla=$result->fetchAll(PDO::FETCH_ASSOC);
			return $tabla;
		}
		public static function obtenerEventos(){
			$sql="SELECT * FROM evento";
			$result= Database::getInstance()->getDb()->prepare($sql);
			$result->execute();
			$tabla=$result->fetchAll(PDO::FETCH_ASSOC);
			return $tabla;
		}

		public static function subirToken($token,$mail){
			$sql="UPDATE usuario SET token=? WHERE correo=?";
			$result= Database::getInstance()->getDb()->prepare($sql);
			return $result->execute(array($token,$mail));
		}

		public static function showNotification($evento,$descripcion,$lugar,$horai,$horaf){
			ignore_user_abort();
  			ob_start();

  			$url = 'https://fcm.googleapis.com/fcm/send';

  			$fields = array('to' => "/topics/news" ,
   			'data' => array('evento' => $evento,'descripcion' => $descripcion,'lugar' => $lugar,'hora_inicio' => $horai,'hora_fin' => $horaf));

  			define('GOOGLE_API_KEY', 'AIzaSyBn4ACbsrhaPCyZg0urFCWbgM8xw_qhT2A');

  			$headers = array(
          		'Authorization:key='.GOOGLE_API_KEY,
          		'Content-Type: application/json'
  			);

		    $ch = curl_init();
		    curl_setopt($ch, CURLOPT_URL, $url);
		    curl_setopt($ch, CURLOPT_POST, true);
		    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

  		    $result = curl_exec($ch);
  		    
		}
 	}


?>
