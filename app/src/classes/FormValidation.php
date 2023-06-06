<?php


class FormValidation {
    
    public static function stringValidate($string) {

        if (strlen($string) <= 2 && $_SERVER['REQUEST_METHOD'] == 'POST') {
            return "<p style='color:red;'>Seu nome deve conter pelo menos 2 caracteres </p>";
        }
    }

}