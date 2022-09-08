<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $nomedb = "pratica14";

    try {
        
        $conexao = new PDO("mysql:host= $servidor; dbname= $nomedb", $usuario, $senha );
        $conexao->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "conexao estabeleced";

    } catch (Exception $i) {
        echo "falhou".$i->getMessage();
    };


    ?>