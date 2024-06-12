<?php

session_start();

$nome = $_POST["name"];
$email = $_POST["email"];
$senha = $_POST["password"];
$senha_c = $_POST["password_confirmation"];
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

require "Conexao.php";

$sql = '';

if($senha !== $senha_c /*|| empty($dados($_POST['cadastrar'])) */) {
    header("Location: ../pag-cadastro.php");
    $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: verifique se suas informações estão corretas</p>";
} else {
    $sql = "INSERT INTO usuarios(nome, email, senha) VALUES(:nome, :email, :senha)";

    $conf = Conexao::conectar("conf.ini");

    $stmt = $conf->prepare($sql);

    $qtdLinhas = $stmt->execute([
        ':nome' => $nome,
        ':email' => $email,
        ':senha' => $senha
    ]);
    header("Location: ../dashboard.html");
}


