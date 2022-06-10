<?php //Formulario Insertar datos generales ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Registro de datos generales</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="CSS/estilosinsertardatos.css" />
        <script src="JS/validaciones.js"></script>
	</head>
	<body>
         <h1> Registrar datos generales </h1>    
	     <form id="frmDatos" action="Datos.php" method="POST">
	       <table>
	         <tr>
	           <th colspan="2">Agregar Datos</th>
             </tr>
             <tr>
             	<td>Clave:</td>
             	<td><input type="text" id="txtClave" name="txtClave" maxlength="8"></td>
             </tr>

             <tr>
             	<td>Descripción:</td>
             	<td><input type="text" id="txtDescripcion" name="txtDescripcion" maxlength="200"></td>
             </tr>

             <tr>
             	<td>Cantidad:</td>
             	<td><input type="text" id="txtCantidad" name="txtCantidad" maxlength="15"></td>
             </tr>

             <tr>
             	<td>Precio:</td>
             	<td><input type="text" id="txtPrecio" name="txtPrecio" maxlength="15"></td>
             </tr>

             <tr>
             	<td>Total:</td>
             	<td><input type="text" id="txtTotal" name="txtTotal" maxlength="30"></td>
             </tr>



                 <td><input type="button" value="Guardar Datos" onClick="validarFormulario();"></td>
             </tr>

           </table>
          </form>
    </body>
</html>
