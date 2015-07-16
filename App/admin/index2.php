<?php
session_start();
if(!empty($_SESSION['login_user']))
{
	header('Location: home.php');
}
?>
//HTML Code
<h2>Contenido a Mostrar</h2>
<div id="box">
<form action="" method="post">
Username
<input type="text" class="input"  id="username"/>
Password
<input type="password" class="input"  id="password"/>
<input type="submit" class="button button-primary" value="Log In" id="login"/>
<div id="error"></div> 
</div>
</form> 
</div>