<?php

include('baseDeDatos.php');

//Validar que se hizo clic en el boton de enviar datos
if(isset($_POST["btnBuscar"])){
    
    //recibir los datos a enviar
    $nombre=$_POST["nombreBuscar"];
   
    //1. crear un objeto del tipo BaseDatos (debemos cerar una variable)
    $operacionEnBaseDeDatos= new BaseDatos();
   
    //2. Creemos una consulta para agregar datos
    $consulta = "SELECT * FROM usuarios WHERE nombre = '$nombre'";
    //3. utilizar el metodo alterarBaseDatos para poder ejecutar la consulta para ello utilizamos el objeto del paso 1 
    $resultadoBuscar=$operacionEnBaseDeDatos->consultarEnBaseDatos($consulta);
    //4. verificar que si se escribieron los datos
    if($resultadoBuscar){
        echo("<br>");
        echo("Se ha encontrado el usuario ");
        echo("<br>");
    }else{

        die("Usuario no encontrado");

    }

}else{
    echo("pilas no ha presioando el boton, no deberia estar aca");
}

?>