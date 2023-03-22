
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
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> views </title>
    
    <form action="dados.php" method="POST">
                
                <strong>Nome:</strong> <input type="text" name="nome"> <br><br>
                <strong>Remédio:</strong> <input type="text" name="remedio"> <br><br>
                <strong>Intervalo (horas):</strong> <input type="text" name="intervalo"> <br><br>
                <strong>horário:</strong> <input type="text" name="horario"> <br><br>
                
                <input type="submit" value="Enviar">
                <br><br><br>
                
            </form>
    
</head>
<body>
    
</body>
</html>