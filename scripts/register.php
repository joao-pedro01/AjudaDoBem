<?php
    include_once 'config.php';
    include_once 'functions.php';

    //$conexao = new PDO(DB::$dbName, DB::$host, DB::$user, DB::$password);

    $Name = $_POST["nome"];
    $UserName = $_POST["usuario"];
    $Email = $_POST["email"];
    $Password = $_POST["senha"];
    $Phone = $_POST["celular"];
    //$Telephone = $_POST["telefone"];
    $Cpf = $_POST["cpf"];
    $Rg = $_POST["rg"];
    $UsernameError = "";
    
    $Date = date('Y-m-d');
    $Hour = date('h:i:s');

    // Processando dados do formulário quando o formulário é enviado
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        /*
            input Name
            Erro caso input vazio
        */
        if(empty(trim($Name))){
            echo '<body onload="window.history.back();">'; //Volta para pagina anterior
            echo '<script>';
            echo 'alert("O campo Nome não pode estar vazio!!!")';
            echo '</script>';
        }else {
            return false;
        }

        /*
            input UserName
            Erro caso input vazio
        */
        if(empty(trim($UserName))){
            echo '<body onload="window.history.back();">'; //Volta para pagina anterior

        
        // Validação de erro caso algum caractere invalido seja inputado no $UserName
        }else if(!preg_match('/^[a-zA-Z0-9_]+$/', trim($UserName))){
            echo '<body onload="window.history.back();">';
            echo '<script>';
            echo 'alert("O nome de usuário pode conter apenas letras, números e _.")';
            echo '</script>';
            $Error = "O nome de usuário pode conter apenas letras, números e _.";

        /*
            Caso não encontre erro.
            Procura por $usuario no DB
        */   
        }else {
            //$sql = DB::query("SELECT COUNT(*) FROM users WHERE username = '{$UserName}'");
            $sql = DB::query(" SELECT * FROM users where username = '{$UserName}' ");
            //dd($sql);
            if($sql[0]){
                echo "Usuario ja existe";
            }else{
                echo "Usuario nao existe";
                //continua o codigo
            }
        }

        if(empty(trim($Cpf))){
            //validaCPF($Cpf);
            //dd($Cpf);
        }

        DB::insert('users', [
        'nome' => $Name,
        'username' => $UserName,
        'email' => $Email,
        'senha' => $Password,
        'celular' => $Phone,
        'cpf' => $Cpf,
        'data' => $Date,
        'hora' => $Hour
        ]);

    }

?>