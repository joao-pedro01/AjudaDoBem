<?php
include_once __DIR__.'/../../config/config.php';
include_once '../controllers/functions.php';

/* Recebe os inputs */
$title = $_POST["title"];
$category = $_POST["category"];$id_category = CategoryProduct($category);
$description = $_POST["description"];
/* Altera nome do arquivo */
$file = $_FILES["image"];

// Processando dados do formulário quando o formulário é enviado
if($_SERVER["REQUEST_METHOD"] == "POST"){
    /* Verifica se o campo title está vazio */
    if(empty(trim($title))){
        $error = "O campo titulo precisa estar preenchido!!!";
        Invalid($error);
    }else if(empty(trim($description))){
        $error = "O campo descrição precisa estar preenchido!!!";
        Invalid($error);
    }

    try{
        DB::insert('products', [
            'id_user' => $_SESSION['UserId'],
            'id_necessity' => 1/* $id_necessity */,
            'id_category' => $id_category,
            'title' => $title,
            'description' => $description,
            'is_active' => true,
            'created' => date('Y-m-d H:i:s'),
            'modified' => date('Y-m-d H:i:s')
        ]);
        $id_product = DB::insertId();
        DB::disconnect();

    }catch(Exception $e){
        echo $e;
    }
    
    try{
        $sql = DB::queryFirstField("SELECT COUNT(*) FROM types WHERE type = '{$file["type"]}'");
        if(!$sql[0]){
            DB::insert('types', [
                'type' => $file["type"]
            ]);
            $id_type = DB::insertId();
        }else {
            //SELECT `id`, `type` FROM `types` WHERE 1
            $row = DB::queryFirstRow("SELECT * FROM types
            WHERE type ='{$file['type']}'");
            $id_type = $row["id"];
        }
    }catch(Exception $e){

    }
    if($file["error"] == 4){
        // image default if não for enviado nada
        $id_image = 2;
    }else {
        $type = explode("/", $file['type']);
        $ext = strrchr($file["name"], '.');
        $image = "image".$ext;

        if($type[0] != "image"){
            $error = "Só pode ser enviado imagem!!!";
            Invalid($error);
        }
        try{
            $path = CreateImage($_SESSION, $id_product, $file, $image);
            // /* variaveis que cria nome dos diretorios */
            // $path = "../views/images/upload";
            // $dir_user = "{$_SESSION["UserName"]}";
            // $dir_user = md5($dir_user);
            // $dir_publi = md5($id_product);
        
            // if(!file_exists("$path/$dir_user/$dir_publi/")){
            //     mkdir("$path/$dir_user/$dir_publi", 0777, true);
                
            //     // Move o arquivo da pasta temporaria de upload para a pasta de destino 
            //     if(move_uploaded_file($file["tmp_name"], "$path/$dir_user/$dir_publi/".$image)){
            //         echo "Arquivo enviado com sucesso!";
            //         $path = "/AjudaDobem/src/views/path";
            //         $path = "$path/$dir_user/$dir_publi/$image";
            try {
                $date_time = DateTime();
                DB::insert('images', [
                    'id_type' => $id_type,
                    'path' => $path
                    /* 'date' => $date_time["date"],
                    'hour' => $date_time["time"] */
                ]);
            } catch (\Throwable $th) {
                throw $th;
            }
            $id_image = DB::insertId();
                
        }catch(Exception $e) {
            echo "Erro, o arquivo não pode ser enviado.";
        }
    }
    
    try{
        DB::insert('products_images', [
            'id_product' => $id_product,
            'id_image' => $id_image
        ]);
        DB::disconnect();
        header("location:/AjudaDobem/src/index.php");
    }catch(Exception $e){
        dd($e);
    }
}

?>