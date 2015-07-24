<?php
// LLamamos a Twig
  require_once 'Twig/Autoloader.php';
  Twig_Autoloader::register();
  $loader = new Twig_Loader_Filesystem('templates/backend');

  $twig = new Twig_Environment($loader, array(
                 'cache' => 'cache',
                 'debug' => 'true'));

  $template = $twig->loadTemplate('trabajaConNosotros.twig.html');

//printVar($template,'consulta Aromas');
// Usamos un array para mostrar los datos
echo $template->render(array());