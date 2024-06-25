<?php

if (isset($_POST['addLivro'])) {

    $titulo = $_POST['titulo'];
    $subT = $_POST['subtitulo'];
    $autor = $_POST['autor'];
    $edicao = $_POST['edicao'];
    $editora = $_POST['editora'];
    $ano_publi = $_POST['ano'];

    require_once "db/Conexao.php";
        
    $sql = "INSERT INTO livros (user_id, titulo, subtitulo, autor, edicao, editora, ano_publi) VALUES (:id_user, :titulo, :subtitulo, :autor, :edicao, :editora, :ano_publi)";

    $pdo = Conexao::conectar('conf.ini');

    $stmt = $pdo->prepare($sql);

    $qtdLinhas = $stmt->execute([
        ":id_user" => $_SESSION['user_id'],
        ":titulo" => $titulo,
        ":subtitulo" => $subT,
        ":autor" => $autor,
        ":edicao" => $edicao,
        ":editora" => $editora,
        ":ano_publi" => $ano_publi
    ]);

    unset($_POST);

    header("Location: livros.php");   
    
}
