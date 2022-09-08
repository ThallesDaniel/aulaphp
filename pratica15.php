<?php

    require_once('pratica13.php');


    try {

        $sql = "INSERT INTO aluno(nome, email, telefone, data_nasci)VALUES
        ('elizabeth', 'bebeth@gmail.com', '31-998726345', '1100-02-01') ";
     
     $conexao->exec($sql);

        echo"dados salvos";
    } catch (Exception $th) {
        echo "falhou".$th->getMessage();
    };

    $conexao = null;

?>