<?php

session_start();

include_once dirname(__FILE__,3).'/config/config.php';
include_once dirname(__FILE__,3).'/src/controllers/functions.php';

$Error = "";

$username = $_POST["username"];
$password = $_POST["password"];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(Logged($_SESSION) == true){
        //session_destroy();
    }

    //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
    $password = md5($password);
    $row = DB::queryFirstRow("SELECT * FROM users WHERE username = '$username' && senha = '$password' LIMIT 1");

    if($row == null){
        $error = 'logue por favor!!!';
        Invalid($error);
    }else {
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        if(isset($row)){
            $_SESSION['UserId'] = $row['id'];
            $_SESSION['UserNome'] = $row['nome'];
            $_SESSION['UserName'] = $row['username'];
            $_SESSION['UserCelular'] = $row['celular'];
            $_SESSION['UserEmail'] = $row['email'];
            $_SESSION['UserDate'] = $row['data'];
            $_SESSION['UserHour'] = $row['hora'];
            header("Location: {$_SESSION['HTTP_REFERER']}");
            unset($_SESSION['HTTP_REFERER']);
        }
    }
}