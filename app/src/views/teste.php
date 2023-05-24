<?php

$day = 24;
$intervalo = 12;
$horaInicial = 12;
for ($x=0; $x<=24; $x++ ) {
    $diaInteiro[] = $x;
    }
    $count = 0;
    foreach ($diaInteiro as $key=>$value) {
        if ($value >= $horaInicial && $value%$intervalo == 0) {
            $count+=1;
            $horaAtualizada = $day / $intervalo;
            var_dump($count);
        }
    }

    //var_dump($count);



