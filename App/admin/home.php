<?php
session_start();
if(empty($_SESSION['usuario']))
{
	header('Location:index2.php');
}else{
	header('Location:admin.php');
}
?>