<?php

require "Conexao.php";

$email = $_POST['email'];
$passaword = $_POST['passaword'];

$sql = "SELECT email, senha FROM usuarios WHERE email ";

if ($sql) {
     header("Location: ../painel.html");
     return;
} else {
     header("Location: ../pag-login.php");
     echo "<script>alert('Email ou senha incorretos!')</script>";
}
