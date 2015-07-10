<?php

$estado = $_REQUEST['estado'];
$id = $_REQUEST['id'];

// Cod-bg
  include "conecion.php";
  mysql_select_db('perfumeria', $conecion);
  mysql_set_charset('utf8');

$filtro_Aroma    = "UPDATE Aroma SET Aroma.estado = $estado WHERE Aroma.idaroma = $id" ;

mysql_query($filtro_Aroma , $conecion);
  
 //printVar($verSolicitud,'consulta Aroma');
 mysql_close($conecion);
/*
switch ($estado) {
	case '1':
	echo "Nueva Aroma ingresada al Club, no olvides ingresar su nuevo nombre y los valores de su tarifa";
	break;
	case '2':
	echo "Solicitud de Aroma Rechazada";
	break;
	default:
		echo "Error a solicitar petición";
		break;
}
*/
echo $estado;
?>