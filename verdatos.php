<?php //archivo.php ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Consultar datos</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="CSS/estilosinsertardatos.css" />
	 </head>
	<body>
          <?php
            $idConexion=mysqli_connect("localhost","root","");
            if (!$idConexion){
              echo "La conexión al servidor fallo ".$mysql_error();
            }
            else {
                  mysqli_select_db($idConexion,"db_Datos_generales");
	              $strConsulta="select * from t_datos";
	              $datosGenerales=mysqli_query($idConexion,$strConsulta);
	              echo "<table>";
	              echo "<tr>";
	              echo "<th colspan=2>DATOS GENERALES";
	              echo "<tr>";
	              echo "<td>ID_PERSONA";
	              echo "<td>CLAVE";
	              echo "<td>DESCRIPCION";
                  echo "<td>CANTIDAD";
                  echo "<td>PRECIO";
                  echo "<td>TOTAL";
	              while($registro=mysqli_fetch_array($datosGenerales,MYSQLI_ASSOC)){
	              
	              echo "</tr>";
	              echo "<tr>";
	              echo "<td> ".$registro["Id_persona"]."</td>";
                  echo "<td> ".$registro["Clave"]."</td>";
                  echo "<td> ".$registro["Descripcion"]."</td>";
                  echo "<td> ".$registro["Cantidad"]."</td>";
                  echo "<td> ".$registro["Precio"]."</td>";
                  echo "<td> ".$registro["Total"]."</td>";
                  
	              }
	              echo "</table>";
	              if (!$datosGenerales){
	                 echo "Existe un error en la consulta ".$strConsulta;
	              }
	              mysqli_close($idConexion);
           }
?>
           <br>
           <table>
           	  <tr>
           	  	<td> <center><a href="index.php"><h1>REGRESAR</h1></a></center></td>
              
              </tr>
           </table>
    </body>
</html>
