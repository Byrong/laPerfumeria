                    <?php
                    error_reporting(E_ALL);
                    ini_set('display_errors', '1');

                    // Conectamos a la Bse de Datos
                    $conecion = mysql_connect ('localhost','root','root') or die ("Problemas en la conexion");
                    mysql_select_db('sociamed', $conecion);
                    // Variables
                    $id_comentario = $_GET  ['id_comentario'];
                    $post = $_GET  ['id_post'];
                    $aprobado = $_GET  ['aprobado'];
                    $comentario = $_GET  ['comentario'];
                    $estado = $_GET  ['estado'];

                    $sql  = ("INSERT INTO Revisados (id_comentario,id_post,aprobado,comentario)
                                                    VALUES   ($id_comentario,$post,'$aprobado','$comentario')" );


                    $sql2 = ("UPDATE Post_cliente SET estado=$estado
                                WHERE id_post=$id_comentario ");

                    mysql_query($sql, $conecion);
                    mysql_query($sql2, $conecion);

                    mysql_close($conecion);

                     // echo "ID Comentario: ".$id_comentario." \n ID Post: ".$post." \nAprobado: ".$aprobado." \nComentario: ".$comentario."\n Estado: ".$estado;
                    echo 1;


                    ?>