                    <?php
                    error_reporting(E_ALL);
                    ini_set('display_errors', '1');

                    // Conectamos a la Bse de Datos

                    include "conecion.php";
                    mysql_select_db('sociamed', $conecion);

                    // Variables
                    $empresa = $_REQUEST ['empresa'];
                    $imagen =  $_FILES['imagen']['name'];
                    $descripcion = $_REQUEST ['descripcion'];
                    $categoria = $_REQUEST ['categoria'];
                    $red = $_REQUEST ['red'];
                    $dia = $_REQUEST ['dia'];
                    $semana = $_REQUEST ['semana'];
                    $campana = $_REQUEST ['campana'];
                    $estado = $_REQUEST ['estado'];

                    $sql  = ("INSERT INTO Post_cliente (id_cliente,imagen,descripcion,id_red,id_categoria,dia,semana,id_campana,estado)
                                                    VALUES   ('$empresa','$imagen','$descripcion','$red','$categoria','$dia', '$semana','$campana',$estado)" );

//comprobamos si ha ocurrido un error.
if ($_FILES["imagen"]["error"] > 0){
  echo "ha ocurrido un error";
} else {
  //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
  //y que el tamano del archivo no exceda los 100kb
  $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
  $limite_kb = 900;

  if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
    //esta es la ruta donde copiaremos la imagen
    //recuerden que deben crear un directorio con este mismo nombre
    //en el mismo lugar donde se encuentra el archivo subir.php
    $ruta = "imagenes/" . $_FILES['imagen']['name'];
    //comprovamos si este archivo existe para no volverlo a copiar.
    //pero si quieren pueden obviar esto si no es necesario.
    //o pueden darle otro nombre para que no sobreescriba el actual.
    if (!file_exists($ruta)){
      //aqui movemos el archivo desde la ruta temporal a nuestra ruta
      //usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
      //almacenara true o false
      $resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
      if ($resultado){
        echo "<div class='alert alert-success' role='alert'> ¡Post publicado Exitosamente!</div>";
      } else {
        echo "<div class='alert alert-danger' role='alert'> Error al publicar el Post</div>";
      }
    } else {
      echo "<div class='alert alert-warning' role='alert'> La siguiente Imagen ".$_FILES['imagen']['name'] ."ya existe</div>";
    }
  } else {
      echo "<div class='alert alert-warning' role='alert'> archivo no permitido, es tipo de archivo prohibido o excede el tamano de".$limite_kb."Kilobytes</div>";
  }
}
                    mysql_query($sql, $conecion);

                    mysql_close($conecion);

                    ?>