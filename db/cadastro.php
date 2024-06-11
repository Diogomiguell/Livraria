<?php

$nome = $_POST["name"];
$email = $_POST["email"];
$senha = $_POST["password"];
$senha_c = $_POST["password_confirmation"];

require "Conexao.php";

$sql = '';

if($senha !== $senha_c) {
    echo "<script>alert('As senhas não estão iguais!')</script>";
} else {
    $sql = "INSERT INTO usuarios(nome, email, senha) VALUES(:nome, :email, :senha)";

    $conf = Conexao::conectar("conf.ini");

    $stmt = $conf->prepare($sql);

    $qtdLinhas = $stmt->execute([
        ':nome' => $nome,
        ':email' => $email,
        ':senha' => $senha
    ]);
}

header("Location: ../dashboard.html");
