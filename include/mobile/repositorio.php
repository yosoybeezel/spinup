<?php
	require '../Classes/Repositorio.php';
    //if ($_SERVER['REQUEST_METHOD']=='POST') {
        //$json = json_decode(file_get_contents('php://input'), true);
        
        $repo= Repositorio::obtenerRepositorio();
        if ($repo) {
            echo $code=json_encode(array('repositorio' =>$repo));
        }
    //}
    
?>
