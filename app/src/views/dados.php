<?php

    require __DIR__ . '/../classes/Pessoa.php';
    require __DIR__ . '/../classes/Remedio.php';
    require __DIR__ . '/../classes/Request.php';

    $diaInteiro = 24;

    $nome = $_POST['nome'] ? $_POST['nome'] : 0;
    $remedio = $_POST['remedio'] ? $_POST['remedio'] : 0;
    $intervalo = $_POST['intervalo'] ? $_POST['intervalo'] : 0;
    $horarioInicial = $_POST['horario_inicial'] ? intval($_POST['horario_inicial']) : 0;

    $request = new Request();
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="estilos.css">
        <title>Document</title>
        <div class="divh2">
            <h2> HORÁRIOS DO SEU REMÉDIO </h2>
        </div>
        
    </head>
    <body>
        
    </body>
    </html>

<?php

    $horaAtualizada = $intervalo + $horarioInicial;
    switch ($intervalo) {

        case 2:
            $resultado = $diaInteiro / $intervalo;
            echo "<div class='divh2'> - $resultado AM  <br> - $resultado PM";
            echo "<div class='divh2'><br><br>Seu remédio é de $intervalo/$intervalo horas. </div>";
            break;

        case 4:     
            $resultado = $diaInteiro / $intervalo;
            for ($x=$horarioInicial; $x < $diaInteiro; $x = $x + 4) { 
                if ($x >= 12 && !empty($horarioInicial)) {
                    echo "<div class='divh2'><br> - PM $x </div>"; 
                } else {
                    echo "<div class='divh2'><br> - AM $x </div>";    
                }
            }
            echo "<div class='divh2'><br><br>Seu remédio é de $intervalo/$intervalo horas. </div>";
            break;

        case 6:
            $resultado = $diaInteiro / $intervalo;
            for ($x=$horarioInicial; $x < $diaInteiro; $x = $x + 6) { 
                if ($x >= 12) {
                    echo "<div class='divh2'><br> - PM $x </div>"; 
                } else {
                    echo "<div class='divh2'><br> - AM $x </div>";    
                }
            }
            echo "<div class='divh2'><br><br>Seu remédio é de $intervalo/$intervalo horas. </div>";
            break;
        case 8:
            $resultado = $diaInteiro / $intervalo;
            for ($x=$horarioInicial; $x < $diaInteiro; $x = $x + 8) { 
                if ($x >= 12) {
                    echo "<div class='divh2'><br> - PM $x </div>";
                } else {
                    echo "<div class='divh2'><br> - AM $x </div>";   
                }
            }
            echo "<div class='divh2'><br><br>Seu remédio é de $intervalo/$intervalo horas. </div>";
            break;
            case 12:
                $resultado = $diaInteiro / $intervalo;
                for ($x=$horarioInicial; $x < $diaInteiro; $x = $x + 12) { 
                    if ($x >= 12) {
                        echo "<div class='divh2'><br> - PM $x </div>";
                    } else {
                        echo "<div class='divh2'><br> - AM $x </div>";    
                    }
                    
            }
            echo "<div class='divh2'><br><br>Seu remédio é de $intervalo/$intervalo horas. </div>";
            break;
            
    }
