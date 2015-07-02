                    <?php
                    error_reporting(E_ALL);
                    ini_set('display_errors', '1');

                    // Conectamos a la Bse de Datos
                    $conecion = mysql_connect ('localhost','root','root') or die ("Problemas en la conexion");
                    mysql_select_db('sociamed', $conecion);
                    // Variables
                    $tipoPost = $_GET  ['tipoPost'];

                    $consulta_Campana    = "SELECT Categoria_cliente.nombre,
                         Categoria_cliente.id_categoria,
                         Clientes.id_cliente
                          FROM Clientes
                          INNER JOIN Categoria_cliente  ON Categoria_cliente.id_cliente =   Clientes.id_cliente
                          WHERE Categoria_cliente.id_cliente = $tipoPost";

                    $peticion =  mysql_query($consulta_Campana, $conecion);

                    while ($fila = mysql_fetch_array($peticion))
                    {
                                   echo "<option value=".$fila ['id_categoria'].">".$fila ['nombre']."</option>";
                    }

                    mysql_close($conecion);
                    ?>