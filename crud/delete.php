<?php

require_once "db/Conexao.php";

if(!isset($_SESSION)) {
    session_start();  
} 



$sql = "DELETE FROM livros WHERE user_id = :id";

$pdo = Conexao::conectar("conf.ini");

$stmt = $pdo->prepare($sql);

$qtdLinhas = $stmt->execute([
    ":id" => $_SESSION["user_id"]
]);
