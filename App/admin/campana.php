<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro Campaña</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/jquery.circliful.css" rel="stylesheet">
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
                            $("#form_campana").validate();
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
        <h2 class="reporte">Reporte</h2>
<div id="cont-appMerk" class="container-fluid">
      <div class="row">
              <!-- Alertas
                    <div class="alert alert-success" role="alert"> Positivo</div>
                    <div class="alert alert-info" role="alert">Recuerde...</div>
                    <div class="alert alert-warning" role="alert">...</div>
                    <div class="alert alert-danger" role="alert"> ¡Cuidado!</div>
            -->
        <div class="col-md-12 main">

          <div id="contReporte" class="row placeholders col-sm-offset-1">
      <!-- Reporte Graficos -->
            <div class="col-xs-6 col-sm-3 placeholder">
              <div id="cFace" data-dimension="150" data-text="50 post" data-info="Facebook" data-width="30" data-fontsize="16" data-percent="45" data-fgcolor="#3b5998" data-bgcolor="#dfe3ee" data-type="half" data-fill="#fff"></div>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
             <div id="cTwee" data-dimension="150" data-text="140 post" data-info="Twitter" data-width="30" data-fontsize="16" data-percent="75" data-fgcolor="#9AE4E8" data-bgcolor="#eee" data-type="half" data-fill="#fff"></div>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <div id="cYoutube" data-dimension="150" data-text="1 video" data-info="Youtube" data-width="30" data-fontsize="16" data-percent="50" data-fgcolor="#B50505" data-bgcolor="#eee" data-type="half" data-fill="#fff"></div>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
             <div id="cReportes" data-dimension="150" data-text="1 reporte" data-info="Estadisticas" data-width="30" data-fontsize="16" data-percent="30" data-fgcolor="#E49A39" data-bgcolor="#eee" data-type="half" data-fill="#fff"></div>
            </div>
          </div>
        <div class="row">
          <header class="col-sm-12 cont-filtros">
                          <h2 class="titu-2 col-sm-3"><span class="glyphicon glyphicon-calendar"></span> Registro de Campañas</h2>
          </header>

           <div class="col-xs-12 col-sm-12">
            <form id="form_campana" class="form-1" action="reg_campana.php" method="post">
                       <span class='titu-form'>Nombre:</span> <input class="input-1" type='text' name='campana' placeholder='Nombre de la Campaña' required ><br>
                       <span class='titu-form'>Descripción:</span><br>
                       <textarea class="textarea-1" name='descripcion' required></textarea><br>
                       <span class='titu-form'>Inicio:</span>  <input id="inicio" class="input-2" type='text' name='inicio' required>
                       <span class='titu-form'>Fín:</span>  <input id="fin" class="input-2" type='text' name='fin' required><br>
                       <input class="btn btn-success btn-1" type="submit" value="Guardar">
            </form>
          </div>
          </div>
          </div>
          </div>
      </div>
    </div>
</body>
</html>