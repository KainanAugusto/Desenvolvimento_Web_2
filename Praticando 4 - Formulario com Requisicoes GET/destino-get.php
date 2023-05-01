<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testador</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <h1 class="my-3">Destino GET</h1>
        <hr>
        <?php
        $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_SPECIAL_CHARS);
        $cor = filter_input(INPUT_GET, "cor", FILTER_SANITIZE_SPECIAL_CHARS);

        echo "<p>Nome informado: $nome <br>Email: $email</p>";
        ?>
        <br>
        <p>
            <a href="destino-get.php?nome=Testador Principal&email=testador@email.com&cor=<?= $cor ?>">
                Enviar dados [nome = Testador | email = testador@email.com]
            </a>
        </p>
        <p>
            <a href="destino-get.php?nome=Amanda&email=amandinha@email.com&cor=<?= $cor ?>">
                Enviar Dados [nome=Amanda | email= amandinha@email.com]
            </a>
        </p>
        <p>
            <a href="destino-get.php?nome=&email=&cor=white">
                Limpar Tudo
            </a>
        </p>

        <div>
            <a href="destino-get.php?nome= <?= $nome; ?> &email=<?= $email; ?>&cor=red">
                <img class="fotos" src="imagens/vermelho.avif" alt="Hadouken > Imagem de cor vermelha com degradê .avif">
            </a>

            <a href="destino-get.php?nome= <?= $nome; ?> &email=<?= $email; ?>&cor=green">
                <img class="fotos" src="imagens/verde.avif" alt="Imagem de cor Verde com degradê">
            </a>

            <a href="destino-get.php?nome=<?= $nome; ?>&email=<?= $email; ?>&cor=blue">
                <img class="fotos" src="imagens/azul.avif" alt="Tsunami > Foto de cor azul com degradê .avif">
            </a>
        </div>
        <style>
            body {
                background-color: <?php echo $cor; ?>;
            }
        </style>
    </div>

</body>



</html>