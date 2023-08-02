<?php

require __DIR__ . '/../classes/Pessoa.php';
require __DIR__ . '/../classes/Remedio.php';
require __DIR__ . '/../classes/FormValidation.php';
require __DIR__ . '/../elements/header.html';
require __DIR__ . '/../elements/form.php';

?>

<!DOCTYPE html>

<html lang="pt-br">

<?php

$diaInterio = 24;
$nome = !empty($_POST['nome']) ? $_POST['nome'] : 0;
$remedio = !empty($_POST['remedio']) ? $_POST['remedio'] : 0;
$intervalo = !empty($_POST['intervalo']) ? $_POST['intervalo'] : 1;
$horario = !empty($_POST['horario']) ? $_POST['horario'] : 0;
$value = '';

$interacoes = (int) (24 / $intervalo);
$horariosRemedio = [];
$cabecalho = "<h4 align='center'> HORÁRIOS DO SEU REMÉDIO</h4>";

$tabelaHoraDoRemedio = "
        <div class='container'>
            <table class='table table-hover'>
                <thead>
                    <tr>
                        <th scope='row'>Horários</th>
                        <th scope='row'>Remédio</th>
                        <th scope='row'>Intervalo (horas)</th>  
                    </tr>
                <thead>";
$tbody = "
        <tbody>
            <tr>
                <td>$value</td>
                <td>$remedio</td>
                <td>$intervalo</td>
            </tr>
        </tbody>
    </div>";

if (empty(FormValidation::stringValidate($nome)) && empty(FormValidation::stringValidate($remedio))) {
    switch ($intervalo) {
        case 2:
            for ($i = 0; $i < $interacoes; $i++) {
                $horariosRemedio[] = date('H:i', strtotime($horario . "+" . ($intervalo * ($i + 1)) . " hours"));
            }
            echo $cabecalho . "<br>";
            foreach ($horariosRemedio as $value) {
                $tabelaHoraDoRemedio .= 
                    "<tbody>
                        <tr>
                            <td>$value</td>
                            <td>$remedio</td>
                            <td>$intervalo</td>
                        </tr>
                    </tbody>
                </div>";
            }
            echo $tabelaHoraDoRemedio .= "</table>";
            break;

        case 4:
            for ($i = 0; $i < $interacoes; $i++) {
                $horariosRemedio[] = date('H:i', strtotime($horario . "+" . ($intervalo * ($i + 1)) . " hours"));
            }
            echo $cabecalho . "<br>";
            foreach ($horariosRemedio as $value) {
                $tabelaHoraDoRemedio .= "
                    <tbody>
                        <tr>
                            <td>$value</td>
                            <td>$remedio</td>
                            <td>$intervalo</td>
                        </tr>
                    </tbody>
                </div>";
            }
            echo $tabelaHoraDoRemedio .= "</table>";
            break;

        case 6:
            for ($i = 0; $i < $interacoes; $i++) {
                $horariosRemedio[] = date('H:i', strtotime($horario . "+" . ($intervalo * ($i + 1)) . " hours"));
            }
            echo $cabecalho . "<br>";
            foreach ($horariosRemedio as $value) {
                $tabelaHoraDoRemedio .= "
                    <tbody>
                        <tr>
                            <td>$value</td>
                            <td>$remedio</td>
                            <td>$intervalo</td>
                        </tr>
                    </tbody>
                </div>";
            }
            echo $tabelaHoraDoRemedio .= "</table>";
            break;

        case 8:
            for ($i = 0; $i < $interacoes; $i++) {
                $horariosRemedio[] = date('H:i', strtotime($horario . "+" . ($intervalo * ($i + 1)) . " hours"));
            }
            echo $cabecalho . "<br>";
            foreach ($horariosRemedio as $value) {
                $tabelaHoraDoRemedio .= "
                    <tbody>
                        <tr>
                            <td>$value</td>
                            <td>$remedio</td>
                            <td>$intervalo</td>
                        </tr>
                    </tbody>
                </div>";
            }
            echo $tabelaHoraDoRemedio .= "</table>";
            break;

        case 12:
            for ($i = 0; $i < $interacoes; $i++) {
                $horariosRemedio[] = date('H:i', strtotime($horario . "+" . ($intervalo * ($i + 1)) . " hours"));
            }
            echo $cabecalho . "<br>";
            foreach ($horariosRemedio as $value) {
                $tabelaHoraDoRemedio .= "
                    <tbody>
                        <tr>
                            <td>$value</td>
                            <td>$remedio</td>
                            <td>$intervalo</td>
                        </tr>
                    </tbody>
                </div>";
            }
            echo $tabelaHoraDoRemedio .= "</table>";
            break;
    }
}

?>

</body>

</html>

