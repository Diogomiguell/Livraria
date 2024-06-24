<?php

try {

    if (isset($_POST['dadosCadastro'])) {
        
        $nome = $_POST["name"];
        $email = $_POST["email"];
        $senha = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $senha_c = $_POST["password_confirmation"];
        
        if (!password_verify($senha_c, $senha) || strlen($senha) < 8 || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erroC = '<p style="color: red;">ERROR: Email ou senhas iválidos!</p>';
        } else if (password_verify($senha_c, $senha) || strlen($senha) >= 8 || filter_var($email, FILTER_VALIDATE_EMAIL)){

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
            $_SESSION['user_id'] = $user['id'];
            header("Location: painel.php");

        } else {
            $erroC = '<p style="color: red;>ERROR: Nome de usuário ou email já cadastrados!</p>';
        }
    }              
} catch(PDOException $err) {
    $erroC = '<p style="color: red;>ERROR: Nome de usuário ou email já cadastrados!</p>';
}
