<?php

session_start();

$nome = $_POST["name"];
$email = $_POST["email"];
$senha = $_POST["password"];
$senha_c = $_POST["password_confirmation"];

require "Conexao.php";

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$senha_Hash = password_hash($senha, PASSWORD_DEFAULT);
$senha_c_Hash = password_hash($senha_c, PASSWORD_DEFAULT);

if (!empty($dados['cadastro'])) {
    if (password_verify($senha, $senha_Hash) === password_verify($senha_c, $senha_c_Hash) && strlen($senha) >= 8) {
        header("Location: ../painel.html");
    } else {
        echo '<p style="color: red;">ERROR: As senha estão inválidas!</p>';
        header("Location: ../cadastro-login.html");
    }

    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";

    $pdo = Conexao::conectar('conf.ini');

    $stmt = $pdo->prepare($sql);

    $qtdLinhas = $stmt->execute([
        ':nome' => $nome,
        ':email' => $email,
        ':senha' => $senha 
    ]);
} else {
    unset($dados);
    echo '<p style="color: red;">ERROR: Você não preencheu os campos corretamente!</p>';
    header("Location: ../cadastro-login.html");
}
