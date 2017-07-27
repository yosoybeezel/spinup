<?php
	session_start();

	require '../config/registro.php';
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $mesa=$_POST['mesa'];
        $result= Registro::crearMesa($mesa);

        if ($result) {
            echo "<script language='JavaScript'>";
                echo "alert('Usuario Registrado con Exito');";
				header("Refresh:0; url=../home.php");
            echo "</script>";
        }else{
    		echo "<script language='JavaScript'>";
          	 	echo "alert('Falla al registrar usuario');";
    		echo "</script>";

            //header("Refresh: $sec; url=home.php");
    	}
    }
?>
