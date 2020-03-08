<?php


if(
    !isset($_REQUEST["nota1"]) ||
    !isset($_REQUEST["nota2"]) ||
    !isset($_REQUEST["nota3"]) ||
    !isset($_REQUEST["nota4"]) 
    
){

echo "parametros invalidos" ;

}else{

    $nota1 = ($_REQUEST["nota1"]);
    $nota2 = ($_REQUEST["nota2"]);
    $nota3 = ($_REQUEST["nota3"]);
    $nota4 = ($_REQUEST["nota4"]);

    if(
        $nota1 < 0 || $nota1 > 10 ||
        $nota2 < 0 || $nota2 > 10 ||
        $nota3 < 0 || $nota3 > 10 ||
        $nota4 < 0 || $nota4 > 10 
        
    ){
        echo "parametros invalidos";
        exit;
    }

 if(
     !is_numeric( $nota1) ||
     !is_numeric( $nota2) ||
     !is_numeric( $nota3) ||
     !is_numeric( $nota4)
 ){
    echo "foi informado fora do valor permitido";
    exit;

    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    $retornoJson = array();
    $retornoJson["media"] = $media ;
    
    
    if($media >=0 && $media < 2 ){
        $status = "muito ruim";
    }else if( $media >=2 && $media < 5){
        $status = "ruim";
    }else if( $media >=5 && $media < 7){
        $status = "regular";
    }else if( $media >=7 && $media < 9){
        $status = "bom";
    }else if( $media >=9 && $media < 10){
        $status = "muito bom";
    }
    
    
    $retornoJson["status"] = $status;
    exit;