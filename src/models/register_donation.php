<?php
include_once __DIR__.'/../../config/config.php';
include_once '../controllers/functions.php';
$result = file_get_contents(__DIR__.'../../registro_doacao.php', true, $context);
/* Recebe os inputs */
$title = $_POST["title"];
$type = $_POST["FlgPontua"];
$category = $_POST["category"];
$id_category = CategoryProduct($category);
$id_necessity = $_POST["priority"];
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

    if($type == "doacao"){
        $id_type = 1;
        $id_necessity = null;
    }else {
        $id_type = 2;
    }

    try{
        DB::insert('products', [
            'id_user' => $_SESSION['UserId'],
            'id_necessity' => $id_necessity,
            'id_category' => $id_category,
            'type' => $id_type,
            'title' => $title,
            'description' => $description,
            'is_active' => true,
            'created' => date('Y-m-d H:i:s'),
            'modified' => date('Y-m-d H:i:s')
        ]);
        $id_product = DB::insertId();
        dd($id_product);
        DB::disconnect();

    }catch(Exception $e){
        echo $e;
    }
    
    if($file["error"] == 4){
        // image default if não for enviado nada
        $id_image = 2;
    }else {
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
        $type = explode("/", $file['type']);
        $ext = strrchr($file["name"], '.');
        $image = "image".$ext;

        if($type[0] != "image"){
            $error = "Só pode ser enviado imagem!!!";
            Invalid($error);
        }

        try{
            $path = CreateImage($_SESSION['UserName'], $id_product, $file, $image);
            try {
                DB::insert('images', [
                    'id_type' => $id_type,
                    'path' => $path
                ]);
                $id_image = DB::insertId();
            } catch (\Throwable $th) {
            }
        }catch(Exception $e) {
            $id_image = 2;
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