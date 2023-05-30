
<?php

    require __DIR__ . '/../classes/Pessoa.php';
    require __DIR__ . '/../classes/Remedio.php';
    require __DIR__ . '/../classes/Request.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title> views </title>
    
</head>
<body>

    <div class='form'>
        <form action="dados.php" method="POST"> 
            <strong>Nome:</strong> <input type="text" name="nome"> <br><br>
            <strong>Remédio:</strong> <input type="text" name="remedio"> <br><br>
            <strong>Intervalo (horas):</strong> <input type="text" name="intervalo"> <br><br>
            <strong>horário inicial:</strong> <input type="time" name="horario"> <br><br>
            <input type="submit" value="Enviar">
            <br><br><br>
        </form>
    </div>
    
</body>
</html>