function validarFormulario(){

    var clave = document.getElementById("txtClave").value;
    var descripcion = document.getElementById("txtDescripcion").value;
    var cantidad = document.getElementById("txtCantidad").value;
    var precio = document.getElementById("txtPrecio").value;
    var total = document.getElementById("txtTotal").value;
    

    if(clave == ""){
        alert("El campo *Clave* está vacío");
        return false;
    }

    if(descripcion == ""){
        alert("El campo *Descripcion* está vacío");
        return false;
    }

    if(cantidad == ""){
        alert("El campo *Cantidad* está vacío");
        return false;
    }

    if(precio == ""){
        alert("El campo *Precio* está vacío");
        return false;
    }

    if(total == ""){
        alert("El campo *Total* está vacío");
        return false;
    }

    
    var formulario= document.getElementById("frmDatos");
    formulario.submit();


}