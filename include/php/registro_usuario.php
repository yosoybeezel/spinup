<?php
	session_start();

	require '../config/registro.php';
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $id_rol=$_POST['rol'];
        $id_mesa=$_POST['mesa'];
        $nombre=$_POST['nombre'];
        $mail=$_POST['correo'];
        $tel=$_POST['telefono'];
        $domicilio=$_POST['domicilio'];

        $result= Registro::registroUsuario($id_rol,$id_mesa,$nombre,$mail,"123",$tel,$domicilio);

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
