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
		FROM Aroma" ;

$resultado  = mysql_query($consulta_Aroma , $conecion);

  // Consulta Post

  // Creamos una variable tipo Array $datos
  $datos = false;
  // Declaramos la variable $cont en 0 para poder inicializar nuestro contador $cont++
  $cont = 0;
// Creamos un array con los meses en español para poderlos mostrar
  $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
  // Dentro de el bucle While recojemos la base de datos
  while ($fila= mysql_fetch_array($resultado )) {
  // Descomponemos nuestro Array en Objetos
  			$datos[$cont] = new StdClass;
                              $datos [$cont]->id= $fila['idAroma'];
                              $datos [$cont]->nombre= $fila['nombre'];
                              $datos [$cont]->sexo= $fila['sexo'];
                              $datos [$cont]->celular= $fila['celular'];
                              $datos [$cont]->correo= $fila['correo'];
                              $datos [$cont]->ciudad= $fila['ciudad'];
  // Desarmamos la cadena registro y separamos los datos por año, mes y día. excluimos el signo -
  			$fecha = $datos [$cont]->registro=$fila['registro'];
  			list($ano,$mes,$dia) = split( '[/.-]', $fecha);
			$datos [$cont]->fecha= date("$dia")." de ".$meses[date("$mes")-1]. " del ".date("$ano");
                              $cont++;
  }
                             

mysql_close($conecion);
echo $template->render(array('datos' => $datos));