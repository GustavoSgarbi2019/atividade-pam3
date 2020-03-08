<?php

if(

    !isset($_REQUEST["numero1"]) ||
    !isset($_REQUEST["numero2"])
    
){

    echo "parametros invalidos" ;

}else{

    $numero1 = ($_REQUEST["numero1"]);
    $numero2 = ($_REQUEST["numero2"]);
}

    $operador = $_REQUEST["operador"] ;
    $resultado = "";


    if($operador == "m"){
        $resultado["soma"] = $numero1 + $numero2;
    }else if($operador == "-"){
        $resultado["subtracao"] = $numero1 - $numero2;
    }else if($operador == "*"){
        $resultado["multiplicacao"] = $numero1 * $numero2;
    }else if($operador == "/"){
        $resultado["divisao"] = $numero1 / $numero2;
     
    }else{
        $resultado ["erro"] = "erro ao fazer a conta";
    }


    echo json_encode($resultado);

    ?>