<?php
  require_once '../Twig/Autoloader.php';

  Twig_Autoloader::register();
  $loader = new Twig_Loader_Filesystem('../templates/backend');
  $twig = new Twig_Environment($loader, array(
        'cache' => 'cache',
        'debug' => 'true'
));

$template = $twig->loadTemplate('app.twig.html');
// Cod-bg


// Cod-bg
 include "conecion.php";
  mysql_select_db('perfumeria', $conecion);
  mysql_set_charset('utf8');

$consulta_Aroma    = "SELECT Aroma.idAroma, 
			Aroma.nombre, 
			Aroma.sexo, 
			Aroma.celular, 
			Aroma.correo, 
			Aroma.ciudad, 
			Aroma.registro, 
			Aroma.estado
		FROM Aroma
                             " ;
$resultado  = mysql_query($consulta_Aroma , $conecion);

  // Consulta Post

  // Creamos una variable tipo Array $datos
  $datos = false;
  // Declaramos la variable $cont en 0 para poder inicializar nuestro contador $cont++
  $cont = 0;
  // Dentro de el bucle While recojemos la base de datos
  while ($fila= mysql_fetch_array($resultado )) {
  // Descomponemos nuestro Array en Objetos
                              $datos [$cont]->id= $fila['idAroma'];
                              $datos [$cont]->nombre= $fila['nombre'];
                              $datos [$cont]->sexo= $fila['sexo'];
                              $datos [$cont]->celular= $fila['celular'];
                              $datos [$cont]->correo= $fila['correo'];
                              $datos [$cont]->ciudad= $fila['ciudad'];
                              $datos [$cont]->fecha= $fila['registro'];
                               $cont++;
  }

mysql_close($conecion);
	//printVar($datos, 'Datos Aroma');
echo $template->render(array('datos' => $datos));