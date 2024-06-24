<?php

try {
     if (isset($_POST['dadosLogin'])) {

          $nome = $_POST['name'];
          $email = $_POST['email'];
          $senha = $_POST['password'];
          
          if (empty($nome) || empty($email || empty($senha))) {
               $erroC = '<p style="color: red;">ERROR: Você não preencheu os campos corretamente!</p>';
               
          } else {

               require "Conexao.php";

               $sql = "SELECT * FROM usuarios WHERE nome=:nome AND email=:email AND senha=:senha";

               $pdo = Conexao::conectar("conf.ini");

               $stmt = $pdo->prepare($sql);
               $stmt->bindParam(':email', $email);
               $stmt->bindParam(':senha', $senha);
               $stmt->execute();

               $user = $stmt->fetch(PDO::FETCH_ASSOC);

               if (count($user) != 0) {
                    $erroL = '<p style="color: red; height: 20px;">Nome de usuário, email ou senha incorretos!</p>';
               } else if (empty($nome) || empty($email) || empty($senha)) {
                    $erroL = '<p style="color: red; height: 20px;">Preencha os campos!</p>';
               } else {
                    if (password_verify($senha, $user['senha']) && $nome === $user['nome'] && $email === user['email']) {
                         $_SESSION['username'] = $user;
                         header("Location: ../painel.php");
                    } else {
                         $erroL = '<p style="color: red; height: 20px;">Nome de usuário, email ou senha incorretos!</p>';
                    }
               } 
          }
     }
} catch(PDOException $err) {
     $erroL = '<p style="color: red; height: 20px;">Nome de usuário, email ou senha incorretos!<p>';
}
