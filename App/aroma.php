<?php
// LLamamos a Twig
  require_once 'Twig/Autoloader.php';
  Twig_Autoloader::register();
  $loader = new Twig_Loader_Filesystem('templates');

  $twig = new Twig_Environment($loader, array(
                 'cache' => 'cache',
                 'debug' => 'true'));

  $template = $twig->loadTemplate('verAroma.twig.html');

// Cod-bg
include "admin/conecion.php";

//mysql_select_db('desarrp0_perfumeria', $conecion);
mysql_select_db('perfumeria', $conecion);
mysql_set_charset('utf8');


$aroma=$_GET['aroma'];
$consulta_Aroma    = "SELECT Aroma.idAroma,
                                        Aroma.ciudad, 
                                        Perfil_Aroma.nomAroma, 
                                        Perfil_Aroma.edad, 
                                        Perfil_Aroma.peso, 
                                        Perfil_Aroma.estatura, 
                                        Perfil_Aroma.busto, 
                                        Perfil_Aroma.colPiel, 
                                        Perfil_Aroma.colOjos, 
                                        Perfil_Aroma.colCabello, 
                                        Perfil_Aroma.colFavorito, 
                                        Perfil_Aroma.idiomas, 
                                        Perfil_Aroma.tatuajes, 
                                        Perfil_Aroma.operaciones, 
                                        Operacion.nariz, 
                                        Operacion.labios, 
                                        Operacion.senos, 
                                        Operacion.abdomen, 
                                        Operacion.cola, 
                                        Servicio_Aroma.sexOral, 
                                        Servicio_Aroma.sexAnal, 
                                        Servicio_Aroma.sexHombre, 
                                        Servicio_Aroma.sexMujer, 
                                        Servicio_Aroma.trio, 
                                        Servicio_Aroma.trioHMH, 
                                        Servicio_Aroma.trioMHM, 
                                        Servicio_Aroma.lluviaDorada, 
                                        Servicio_Aroma.viaja, 
                                        Servicio_Aroma.baile, 
                                        Servicio_Aroma.masaje, 
                                        Servicio_Aroma.encuentro, 
                                        Tarifa_Aroma.valorHora, 
                                        Tarifa_Aroma.valor2Hora, 
                                        Tarifa_Aroma.valor3Hora, 
                                        Tarifa_Aroma.valorDia, 
                                        Foto_Aroma.foto1, 
                                        Foto_Aroma.foto2, 
                                        Foto_Aroma.foto3, 
                                        Foto_Aroma.foto4
                                      FROM Aroma INNER JOIN Perfil_Aroma ON Aroma.idAroma = Perfil_Aroma.idAroma
                                         INNER JOIN Servicio_Aroma ON Aroma.idAroma = Servicio_Aroma.idAroma
                                         INNER JOIN Tarifa_Aroma ON Servicio_Aroma.idAroma = Tarifa_Aroma.idAroma
                                         INNER JOIN Operacion ON Perfil_Aroma.idAroma = Operacion.idAroma
                                         INNER JOIN Foto_Aroma ON Perfil_Aroma.idAroma = Foto_Aroma.idAroma
                             WHERE Aroma.idAroma = $aroma
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
                              $datos [$cont]->id= $fila['idAromas'];
                              $datos [$cont]->aroma= $fila['nomAroma'];
                              $datos [$cont]->edad= $fila['edad'];
                              $datos [$cont]->peso= $fila['peso'];
                              $datos [$cont]->estatura= $fila['estatura'];
                              $datos [$cont]->busto= $fila['busto'];
                              $datos [$cont]->colorPiel= $fila['colPiel'];
                              $datos [$cont]->ojos= $fila['colOjos'];
                              $datos [$cont]->cabello= $fila['colCabello'];
                              $datos [$cont]->idiomas= $fila['idiomas'];
                              $datos [$cont]->tatuajes= $fila['tatuajes'];
                              $datos [$cont]->operaciones= $fila['operaciones'];
                              $datos [$cont]->nariz= $fila['nariz'];
                              $datos [$cont]->labios= $fila['labios'];
                              $datos [$cont]->senos= $fila['senos'];
                              $datos [$cont]->abdomen= $fila['abdomen'];
                              $datos [$cont]->cola= $fila['cola'];
                              $datos [$cont]->sexoOral= $fila['sexOral'];
                              $datos [$cont]->sexoAnal= $fila['sexAnal'];
                              $datos [$cont]->conHombre= $fila['sexHombre'];
                              $datos [$cont]->conMujer= $fila['sexMujer'];
                              $datos [$cont]->trio= $fila['trio'];
                              $datos [$cont]->trioHMH= $fila['trioHMH'];
                              $datos [$cont]->trioMHM= $fila['trioMHM'];
                              $datos [$cont]->lluvia= $fila['lluviaDorada'];
                              $datos [$cont]->viaja= $fila['viaja'];
                              $datos [$cont]->baile= $fila['baile'];
                              $datos [$cont]->masaje= $fila['masaje'];
                              $datos [$cont]->encuentro= $fila['encuentro'];
                              $datos [$cont]->ciudad= $fila['ciudad'];
                              $datos [$cont]->hora1= $fila['valorHora'];
                              $datos [$cont]->hora2= $fila['valor2Hora'];
                              $datos [$cont]->hora3= $fila['valor3Hora'];
                              $datos [$cont]->dia= $fila['valorDia'];
                              $datos [$cont]->imagen= $fila['foto1'];
                              $datos [$cont]->imagen2= $fila['foto2'];
                              $datos [$cont]->imagen3= $fila['foto3'];
                              $datos [$cont]->imagen4= $fila['foto4'];
                               $cont++;
  }

mysql_close($conecion);
printVar($datos,'consulta Aroma');
// Usamos un array para mostrar los datos
  echo $template->render(array('datos' => $datos));