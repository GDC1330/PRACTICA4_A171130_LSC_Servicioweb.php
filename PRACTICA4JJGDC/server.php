<?php
    require_once "lib/nusoap.php";
    function getAnimales($datos) {
        if($datos == "Animales") {
            return join(",", array(
                "Arañas",
                "Caballo",
                "Aveztruz",
                "Jirafa"));
        }else{
            return "No hay animales";
        }
    }
    $server = new soap_server();//cerramos instancia en SOAP
    $server->register("getAnimales");//indica el metodo o funcion a devolver
    if( !isset( $HTTP_RAW_POST_DATA ) ) 
        $HTTP_RAW_POST_DATA =file_get_contents( 'php://input' );
        $server->service($HTTP_RAW_POST_DATA);
?>