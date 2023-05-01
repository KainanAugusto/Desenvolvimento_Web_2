<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body{
        padding: 1vw;
        font-size: small;
    }
</style>
<body>
<h2>Formulário PHP</h2>


    <form method="POST" action="destinopost.php">
       
    <div class="mb-3 col-2">
        <label for="inicio">Início:</label>
        <input type="number" id="inicio" name="inicio" class="form-control-sm"><br><br>
    </div>

    <div class="mb-3 col-2">
        <label for="final">Final:</label>
        <input type="number" id="final" name="final" class="form-control-sm"><br><br>
    </div>

    <div class="mb-3 col-2">
        <label for="incremento">Incremento:</label>
        <input type="number" id="incremento" name="incremento" class="form-control-sm"><br><br>
    </div>
    <button type="submit" class="btn btn-secondary">Enviar</button>
    <button type="reset" class="btn btn-warning">Limpar</button>
    </form>

</body>
</html>
