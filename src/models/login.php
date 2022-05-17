<?php

session_start();

include_once dirname(__FILE__,3).'/config/config.php';
include_once dirname(__FILE__,3).'/src/controllers/functions.php';

$Error = "";

$username = $_POST["username"];
$password = $_POST["password"];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
    $password = md5($password);
    $row = DB::queryFirstRow("
        SELECT * FROM users
        INNER JOIN images
        ON users.id_image = images.id
        WHERE username LIKE '%$username%' && password = '$password' LIMIT 1;
    ");

    if($row == null){
        $error = 'logue por favor!!!';
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
            if($_SESSION['HTTP_REFERER'] == null){
                header("Location: ../views/pages/logged.php");
            }else {
                header("Location: {$_SESSION['HTTP_REFERER']}");
                unset($_SESSION['HTTP_REFERER']);
            }
        }
    }
}