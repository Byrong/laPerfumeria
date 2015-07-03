<?php
	$resultado = $_POST['verAroma'];
	echo $resultado;

	include "admin/conecion.php";

	mysql_select_db('perfumeria', $conecion);

	$Aroma    = "SELECT Aroma.idAroma, 
	                          Aroma.nombre, 
	                          Aroma.correo, 
	                          Aroma.sexo, 
	                          Aroma.celular, 
	                          Aroma.ciudad, 
	                          Aroma.registro, 
	                          Aroma.estado
	                       FROM Aroma WHERE Aroma.idAroma = $resultado
	                            ";

	$Perfil_Aroma    = "SELECT Aroma.idAroma, 
	                              Aroma.nombre, 
	                              Aroma.correo, 
	                              Perfil_Aroma.nomAroma, 
	                              Perfil_Aroma.edad, 
	                              Perfil_Aroma.soy
	                            FROM Aroma INNER JOIN Perfil_Aroma ON Aroma.idAroma = Perfil_Aroma.idAroma
	                            ";

	$resultado  = mysql_query($Aroma , $conecion);

	// Creamos una variable tipo Array $datos
	  $datos = false;
	  // Declaramos la variable $cont en 0 para poder inicializar nuestro contador $cont++
	  $cont = 0;
	  // Dentro de el bucle While recojemos la base de datos
	  while ($fila= mysql_fetch_array($resultado )) {
	  // Descomponemos nuestro Array en Objetos
	                              $datos[$cont] = new StdClass;
	                              $datos [$cont]->id= $fila['idAroma'];
	                              $datos [$cont]->nombre= $fila['nombre'];
	                              $datos [$cont]->correo= $fila['correo'];
	                              $datos [$cont]->sexo= $fila['sexo'];
	                              $datos [$cont]->celular= $fila['celular'];
	                              $datos [$cont]->registro= $fila['registro'];
	                              $datos [$cont]->estado= $fila['estado'];
	                              $cont++;
	  }
	printVar($datos,'Datos Aroma');
	mysql_close($conecion);











?>