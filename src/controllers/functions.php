<?php
/*
    dd( String ) : Null 
    Dump and Die
    Mostra a variavel e finaliza o programa
*/
function dd($string){
    echo '<pre>';
    print_r($string);
    echo '</pre>';
    exit;
}
/* 
    Category ( string ) : int
    Return id category
*/
function CategoryProduct($string){
    $id = 0;

    switch ($string) {
        case 'alimentos':
            $id = 3;
            break;
            
        case 'higiene':
            $id = 2;
            break;

        case 'moveis':
            $id = 4;
            break;

        case 'roupas':
            $id = 5;
            break;

        case 'lazer':
            $id = 1;
            break;
        
        case 'eletronicos':
            $id = 6;
            break;

        default:
            echo 'Digite uma opção!!!';
            break;
    }

    return $id;
}
function CreateImage($user, $dir_publi, $file, $image){
    /* variaveis que cria nome dos diretorios */
            $path = "../views/images/upload";
            $dir_user = "{$user["UserName"]}";
            $dir_user = base64_encode($dir_user);
            $dir_publi = base64_encode($dir_publi);
            try {
                if(!file_exists("$path/$dir_user/$dir_publi/")){
                    mkdir("$path/$dir_user/$dir_publi", 0777, true);
                    
                    // Move o arquivo da pasta temporaria de upload para a pasta de destino
                    if(move_uploaded_file($file["tmp_name"], "$path/$dir_user/$dir_publi/".$image)){
                        echo "Arquivo enviado com sucesso!";
                        $path = "/AjudaDobem/src/views/images/upload";
                        $path = "$path/$dir_user/$dir_publi/$image";
                    } else{
                        echo "Erro, o arquivo não pode ser enviado.";
                    }
                }
                
                return $path;

            } catch (\Throwable $th) {
                throw $th;
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