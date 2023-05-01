<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>Contador</h1>
<body>
    <?php
    $inicio = isset($_POST['inicio']) ? filter_var($_POST['inicio'], FILTER_SANITIZE_NUMBER_INT) : false;
    $final = isset($_POST['final']) ? filter_var($_POST['final'], FILTER_SANITIZE_NUMBER_INT) : false;
    $incremento = isset($_POST['incremento']) ? filter_var($_POST['incremento'], FILTER_SANITIZE_NUMBER_INT) : false;
    echo "<h1>Parâmetros enviados</h1> <br>";
    echo "Início : $inicio  <br>";
    echo "Final : $final  <br>";
    echo "Incremento : $incremento <br>";
    if ($inicio == 0) {
        echo null;
    } else if ($inicio > $final) {
        for ($i = $inicio; $i >= $final; $i -= $incremento) {
            echo $i . " ";
        }
    } else if ($inicio < $final) {
        for ($i = $inicio; $i <= $final; $i += $incremento) {
            echo $i . " ";
        }
    } else {
        echo "Início e final são iguais: $inicio = $final";
    }
    
    ?>
</body>

</html>