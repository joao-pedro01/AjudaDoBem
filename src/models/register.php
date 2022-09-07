<?php

include_once __DIR__.'/../../config/config.php';
include_once '../controllers/functions.php';
echo "<pre>"; print_r($_SERVER); echo "</pre>";
// Processando dados do formulário quando o formulário é enviado
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $birthDate = $_POST["datenasc"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $cep = str_replace(array("-", " "), '', $_POST["cep"]);
    $cell = str_replace(array("(", "-", ")", " "), '', $_POST["phone"]);
    $cpf = str_replace(array("-",".", " "), '', $_POST["cpf"]);
    $password = $_POST["password"];
    $file = $_FILES["image"];
    
    $row = DB::queryFirstRow("
        SELECT u.id, u.cpf, u.is_active, u.username
        FROM users u
        WHERE cpf = '$cpf' && is_active=0 LIMIT 1;
    ");
    
    if($row == null){
        /* 
            input Name
            Erro caso input vazio
        */
        if(empty(trim($name))){
            $error = 'O campo Nome não pode estar vazio!!!';
            $error = Invalid($error, "Name");
        }
        /*
            input UserName
            Erro caso input vazio
        */
        if(empty(trim($username))){
            $error = "O nome de usuário não pode estar vazio!!!";
            $error = Invalid($error, "UserName");
        
        // Validação de erro caso algum caractere invalido seja inputado no $UserName
        }else if(!preg_match('/^[a-zA-Z0-9_]+$/', trim($username))){
            $error = "O nome de usuário pode conter apenas letras, números e _.";
            $error = Invalid($error, "UserName");
        /*
            Caso não encontre erro.
            Procura por $usuario no DB
        */   
        }else {
            $sql = DB::queryFirstField("SELECT COUNT(*) FROM users WHERE username = '{$username}'");
            DB::disconnect();
            if($sql[0]){
                $_SESSION['errorUserName'] = "Usuário já exite";
                $error = Invalid($error, "UserName");
            }
        }
        /*
            input CPF
            Erro caso input vazio
        */
        if(empty(trim($cpf))){
            $error = "O campo CPF não pode estar vazio!!!";
            $error = Invalid($error, "Cpf");
        }else {
            // Erro se o CPF for inválido
            if(validaCpf($cpf) == false){
                $error = 'CPF informado é inválido';
                $error = Invalid($error, "Cpf");
            }else {
                $sql = DB::queryFirstField("SELECT COUNT(*) FROM users WHERE cpf = '{$cpf}'");
                DB::disconnect();
    
                if($sql[0]){
                    $error = "CPF já cadastrado no banco de dados.";
                    $error = Invalid($error, "Cpf");
                }
            }
        }
        /*
            input password
        */
        if(empty(trim($password))){
            $error = "Senha é obrigatório e não pode estar vazio!!!";
            $error = Invalid($error, "Password");
    
        // Validação de erro caso algum caractere invalido seja inputado no $UserName
        }else {
            // criptografia da senha
            $password = md5($password);    
        }

        if($error['error'] != true){
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
                $error = "Problema com o banco de dados";
                header("location: /error-500");
            }
        
            // caso user não inserir nenhuma foto, coloca foto default
            if($file["error"] == 4){
                $id_image = 1;
            }else {
                $ext = strrchr($file["name"], '.');
                $image = $username.$ext;
                $type = explode("/", $file['type']);
                
                // se o arquivo não for imagem
                if($type[0] != "image"){
                    $error = "Só pode ser enviado imagem!!!";
                    $error = Invalid($error, "Image");
                }else {
                    // executa a tentativa de criar as pastas e enviar arquivo para dentro da mesma
                    try{
                        $dir_publi = "profile";
                        $path = CreateImage($username, $dir_publi, $file, $image);/* $_SESSION, $id_product, $file, $image */
    
                        DB::insert('images', [
                            'id_type' => $id_type,
                            'path' => $path,
                        ]);
                        $id_image = DB::insertId();
                    }catch(Exception $e) {
                        
                    }
                }
            }
            
            /*
                INSERT USER IN TABLE USERS
            */
            try{
                DB::insert('users', [
                    'id_type' => 1,
                    'id_image' => $id_image,
                    'name' => $name,
                    'birth_date' => $birthDate,
                    'username' => $username,
                    'email' => $email,
                    'password' => $password,
                    'cell' => $cell,
                    'cpf' => $cpf,
                    'cep' => $cep,
                    'is_active' => true,
                    'created' => date('Y-m-d H:i:s'),
                    'modified' => date('Y-m-d H:i:s')
                ]);
                DB::disconnect();
                header("location: /login");
                $sucess = 'Usuário cadastrado com sucesso!!!.';
                Sucess($sucess);
            }catch(Exception $e) {
                dd($e);
            }
        }else {
            //dd($_SESSION);
            header("location: /cadastro");
        }
    }//else 






        
        // if($row['is_active'] == false){
        //     /* 
        //         input Name
        //         Erro caso input vazio
        //     */
        //     if(empty(trim($name))){
        //         $error = 'O campo Nome não pode estar vazio!!!';
        //         $error = Invalid($error);
        //     }
        //     /*
        //         input UserName
        //         Erro caso input vazio
        //     */
        //     if(empty(trim($username))){
        //         $error = "O nome de usuário não pode estar vazio!!!";
        //         $error = Invalid($error);
        //     // Validação de erro caso algum caractere invalido seja inputado no $UserName

            
        //     }else if(!preg_match('/^[a-zA-Z0-9_]+$/', trim($username))){
        //         $error = "O nome de usuário pode conter apenas letras, números e _.";
        //         $error = Invalid($error);
        //         /*
        //         Caso não encontre erro.
        //         Procura por $usuario no DB
        //         */
        //     }else if(strcmp($username, $row['username']) != 0){
        //         $sql = DB::queryFirstField("SELECT COUNT(*) FROM users WHERE username = '{$username}'");
        //         DB::disconnect();
        //         if($sql[0]){
        //             $error = "Usuário já exite";
        //             $error = Invalid($error);
        //         }
        //     }

        //         /*
        //             INSERT USER IN TABLE USERS
        //         */
        //         try{
        //             DB::update('users', [
        //                 'name' => $name,
        //                 'birth_date' => $birthDate,
        //                 'username' => $username,
        //                 'email' => $email,
        //                 'cep' => $cep,
        //                 'cell' => $cell,
        //                 'is_active' => true,
        //                 'modified' => date('Y-m-d H:i:s')
        //             ], "id=%i", $row['id']
        //             );
        //             DB::disconnect();

        //             header("location: ../views/pages/login.php");
        //             $sucess =  'Usuário cadastrado com sucesso!!!.';
        //             Sucess($sucess);
        //         }catch(Exception $e) {
        //             dd($e);
        //         }
        //     }else {
        //         header("location: ../index.php");
        //     }
}else {
    header("location: /index");
}