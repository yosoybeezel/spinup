<?php
	session_start();

	require '../config/login.php';
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $email=$_POST['correo'];
        $password=$_POST['pass'];
		
        $result= Login::obtenerUsuario('',$email,$password);
		
        if ($result) {
                header('Location: ../panel.php');
        }else{
    		echo "<script language='JavaScript'>";
          	 	echo "alert('No existe el usuario');";
    		echo "</script>";
    		echo "<meta http-equiv=refresh content=0;url=../../> ";
    	}
    }
?>
	