<?php

$dsn = "mysql:host=localhost;dbname=livraria";
$user = "root";
$password = "";
$pdo = new PDO(
    $dsn,
    $user,
    $password
);

if ($pdo) {
    echo "Usuário registrado!";
}
