<!DOCTYPE html>
<html lang="es">
    <head>
        <?php
		require 'config/registro.php';
		include_once ('function.php');
		noCache();
		header("Cache-Control: no-cache, must-revalidate");
		// HTTP/1.1
		header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
        ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Invitaciones a Eventos</title>
        
        <link rel="stylesheet" type="text/css" href="../styles.css">

    </head>
    <body>

        <div class="container principal">
            <div id="usuarios" class="col-md-12 secciones">
                <div class="row">
                    <fieldset class="registro_form">
                        <form class="form-horizontal" action="php/enviar_invitacion.php" method="post" role="form">
                            <!-- Form Name -->
                            <legend>
                                Invitaciones
                            </legend>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="id_cargo">Evento:</label>
                                <div class="col-sm-5">
                                    <select class="selectpicker form-control" id="id_evento" onchange="getEventoID()" required>
                                        <option value="" selected disabled hidden>Seleccionar</option>
                                        <?php
										$result = Registro::obtenerEvento();
										while ($rangos = $result -> fetch(PDO::FETCH_ASSOC)) {
											$id = $rangos["id_evento"];
											$opciones = $rangos["nombre_evento"];
											echo "<option value='$id'>" . $opciones . "</option>";
										}
                                        ?>
                                    </select>
                                    <input type="text" name="rol" hidden id="opc4">
                                </div>

                                <div class="col-sm-5">
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-accion">
                                            Enviar Invitaci&oacute;n
                                        </button>
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
		<script src="../js/funciones.js"></script>
    </body>
</html>