<?php

$solicitud = $_REQUEST['id'];

require_once '../Twig/Autoloader.php';

  Twig_Autoloader::register();
  $loader = new Twig_Loader_Filesystem('../templates/backend');
  $twig = new Twig_Environment($loader, array(
        'cache' => 'cache',
        'debug' => 'true'
));

$template = $twig->loadTemplate('datosSolicitudes.twig.html');
// Cod-bg
  include "conecion.php";
  mysql_select_db('perfumeria', $conecion);
  mysql_set_charset('utf8');

$consulta_Aroma    = "SELECT Aroma.idAroma, 
                              Aroma.nombre, 
                              Aroma.sexo, 
                              Aroma.correo, 
                              Aroma.celular, 
                              Aroma.ciudad, 
                              Aroma.registro, 
                              Perfil_Aroma.soy, 
                              Perfil_Aroma.edad, 
                              Perfil_Aroma.estatura, 
                              Perfil_Aroma.colOjos, 
                              Perfil_Aroma.colPiel, 
                              Perfil_Aroma.operaciones, 
                              Operacion.nariz, 
                              Operacion.labios, 
                              Operacion.senos, 
                              Operacion.abdomen, 
                              Operacion.cola, 
                              Perfil_Aroma.colFavorito, 
                              Perfil_Aroma.cumple, 
                              Perfil_Aroma.peso, 
                              Perfil_Aroma.busto, 
                              Perfil_Aroma.colCabello, 
                              Perfil_Aroma.tatuajes, 
                              Perfil_Aroma.idiomas, 
                              Perfil_Aroma.actividadSexual, 
                              Perfil_Aroma.sexoEs, 
                              Perfil_Aroma.experiencia, 
                              Perfil_Aroma.tiempoExperiencia, 
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
                              Fuera_Servicio.desde, 
                              Fuera_Servicio.hasta
                            FROM Aroma INNER JOIN Perfil_Aroma ON Aroma.idAroma = Perfil_Aroma.idAroma
                               INNER JOIN Operacion ON Operacion.idAroma = Perfil_Aroma.idAroma
                               INNER JOIN Servicio_Aroma ON Perfil_Aroma.idAroma = Servicio_Aroma.idAroma
                               INNER JOIN Fuera_Servicio ON Servicio_Aroma.idAroma = Fuera_Servicio.idAroma
                             WHERE Aroma.idAroma = $solicitud" ;

$resultado  = mysql_query($consulta_Aroma , $conecion);

  // Consulta Post

  // Creamos una variable tipo Array $verSolicitud
  $verSolicitud = false;
  // Declaramos la variable $cont en 0 para poder inicializar nuestro contador $cont++
  $cont = 0;
// Creamos un array con los meses en español para poderlos mostrar
  $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
  // Dentro de el bucle While recojemos la base de verSolicitud
  while ($fila= mysql_fetch_array($resultado )) {
  // Descomponemos nuestro Array en Objetos
                              $verSolicitud[$cont] = new StdClass;
                              $verSolicitud [$cont]->id= $fila['idAroma'];
                              $verSolicitud [$cont]->nombre= $fila['nombre'];
                              $verSolicitud [$cont]->sexo= $fila['sexo'];
                              $verSolicitud [$cont]->celular= $fila['celular'];
                              $verSolicitud [$cont]->correo= $fila['correo'];
                              $verSolicitud [$cont]->ciudad= $fila['ciudad'];
                              $verSolicitud [$cont]->descripcion= $fila['soy'];
                              $verSolicitud [$cont]->edad= $fila['edad'];
                              $verSolicitud [$cont]->estatura= $fila['estatura'];
                              $verSolicitud [$cont]->ojos= $fila['colOjos'];
                              $verSolicitud [$cont]->pielº= $fila['colPiel'];
                              $verSolicitud [$cont]->operaciones= $fila['operaciones'];
                              $verSolicitud [$cont]->nariz= $fila['nariz'];
                              $verSolicitud [$cont]->labios= $fila['labios'];
                              $verSolicitud [$cont]->senos= $fila['senos'];
                              $verSolicitud [$cont]->abdomen= $fila['abdomen'];
                              $verSolicitud [$cont]->cola= $fila['cola'];
                              $verSolicitud [$cont]->colFavorito= $fila['colFavorito'];
                              $verSolicitud [$cont]->cumple= $fila['cumple'];
                              $verSolicitud [$cont]->peso= $fila['peso'];
                              $verSolicitud [$cont]->senos= $fila['busto'];
                              $verSolicitud [$cont]->cabello= $fila['colCabello'];
                              $verSolicitud [$cont]->tatuajes= $fila['tatuajes'];
                              $verSolicitud [$cont]->idiomas= $fila['idiomas'];
                              $verSolicitud [$cont]->actividadSexual= $fila['actividadSexual'];
                              $verSolicitud [$cont]->sexoEs= $fila['sexoEs'];
                              $verSolicitud [$cont]->experiencia= $fila['experiencia'];
                              $verSolicitud [$cont]->tiempo= $fila['tiempoExperiencia'];
                              $verSolicitud [$cont]->sexOral= $fila['sexOral'];
                              $verSolicitud [$cont]->sexAnal= $fila['sexAnal'];
                              $verSolicitud [$cont]->sexHombre= $fila['sexHombre'];
                              $verSolicitud [$cont]->sexMujer= $fila['sexMujer'];
                              $verSolicitud [$cont]->trios= $fila['trio'];
                              $verSolicitud [$cont]->trioHMH= $fila['trioHMH'];
                              $verSolicitud [$cont]->trioMHM= $fila['trioMHM'];
                              $verSolicitud [$cont]->lluviaDorada= $fila['lluviaDorada'];
                              $verSolicitud [$cont]->viaja= $fila['viaja'];
                              $verSolicitud [$cont]->baile= $fila['baile'];
                              $verSolicitud [$cont]->masaje= $fila['masaje'];
                              $verSolicitud [$cont]->encuentro= $fila['encuentro'];
                              $verSolicitud [$cont]->desde= $fila['desde'];
                              $verSolicitud [$cont]->hasta= $fila['hasta'];
                          // Desarmamos la cadena registro y separamos los verSolicitud por año, mes y día. excluimos el signo -
                              $fecha = $verSolicitud [$cont]->registro=$fila['registro'];
                              list($ano,$mes,$dia) = split( '[/.-]', $fecha);
                              $verSolicitud [$cont]->fecha= date("$dia")." de ".$meses[date("$mes")-1]. " del ".date("$ano");
                              $cont++;
  }

  //printVar($verSolicitud,'consulta Aroma');
  mysql_close($conecion);
echo $template->render(array('verSolicitud' => $verSolicitud));                       
?>