<?php
	session_start();

	require '../config/registro.php';
    if ($_SERVER['REQUEST_METHOD']=='POST') {
    	
        $id_mesa2=$_POST['mesa_evento'];
        $evento=$_POST['nombre_evento'];
        $fecha=$_POST['fecha_evento'];
        $hora=$_POST['hora_evento'];

        $result= Registro::crearEvento($id_mesa2,$evento,$fecha,$hora);

        if ($result) {
            echo "<script language='JavaScript'>";
                echo "alert('Evento Registrado con Exito');";
				header("Refresh:0; url=../home.php?s=eventos");
            echo "</script>";
        }else{
    		echo "<script language='JavaScript'>";
          	 	echo "alert('Falla al registrar usuario');";
    		echo "</script>";

            header("Refresh: $sec; url=home.php?s=eventos");
    	}
    }
?>
