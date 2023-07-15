<?php


class FormValidation {
    
    public static function stringValidate($string) {

        if (strlen($string) <= 2 && $_SERVER['REQUEST_METHOD'] == 'POST' && !empty($string)) {
            return "<p style='color:red;'>Esse campo deve conter pelo menos 2 caracteres. </p>";
        }
    }

    public static function intervaloValidate($intervalo) {
        $arrayValores = [2, 4, 6, 8, 12];
        
        if (!empty($intervalo) && !in_array($intervalo, $arrayValores)) {
            return "<p style='color:red;'> Valor inválido.</p>";
        }

    }

}