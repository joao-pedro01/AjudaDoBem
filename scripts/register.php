<?php
    include '../scripts/config.php';
    include '../scripts/index.php';

    function register(){
        $Name = $_POST["nome"];
        $UserName = $_POST["usuario"];
        $Email = $_POST["email"];
        $Password = $_POST["senha"];
        $Phone = $_POST["celular"];
        //$Telephone = $_POST["telefone"];
        $Cpf = $_POST["cpf"];
        $Rg = $_POST["rg"];
        $UsernameError = "";
        
        date_default_timezone_set('America/Sao_Paulo');
        $data = date('Y-m-d');
        $hora = date('h:i:s');

        /*$query = "
        insert into users(
            nome, userName, email, senha, celular, cpf, rg, data, hora
        ) values (
            '$Name','$UserName','$Email','$Password','$Phone','$Cpf','$Rg','$data','$hora'
        )";*/
    
        // Processando dados do formulário quando o formulário é enviado
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            //Erro caso 
            if(empty(trim($UserName))){
                echo '<body onload="window.history.back();">'; //Volta para pagina anterior
            }else if(!preg_match('/^[a-zA-Z0-9_]+$/', trim($UserName))){
                echo '<body onload="window.history.back();">';
                echo '<script>';
                echo 'alert("O nome de usuário pode conter apenas letras, números e _.")';
                echo '</script>';
                $Error = "O nome de usuário pode conter apenas letras, números e _.";
            }else {
                
            }
            
            if(empty(trim($UserName))){
                $UsernameError;
            }
        }

        /*$username = $password = $confirm_password = "";
        $username_err = $password_err = $confirm_password_err = "";
        
        
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
        }*/
        echo $query;
        return $query;
    }
?>