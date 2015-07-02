   <?php
                    error_reporting(E_ALL);
                    ini_set('display_errors', '1');

                    // Conectamos a la Bse de Datos
                    include "conecion.php";
                    mysql_select_db('sociamed', $conecion);

                    $sql  = ("SELECT * FROM Clientes" );
                    $sql2  = ("SELECT * FROM Planes" );

                    $peticion =  mysql_query($sql, $conecion);
                    $peticion2 =  mysql_query($sql2, $conecion);
                    ?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Afiliar Cliente</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/jquery-ui.css" rel="stylesheet">
	<link href="../css/appMerk.css" rel="stylesheet">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
        <script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/jquery-ui.min.js"></script>
        <script src="../js/jquery.validate.min.js"></script>
        <script src="../js/bootstrap.js"></script>
	<script src="../js/appmerk.js"></script>
          <script>
                    $(function() {
                            // validamos los formularios
                            $("#form_planes").validate();
                            // Utilizamos el datepicker para los input con calendarios
                          $.datepicker.setDefaults($.datepicker.regional["es"]);

                            $( "#inicio" ).datepicker({
                                        firstDay: 1,
                                        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
                                        dayNamesMin: ['Dom','Lun','Mar','Mie','Jue','Vie','Sab'],
                                        dateFormat: 'yy-mm-dd',
                            });
                            $( "#fin" ).datepicker({
                                       firstDay: 1,
                                        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
                                        dayNamesMin: ['Dom','Lun','Mar','Mie','Jue','Vie','Sab'],
                                        dateFormat: 'yy-mm-dd',
                            });
                    });


          </script>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<div class="timePlan"></div>
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand logo" href="#">
              <img src="../images/Crear_Estudios.png">
          </a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="usuario nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Bienvenido Byron Garcia</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-star"> Plan Dedicado</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-out"> Salir</a></li>
          </ul>
        </div>
      </div>
    </div>
<div id="cont-appMerk" class="container-fluid">
      <div class="row">
              <!-- Alertas
                    <div class="alert alert-success" role="alert"> Positivo</div>
                    <div class="alert alert-info" role="alert">Recuerde...</div>
                    <div class="alert alert-warning" role="alert">...</div>
                    <div class="alert alert-danger" role="alert"> ¡Cuidado!</div>
            -->
        <div class="col-md-12 main">
        <div class="row">
          <header class="col-sm-12 cont-filtros">
                          <h2 class="titu-2 col-sm-3"><span class="glyphicon glyphicon-calendar"></span>Registro Planes</h2>
          </header>

           <div class="col-xs-12 col-sm-12">
            <form id="form_planes" class="form-1">
                         <span class='titu-form'>Empresa:</span>
                     <select id="selEmpresa" class='select-1' name='empresa'>
                    <option value="">Seleccione una Empresa</option>
                                    <?php
                                                  while ( $fila = mysql_fetch_array($peticion)) {
                                                            echo "<option value=".$fila ['id_cliente'].">".$fila ['empresa']."</option>";
                                                  }
                                    ?>
                      </select> <br>
                               <span class='titu-form'>Plan:</span>
                     <select id="selPlan" class='select-1' name='plan'>
                                  <option value="">Seleccione un Plan</option>
                                    <?php
                                                  while ( $fila = mysql_fetch_array($peticion2)) {
                                                            echo "<option value=".$fila ['id_plan'].">".$fila ['nombre_plan']."</option>";
                                                  }
                                                  mysql_close($conecion);
                                    ?>
                      </select> <br>
                       <span class='titu-form'>Inicio:</span>  <input id="inicio" class="input-2" type='text' name='inicio' required>
                       <span class='titu-form'>Vencimiento:</span>  <input id="fin" class="input-2" type='text' name='fin' required><br>
                       <input type="checkbox" required> <span class='titu-form'>Validar plan</span> <br> <br>
                       <button id="afiliacion" class="btn btn-success btn-1">Guardar</button>
            </form>
            <div class="mensaje">

            </div>
          </div>
          </div>
          </div>
          </div>
      </div>
    </div>
</body>
</html>