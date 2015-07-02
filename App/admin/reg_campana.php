                    <?php
                    error_reporting(E_ALL);
                    ini_set('display_errors', '1');

                    // Conectamos a la Bse de Datos

                    $conecion = mysql_connect ('localhost','root','root') or die ("Problemas en la conexion");
                    mysql_select_db('sociamed', $conecion);

                    // Variables
                    $campana = $_REQUEST ['campana'];
                    $empresa = $_REQUEST ['empresa'];
                    $descripcion = $_REQUEST ['descripcion'];
                    $inicio = $_REQUEST ['inicio'];
                    $fin = $_REQUEST ['fin'];

                    $sql  = ("INSERT INTO Campana (id_cliente,nombre,descripcion,inicio,fin)
                                                    VALUES   ($empresa,'$campana','$descripcion','$inicio','$fin')" );

                    mysql_query($sql, $conecion);

                    mysql_close($conecion);

                    ?>