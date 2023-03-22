
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
</head>
<body>
    <div>
        <form action="dados.php" method="POST">
            <strong>Nome:</strong> <input type="text" name="nome"> <br><br>
            <strong>Remédio:</strong> <input type="text" name="remedio"> <br><br>
            <strong>Intervalo (horas):</strong> <input type="text" name="intervalo"> <br><br>
            <strong> Digite o horário inícial:</strong> <input type="time" name="horario_inicial" required> <br><br>
            <input type="submit" value="Calcular">
            <br><br><br>
        </form>
    </div>
</body>
</html>