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
                    <a class="nav-link" href="dados.php">Home</a>
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
            <input type="text" class="form-control" name="nome" id="exampleFormControlInput1" value="<?php echo !empty($_POST['nome']) ? $_POST['nome'] : ''; ?>">
            <?php
                $nome = !empty($_POST['nome']) ? $_POST['nome'] : '';
                echo FormValidation::stringValidate($nome);
            ?>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Remédio:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="remedio" value="<?php echo !empty($_POST['remedio']) ? $_POST['remedio'] : ''; ?>">
            <?php
                $remedio = !empty($_POST['remedio']) ? $_POST['remedio'] : '';
                echo FormValidation::stringValidate($remedio);
            ?>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Intervalo (horas):</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="intervalo" value="<?php echo !empty($_POST['intervalo']) ? $_POST['intervalo'] : ''; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Horário Inicial</label>
            <input type="time" class="form-control" id="exampleFormControlInput1" name="horario" value="<?php echo !empty($_POST['horario']) ? $_POST['horario'] : ''; ?>">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">ENVIAR</button>
            <a type="reset" class="btn btn-danger" href="dados.php" id="limpar">LIMPAR</a>
        </div>
    </div>
</form>

<?php
$diaInterio = 24;

$nome = !empty($_POST['nome']) ? $_POST['nome'] : 0;
$remedio = !empty($_POST['remedio']) ? $_POST['remedio'] : 0;
$intervalo = !empty($_POST['intervalo']) ? $_POST['intervalo'] : 1;
$horario = !empty($_POST['horario']) ? $_POST['horario'] : 0;

$interacoes = (int) (24 / $intervalo);
$horariosRemedio = [];
$cabecalho = "<h4> HORÁRIOS DO SEU REMÉDIO: </h4>";
$value = " - ";
$tabelaHoraDoRemedio = "
            <table class='table'>
            <thead>
              <tr>
                <th scope='col'>Horários</th>
                <th scope='col'>Remédio</th>
                <th scope='col'>Intervalo</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope='row'> $value </th>
                <td>$remedio</td>
                <td> $intervalo </td>
              </tr>
              <tr>
                <th scope='row'> - </th>
                <td> - </td>
                <td> - </td>
              </tr>
              <tr>
                <th scope='row'> - </th>
                <td> - </td>
                <td> - </td>
              </tr>
            </tbody>
          </table>";

if (empty(FormValidation::stringValidate($nome)) && empty(FormValidation::stringValidate($remedio))) {
    
    switch ($intervalo) {
        case 2:
            for ($i = 0; $i < $interacoes; $i++) {
                $horariosRemedio[] = date('H:i', strtotime($horario . "+" . ($intervalo * ($i + 1)) . " hours"));
            }
            
            echo $cabecalho;
            foreach ($horariosRemedio as $value) {
                $valor = $value;
                $tabelaHoraDoRemedio.= "<th scope='row' >$valor h<th><br>";
                
            }
            echo $tabelaHoraDoRemedio;
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

}

?>

</body>

</html>

