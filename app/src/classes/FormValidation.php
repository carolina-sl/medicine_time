<?php


class FormValidation {
    
    public static function stringValidate($string) {

        if (strlen($string) <= 2 && $_SERVER['REQUEST_METHOD'] == 'POST' && !empty($string)) {
            return "<p style='color:red;'>Esse campo deve conter pelo menos 2 caracteres. </p>";
        }
    }

}