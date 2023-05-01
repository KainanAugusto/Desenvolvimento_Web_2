<?php
session_start();

$user = filter_input(INPUT_POST, "user", FILTER_SANITIZE_SPECIAL_CHARS);
$pass = filter_input(INPUT_POST, "pass", FILTER_SANITIZE_SPECIAL_CHARS);

if ($user == 'user@email' && $pass == "pass") {
    $_SESSION["user"] = $user;
    header("Location: index.php");
}else {
    unset($_SESSION["user"]);
}

require "padrao/header.php";
?>

<div class="container">
        <div class="bg-light p4 mb-4 rounded">
            <h1>Autenticação</h1>
        </div>
    <div class= 'p-3 mb-2 text-danger'>
        <h2>Erro na autenticação:</h2>
        <h3>Usuário e senha incorretos!</h3>
    </div>
    <a href='login.php' class='nav-link active' aria-current='page'>Voltar</a>
</div>

<?php

require "padrao/footer.php";
?>