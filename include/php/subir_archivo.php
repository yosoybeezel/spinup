<?php
    require '../config/registro.php';
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $id_evento=$_POST['id_evento'];
        $target_path = "../../repositorio/";
        $nombre_original=basename( $_FILES['archivo']['name']);
        $nombre_final= str_replace(" ", "_", $nombre_original); 
        $archivo_sin_extension = basename($nombre_final, ".pdf");  
        $target_path = $target_path . $nombre_final; 
        if(move_uploaded_file($_FILES['archivo']['tmp_name'], $target_path)) {
            Registro::subirArchivo($id_evento,$archivo_sin_extension);
			echo "<script language='JavaScript'>";
          	 	echo "alert('El archivo fue subido correctamente');";
    		echo "</script>";
			
            
        } else{
        	echo "<script language='JavaScript'>";
          	 	echo "alert('Ocurró un error al subir el archivo');";
    		echo "</script>";
			
        }
		header("Refresh:0; url=../home.php?s=repositorio");
    }
?>
