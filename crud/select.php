<?php

require_once "db/Conexao.php";

$sql = "SELECT * FROM livros WHERE user_id = :id";

$pdo = Conexao::conectar("conf.ini");

$stmt = $pdo->prepare($sql);

$qtdLinhas = $stmt->execute([
    ":id" => $_SESSION["user_id"]
]);
    