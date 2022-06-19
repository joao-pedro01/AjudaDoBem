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
            SELECT i.path as profile_path, u.id, u.name, u.birth_date, u.cpf, u.cell, u.cep, u.username, u. email
            FROM users u
            INNER JOIN images i
            ON u.id_image = i.id
            WHERE (u.username = '$username' || u.cpf = '$username') && u.password = '$password' && u.is_active=1 LIMIT 1;
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
            $_SESSION['UserCep'] = $row['cep'];
            $_SESSION['UserName'] = $row['username'];
            $_SESSION['UserCelular'] = $row['cell'];
            $_SESSION['UserEmail'] = $row['email'];
            $_SESSION['BirthDate'] = $row['birth_date'];
            $_SESSION['UserPicture'] = $row['profile_path'];
        }
        
        if($url = $_GET['url'] == "doacao"){
            header("location: ../views/pages/registro_doacao.php");
        }else {
            header("location: ../views/pages/update_register.php");
        }
    }
}