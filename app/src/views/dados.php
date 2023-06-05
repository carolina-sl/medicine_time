<?php

require __DIR__ . '/../classes/Pessoa.php';
require __DIR__ . '/../classes/Remedio.php';
require __DIR__ . '/../classes/Request.php';
require __DIR__ . '/../classes/FormValidation.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <title>hora do remédio</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">
       <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
            </ul>
        </div>
    </nav>

<form action="dados.php" method="POST">
    <div class="container">
        <div class="mt-3">
            <h2> Hora do remédio </h2>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome:</label>
            <input type="text" class="form-control" name="nome" id="exampleFormControlInput1" value="<?php echo !empty($_POST['nome']) ? $_POST['nome'] : ''; ?>" required>
            <?php
                $nome = !empty($_POST['nome']) ? $_POST['nome'] : 0;
                $nomeValidate = new FormValidation();
                $nomeValidate->nameValidate($nome);
            ?>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Remédio:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="remedio" value="<?php echo !empty($_POST['remedio']) ? $_POST['remedio'] : ''; ?>" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Intervalo (horas):</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="intervalo" value="<?php echo !empty($_POST['intervalo']) ? $_POST['intervalo'] : ''; ?>" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Horário Inicial</label>
            <input type="time" class="form-control" id="exampleFormControlInput1" name="horario" value="<?php echo !empty($_POST['horario']) ? $_POST['horario'] : ''; ?>" required>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">ENVIAR</button>
            <button type="reset" class="btn btn-danger" href="index.php">LIMPAR</button>
        </div>
    </div>
</form>

<?php

$diaInterio = 24;
var_dump($_SERVER['REQUEST_METHOD']);
$nome = !empty($_POST['nome']) ? $_POST['nome'] : 0;
$remedio = !empty($_POST['remedio']) ? $_POST['remedio'] : 0;
$intervalo = !empty($_POST['intervalo']) ? $_POST['intervalo'] : 1;
$horario = !empty($_POST['horario']) ? $_POST['horario'] : 0;


$interacoes = (int) (24 / $intervalo);
$horariosRemedio = [];
$cabecalho = "<h2> OLÁ $nome, HORÁRIOS DO SEU REMÉDIO </h2>";


switch ($intervalo) {

    case 2:
        for ($i = 0; $i < $interacoes; $i++) {
            $horariosRemedio[] = date('H:i', strtotime($horario . "+" . ($intervalo * ($i + 1)) . " hours"));
        }
        echo $cabecalho;
       
        foreach ($horariosRemedio as $value) {
            echo $value . " h<br>";
        }
        echo "<pre>";
        echo "<br><h3>Seu remédio é de $intervalo/$intervalo horas.<h3>";
        break;

    case 4:
        for ($i = 0; $i < $interacoes; $i++) {
            $horariosRemedio[] = date('H:i', strtotime($horario . "+" . ($intervalo * ($i + 1)) . " hours"));
        }
        echo $cabecalho;
        foreach ($horariosRemedio as $value) {
            echo $value . " h<br>";
        }
        echo "<pre>";
        echo "<br><h3>Seu remédio é de $intervalo/$intervalo horas.<h3>";
        break;

    case 6:
        for ($i = 0; $i < $interacoes; $i++) {
            $horariosRemedio[] = date('H:i', strtotime($horario . "+" . ($intervalo * ($i + 1)) . " hours"));
        }
        echo $cabecalho;
        foreach ($horariosRemedio as $value) {
            echo $value . " h<br>";
        }
        echo "<pre>";
        echo "<br><h3>Seu remédio é de $intervalo/$intervalo horas.<h3>";
        break;

    case 8:
        for ($i = 0; $i < $interacoes; $i++) {
            $horariosRemedio[] = date('H:i', strtotime($horario . "+" . ($intervalo * ($i + 1)) . " hours"));
        }
        echo $cabecalho;
        foreach ($horariosRemedio as $value) {
            echo $value . " h<br>";
        }
        echo "<pre>";
        echo "<br><h3>Seu remédio é de $intervalo/$intervalo horas.<h3>";
        break;

    case 12:
        for ($i = 0; $i < $interacoes; $i++) {
            $horariosRemedio[] = date('H:i', strtotime($horario . "+" . ($intervalo * ($i + 1)) . " hours"));
        }
        echo $cabecalho;
        foreach ($horariosRemedio as $value) {
            echo $value . " h<br>";
        }
        echo "<pre>";
        echo "<br><h3>Seu remédio é de $intervalo/$intervalo horas.<h3>";
        break;
}

?>

</body>

</html>

