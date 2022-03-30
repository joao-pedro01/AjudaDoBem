<?php
    function validaCPF($Cpf) {
 
        // Extrai somente os números
        $Cpf = preg_replace( '/[^0-9]/is', '', $Cpf );
         
        // Verifica se foi informado todos os digitos corretamente
        if (strlen($Cpf) != 11) {
            return false;
        }
    
        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $Cpf)) {
            return false;
        }
    
        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $Cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($Cpf[$c] != $d) {
                return false;
            }
        }
        return true;
    
    }
