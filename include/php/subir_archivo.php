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
            header("Refresh:0; url=../home.php");
        } else{
        echo "Ha ocurrido un error, trate de nuevo!";
        }
    }
?>
