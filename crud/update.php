<?php

if (!empty($_GET['id'])) {
    
    require_once "db/Conexao.php";

    $sql = "SELECT * FROM livros WHERE id=:id";

    $pdo = Conexao::conectar('conf.ini');

    $stmt = $pdo->prepare($sql);

    $qtdLinhas = $stmt->execute([
        ":id" => $_GET['id']
    ]);

    $livro = $stmt->fetch(PDO::FETCH_ASSOC);

    $titulo = $livro['titulo'];
    $subtitulo = $livro['subtitulo'];
    $autor = $livro['autor'];
    $edicao = $livro['edicao'];
    $editora = $livro['editora'];
    $ano_publi = $livro['ano_publi'];

    if (isset($_POST['editLivro'])) {

        $titulo = $_POST['titulo'];
        $subtitulo = $_POST['subtitulo'];
        $autor = $_POST['autor'];
        $edicao = $_POST['edicao'];
        $editora = $_POST['editora'];
        $ano_publi = $_POST['ano_publi'];

        $sql = "UPDATE livros SET titulo=:titulo, subtitulo=:subtitulo, autor=:autor, edicao=:edicao, editora=:editora, ano_publi=:ano_publi WHERE id=:id";
    
        $pdo = Conexao::conectar('conf.ini');
        
        $stmt = $pdo->prepare($sql);
    
        $modificacoes = $stmt->execute([
            ":titulo" => $titulo,
            ":subtitulo" => $subtitulo,
            ":autor" => $autor,
            ":edicao" => $edicao,
            ":editora" => $editora,
            ":ano_publi" => $ano_publi,
            ":id" => $_GET['id']
        ]);
    
        header('Location: livros.php');

    }
}
