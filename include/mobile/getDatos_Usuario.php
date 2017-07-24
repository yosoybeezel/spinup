<?php  
	require '../Classes/Usuario.php';
	if ($_SERVER['REQUEST_METHOD']=='POST') {
        $json = json_decode(file_get_contents('php://input'), true);

        $result= Usuario::getDatos_Usuario($json['correo']);

        if ($result) {
            echo json_encode(array('datos_usuario'=>$result));
        }else{
            echo json_encode(array('login'=>'failure'));
    	}
    }
?>