<?php

    require __DIR__ . '/../classes/Pessoa.php';
    require __DIR__ . '/../classes/Remedio.php';
    require __DIR__ . '/../classes/Request.php';

    $diaInteiro = 24;

    $nome = $_POST['nome'] ? $_POST['nome'] : 0;
    $remedio = $_POST['remedio'] ? $_POST['remedio'] : 0;
    $intervalo = $_POST['intervalo'] ? $_POST['intervalo'] : 0;
    $horaInicial = $_POST['horario_inicial'] ? intval($_POST['horario_inicial']) : 0;

    $request = new Request();

    echo "<h2> HORÁRIOS DO SEU REMÉDIO </h2>";
    echo "<br><br>";

    $horaAtualizada = $intervalo + $horaInicial;
    
    switch ($intervalo) {
        case 2:
            $resultado = $diaInteiro / $intervalo;
            $horaAtualizada = $intervalo + $horaInicial;
            echo " - $resultado AM  <br> - $resultado PM";
            break;

        case 4:     
            $resultado = $diaInteiro / $intervalo;
            for ($x=$horaInicial; $x < $diaInteiro; $x = $x + 4) { 
                $horaAtualizada = $x + $intervalo;
                if ($x >= 12) {
                    echo " <br> - PM $x"; 
                } else {
                    echo " <br> - AM $x";    
                }
            }
            echo "<br><br>Seu remédio é de $intervalo/$intervalo horas. ";
            break;

        case 6:
            $resultado = $diaInteiro / $intervalo;
            for ($x=$horaInicial; $x < $diaInteiro; $x = $x + 6) { 
                if ($x >= 12) {
                    echo " <br> - PM $x"; 
                } else {
                    echo " <br> - AM $x";    
                }
            }
            echo "<br><br>Seu remédio é de $intervalo/$intervalo horas. ";
            break;
        case 8:
            $resultado = $diaInteiro / $intervalo;
            for ($x=$horaInicial; $x < $diaInteiro; $x = $x + 8) { 
                if ($x >= 12) {
                    echo " <br> - PM $x"; 
                } else {
                    echo " <br> - AM $x";    
                }
            }
            echo "<br><br>Seu remédio é de $intervalo/$intervalo horas. ";
            break;
            case 12:
                $resultado = $diaInteiro / $intervalo;
                for ($x=$horaInicial; $x < $diaInteiro; $x = $x + 12) { 
                    if ($x >= 12) {
                        echo " <br> - PM $x"; 
                    } else {
                        echo " <br> - AM $x";    
                    }
                    
                }
                echo "<br><br>Seu remédio é de $intervalo/$intervalo horas. ";
                break;
            
    }
