<?php

include_once dirname(__FILE__,3).'/config/config.php';
include_once '../controllers/functions.php';

// Processando dados do formulário quando o formulário é enviado
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $birthDate = $_POST["datenasc"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cell = $_POST["phone"];
    $cpf = $_POST["cpf"];
    $file = $_FILES["image"];
    //dd($file);

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
    }else {
        $sql = DB::queryFirstField("SELECT COUNT(*) FROM users WHERE username = '{$username}'");
        DB::disconnect();
        if($sql[0]){
            $error = "Usuário já exite";
            Invalid($error);
        }
    }
    /*
        input CPF
        Erro caso input vazio
    */
    if(empty(trim($cpf))){
        $error = "O campo CPF não pode estar vazio!!!";
        Invalid($error);
    }else {
        // Erro se o CPF for inválido
        if($cpf == false){
            $error = 'CPF informado é inválido';
            Invalid($error);
        }else {
            $sql = DB::queryFirstField("SELECT COUNT(*) FROM users WHERE cpf = '{$cpf}'");
            DB::disconnect();

            if($sql[0]){
                $error = "CPF já cadastrado no banco de dados.";
                Invalid($error);
            }
        }
    }
    /*
        input password
    */
    if(empty(trim($password))){
        $error = "Senha é obrigatório e não pode estar vazio!!!";
        Invalid($error);

    // Validação de erro caso algum caractere invalido seja inputado no $UserName
    }else {
        // criptografia da senha
        $password = md5($password);    
    }

    
    try{
        // consulta db para ver se o type da imagem já esta cadastrada
        $sql = DB::queryFirstField("SELECT COUNT(*) FROM types WHERE type = '{$file["type"]}'");

        /* 
            image
            define type image
        */
        if(!$sql[0]){
            DB::insert('types', [
                'type' => $file["type"]
            ]);
            $id_type = DB::insertId();
        }else {
            $row = DB::queryFirstRow("SELECT * FROM types
            WHERE type ='{$file['type']}'");
            $id_type = $row["id"];
        }
    }catch(Exception $e){

    }

    // caso user não inserir nenhuma foto, coloca foto default
    if($file["error"] == 4){
        $id_image = 1;
    }else {
        $ext = strrchr($file["name"], '.');
        $image = $username.$ext;
        dd($image);
        $type = explode("/", $file['type']);
        
        // se o arquivo não for imagem
        if($type[0] != "image"){
            $error = "Só pode ser enviado imagem!!!";
            Invalid($error);
        }

        // executa a tentativa de criar as pastas e enviar arquivo para dentro da mesma
        try{
            /* variaveis que cria nome dos diretorios */
            $path = "/AjudaDobem/src/views/path";
            $dir_user = md5($username);
            $dir_publi = "profile";
        
            if(!file_exists("$path/$dir_user/$dir_publi/")){
                mkdir("$path/$dir_user/$dir_publi", 0777, true);
                
                // Move o arquivo da pasta temporaria de upload para a pasta de destino 
                if(move_uploaded_file($file["tmp_name"], "$path/$dir_user/$dir_publi/".$image)){
                    echo "Arquivo enviado com sucesso!";
                    $path = "$path/$dir_user/$dir_publi/$image";

                    $date_time = DateTime();
                    DB::insert('images', [
                        'id_type' => $id_type,
                        'path' => $path
                        /* 'date' => $date_time["date"],
                        'hour' => $date_time["time"] */
                    ]);
                    $id_image = DB::insertId();
                }else {
                    echo "Erro, o arquivo não pode ser enviado.";
                }
            }
        }catch(Exception $e) {
            dd($e);
        }
    }



    /*
        INSERT USER IN TABLE USERS
    */
    try{
        $date_time = DateTime();
        DB::insert('users', [
            'id_type' => 1,
            'id_image' => $id_image,
            'name' => $name,
            'birth_date' => $birthDate,
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'cell' => $cell,
            'cpf' => $cpf
        ]);
        $sql = DB::queryFirstField("SELECT COUNT(*) FROM users WHERE username = '{$username}'");
        DB::disconnect();

        if($sql[0]){
            header("location: ../views/pages/login.php");
            $sucess =  'Usuário cadastrado com sucesso!!!.';
            Sucess($sucess);
        }
    }catch(Exception $e) {
        $error = "Algo deu errado";
        Invalid($error);
    }
}else {
    header("location: ../index.php");
}
?>