<?php
include_once dirname(__FILE__,3).'/config/config.php';
include_once '../controllers/functions.php';
session_start();

/* Recebe os inputs */
$Title = $_POST["title"];
$Category = $_POST["category"];
$Description = $_POST["description"];

/* Altera nome do arquivo */
$file = $_FILES["image"];
$ext = strrchr($file["name"], '.');
$image = "image".$ext;

// Processando dados do formulário quando o formulário é enviado
if($_SERVER["REQUEST_METHOD"] == "POST"){
    /* Verifica se o campo title está vazio */
    if(empty(trim($Title))){
        $Error = "O campo titulo precisa estar preenchido!!!";
        Invalid($Error);
    }else if(empty(trim($Description))){
        $Error = "O campo descrição precisa estar preenchido!!!";
        Invalid($Error);
    }else {
        DB::insert('donation', [
            'title' => $Title,
            'description' => $Description,
            'category' => $Category
        ]);
        $id = DB::insertId();
        DB::disconnect();
    }

    /* variaveis que cria nome dos diretorios */
    $path = "../views/path";
    $dir_user = "{$_SESSION["UserName"]}";
    $dir_user = md5($dir_user);
    $dir_publi = md5($id);

    if(!file_exists("$path/$dir_user/$dir_publi/")){
        mkdir("$path/$dir_user/$dir_publi", 0777, true);
        
        // Move o arquivo da pasta temporaria de upload para a pasta de destino 
        if(move_uploaded_file($file["tmp_name"], "$path/$dir_user/$dir_publi/".$image)){
            echo "Arquivo enviado com sucesso!";
            $path = "AjudaDobem/src/views/path";
            $path = "$path/$dir_user/$dir_publi/$image";
            $DateTime = DateTime();
            DB::insert('images', [
                'path' => $path,
                'date' => $DateTime["date"],
                'hour' => $DateTime["time"]
            ]);
            DB::disconnect();
            header("location:/AjudaDobem/src/index.php");
        }else {
            echo "Erro, o arquivo não pode ser enviado.";
        }
    }
}
?>