<?php

session_start();

$nome = $_POST["name"];
$email = $_POST["email"];
$senha = password_hash($_POST["password"], FILTER_DEFAULT);
$senha_c = password_hash($_POST["password_confirmation"], FILTER_DEFAULT);

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
    header("Location: ../pag-login.php");
} else {
    header("Location: ../pag-cadastro.php");
    echo "<p style='color: #ff0000'>Erro: verifique se suas informações estão corretas</p>";
}
