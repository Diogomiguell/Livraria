<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php
        session_start();

        if (!isset($_SESSION['username'])) {
            header('Location: cadastro-login.php');
        }

        include_once "crud/insert.php";
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="../assets/imgs/flor_de_feijao_logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/addlivros.css">
    <title>Livraria - Adicionar Livros</title>
</head>
<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="" method="post">
                <h1 style="color: #f2f1e2;">Adicionar Livro</h1>     
                <?php
                    if (isset($erroI)) {
                        echo $erroI;
                        unset($erroI);
                    }
                ?>       
                <input class="field" type="text" name="titulo" placeholder="Título" required>
                <input class="field" type="text" name="subtitulo" placeholder="Subtítulo" required>
                <input class="field" type="text" name="autor" placeholder="Autor" required>
                <input class="field" type="number" name="edicao" placeholder="Edição" required>
                <input class="field" type="text" name="editora" placeholder="Editora" required>
                <input class="field" type="number" name="ano" placeholder="Ano de publicação" required>
                <input class="btnSub" id="b-cads" type="submit" name="addLivro" value="Adicionar">
            </form>
        </div>
    </div>    
    <script src="assets/script/script.js">
        
    </script>
</body>

</html>