<?php
	require '../Classes/Repositorio.php';
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $json = json_decode(file_get_contents('php://input'), true);
        
        $archivos= Repositorio::getArchivos($json['id_evento']);
        if ($archivos) {
            echo $code=json_encode(array('archivos' =>$archivos));
        }
    }
    
?>
