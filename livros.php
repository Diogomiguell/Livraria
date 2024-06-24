<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php

        session_start();

        if (!isset($_SESSION['username'])) {
            header('Location: cadastro-login.php');  
        }

       /*  require "Conexao.php";

        $sql = "SELECT * FROM livros WHERE ";
        
        $pdo = Conexao::conectar("conf.ini");
        
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);

        $stmt->execute(); */

    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">    <link rel="stylesheet" href="assets/css/dashboard-style.css">
    <link rel="shortcut icon" href="assets/imgs/flor_de_feijao_logo.ico" type="image/x-icon">
    <title>Livraria - Dashboard</title>
</head>
<body>

    <nav class="navbar navbar-expand-sm p-1"
        style="background: linear-gradient(to right, #e6e6e6, #d4c4f8);">
        <a href="#" class="navbar-brand mb-0 h1" style="font-size: 42px;">
            <img 
            src="assets/imgs/flor_de_feijao_logo.ico" alt="Flor de Feijão logo" style="height: 130px; width: 160px;"
                class=" d-inline-block align top">
        </a>
        
        <div class="collapse navbar-collapse justify-content-end" id="links">
            <ul class="navbar-nav mt-3" >
                <li class="nav-item active">
                    <a class="nav-link" href="painel.php">
                        Home
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="livros.html">
                        Meus livros
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="https://instagram.com/flordefeijao_" target="_blank" >
                        Sobre nós
                    </a>
                </li>
            </ul>
        </div>

        <div class="btn-group dropstart" id="drop">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class='fas fa-user-circle fa-4x' style='color:#62578e'></i> 
            </button>
            <ul class="dropdown-menu">
                <li><button class="dropdown-item" href="#" name="sair">Perfil</button></li>
                <li><button class="dropdown-item" href="#">Sair</button></li>
            </ul>
          </div>
    </nav>

    <div style="display: flex; justify-content: end; margin-top: 8px; margin-right: 15px;">
        <button type="button" id="btn-login" style="min-width: 145px;">
            <a class="text-decoration-none" style="color: white;" href="add-livros.php">+ Adicionar livros</a>
        </button>
    </div>

    <div style="margin-top: 20px; display: flex; flex-direction: row; justify-content: center;">
        <table class="table table-striped table-hover" style="width: 95%; border-radius: 7px;">
            <thead>
                <tr>
                    <th scope="col">#</th>                   
                    <th scope="col">Título</th>
                    <th scope="col">Subtítulo</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Edição</th>
                    <th scope="col">Editora</th>
                    <th scope="col">Ano de pulblicação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while (false) {
                        echo "<tr>";
                            echo "<td></td>";
                            echo "<td></td>";
                            echo "<td></td>";
                            echo "<td></td>";
                            echo "<td></td>";
                            echo "<td></td>";
                            echo "<td></td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

    <footer style="background: linear-gradient(to right, #e2e2e2, #d4c4f8);">
        <span data-v-e1bce400="">Flor de Feijão™</span> 
        <div data-v-e1bce400="" class="spacer"></div> 
        <a href="#" class="text-decoration-none text-dark">
            Termos de Serviço
        </a> 
        <a href="#" class="text-decoration-none text-dark">
            Política de Privacidade
        </a> 

        <p>
            Contato:&nbsp;(88) 9 9211-3262 
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (85) 9 9350-9265
        </p>

        <div>&copy; 2023 - 2024</div>
    </footer>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>