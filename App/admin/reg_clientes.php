<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Sociamed 2</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/jquery.circliful.css" rel="stylesheet">
	<link href="../css/appMerk.css" rel="stylesheet">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
	<script src="../js/jquery-1.11.1.min.js"></script>
        <script src="../js/holder.min.js"></script>
      <script src="../js/bootstrap.js"></script>
	<script src="../js/appmerk.js"></script>
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
                          <h2 class="titu-2 col-sm-3"><span class="glyphicon glyphicon-calendar"></span> Registro de clientes</h2>
          </header>

           <div class="col-xs-12 col-sm-12">
                    <?php
                    error_reporting(E_ALL);
                    ini_set('display_errors', '1');

                    // Conectamos a la Bse de Datos

                    $conecion = mysql_connect ('localhost','root','root') or die ("Problemas en la conexion");
                    mysql_select_db('sociamed', $conecion);

                    // Variables
                    $nomEmp = $_REQUEST ['empresa'];
                    $numNit = $_REQUEST ['nit'];
                    $dir = $_REQUEST ['direccion'];
                    $correo = $_REQUEST ['correo'];
                    $tel = $_REQUEST ['telefono'];
                    $nomCli = $_REQUEST ['nombre_cliente'];
                    $nomApe = $_REQUEST ['apellido_cliente'];
                    $cel = $_REQUEST ['celular'];

                    $sql  = ("INSERT INTO Clientes (empresa,nombre,apellido,nit,direccion,correo,telefono,celular)
                                                    VALUES   ('$nomEmp','$nomCli','$nomApe','$numNit','$dir','$correo',$tel,$cel)" );

                    mysql_query($sql, $conecion);

                    mysql_close($conecion);

                    ?>
          </div>
          </div>
          </div>
          </div>
      </div>
    </div>
</body>
</html>