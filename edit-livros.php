<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php
        session_start();

        if (!isset($_SESSION['username'])) {
            header('Location: cadastro-login.php');
        }

        include_once "crud/update.php";
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/imgs/flor_de_feijao_logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/addlivros.css">
    <title>Livraria - Editar Livros</title>
    <style>
        #voltar {
            background-color: #6337ca;
            border: none; 
            position: absolute; 
            left: 93%; 
            bottom: 93%;
        }
        #voltar:hover {
            background-color: #4c2a9c;
        }
    </style>
</head>
<body>
    <div class="justify-content-end">
        <button id="voltar" class="btn btn-danger"><a href="livros.php" class="text-decoration-none link-light">Voltar</a></button>
    </div>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="" method="post">
                <h1 style="color: #f2f1e2;">Editar Livro</h1>     
                <input class="field" type="text" name="titulo" placeholder="Título" required value="<?= $titulo ?>"/>
                <input class="field" type="text" name="subtitulo" placeholder="Subtítulo" required value="<?= $subtitulo ?>"/>
                <input class="field" type="text" name="autor" placeholder="Autor" required value="<?= $autor?>">
                <input class="field" type="number" name="edicao" placeholder="Edição" required value="<?= $edicao?>">
                <input class="field" type="text" name="editora" placeholder="Editora" required value="<?= $editora?>">
                <input class="field" type="number" name="ano_publi" placeholder="Ano de publicação" required value="<?= $ano_publi?>">
                <input class="btnSub" id="b-cads" type="submit" name="editLivro" value="Aplicar">
            </form>
        </div>
    </div>    
    <script src="assets/script/script.js">
        
    </script>
</body>

</html>