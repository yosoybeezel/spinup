<?php
	require '../config/login.php';
    //if ($_SERVER['REQUEST_METHOD']=='POST') {
        //$json = json_decode(file_get_contents('php://input'), true);

        $result= Login::obtenerEventos();
        if ($result) {
            echo json_encode(array('datos' =>$result));
        }
    //}
?>
