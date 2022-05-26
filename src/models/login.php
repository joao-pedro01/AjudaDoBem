<?php

session_start();

require_once __DIR__.'/../../config/config.php';
require_once __DIR__.'/../controllers/functions.php';

$Error = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
    $password = md5($password);
    $row = DB::queryFirstRow("
        SELECT i.path, u.* FROM users u
        INNER JOIN images i
        ON u.id_image = i.id
        WHERE username LIKE '%$username%' && password = '$password' LIMIT 1;
    ");

    if($row == null){
        $error = 'Senha ou nome de usuário inválido!!!';
        Invalid($error);
    }else {
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        if(isset($row)){
            $_SESSION['UserId'] = $row['id'];
            $_SESSION['UserNome'] = $row['name'];
            $_SESSION['UserName'] = $row['username'];
            $_SESSION['UserCelular'] = $row['cell'];
            $_SESSION['UserEmail'] = $row['email'];
            $_SESSION['UserPicture'] = $row['path'];
        }
        
        if($url = $_GET['url'] == "doacao"){
            header("location: ../views/pages/test/doacao.php");
        }else {
            header("location: ../views/pages/logged.php");
        }
    }
}