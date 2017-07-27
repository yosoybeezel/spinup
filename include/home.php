<!DOCTYPE html>
<html lang="es">

<head>
    <?php 
        require 'config/registro.php'; 
        include_once ('function.php');
        noCache();
        header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
        header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles.css"/>
    <script src="../js/jquery.js"></script>
    
    <script>
    	$(document).ready(function() {
	
			$('.secciones').hide();
			$('#<?php if(isset($_GET['s'])) { echo $_GET['s']; } else{ echo 'mesa'; } ; ?>').show();
			
	});
	
	
    	
    </script>
    
</head>

<body>
    <!--Contenedor principal-->
    <div class="container principal">
        <!--Seccion Mesa-->
        <div id="mesa" class="col-md-12 secciones">
            <div class="row">
                <fieldset class="registro_form">
                    <form class="form-horizontal" action="php/crear_mesa.php" method="post" role="form">
                        <!-- Form Name -->
                        <legend>Creaci&oacuten de mesa</legend>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="nom_mesa">Nombre:</label>
                            <div class="col-sm-10">
                                <input type="text" id="nom_mesa" name="mesa" required placeholder="Nombre de mesa" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-accion">Crear Mesa</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </fieldset>
            </div>
        </div>


        <!--Seccion usuarios-->
        <div id="usuarios" class="col-md-12 secciones">
            <div class="row">
                <fieldset class="registro_form">
                    <form class="form-horizontal" action="php/registro_usuario.php" method="post" role="form">
                        <!-- Form Name -->
                        <legend>Registro de usuarios</legend>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="id_cargo">Cargo:</label>
                                <div class="col-sm-3">
                                    <select class="selectpicker form-control" id="id_cargo" name="rol" required>
                                        <option value="" disabled hidden>Seleccionar</option>
                                            <?php
                                                $result=Registro::obtenerRangos();
                                                while($rangos=$result->fetch(PDO::FETCH_ASSOC)) {
                                                    $id=$rangos["id_rol"];
                                                    $opciones=$rangos["cargo"];
                                                    echo "<option value='".$id."'>".$opciones."</option>";
                                                }
                                            ?>
                                     </select>
                                    
                                </div>

                                <label class="col-sm-2 control-label" for="id_mesa">Mesa:</label>
                                <div class="col-sm-3">

                                    <select class="selectpicker form-control" id="id_mesa" name="mesa" required>
                                        <option value="" disabled hidden>Seleccionar</option>
                                            <?php
                                                $result=Registro::obtenerMesas();
                                                while($rangos=$result->fetch(PDO::FETCH_ASSOC)) {
                                                    $id=$rangos["id_mesa"];
                                                    $opciones=$rangos["nombre_mesa"];

                                                    echo "<option value='".$id."'>".$opciones."</option>";
                                                }s
                                            ?>
                                    </select>
                                    
                                </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="nom">Nombre:</label>
                            <div class="col-sm-10">
                                <input type="text" id="nom" name="nombre" required placeholder="Nombre" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="email">Correo:</label>
                            <div class="col-sm-4">
                                <input type="text" id="email" name="correo" required placeholder="Correo electronico" class="form-control">
                            </div>

                            <label class="col-sm-2 control-label" for="tel">Telefono:</label>
                            <div class="col-sm-4">
                                <input type="text" id="tel" name="telefono" required placeholder="Telefono" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="dir">Direcci&oacuten:</label>
                            <div class="col-sm-10">
                                <input type="text" id="dir" name="domicilio" required placeholder="Dirección" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-accion">Registrar Usuario</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </fieldset>
            </div>
        </div>


        <!--Seccion eventos-->
        <div id="eventos" class="col-md-12 secciones">
            <div class="row">
                <fieldset class="registro_form">
                    <form class="form-horizontal" role="form" action="php/crear_evento.php" method="post">
                            <!-- Form Name -->
                            <legend>Creaci&oacuten de evento</legend>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="nom_evento">Evento:</label>
                                <div class="col-sm-4">
                                    <input type="text" id="nom_evento" placeholder="Nombre del Evento" class="form-control" name="nombre_evento">
                                </div>

                                <label class="col-sm-2 control-label" for="id_mesa2">Mesa:</label>
                                <div class="col-sm-4">
                                    <select class="selectpicker form-control" id="id_mesa2" name="mesa_evento" required>
                                          <option value="" disabled hidden>Seleccionar</option>
                                              <?php
                                                $result=Registro::obtenerMesas();
                                                while($rangos=$result->fetch(PDO::FETCH_ASSOC)) {
                                                    $id=$rangos["id_mesa"];
                                                    $opciones=$rangos["nombre_mesa"];

                                                    echo "<option value='$id'>".$opciones."</option>";
                                                }
                                              ?>
                                    </select>
                                    <!-- <input type="text" name="mesa_evento" hidden id="opc3"> -->
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="fecha">Fecha:</label>
                                <div class="col-sm-4  date">
                                    <input type="date" id="fecha" placeholder="Fecha del evento" class="form-control" name="fecha_evento">
                                </div>

                                <label class="col-sm-2 control-label" for="hora_evento">Hora:</label>
                                <div class="col-sm-4 date">
                                    <input type="time" id="hora_evento" placeholder="Hora del evento" class="form-control" name="hora_evento">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-accion">Crear Evento</button>
                                    </div>
                                </div>
                            </div>
                    </form>
                </fieldset>
            </div>
        </div>

        
        <!--Seccion de repositorio-->
        <div id="repositorio" class="col-md-12 secciones">
            <div class="row">
                <fieldset class="registro_form">
                    <form class="form-horizontal" enctype="multipart/form-data"  action="php/subir_archivo.php" method="post">
                            <!-- Form Name -->
                            <legend>Repositorio de archivos</legend>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="id_evento">Evento:</label>
                                <div class="col-sm-10">
                                    <select class="selectpicker form-control" id="id_evento" name="id_evento"  required>
                                      <option value="" selected disabled hidden>Seleccionar</option>
                                          <?php
                                            $result=Registro::obtenerEvento();
                                            while($rangos=$result->fetch(PDO::FETCH_ASSOC)) {
                                                $id=$rangos["id_evento"];
                                                $opciones=$rangos["nombre_evento"];

                                                echo "<option value='$id'>".$opciones."</option>";
                                            }
                                          ?>
                                    </select>
                                    <!-- <input type="text" name="id_evento" hidden id="opc4"> -->
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="archivos">Examinar: </label>
                                <div class="col-sm-10">
                                    <input id="archivos" type="file" name="archivo" accept="application/pdf">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-accion">Subir Archivo</button>
                                    </div>
                                </div>
                            </div>
                    </form>
                </fieldset>
            </div>
        </div>


    </div>
	
    <script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/bootstrap-datepicker.min.js"></script>
	<script src="../js/fileinput.min.js"></script>
	<script src="../js/funcionesHome.js"></script>
	<!-- <script>
		debugger;
		$('#paginas').contents().find('.secciones').hide();
		$('#paginas').contents().find('#mesa').show();
		$('#btnMesa').click();
	</script> -->
	
</body>

</html>
