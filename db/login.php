<?php

try {
     if (isset($_POST['dadosLogin'])) {

          $nome = $_POST['name'];
          $email = $_POST['email'];
          $senha = $_POST['password'];
          
          require "Conexao.php";

          $sql = "SELECT * FROM usuarios WHERE nome=:nome AND email=:email";
          
          $pdo = Conexao::conectar("conf.ini");
          
          $stmt = $pdo->prepare($sql);

          $stmt->bindParam(':nome', $nome);
          $stmt->bindParam(':email', $email);

          $stmt->execute();

          $user = $stmt->fetch(PDO::FETCH_ASSOC);

          if (count($user) == "0") {
               $erroL = '<p style="color: red; height: 20px;">Nome de usuário, email ou senha incorretos!</p>';
          } else {
               if (password_verify($senha, $user['senha'])) {

                    session_start();

                    $_SESSION['username'] = $user["nome"];
                    $_SESSION['user_id'] = $user['id'];
                    header("Location: painel.php");
               } else {
                    $erroL = '<p style="color: red; height: 20px;">Nome de usuário, email ou senha incorretos!</p>';
               }
          } 
     }
} catch(PDOException $err) {
     $erroL = '<p style="color: red; height: 20px;">Nome de usuário, email ou senha incorretos!<p>';
}
