
require "Conexao.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$password = $_POST["password"];
$password_c = $_POST["password_confirmation"];

$sql = '';

/* if ($password !== $password_c) {
    echo "<script>alert('As senhas não estãos iguais')</script>";
    die;
} else { */
    $sql = "INSERT INTO usuarios(nome, email, senha)" .
           "VALUES('{$nome}', '{$email}', '{$password}')";

    $stmt = $pdo->prepare($sql);

    $qtdLinhas = $stmt->execute([
        ':nome' => $nome,
        ':email' => $email,
        ':senha' => $password,
    ]);
    header("Location: ../dashboard.html");
/* } */
