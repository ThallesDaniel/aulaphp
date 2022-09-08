<?php

    require_once('pratica13.php');

   

    try {
        $sql = "INSERT INTO aluno(nome, email, telefone, data_nasci)VALUES
        (:nome, :email, :telefone, :data_nasc)";

        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindParam(':email', $mail, PDO::PARAM_STR);
        $stmt->bindParam(':telefone', $tel, PDO::PARAM_STR);
        $stmt->bindParam(':data_nasc', $data, PDO::PARAM_STR);

        $nome = verificar($_POST['nome']);
        $mail = verificar($_POST['mail']);
        $tel = verificar($_POST['telefone']);
        $data = verificar($_POST['data_nasc']); 

    } catch (\Throwable $th) {
        //throw $th;
    }
    
    function verificar($dados){

        $dados = trim($dados);//filtrar espaços desnecessarios
        $dados = stripcslashes("$dados");// filtrar baarra invertida
        $dados = htmlspecialchars($dados);//ignora cod e tag
        
        return $dados;
    }
    
?>