<?php

  include "db/cadastro.php";

?>

<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Livraria - Cadastro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
  </head>
  <body>
    <div class="box-login">
      <h1 class="text-center text-black">Cadastre-se</h1>
      <form action="/db/cadastro.php" method="post">
          <input class="field" type="text" name="name" placeholder="Nome">
          <input class="field" type="email" name="email" placeholder="E-mail">
          <input class="field" type="password" name="password" placeholder="Senha">
          <input class="field" type="password" name="password_confirmation" placeholder="Confirme a Senha">
          <input class="btn-login" type="submit" name="dados" value="Cadastrar">
      </form>
      <p class="text-center">Já possui uma conta? <a class="text-decoration-none" href="pag-login.php">Entre</a> aqui!</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>