<?php
    include_once 'config.php';
    include_once 'functions.php';

    //$conexao = new PDO(DB::$dbName, DB::$host, DB::$user, DB::$password);
    $Error = "";

    $Name = $_POST["nome"];
    $UserName = $_POST["usuario"];
    $Email = $_POST["email"];
    $Password = $_POST["senha"];
    $Phone = $_POST["celular"];
    //$Telephone = $_POST["telefone"];
    $Cpf = $_POST["cpf"];
    $Rg = $_POST["rg"];
      
    $Date = date('Y-m-d');
    $Hour = date('h:i:s');

    // Processando dados do formulário quando o formulário é enviado
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        /* 
            input Name
            Erro caso input vazio
        */
        if(empty(trim($Name))){
            $Error = 'O campo Nome não pode estar vazio!!!';
            Invalid($Error);
        }else {
            
        }

        /*
            input UserName
            Erro caso input vazio
        */
        if(empty(trim($UserName))){
            $Error = "O nome de usuário não pode estar vazio!!!";
            Invalid($Error);

        
        // Validação de erro caso algum caractere invalido seja inputado no $UserName
        }else if(!preg_match('/^[a-zA-Z0-9_]+$/', trim($UserName))){
            $Error = "O nome de usuário pode conter apenas letras, números e _.";
            Invalid($Error);

        /*
            Caso não encontre erro.
            Procura por $usuario no DB
        */   
        }else {
            //$sql = DB::query("SELECT COUNT(*) FROM users WHERE username = '{$UserName}'");
            $sql = DB::query(" SELECT * FROM users where username = '{$UserName}' ");
            
            if($sql[0]){
                $Error = "Usuário já exite";
                Invalid($Error);
            }
        }

        /*
            input CPF
            Erro caso input vazio
        */
        if(empty(trim($Cpf))){
            $Error = "O campo CPF não pode estar vazio!!!";
            Invalid($Error);
        }else {
            // function que valida o CPF
            $cpf = validaCPF($Cpf);

            // Erro se o CPF for inválido
            if($cpf != true)
            {
                $Error = 'CPF informado é inválido';
                Invalid($Error);
            }
        }

        /*
            INSERT
        */
        if (false){
            $Error = "Algo deu errado";
            Invalid($Error);
        }else {
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

    }

?>