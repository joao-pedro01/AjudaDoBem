<?php
include_once __DIR__.'/../../config/config.php';
include_once '../controllers/functions.php';

// Processando dados do formulário quando o formulário é enviado
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $birthDate = $_POST["datenasc"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $cep = $_POST["cep"];
    $cell = $_POST["phone"];
    $cell = str_replace(array("(", "-", ")", " "), '', $cell);

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
}else if(strcmp($username, $_SESSION['UserName']) != 0){
    $sql = DB::queryFirstField("SELECT COUNT(*) FROM users WHERE username = '{$username}'");
    DB::disconnect();
    if($sql[0]){
        $error = "Usuário já exite";
        Invalid($error);
    }
}

    /*
        INSERT USER IN TABLE USERS
    */
    try{
        $date_time = DateTime();
        DB::update('users', [
            'name' => $name,
            'birth_date' => $birthDate,
            'username' => $username,
            'email' => $email,
            'cep' => $cep,
            'cell' => $cell,
            'modified' => date('Y-m-d H:i:s')
        ], "id=%i", $_SESSION['UserId']
        );

        $_SESSION['UserNome'] = $name;
        $_SESSION['UserName'] = $username;
        $_SESSION['UserCep'] = $cep;
        $_SESSION['UserCelular'] = $cell;
        $_SESSION['UserEmail'] = $email;
        $_SESSION['BirthDate'] = $birthDate;

        DB::disconnect();

        header("location: ../views/pages/update_register.php");
    }catch(Exception $e) {
        dd($e);
    }
}else {
    header("location: ../index.php");
}