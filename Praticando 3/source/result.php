<?php
    $titulo_pagina = filter_input(INPUT_POST, "pg_titulo", FILTER_SANITIZE_SPECIAL_CHARS);
    $corpo_texto = filter_input(INPUT_POST, "pg_texto", FILTER_SANITIZE_SPECIAL_CHARS);
    $cor_texto = filter_input(INPUT_POST, "pg_cor_texto", FILTER_SANITIZE_SPECIAL_CHARS);
    $img_pagina = filter_input(INPUT_POST, "img_pg", FILTER_SANITIZE_SPECIAL_CHARS);
    $link_pagina = filter_input(INPUT_POST, "link_pg", FILTER_SANITIZE_SPECIAL_CHARS);
    $cor_fundo = filter_input(INPUT_POST, "pg_cor_fundo", FILTER_SANITIZE_SPECIAL_CHARS);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - <?php echo $titulo_pagina ?></title>
    <style>
        body {
            background-color: <?php echo $cor_fundo; ?>;
        }

        h1, p {
            color: <?php echo $cor_texto; ?>;
        }
    </style>
</head>
<body>
    <?php
        echo "<h1>$titulo_pagina</h1><hr>";

        echo "<p>$corpo_texto</p><br>";

        echo "<img src=$img_pagina><br>";

        echo "<a href=$link_pagina>$link_pagina</a>";
    ?>
</body>
</html>