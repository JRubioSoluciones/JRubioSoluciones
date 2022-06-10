<?php //Formulario Eliminar datos ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Eliminar datos</title>
		<meta charset="utf-8">
		
		<link rel="stylesheet" type="text/css" href="CSS/estilosinsertardatos.css" />
	</head>
	<body>
         
      
	     <form action="eliminardatos.php" method="POST">
	       <table>
	         
             <tr>
             	<td>Clave:</td>
             	<td><input type="text" name="txtClave"></td>
             </tr>
             <tr>
                <td><input type="submit" value="Buscar persona"></td>
             </tr>
           </table>
          </form>
               <?php
                     if (isset($_POST["txtClave"])){ 
                        $varClave=$_POST["txtClave"];
                        $idConexion=mysqli_connect("localhost","root","");
                        if (!$idConexion){
                           echo "La conexión al servidor fallo ".$mysqli_error();
                        }
                       else {
                           mysqli_select_db($idConexion,"db_Datos_generales");
                           $strConsulta="select * from t_datos where Clave='$varClave'";
                           $datosGenerales=@mysqli_query($idConexion,$strConsulta);
                           $fila= mysqli_fetch_array ($datosGenerales);
                           
                        }
                      }
                 ?>
                 <form action="borrar.php" method="POST">
	       <table>
	         <tr>
	           <th colspan="2">Eliminar datos</th>
             </tr>
             <tr>
                    <td>Clave:</td>
            	<td><input type="text" name="txtClave" value="<?php echo $fila["Clave"];?>"></td>
             </tr>
             <tr>
             	<td>Descripción:</td>
             	<td><input type="text" name="txtDescripcion" value="<?php echo $fila["Descripcion"];?>"></td>
             </tr>
             <tr>
             	<td>Cantidad:</td>

             	<td><input type="text" name="txtCantidad" value="<?php echo $fila["Cantidad"];?>">
                </td>
             </tr>
             <tr>
             	<td>Precio:</td>
             	<td><input type="text" name="txtPrecio" value="<?php echo $fila["Precio"];?>"></td>
             </tr>
             <tr>
             	<td>Total:</td>
             	<td><input type="text" name="txtTotal" value="<?php echo $fila["Total"];?>"></td>
             </tr>
             <tr>
                <td><input type="submit" value="Borrar Registro"></td>
             </tr>
           </table>
          </form>
          <?
               mysqli_close($idConexion);
          ?>  
           <h1><a href='index.php'>No Eliminar y Regresar</a></h1>
    </body>
</html>