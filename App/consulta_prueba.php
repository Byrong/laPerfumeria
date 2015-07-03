<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Consulta Prueba</title>
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
        <script>
                      function realizaProceso(data){
                              var parametros = {
                                      "verAroma" : data,
                              };
                              $.ajax({
                                      data:  parametros,
                                      url:   'ejemplo_ajax_proceso.php',
                                      type:  'post',
                                      beforeSend: function () {
                                              $("#resultado").html("Procesando, espere por favor...");
                                      },
                                      success:  function (response) {
                                              $("#resultado").html(response);
                                      }
                              });
                      }
        </script>
</head>
<body>
        <div class="row">
          <div class="cont-ajax">
            <h3>Contenido Ajax</h3>
           Buscar Aroma:
          <input type="text" name="caja_texto" id="verAroma" value="0"/>
          <input type="button" href="javascript:;" onclick="realizaProceso($('#verAroma').val());return false;" value="Calcula"/>
        <br/>
        Resultado: <span id="resultado">0</span>
        </div>
<?php
// Activar errores
	ini_set('display_errors', 'On');
	ini_set('display_errors', 1);
?>
             </div>



</body>
</html>