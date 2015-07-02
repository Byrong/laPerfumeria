                    <?php
                    error_reporting(E_ALL);
                    ini_set('display_errors', '1');

                    // Conectamos a la Bse de Datos
                    $conecion = mysql_connect ('localhost','root','root') or die ("Problemas en la conexion");
                    mysql_select_db('sociamed', $conecion);
                    // Variables
                    $empresa = $_GET  ['empresa'];

                    $consulta_Campana    = "SELECT Campana.nombre,
                         Campana.id_campana,
                         Clientes.id_cliente
                          FROM Clientes
                          INNER JOIN Campana  ON Campana.id_cliente =   Clientes.id_cliente
                          WHERE Campana.id_cliente = $empresa";

                    $peticion =  mysql_query($consulta_Campana, $conecion);

                    while ($fila = mysql_fetch_array($peticion))
                    {
                                   echo "<option value=".$fila ['id_campana'].">".$fila ['nombre']."</option>";
                    }

                    mysql_close($conecion);
                    ?>