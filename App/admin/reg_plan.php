                    <?php
                    error_reporting(E_ALL);
                    ini_set('display_errors', '1');

                    // Conectamos a la Bse de Datos

                    $conecion = mysql_connect ('localhost','root','root') or die ("Problemas en la conexion");
                    mysql_select_db('sociamed', $conecion);

                    // Variables
                    $empresa = $_REQUEST ['empresa'];
                    $plan = $_REQUEST ['plan'];
                    $inicio = $_REQUEST ['inicio'];
                    $fin = $_REQUEST ['fin'];

                    $sql  = ("INSERT INTO Plan_cliente (id_cliente,id_plan,fecha_afiliacion,fecha_vecimiento)
                                                    VALUES   ($empresa,'$plan','$inicio','$fin')" );

                    mysql_query($sql, $conecion);

                    mysql_close($conecion);

                    echo "Plan registrado con Exito";

                    ?>