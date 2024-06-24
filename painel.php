<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php
        session_start();

        if (!isset($_SESSION['username'])) {
            header('Location: cadastro-login.php');
        }
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
                    <a class="nav-link" href="livros.php">
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
                <li><button class="dropdown-item" href="#">Perfil</button></li>
                <li><a class="dropdown-item" href="logout.php">Sair</a></li>
            </ul>
          </div>
    </nav>

    <div class="p-2 mt-lg-5">
        <h1 class="text-light">
            Olá <?php echo $_SESSION['username']; ?>, seja bem-vindo(a) à nossa livraria!
        </h1>
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