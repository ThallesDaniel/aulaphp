<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $nomedb = "pratica13";

    $conexao = new mysqli(  $servidor,    $usuario,   $senha,   $nomedb );

    if ($conexao->connect_error){
        echo "falhou mano" . $conexao->connect_error;

    }else{
        echo "funfou";
    }


?>