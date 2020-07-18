<?php

include('baseDeDatos.php');

//Validar que se hizo clic en el boton de enviar datos
if(isset($_POST["btnEliminar"])){
    
    //recibir los datos a enviar
    $nombre=$_POST["nombreEliminar"];
   
    //1. crear un objeto del tipo BaseDatos (debemos cerar una variable)
    $operacionEnBaseDeDatos= new BaseDatos();
   
    //2. Creemos una consulta para agregar datos
    $consulta = "DELETE FROM usuarios WHERE nombre = '$nombre'";
    //3. utilizar el metodo alterarBaseDatos para poder ejecutar la consulta para ello utilizamos el objeto del paso 1 
    $resultado=$operacionEnBaseDeDatos->alterarBaseDatos($consulta);
    //4. verificar que si se escribieron los datos
    if($resultado === TRUE){
        echo("<br>");
        echo("Se ha eliminado el usuario ");
        echo("<br>");
    }else{
        echo("<br>");
        die("Usuario no encontrado para eliminar");

    }

}else{
    echo("pilas no ha presioando el boton, no deberia estar aca");
}

?>