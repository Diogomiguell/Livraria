<?php

require "Conexao.php";
            
            $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
    
            $pdo = Conexao::conectar('conf.ini');
    
            $stmt = $pdo->prepare($sql);
    
            $qtdLinhas = $stmt->execute([
                ":nome" => $nome,
                ":email" => $email,
                ":senha" => $senha 
            ]);
            
            session_start();

            $_SESSION['username'] = $nome;
            header("Location: painel.php");
