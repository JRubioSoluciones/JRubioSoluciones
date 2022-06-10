<?php
                        $idConexion=mysqli_connect("localhost","root","");
                        if (!$idConexion){
                           echo "La conexión al servidor fallo ".$mysqli_error();
                        }
                       else {
                           mysqli_select_db($idConexion,"db_Datos_generales");
                           mysqli_query($idConexion,"delete from t_datos where Clave='{$_POST["txtClave"]}'");
                           mysqli_close($idConexion);
                           echo "<b>El registro se eliminó satisfactoriamente</b><br>";
                           echo "<h1><a href='index.php'>Regresar</a></h1>";
                       }
?>
