<?php
/*
    dd( String ) : Null 
    Dump and Die
    Mostra a variavel e finaliza o programa
*/
function dd($string){
    print_r($string);
    exit;
}
/* 
    datetime( date/time )
*/
function DateTime(){
    $DateTime = array(
        'date' => date('Y-m-d'),
        'time' => date('H:i:s')
    );

    return $DateTime;
}
/* 
    function para tratamento de erros
*/
function validate($field, $type){
    $cpf = false;

    switch($type){
        case 'empty':
            if(empty(trim($field))){
                $Error = 'O campo Nome não pode estar vazio!!!';
                Invalid($Error);
            }
            break;

        // Validação de erro caso algum caractere invalido seja inputado no $field
        case 'InvalidChar':
            if(!preg_match('/^[a-zA-Z0-9_]+$/', trim($field))){
                $Error = "O nome de usuário pode conter apenas letras, números e _.";
                Invalid($Error);
            }
            break;
            
        case 'Cpf':
            $cpf = validaCPF($field);
            if($cpf == false){
                $Error = 'CPF informado é inválido';
                Invalid($Error);
            }
            break;
    }
}
/*
    Logged ( String ) : Boolean 
    Retona true caso usuario estiver logado
*/
function Logged($logged){
    // Correção para não exibir o warning de vetor vazio
    // O que os olhos não vêem, o coração não sente
    error_reporting(0);
    if($logged['UserName'] == null){
        return false;
    }else {
        return true;
    }
}
/* 
    Directory ( String ) : $Directory
    Retorna o diretório de pastas
*/
function Directory(){
    $Directory = "/AjudaDoBem";

    return $Directory;
}
/*
    function Erro caso seja inválido
*/
function Invalid($string){
    //$_SERVER['error'] = $string;
    echo '<body onload="window.history.back();">';
    echo '<script>';
    echo "alert('{$string}')";
    echo '</script>';
    exit;
    //return $_SERVER['error'];
}
/*
    function Sucess caso operação sejá bem sucedida
*/
function Sucess($string){
    echo '<body onload="window.history.back();">';
    echo '<script>';
    echo "alert('{$string}')";
    echo '</script>';

    exit();
}
/*
    validaCPF( String ) : Boolean
*/
function validaCPF($Cpf){

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