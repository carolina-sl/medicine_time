<?php


class FormValidation {
    
    public function nameValidate($nome) {
        
        if (strlen($nome) < 2 && $_SERVER['REQUEST_METHOD'] == 'POST') {
            echo "Seu nome deve conter pelo menos 2 caracteres";
        }
    return true;
    }

}