<?php
$usuario = $_POST['nnombre'];
$pass = $_POST['npassword'];
 
if(empty($usuario) || empty($pass)){
	header("Location: index.php");
	exit();
}
 
mysql_connect('localhost','root','root') or die("Error al conectar " . mysql_error());
mysql_select_db('perfumeria') or die ("Error al seleccionar la Base de datos: " . mysql_error());
 
$result = mysql_query("SELECT * from usuarios where usuario='" . $usuario . "'");
 
if($row = mysql_fetch_array($result)){
	if($row['pass'] == $pass){
		session_start();
		$_SESSION['usuario'] = $usuario;
		header("Location: index.php");
	}else{
		header("Location: index.php");
	exit();
	}
}else{
	//header("Location:index.html");
	$message = "Todos los campos no deben de estar vacios!";
exit();
}
?>