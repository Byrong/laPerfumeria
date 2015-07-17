<?php
$conecion = mysql_connect ('localhost','desarrp0','Cre777.ar?_') or die ("Problemas en la conexion");
//$conecion = mysql_connect ('localhost','root','root') or die ("Problemas en la conexion");
// Funcion para mostrar errores
function printVar( $variable, $title = "" )
{
  $var = print_r( $variable, true );
  echo "<pre style='background-color:#f1f1f3;color:#339c9a; border: dashed thin #42c2c0;'><strong>[$title]</strong> $var</pre>";
}
?>