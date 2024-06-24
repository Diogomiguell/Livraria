<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php

        include "db/cadastro.php";
        include "db/login.php";

    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/imgs/flor_de_feijao_logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Livraria - Página de Cadastro e Login</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="" method="post">
                <h1 style="color: #f2f1e2;">Criar Conta</h1>     
                <?php
                
                    if (isset($erroC)) {
                        echo $erroC;
                        unset($erroC);
                    }

                ?>       
                <input class="field" type="text" name="name" placeholder="Nome" required>
                <input class="field" type="email" name="email" placeholder="E-mail" required>
                <input class="field" type="password" name="password" placeholder="Senha" required>
                <input class="field" type="password" name="password_confirmation" placeholder="Confirme a Senha" required>
                <input class="btnSub" id="b-cads" type="submit" name="dadosCadastro" value="Cadastrar">
            </form>
        </div>

        <div class="form-container sign-in">
            <form action="" method="post"> 
                <h1 style="color: #f2f1e2;">Entrar</h1>
                <?php

                    if (isset($erroL)) {
                        echo $erroL;
                        unset($erroL);
                    }

                ?>       
                <input class="field" type="text" name="name" placeholder="Nome" required>
                <input class="field" type="email" name="email" placeholder="E-mail" required>
                <input class="field" type="password" name="password" placeholder="Senha" required>
                <a href="#" style="color: #f2f1e2;">Esqueceu sua senha?</a>
                <input class="btnSub" id="b-login" type="submit" name="dadosLogin" value="Entrar">
            </form>
        </div>

        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <img src="assets/imgs/flor_de_feijao_logo.ico" alt="Flor de Feijão - Logo">
                    <p style="color: #62578e;">Entre agora mesmo para desfrutar de todos os recursos do nosso site</p>
                    <button class="hidden" id="login">Entrar</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <img src="assets/imgs/flor_de_feijao_logo.ico" alt="Flor de Feijão - Logo">
                    <p style="color: #62578e;">Registre-se agora mesmo para desfrutar de todos os recursos do nosso site</p>
                    <button class="hidden" id="register">Registrar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/script/script.js">
        
    </script>
</body>

</html>