<?php

$result = [
    "18.5" => "ta leve ein",
    "24.9" => "normie",
    "29.9" => "ta com sobrepeso",
    "34.9" => "procura o medico, obesidade 1",
    "39.9" => "procura o medico, obesidade 2",
    "40.0" => "procura o medico, obesidade 3"
];


foreach($result as $calc => $msg){

    if($calc < 40.0){
        if($imc <= $calc){
            echo"prezado $nome, o resultado de seu imc é $imc - $msg";
            break;
        }
    }else{
        echo "prezado $nome, o resultado de seu imc é $imc - $msg";

    }



}

?>