<?php
// LLamamos a Twig
  require_once 'Twig/Autoloader.php';
  Twig_Autoloader::register();
  $loader = new Twig_Loader_Filesystem('templates');

  $twig = new Twig_Environment($loader, array(
                 'cache' => 'cache',
                 'debug' => 'true'));

  $template = $twig->loadTemplate('index.twig.html');

// Cod-bg
 include "admin/conecion.php";
  mysql_select_db('perfumeria', $conecion);
  mysql_set_charset('utf8');

$consulta_Aroma    = "SELECT Aroma.idAroma, 
                              Aroma.ciudad, 
                              Perfil_Aroma.nomAroma, 
                              Foto_Aroma.foto1
                            FROM Aroma INNER JOIN Perfil_Aroma ON Aroma.idAroma = Perfil_Aroma.idAroma
                               INNER JOIN Foto_Aroma ON Perfil_Aroma.idAroma = Foto_Aroma.idAroma ORDER BY rand()
                             #WHERE Post_cliente.dia = 'viernes'
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
                              $datos [$cont]->aroma= $fila['nomAroma'];
                              $datos [$cont]->imagen= $fila['foto1'];
                              $datos [$cont]->ciudad= $fila['ciudad'];
                               $cont++;
  }

mysql_close($conecion);
//printVar($datos,'consulta Aromas');
// Usamos un array para mostrar los datos
  echo $template->render(array('datos' => $datos));