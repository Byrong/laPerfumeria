<?php

$aromaSeleccionada = $_GET ['aroma'];

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
  mysql_select_db('perfumeria', $conecion);
  mysql_set_charset('utf8');

	$aroma    = "SELECT Aroma.idAroma, 
			Aroma.sexo, 
			Aroma.ciudad, 
			Perfil_Aroma.nomAroma, 
			Perfil_Aroma.edad, 
			Perfil_Aroma.peso, 
			Perfil_Aroma.estatura, 
			Perfil_Aroma.busto, 
			Perfil_Aroma.colPiel, 
			Perfil_Aroma.colOjos, 
			Perfil_Aroma.colCabello, 
			Perfil_Aroma.idiomas, 
			Perfil_Aroma.tatuajes, 
			Perfil_Aroma.operaciones, 
			Operacion.nariz, 
			Operacion.labios, 
			Operacion.senos, 
			Operacion.abdomen, 
			Operacion.cola, 
			Operacion.registro, 
			Servicio_Aroma.sexOral, 
			Servicio_Aroma.sexAnal, 
			Servicio_Aroma.sexHombre, 
			Servicio_Aroma.sexMujer, 
			Servicio_Aroma.trio, 
			Servicio_Aroma.trioHMH, 
			Servicio_Aroma.trioMHM, 
			Servicio_Aroma.lluviaDorada, 
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
			 INNER JOIN Operacion ON Perfil_Aroma.idAroma = Operacion.idAroma
			 INNER JOIN Servicio_Aroma ON Perfil_Aroma.idAroma = Servicio_Aroma.idAroma
			 INNER JOIN Foto_Aroma ON Perfil_Aroma.idAroma = Foto_Aroma.idAroma
			 INNER JOIN Tarifa_Aroma ON Servicio_Aroma.idAroma = Tarifa_Aroma.idAroma
	                     WHERE Aroma.idAroma = $aromaSeleccionada";


	$resultado  = mysql_query($aroma , $conecion);

	// Creamos una variable tipo Array $datos
	  $datos = false;
	  // Declaramos la variable $cont en 0 para poder inicializar nuestro contador $cont++
	  $cont = 0;
	  // Dentro de el bucle While recojemos la base de datos
	  while ($fila= mysql_fetch_array($resultado )) {
	  // Descomponemos nuestro Array en Objetos
	                              $datos[$cont] = new StdClass;
	                              $datos [$cont]->id= $fila['idAroma'];
	                              $datos [$cont]->nombre= $fila['nomAroma'];
	                              $datos [$cont]->sexo= $fila['sexo'];
	                              $datos [$cont]->edad= $fila['edad'];
	                              $datos [$cont]->cabello= $fila['colCabello'];
	                              $datos [$cont]->ojos= $fila['colOjos'];
	                              $datos [$cont]->piel= $fila['colPiel'];
	                              $datos [$cont]->estatura= $fila['estatura'];
	                              $datos [$cont]->busto= $fila['busto'];
	                              $datos [$cont]->peso= $fila['peso'];
	                              $datos [$cont]->idiomas= $fila['idiomas'];
	                              $datos [$cont]->tatuajes= $fila['tatuajes'];
	                              $datos [$cont]->ciudad= $fila['ciudad'];
	                              $datos [$cont]->operaciones= $fila['operaciones'];
	                              $datos [$cont]->nariz= $fila['nariz'];
	                              $datos [$cont]->labios= $fila['labios'];
	                              $datos [$cont]->senos= $fila['senos'];
	                              $datos [$cont]->abdomen= $fila['abdomen'];
	                              $datos [$cont]->cola= $fila['cola'];
	                              $datos [$cont]->sexOral= $fila['sexOral'];
	                              $datos [$cont]->sexAnal= $fila['sexAnal'];
	                              $datos [$cont]->sexHombre= $fila['sexHombre'];
	                              $datos [$cont]->sexMujer= $fila['sexMujer'];
	                              $datos [$cont]->trio= $fila['trio'];
	                              $datos [$cont]->trioHMH= $fila['trioHMH'];
	                              $datos [$cont]->trioMHM= $fila['trioMHM'];
	                              $datos [$cont]->lluviaDorada= $fila['lluviaDorada'];
	                              $datos [$cont]->baile= $fila['baile'];
	                              $datos [$cont]->masaje= $fila['masaje'];
	                              $datos [$cont]->encuentro= $fila['encuentro'];
	                              $datos [$cont]->valorHora= $fila['valorHora'];
	                              $datos [$cont]->valor2Hora= $fila['valor2Hora'];
	                              $datos [$cont]->valor3Hora= $fila['valor3Hora'];
	                              $datos [$cont]->valorDia= $fila['valorDia'];
	                              $datos [$cont]->foto1= $fila['foto1'];
	                              $datos [$cont]->foto2= $fila['foto2'];
	                              $datos [$cont]->foto3= $fila['foto3'];
	                              $datos [$cont]->foto4= $fila['foto4'];
	                              $cont++;
	  }
	//printVar($datos, 'Datos Aroma');

  	echo $template->render(array('datos' => $datos));

	mysql_close($conecion);
?>