<?php
    include 'config.php';


    $Name = $_POST["nome"];
    $UserName = $_POST["usuario"];
    $Email = $_POST["email"];
    $Password = $_POST["senha"];
    $Phone = $_POST["celular"];
    $Telephone = $_POST["telefone"];
    $Cpf = $_POST["cpf"];
    $Rg = $_POST["rg"];
    $data = date('Y-m-d');
    $hora = date('h:i:s');

    $username = $password = $confirm_password = "";
    $username_err = $password_err = $confirm_password_err = "";
    
    // Processando dados do formulário quando o formulário é enviado
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty(trim($UserName))){
            $username_err = "Por favor coloque um nome de usuário.";
        }elseif (!preg_match('/^[a-zA-Z0-9_]+$/', trim($UserName))){
            $username_err = "O nome de usuário pode conter apenas letras, números e _.";
        }else {
            $query = "SELECT id FROM users WHERE username = :username";
        }
        
        if(empty(trim($User))){
            $User_err;
        }
        if($Name != null || $UserName != null || $Email != null || $Password != null || $Phone != null || $Cpf != null || $Rg != null) {
            $query = "
                insert into users(
                    nome, userName, email, senha, celular, cpf, rg, data, hora
                ) values (
                    '$Name','$UserName','$Email','$Password','$Phone','$Cpf','$Rg','$data','$hora'
                )";
        }else{
            echo '<div class="alert alert-danger" role="alert">Está faltando dados!</div>';
        }
    }
?>