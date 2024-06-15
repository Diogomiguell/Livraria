<?php

session_start();

$nome = $_POST["name"];
$email = filter_input($_POST["email"], FILTER_SANITIZE_EMAIL);
$senha = password_hash($_POST["password"], FILTER_DEFAULT);
$senha_c = $_POST["password_confirmation"];

require "Conexao.php";

$sql = '';

if(isset($_POST['dados']) && ($email and $senha) && !empty($nome) && password_verify($senha, $senha_c) && strlen($senha) >= 8) {
    $sql = "INSERT INTO usuarios(nome, email, senha) VALUES(:nome, :email, :senha)";

    $conf = Conexao::conectar("conf.ini");

    $stmt = $conf->prepare($sql);

    $qtdLinhas = $stmt->execute([
        ':nome' => $nome,
        ':email' => $email,
        ':senha' => $senha
    ]);
    /* header("Location: ../pag-login.php"); */
} else {
    header("Location: ../pag-cadastro.php");
    $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: verifique se suas informações estão corretas</p>";
}
