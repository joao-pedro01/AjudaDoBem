<?php

include_once dirname(__FILE__,3).'/config/config.php';
include_once '../controllers/functions.php';


$name = $_POST["name"];
$birthDate = $_POST["datenasc"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$cell = $_POST["phone"];
$cpf = $_POST["cpf"];

// Processando dados do formulário quando o formulário é enviado
if($_SERVER["REQUEST_METHOD"] == "POST"){
    /* 
        input Name
        Erro caso input vazio
    */
    if(empty(trim($name))){
        $error = 'O campo Nome não pode estar vazio!!!';
        Invalid($error);
    }
    /*
        input UserName
        Erro caso input vazio
    */
    if(empty(trim($username))){
        $error = "O nome de usuário não pode estar vazio!!!";
        Invalid($error);

    
    // Validação de erro caso algum caractere invalido seja inputado no $UserName
    }else if(!preg_match('/^[a-zA-Z0-9_]+$/', trim($username))){
        $error = "O nome de usuário pode conter apenas letras, números e _.";
        Invalid($error);
    /*
        Caso não encontre erro.
        Procura por $usuario no DB
    */   
    }else {
        $sql = DB::queryFirstField("SELECT COUNT(*) FROM users WHERE username = '{$username}'");
        if($sql[0]){
            DB::disconnect();

            $error = "Usuário já exite";
            Invalid($error);
        }
    }
    /*
        input CPF
        Erro caso input vazio
    */
    if(empty(trim($cpf))){
        $error = "O campo CPF não pode estar vazio!!!";
        Invalid($error);
    }else {
        // function que valida o CPF
        $cpf = validaCPF($cpf);

        // Erro se o CPF for inválido
        if($cpf != true){
            $error = 'CPF informado é inválido';
            Invalid($error);
        }else {
            $sql = DB::queryFirstField("SELECT COUNT(*) FROM users WHERE cpf = '{$cpf}'");
            DB::disconnect();

            if($sql[0]){
                $error = "CPF já cadastrado no banco de dados.";
                Invalid($error);
            }
        }
    }
    /*
        input password
    */
    if(empty(trim($password))){
        $error = "Senha é obrigatório e não pode estar vazio!!!";
        Invalid($error);
    // Validação de erro caso algum caractere invalido seja inputado no $UserName
    }else {
        // criptografia da senha
        $password = md5($password);    
    }
    /*
        INSERT TABLE USERS
    */
    if (false){
        $error = "Algo deu errado";
        Invalid($error);
    }else {
        $date_time = DateTime();
        DB::insert('users', [
            'id_type' => 1,
            'id_image' => 1,
            'name' => $name,
            'birth_date' => $birthDate,
            'username' => $username,
            //'mail' => $email,
            'password' => $password,
            'cell' => $cell,
            'cpf' => $cpf,
            ]);
        $sql = DB::queryFirstField("SELECT COUNT(*) FROM users WHERE username = '{$username}'");
        DB::disconnect();

        if($sql[0]){
            header("location: ../views/pages/login.php");
            $sucess =  'Usuário cadastrado com sucesso!!!.';
            Sucess($sucess);
            //Invalid($Error);
        }
    }
}

?>