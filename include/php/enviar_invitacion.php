<?php
	require '../config/login.php';
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        
        $evento="NETWORKING";
        $descripcion="Todo sobre Networking";
        $lugar="Reforma 22";
        $horai="";
        $horaf="";
        //$token=$_POST['token'];

        Login::showNotification($evento,$descripcion,$lugar,$horai,$horaf);
        header("Refresh:0; url=../home.php");
    }
?>
