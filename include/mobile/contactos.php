<?php
	require '../Classes/Contacto.php';
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $json = json_decode(file_get_contents('php://input'), true);

        $result= Contacto::getID_Usuario($json['correo']);

        if ($result) {
            echo json_encode(array('contactos' =>$result));
        }
    }
?>
