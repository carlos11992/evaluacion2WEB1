$(document).ready(function(){

    $('#btnBuscar').submit(function(e) { 
        e.preventDefault();
        $.ajax({ 
            type:"POST",
            url:"buscarDatos.php",
            data: $("#buscar-form").serialize(),
            success: function(response){
                $(".result").append(response)
            }

        });
        //return false;
    }); 

});
