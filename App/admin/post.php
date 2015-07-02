<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro Post</title>
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
                          <h2 class="titu-2 col-sm-3"><span class="glyphicon glyphicon-calendar"></span> Registro de Post</h2>
          </header>

           <div class="col-xs-12 col-sm-12">
            <form class="form-1" action="reg_post.php" method="POST" enctype="multipart/form-data">
                       <span class='titu-form'>Empresa:</span>
                       <select class='select-1' name='empresa'>
                              <option value="">Seleccione una Empresa</option>
                              <option value="1">Crear Estudios</option>
                              <option value="2">Movistar</option>
                              <option value="3">Centro Neurologico del Norte</option>
                      </select>
                       <span class='titu-form'>Campaña: </span>
                         <select class='select-1' name='campana'>
                              <option value="">Seleccione una Campaña</option>
                              <option value="1">Campana 1</option>
                              <option value="2">Campana 2</option>
                              <option value="3">Campana 3</option>
                      </select> <br>
                       <span class='titu-form'>Tipo:</span>
                       <select class='select-1' name='categoria'>
                              <option value="">Seleccione un tipo de Post</option>
                              <option value="1">Contenido en blanco</option>
                              <option value="2">Activa tu mente</option>
                              <option value="3">Mi Botiquitn</option>
                              <option value="4">Promocional</option>
                      </select>
                      <span class='titu-form'>Red:</span>
                       <input class="" type='checkbox' name='red' value='1'> <span class='titu-2'>Facebook</span>
                       <input class="" type='checkbox' name='red' value='2'>  <span class='titu-2'>Twitter</span>
                       <input class="" type='checkbox' name='red' value='3'> <span class='titu-2'>Youtube</span> <br>
                       <span class='titu-form'>Titulo:</span>  <input class="input-1" type='text' name='titulo' placeholder='Titulo del post'><br>
                       <span class='titu-form'>Imagen:</span>   <input class="input-2" type='file' name='imagen'><br>
                       <span class='titu-form'>Descripción:</span><br>
                       <textarea class="textarea-1" name='descripcion'></textarea><br>
                       <span class='titu-form-2'>Día de publicación</span>
                       <select class='select-1' name="dia">
                                <option value="lunes">Lunes</option>
                                <option value="martes">Martes</option>
                                <option value="miercoles">Miercoles</option>
                                <option value="jueves">Jueves</option>
                                <option value="viernes">Viernes</option>
                       </select>
                       <span class='titu-form-2'>Semana:</span>
                       <select class='select-1' name="semana">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                       </select>
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