<?php
	require '../Classes/Usuario.php';

    if($_SERVER['REQUEST_METHOD']=='POST'){
     
        $email = $_POST['email'];
        $image = $_POST['foto'];
        $name = $_POST['nom_foto'];

        $result= Usuario::subirFoto($name,$email,$image);
    }
?>
