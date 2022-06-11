<?php

require_once __DIR__.'/../../config/config.php';
require_once __DIR__.'/../controllers/functions.php';

$Error = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
    $password = md5($password);
    try{
        $row = DB::queryFirstRow("
            SELECT i.path, u.* FROM users u
            INNER JOIN images i
            ON u.id_image = i.id
            WHERE username LIKE '%$username%' || cpf = '$username' && password = '$password' && is_active = true LIMIT 1;
        ");
    }catch(Exception $e){
        dd($e);
    }

    if($row == null){
        $error = 'Senha ou nome de usuário inválido!!!';
        Invalid($error);
    }else {
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        if(isset($row)){
            $_SESSION['UserId'] = $row['id'];
            $_SESSION['UserNome'] = $row['name'];
            $_SESSION['UserCpf'] = $row['cpf'];
            $_SESSION['UserName'] = $row['username'];
            $_SESSION['UserCelular'] = $row['cell'];
            $_SESSION['UserEmail'] = $row['email'];
            $_SESSION['BirthDate'] = $row['birth_date'];
            $_SESSION['UserPicture'] = $row['path'];
        }
        
        if($url = $_GET['url'] == "doacao"){
            header("location: ../views/pages/doacao.php");
        }else {
            header("location: ../views/pages/logged.php");
        }
    }
}