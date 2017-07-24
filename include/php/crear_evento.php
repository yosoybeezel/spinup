<?php
	session_start();

	require '../config/registro.php';
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $id_mesa=$_POST['mesa_evento'];
        $evento=$_POST['nombre_evento'];
        $fecha=$_POST['fecha_evento'];
        $hora=$_POST['hora_evento'];

        $result= Registro::crearEvento($id_mesa,$evento,$fecha,$hora);

        if ($result) {
            echo "<script language='JavaScript'>";
                echo "alert('Usuario Registrado con Exito');";
				header("Refresh:0; url=../home.php");
            echo "</script>";
        }else{
    		echo "<script language='JavaScript'>";
          	 	echo "alert('Falla al registrar usuario');";
    		echo "</script>";

            header("Refresh: $sec; url=home.php");
    	}
    }
?>
