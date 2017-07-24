<?php
	require '../config/login.php';
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $json = json_decode(file_get_contents('php://input'), true);

        $result= Login::obtenerUsuario($json['token'],$json['correo'],$json['pass']);

        if ($result) {
            echo json_encode(array('login'=>'success','datos'=>$result));
        }else{
            echo json_encode(array('login'=>'failure'));
    	}
    }
?>
