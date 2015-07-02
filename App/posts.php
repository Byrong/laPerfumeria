<?php
// LLamamos a Twig
  require_once 'Twig/Autoloader.php';
  Twig_Autoloader::register();
  $loader = new Twig_Loader_Filesystem('templates');

  $twig = new Twig_Environment($loader, array(
                 'cache' => 'cache',
                 'debug' => 'true'));

  $template = $twig->loadTemplate('post.twig.html');

// Cod-bg
 include "admin/conecion.php";

mysql_select_db('sociamed', $conecion);

$consulta_Cliente    = "SELECT Clientes.nombre,
                         Clientes.empresa,
                         Plan_cliente.id_cliente,
                         Plan_cliente.fecha_vecimiento,
                         Planes.nombre_plan
                          FROM Clientes
                          INNER JOIN Plan_cliente ON Clientes.id_cliente = Plan_cliente.id_cliente
                          INNER JOIN Planes ON Plan_cliente.id_plan = Planes.id_plan";

$consulta_Post    = "SELECT     Clientes.empresa,
                             Post_cliente.id_post,
                             Post_cliente.imagen,
                             Post_cliente.descripcion,
                             Post_cliente.dia,
                             Red.nombre as red_social,
                              Campana.id_campana,
                              Campana.nombre as nombre_campana,
                              Campana.inicio,
                              Campana.fin,
                              programacion_campanas.semana,
                              Categoria_cliente.nombre as tipo_post,
                              programacion_campanas.tema
                             FROM Clientes
                              INNER JOIN Post_cliente ON Clientes.id_cliente = Post_cliente.id_cliente
                               INNER JOIN Categoria_cliente ON Post_cliente.id_categoria = Categoria_cliente.id_categoria
                              INNER JOIN Red ON Post_cliente.id_red = Red.id_red
                              INNER JOIN Campana ON Post_cliente.id_campana = Campana.id_campana
                              INNER JOIN programacion_campanas ON Campana.id_campana = programacion_campanas.id_campana
                              WHERE Post_cliente.estado = 0
                             #WHERE Post_cliente.dia = 'viernes'
                             " ;

$consulta_Post2    = "SELECT Clientes.id_cliente,
                              Clientes.empresa,
                              Post_cliente.id_post,
                              Post_cliente.imagen,
                              Post_cliente.descripcion,
                              Red.nombre as red_social,
                              Revisados.aprobado,
                              Revisados.comentario,
                              Categoria_cliente.nombre as tipo_post
                              FROM Clientes INNER JOIN Post_cliente ON Clientes.id_cliente = Post_cliente.id_cliente
                               INNER JOIN Red ON Red.id_red = Post_cliente.id_red
                               INNER JOIN Revisados ON Revisados.id_post = Post_cliente.id_post
                               INNER JOIN Categoria_cliente ON Post_cliente.id_categoria = Categoria_cliente.id_categoria
                             " ;

$resultado  = mysql_query($consulta_Post , $conecion);

  // Consulta Post

  // Creamos una variable tipo Array $datos
  $datos = false;
  // Declaramos la variable $cont en 0 para poder inicializar nuestro contador $cont++
  $cont = 0;
  // Dentro de el bucle While recojemos la base de datos
  while ($fila= mysql_fetch_array($resultado )) {
  // Descomponemos nuestro Array en Objetos
                              $datos [$cont]->id= $fila['id_post'];
                              $datos [$cont]->empresa= $fila['empresa'];
                              $datos [$cont]->imagen= $fila['imagen'];
                              $datos [$cont]->descripcion= $fila['descripcion'];
                              $datos [$cont]->tipo_post= $fila['tipo_post'];
                              $datos [$cont]->red_social= $fila['red_social'];
                              $datos [$cont]->dia= $fila['dia'];
                              $datos [$cont]->nombre_campana= $fila['nombre_campana'];
                              $datos [$cont]->inicio= $fila['inicio'];
                              $datos [$cont]->fin= $fila['fin'];
                              $datos [$cont]->semana= $fila['semana'];
                              $datos [$cont]->tema= $fila['tema'];
                              $datos [$cont]->aprobado= $fila['aprobado'];
                              $datos [$cont]->comentario= $fila['comentario'];
                               $cont++;
  }

mysql_close($conecion);
// printVar($datos,'consulta');
// Usamos un array para mostrar los datos
  echo $template->render(array('datos' => $datos));