<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');

if (!isset($_SESSION["user"]) && empty($_SERVER["user"])) {
    header("Location: index.php");
}

require "padrao/header.php";
?>

<div class="container">
        <div class="bg-light p4 mb-4 rounded">
            <h1>Autenticação</h1>
        </div>
        <?php
            echo "Nome: Usuario";
            echo "</br>";
            echo "Email: user@email";
            echo "</br>";
            echo "Telefone: (99) 99999-9999";
            echo "</br>";
            echo "Endereço: Bairro, Cidade, n°";
            echo "</br>";
            echo "Estado: SP";
            echo "</br>";

            if (isset($_COOKIE['cookie'])) {
                echo $_COOKIE['cookie'];
            }else {
                echo "Você nunca passou aqui.";
                setcookie('cookie', 'Você já passou aqui em '.date('d/m/y'));
            }
        ?>

</div>