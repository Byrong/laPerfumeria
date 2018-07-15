<h2>Nueva prueba</h2>
<?php
$conecion = mysql_connect('localhost','root','root') or die ("Problemas en la conexion");

mysql_select_db('sociamed', $conecion);

$TablaClientes = "CREATE TABLE Clientes (
          id_cliente INT AUTO_INCREMENT,
          PRIMARY KEY (id_cliente),
          empresa VARCHAR (30),
          nombre VARCHAR (30),
          apellido VARCHAR (30),
          nit INT (30),
          direccion VARCHAR (50),
          correo VARCHAR  (50),
          telefono INT (20),
          celular INT (20),
          creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )" ;

$TablaPlanes = "CREATE TABLE Planes (
          id_plan INT AUTO_INCREMENT,
          PRIMARY KEY (id_plan),
          nombre_plan VARCHAR (30),
          cantidad_post INT (30),
          tiempo_minimo VARCHAR (50),
          creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )" ;

$TablaRedes  = "CREATE TABLE Redes (
          id_redes INT AUTO_INCREMENT,
          PRIMARY KEY (id_redes),
          id_plan VARCHAR (30),
          visible VARCHAR (2),
          tid_red INT (50),
         creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )" ;

$TablaRed  = "CREATE TABLE Red (
          id_red INT AUTO_INCREMENT,
          PRIMARY KEY (id_red),
          nombre VARCHAR (30),
          creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )" ;

$Plan_Cliente  = "CREATE TABLE Plan_cliente (
          id_planes INT AUTO_INCREMENT,
          PRIMARY KEY (id_planes),
          id_cliente INT (30),
          id_plan INT (30),
          fecha_vecimiento INT (30),
          creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )" ;

$Post_Cliente  = "CREATE TABLE Post_cliente (
          id_post INT AUTO_INCREMENT,
          PRIMARY KEY (id_post),
          id_cliente INT (30),
          titulo VARCHAR (30),
          imagen VARCHAR (50),
          descripcion VARCHAR (50),
          aprobado VARCHAR (2),
          comentario VARCHAR (50),
          id_red INT (30),
          id_categoria INT (30),
          dia VARCHAR (30),
          semana INT (2),
          id_campana VARCHAR (50),
          creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )" ;

$Categoria_Cliente  = "CREATE TABLE Categoria_cliente (
          id_categoria INT AUTO_INCREMENT,
          PRIMARY KEY (id_categoria),
          id_cliente INT (30),
          nombre VARCHAR (30),
          visible VARCHAR (2),
          creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )" ;

$Campana  = "CREATE TABLE Campana (
          id_campana INT AUTO_INCREMENT,
          PRIMARY KEY (id_campana),
          nombre VARCHAR (50),
          descripcion VARCHAR (100),
          inicio DATE (20),
          fin DATE (20),
          creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )" ;

$insertar_Cliente  = ("INSERT INTO Clientes (empresa , cliente, nit ,direccion , correo , telefono , celular)     VALUES   ('Crear Estudios', 'Byron','1140823947','Cra 46 No. 65 - 120', 'gerencia@crearestudios.com','3766776','4061877' )" );

mysql_query($Post_Cliente, $conecion);
// mysql_query($Campana, $conecion);
// $TablaClientes  $TablaPlanes  $TablaRedes   $TablaRed   $Plan_Cliente  $Post_Cliente  $Categoria_Cliente $Campana
mysql_close($conecion);
?>

<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Sociamed 2</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/jquery.circliful.css" rel="stylesheet">
	<link href="css/appMerk.css" rel="stylesheet">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
	<script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/holder.min.js"></script>
        <script src="js/jquery.circliful.min.js"></script>
      <script src="js/bootstrap.js"></script>
	<script src="js/appmerk.js"></script>
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
              <img src="images/Crear_Estudios.png">
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
                          <h2 class="titu-2 col-sm-3"><span class="glyphicon glyphicon-calendar"></span> Programación 14/11/2014 al 19/11/2014</h2>
                                   <div class="btn-group  filtros pull-right">
                                                       <button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-bookmark">F</span></button>
                                                       <button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-bookmark">T</span></button>
                                                       <button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-bookmark">Y</span></button>
                                  </div>

          </header>

<!--[ Cronograma ]   -->

              <div class="col-xs-12 col-sm-2 box-cont">
                <h2 class="titu-4">Lunes</h2>
                <div class="box-post eFace">
                      <div class="msnRepor hover-1 col-xs-12">
                                        <label class="titu-2">Deje su observación </label><span class="glyphicon glyphicon-comment pull-right"> </span>
                                        <textarea class="box-msn" name="" id=""></textarea>
                                        <button type="button" class="btn btn-default btn-sm pull-right">
                                                <span class="glyphicon glyphicon-floppy-saved"></span> Guardar
                                      </button>
                                      <button type="button" class="btn btn-default btn-sm pull-left " onclick="cerrar('1')">
                                                <span class="glyphicon glyphicon-chevron-up"></span>
                                      </button>
                                      <div style="clear:both"></div>
                      </div>
                  <header>
                            <span  class="label label-face"> Facebook 01 </span>
                            <div class="aprobado pull-right">
                                    <span class="titu-1">Aprobado:</span>
                                  <div class="btn-group">
                                           <button type="button" class="btn btn-default btn-sm btn-aprobado">
                                            <span class="glyphicon glyphicon-ok"></span>
                                          </button>
                                          <button type="button" class="btn btn-default btn-sm btn-obser" onclick="observacion('1')">
                                            <span class="glyphicon glyphicon-remove"></span>
                                         </button>
                                 </div>
                            </div>
                  </header>
                  <figure class="img1"><img src="images/postFace4.png" alt="" style="width:100%"></figure>
                  <h3 class="titu-3"><span class="glyphicon glyphicon-bullhorn"></span> Tips de salud</h3>
                  <p class="par-1">
                    Lorem ipsum dolor sit amet, consectetur elit. Illo eum quisquam sequi fuga recusandae.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo eum quisquam sequi fuga recusandae.
                  </p>
              </div>

            <div class="box-post eFace">
                      <div class="msnRepor hover-2 col-xs-12">
                                        <label class="titu-2">Deje su observación </label><span class="glyphicon glyphicon-comment pull-right"> </span>
                                        <textarea class="box-msn" name="" id=""></textarea>
                                        <button type="button" class="btn btn-default btn-sm pull-right">
                                                <span class="glyphicon glyphicon-floppy-saved"></span> Guardar
                                      </button>
                                      <button type="button" class="btn btn-default btn-sm pull-left " onclick="cerrar('2')">
                                                <span class="glyphicon glyphicon-chevron-up"></span>
                                      </button>
                                      <div style="clear:both"></div>
                      </div>
                  <header>
                            <span  class="label label-face"> Facebook 01 </span>
                            <div class="aprobado pull-right">
                                    <span class="titu-1">Aprobado:</span>
                                  <div class="btn-group">
                                           <button type="button" class="btn btn-default btn-sm btn-aprobado">
                                            <span class="glyphicon glyphicon-ok"></span>
                                          </button>
                                          <button type="button" class="btn btn-default btn-sm btn-obser" onclick="observacion('2')">
                                            <span class="glyphicon glyphicon-remove"></span>
                                         </button>
                                 </div>
                            </div>
                  </header>
                          <figure class="img1"><img src="images/postFace4.png" alt="" style="width:100%"></figure>
                  <h3 class="titu-3"><span class="glyphicon glyphicon-bullhorn"></span> Tips de salud</h3>
                  <p class="par-1">
                    Lorem ipsum dolor sit amet, consectetur elit. Illo eum quisquam sequi fuga recusandae.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo eum quisquam sequi fuga recusandae.
                  </p>
              </div>

              </div>

              <div class="col-xs-12 col-sm-2 box-cont">
                <h2 class="titu-4">Martes</h2>
                <div class="box-post eTwee">
                      <div class="msnRepor hover-3 col-xs-12">
                                        <label class="titu-2">Deje su observación </label><span class="glyphicon glyphicon-comment pull-right"> </span>
                                        <textarea class="box-msn" name="" id=""></textarea>
                                        <button type="button" class="btn btn-default btn-sm pull-right">
                                                <span class="glyphicon glyphicon-floppy-saved"></span> Guardar
                                      </button>
                                      <button type="button" class="btn btn-default btn-sm pull-left " onclick="cerrar('3')">
                                                <span class="glyphicon glyphicon-chevron-up"></span>
                                      </button>
                                      <div style="clear:both"></div>
                      </div>
                  <header>
                            <span  class="label label-twee"> Twitter 01 </span>
                            <div class="aprobado pull-right">
                                    <span class="titu-1">Aprobado:</span>
                                   <div class="btn-group">
                                           <button type="button" class="btn btn-default btn-sm btn-aprobado">
                                            <span class="glyphicon glyphicon-ok"></span>
                                          </button>
                                          <button type="button" class="btn btn-default btn-sm btn-obser" onclick="observacion('3')">
                                            <span class="glyphicon glyphicon-remove"></span>
                                         </button>
                                 </div>
                            </div>
                  </header>
                          <figure class="img1"><img src="images/postFace4.png" alt="" style="width:100%"></figure>
                  <h3 class="titu-3"><span class="glyphicon glyphicon-bullhorn"></span> Tips de salud</h3>
                  <p class="par-1">
                    Lorem ipsum dolor sit amet, consectetur elit. Illo eum quisquam sequi fuga recusandae.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo eum quisquam sequi fuga recusandae.
                  </p>
              </div>

            <div class="box-post eTwee">
                      <div class="msnRepor hover-4 col-xs-12">
                                        <label class="titu-2">Deje su observación </label><span class="glyphicon glyphicon-comment pull-right"> </span>
                                        <textarea class="box-msn" name="" id=""></textarea>
                                        <button type="button" class="btn btn-default btn-sm pull-right">
                                                <span class="glyphicon glyphicon-floppy-saved"></span> Guardar
                                      </button>
                                      <button type="button" class="btn btn-default btn-sm pull-left " onclick="cerrar('4')">
                                                <span class="glyphicon glyphicon-chevron-up"></span>
                                      </button>
                                      <div style="clear:both"></div>
                      </div>
                  <header>
                            <span  class="label label-twee"> Twitter 02 </span>
                            <div class="aprobado pull-right">
                                    <span class="titu-1">Aprobado:</span>
                                   <div class="btn-group">
                                           <button type="button" class="btn btn-default btn-sm btn-aprobado">
                                            <span class="glyphicon glyphicon-ok"></span>
                                          </button>
                                          <button type="button" class="btn btn-default btn-sm btn-obser" onclick="observacion('4')">
                                            <span class="glyphicon glyphicon-remove"></span>
                                         </button>
                                 </div>
                            </div>
                  </header>
                  <figure class="img1"><img src="images/postFace4.png" alt="" ></figure>
                  <h3 class="titu-3"><span class="glyphicon glyphicon-bullhorn"></span> Tips de salud</h3>
                  <p class="par-1">
                    Lorem ipsum dolor sit amet, consectetur elit. Illo eum quisquam sequi fuga recusandae.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo eum quisquam sequi fuga recusandae.
                  </p>
              </div>

              </div>

              <div class="col-xs-12 col-sm-2 box-cont">
                <h2 class="titu-4">Miercoles</h2>
                <div class="box-post  eYoutube">
                      <div class="msnRepor hover-5 col-xs-12">
                                        <label class="titu-2">Deje su observación </label><span class="glyphicon glyphicon-comment pull-right"> </span>
                                        <textarea class="box-msn" name="" id=""></textarea>
                                        <button type="button" class="btn btn-default btn-sm pull-right">
                                                <span class="glyphicon glyphicon-floppy-saved"></span> Guardar
                                      </button>
                                      <button type="button" class="btn btn-default btn-sm pull-left " onclick="cerrar('5')">
                                                <span class="glyphicon glyphicon-chevron-up"></span>
                                      </button>
                                      <div style="clear:both"></div>
                      </div>
                  <header>
                            <span  class="label label-youtube"> Youtube 01 </span>
                            <div class="aprobado pull-right">
                                    <span class="titu-1">Aprobado:</span>
                                 <div class="btn-group">
                                           <button type="button" class="btn btn-default btn-sm btn-aprobado">
                                            <span class="glyphicon glyphicon-ok"></span>
                                          </button>
                                          <button type="button" class="btn btn-default btn-sm btn-obser" onclick="observacion('5')">
                                            <span class="glyphicon glyphicon-remove"></span>
                                         </button>
                                 </div>
                            </div>
                  </header>
                  <figure class="img1"><img src="images/postFace4.png" alt="" ></figure>
                  <h3 class="titu-3"><span class="glyphicon glyphicon-bullhorn"></span> Tips de salud</h3>
                  <p class="par-1">
                    Lorem ipsum dolor sit amet, consectetur elit. Illo eum quisquam sequi fuga recusandae.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo eum quisquam sequi fuga recusandae.
                  </p>
              </div>

            <div class="box-post  eYoutube">
                      <div class="msnRepor hover-6 col-xs-12">
                                        <label class="titu-2">Deje su observación </label><span class="glyphicon glyphicon-comment pull-right"> </span>
                                        <textarea class="box-msn" name="" id=""></textarea>
                                        <button type="button" class="btn btn-default btn-sm pull-right">
                                                <span class="glyphicon glyphicon-floppy-saved"></span> Guardar
                                      </button>
                                      <button type="button" class="btn btn-default btn-sm pull-left " onclick="cerrar('6')">
                                                <span class="glyphicon glyphicon-chevron-up"></span>
                                      </button>
                                      <div style="clear:both"></div>
                      </div>
                  <header>
                            <span  class="label label-youtube"> Youtube 02 </span>
                            <div class="aprobado pull-right">
                                    <span class="titu-1">Aprobado:</span>
                                 <div class="btn-group">
                                           <button type="button" class="btn btn-default btn-sm btn-aprobado">
                                            <span class="glyphicon glyphicon-ok"></span>
                                          </button>
                                          <button type="button" class="btn btn-default btn-sm btn-obser" onclick="observacion('6')">
                                            <span class="glyphicon glyphicon-remove"></span>
                                         </button>
                                 </div>
                            </div>
                  </header>
                  <figure class="img1"><img src="images/postFace4.png" alt="" ></figure>
                  <h3 class="titu-3"><span class="glyphicon glyphicon-bullhorn"></span> Tips de salud</h3>
                  <p class="par-1">
                    Lorem ipsum dolor sit amet, consectetur elit. Illo eum quisquam sequi fuga recusandae.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo eum quisquam sequi fuga recusandae.
                  </p>
              </div>

              </div>

              <div class="col-xs-12 col-sm-2 box-cont">
                <h2 class="titu-4">Jueves</h2>
                <div class="box-post eFace">
                      <div class="msnRepor hover-7 col-xs-12">
                                        <label class="titu-2">Deje su observación </label><span class="glyphicon glyphicon-comment pull-right"> </span>
                                        <textarea class="box-msn" name="" id=""></textarea>
                                        <button type="button" class="btn btn-default btn-sm pull-right">
                                                <span class="glyphicon glyphicon-floppy-saved"></span> Guardar
                                      </button>
                                      <button type="button" class="btn btn-default btn-sm pull-left " onclick="cerrar('7')">
                                                <span class="glyphicon glyphicon-chevron-up"></span>
                                      </button>
                                      <div style="clear:both"></div>
                      </div>
                  <header>
                            <span  class="label label-face"> Facebook 01 </span>
                            <div class="aprobado pull-right">
                                    <span class="titu-1">Aprobado:</span>
                                  <div class="btn-group">
                                           <button type="button" class="btn btn-default btn-sm btn-aprobado">
                                            <span class="glyphicon glyphicon-ok"></span>
                                          </button>
                                          <button type="button" class="btn btn-default btn-sm btn-obser" onclick="observacion('7')">
                                            <span class="glyphicon glyphicon-remove"></span>
                                         </button>
                                 </div>
                            </div>
                  </header>
                  <figure class="img1"><img src="images/postFace4.png" alt="" ></figure>
                  <h3 class="titu-3"><span class="glyphicon glyphicon-bullhorn"></span> Tips de salud</h3>
                  <p class="par-1">
                    Lorem ipsum dolor sit amet, consectetur elit. Illo eum quisquam sequi fuga recusandae.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo eum quisquam sequi fuga recusandae.
                  </p>
              </div>

            <div class="box-post eFace">
                      <div class="msnRepor hover-8 col-xs-12">
                                        <label class="titu-2">Deje su observación </label><span class="glyphicon glyphicon-comment pull-right"> </span>
                                        <textarea class="box-msn" name="" id=""></textarea>
                                        <button type="button" class="btn btn-default btn-sm pull-right">
                                                <span class="glyphicon glyphicon-floppy-saved"></span> Guardar
                                      </button>
                                      <button type="button" class="btn btn-default btn-sm pull-left " onclick="cerrar('8')">
                                                <span class="glyphicon glyphicon-chevron-up"></span>
                                      </button>
                                      <div style="clear:both"></div>
                      </div>
                  <header>
                            <span  class="label label-face"> Facebook 01 </span>
                            <div class="aprobado pull-right">
                                    <span class="titu-1">Aprobado:</span>
                                  <div class="btn-group">
                                           <button type="button" class="btn btn-default btn-sm btn-aprobado">
                                            <span class="glyphicon glyphicon-ok"></span>
                                          </button>
                                          <button type="button" class="btn btn-default btn-sm btn-obser" onclick="observacion('8')">
                                            <span class="glyphicon glyphicon-remove"></span>
                                         </button>
                                 </div>
                            </div>
                  </header>
                  <figure class="img1"><img src="images/postFace4.png" alt="" ></figure>
                  <h3 class="titu-3"><span class="glyphicon glyphicon-bullhorn"></span> Tips de salud</h3>
                  <p class="par-1">
                    Lorem ipsum dolor sit amet, consectetur elit. Illo eum quisquam sequi fuga recusandae.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo eum quisquam sequi fuga recusandae.
                  </p>
              </div>

              </div>

              <div class="col-xs-12 col-sm-2 box-cont">
                <h2 class="titu-4">Viernes</h2>
                <div class="box-post eFace">
                      <div class="msnRepor hover-9 col-xs-12">
                                        <label class="titu-2">Deje su observación </label><span class="glyphicon glyphicon-comment pull-right"> </span>
                                        <textarea class="box-msn" name="" id=""></textarea>
                                        <button type="button" class="btn btn-default btn-sm pull-right">
                                                <span class="glyphicon glyphicon-floppy-saved"></span> Guardar
                                      </button>
                                      <button type="button" class="btn btn-default btn-sm pull-left " onclick="cerrar('9')">
                                                <span class="glyphicon glyphicon-chevron-up"></span>
                                      </button>
                                      <div style="clear:both"></div>
                      </div>
                  <header>
                            <span  class="label label-face"> Facebook 01 </span>
                            <div class="aprobado pull-right">
                                    <span class="titu-1">Aprobado:</span>
                                  <div class="btn-group">
                                           <button type="button" class="btn btn-default btn-sm btn-aprobado">
                                            <span class="glyphicon glyphicon-ok"></span>
                                          </button>
                                          <button type="button" class="btn btn-default btn-sm btn-obser" onclick="observacion('9')">
                                            <span class="glyphicon glyphicon-remove"></span>
                                         </button>
                                 </div>
                            </div>
                  </header>
                  <figure class="img1"><img src="images/postFace4.png" alt="" ></figure>
                  <h3 class="titu-3"><span class="glyphicon glyphicon-bullhorn"></span> Tips de salud</h3>
                  <p class="par-1">
                    Lorem ipsum dolor sit amet, consectetur elit. Illo eum quisquam sequi fuga recusandae.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo eum quisquam sequi fuga recusandae.
                  </p>
              </div>

            <div class="box-post eFace">
                      <div class="msnRepor hover-10 col-xs-12">
                                        <label class="titu-2">Deje su observación </label><span class="glyphicon glyphicon-comment pull-right"> </span>
                                        <textarea class="box-msn" name="" id=""></textarea>
                                        <button type="button" class="btn btn-default btn-sm pull-right">
                                                <span class="glyphicon glyphicon-floppy-saved"></span> Guardar
                                      </button>
                                      <button type="button" class="btn btn-default btn-sm pull-left " onclick="cerrar('10')">
                                                <span class="glyphicon glyphicon-chevron-up"></span>
                                      </button>
                                      <div style="clear:both"></div>
                      </div>
                  <header>
                            <span  class="label label-face"> Facebook 01 </span>
                            <div class="aprobado pull-right">
                                    <span class="titu-1">Aprobado:</span>
                                  <div class="btn-group">
                                           <button type="button" class="btn btn-default btn-sm btn-aprobado">
                                            <span class="glyphicon glyphicon-ok"></span>
                                          </button>
                                          <button type="button" class="btn btn-default btn-sm btn-obser" onclick="observacion('10')">
                                            <span class="glyphicon glyphicon-remove"></span>
                                         </button>
                                 </div>
                            </div>
                  </header>
                  <figure class="img1"><img src="images/postFace4.png" alt="" ></figure>
                  <h3 class="titu-3"><span class="glyphicon glyphicon-bullhorn"></span> Tips de salud</h3>
                  <p class="par-1">
                    Lorem ipsum dolor sit amet, consectetur elit. Illo eum quisquam sequi fuga recusandae.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo eum quisquam sequi fuga recusandae.
                  </p>
              </div>

              </div>

        </div>
          </div>
      </div>
    </div>
  <script>

/*
$( window ).resize(function() {
                       location.reload();
});
*/
</script>
</body>
</html>
