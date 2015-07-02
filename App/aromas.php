<?php
// LLamamos a Twig
  require_once 'Twig/Autoloader.php';
  Twig_Autoloader::register();
  $loader = new Twig_Loader_Filesystem('templates');

  $twig = new Twig_Environment($loader, array(
                 'cache' => 'cache',
                 'debug' => 'true'));

  $template = $twig->loadTemplate('verAromas.twig.html');

// Cod-bg
 include "admin/conecion.php";

mysql_select_db('perfumeria', $conecion);

$consulta_Aroma    = "SELECT Aroma.id,
                            Aroma.nomAroma,
                            Aroma.sexo,
                            Aroma.edad,
                            Aroma.ciudad,
                            Servicio.orientacionSexual,
                            Servicio.sexoOral,
                            Servicio.sexoOral2,
                            Servicio.sexoAnal,
                            Servicio.baileErotico,
                            Aroma.nombre,
                            Aroma.estatura,
                            Aroma.cabello,
                            Aroma.busto,
                            Aroma.ojos,
                            Aroma.piel,
                            Aroma.caderas,
                            Aroma.idiomas,
                            Aroma.tatuajes,
                            Aroma.foto1,
                            Aroma.foto2,
                            Aroma.foto3,
                            Aroma.foto4,
                            Servicio.conMujeres,
                            Servicio.conParejas,
                            Servicio.trioHMH,
                            Servicio.jugetes,
                            Servicio.trioMHM,
                            Servicio.despedidaSoltero,
                            Servicio.lluviaDorada,
                            Tarifa.hora1,
                            Tarifa.hora2,
                            Tarifa.hora3,
                            Tarifa.dia,
                            Tarifa.encuentro
                          FROM Aroma INNER JOIN Servicio ON Aroma.idAroma = Servicio.idAroma
                             INNER JOIN Tarifa ON Servicio.idAroma = Tarifa.idAroma
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
                              $datos [$cont]->id= $fila['id'];
                              $datos [$cont]->aroma= $fila['nomAroma'];
                              $datos [$cont]->imagen= $fila['foto1'];
                              $datos [$cont]->edad= $fila['edad'];
                              $datos [$cont]->orientacion= $fila['orientacionSexual'];
                              $datos [$cont]->sexoOral= $fila['sexoOral'];
                              $datos [$cont]->sexoOral2= $fila['sexoOral2'];
                              $datos [$cont]->sexoAnal= $fila['sexoAnal'];
                              $datos [$cont]->baile= $fila['baileErotico'];
                              $datos [$cont]->estatura= $fila['estatura'];
                              $datos [$cont]->cabello= $fila['cabello'];
                              $datos [$cont]->busto= $fila['busto'];
                              $datos [$cont]->ojos= $fila['ojos'];
                              $datos [$cont]->ciudad= $fila['ciudad'];
                               $cont++;
  }

mysql_close($conecion);
printVar($datos,'consulta Aromas');
// Usamos un array para mostrar los datos
  echo $template->render(array('datos' => $datos));