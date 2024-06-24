<?php

try {
     if (isset($_POST['dadosLogin'])) {

          $nome = $_POST['name'];
          $email = $_POST['email'];
          $passaword = $_POST['password'];
          
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

               $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

               if (count($users) < 1) {
                    $erroL = '<p style="color: red;">Nome de usuário, email ou senha incorretos!</p>';
               } else {
                    $user = $users[0];
                    if (password_verify($senha, $user['senha']) || $nome !== $user['nome']) {
                         $_SESSION['username'] = $user;
                         header("Location: ../painel.html");
                    } else {
                         $erroL = '<p style="color: red;">Nome de usuário, email ou senha incorretos!</p>';
                    }
               } 
          }
     }
} catch(PDOException $err) {
     $erroL = '<p style="color: red;">Nome de usuário, email ou senha incorretos!<p>';
}
