<?php

    require __DIR__ . '/../classes/Pessoa.php';
    require __DIR__ . '/../classes/Remedio.php';
    require __DIR__ . '/../classes/Request.php';


    $diaInterio = 24;

    $nome = $_POST['nome'] ? $_POST['nome'] : 0;
    $remedio = $_POST['remedio'] ? $_POST['remedio'] : 0;
    $intervalo = $_POST['intervalo'] ? $_POST['intervalo'] : 0;

    // construção dos horários:

    //var_dump($_REQUEST);
    // var_dump($_SERVER);

    $request = new Request();

    echo "HORÁRIOS DO SEU REMÉDIO";
    echo "<br><br>";

    switch ($intervalo) {

        case 2:
            $resultado = $diaInterio / $intervalo;
            echo " - $resultado AM  <br> - $resultado PM";
            break;

        case 4:     
            $resultado = $diaInterio / $intervalo;
            for ($x=0; $x < $diaInterio; $x = $x + 4) { 
                if ($x >= 12) {
                    echo " <br> - PM $x"; 
                } else {
                    echo " <br> - AM $x";    
                }
            }
            echo "<br><br>Seu remédio é de $intervalo/$intervalo horas. ";
            break;

        case 6:
            $resultado = $diaInterio / $intervalo;
            for ($x=0; $x < $diaInterio; $x = $x + 6) { 
                if ($x >= 12) {
                    echo " <br> - PM $x"; 
                } else {
                    echo " <br> - AM $x";    
                }
            }
            echo "<br><br>Seu remédio é de $intervalo/$intervalo horas. ";
            break;
        case 8:
            $resultado = $diaInterio / $intervalo;
            for ($x=0; $x < $diaInterio; $x = $x + 8) { 
                if ($x >= 12) {
                    echo " <br> - PM $x"; 
                } else {
                    echo " <br> - AM $x";    
                }
            }
            echo "<br><br>Seu remédio é de $intervalo/$intervalo horas. ";
            break;
            case 12:
                $resultado = $diaInterio / $intervalo;
                for ($x=0; $x < $diaInterio; $x = $x + 12) { 
                    if ($x >= 12) {
                        echo " <br> - PM $x"; 
                    } else {
                        echo " <br> - AM $x";    
                    }
                    
                }
                echo "<br><br>Seu remédio é de $intervalo/$intervalo horas. ";
                break;
            
    }
