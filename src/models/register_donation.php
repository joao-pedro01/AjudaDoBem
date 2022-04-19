<?php 

include_once 'functions.php';
session_start();
/*  
*$dir é o caminho da pasta onde você deseja que os arquivos sejam salvos. 
*Neste exemplo, supondo que esta pagina esteja em public_html/upload/ 
*os arquivos serão salvos em public_html/upload/imagens/ 
*Obs.: Esta pasta de destino dos arquivos deve estar com as permissões de escrita habilitadas. 
*/ 

$file = $_FILES["arquivo"];
$ext = strrchr($file["name"], '.');
$image = "image".$ext;
//dd($image);
$name = md5($_SESSION['UserName']);
echo $name;
$dir = "{$name}/images/";
$path = "path/";

if (!file_exists($path)){
    mkdir($path, 0777, true);
}else if((file_exists($path))){
    mkdir($path.$dir, 0777, true);
    // Move o arquivo da pasta temporaria de upload para a pasta de destino 
    if (move_uploaded_file($file["tmp_name"], "$path/$dir".$file["name"])) { 
        echo "Arquivo enviado com sucesso!";
    }
    else { 
        echo "Erro, o arquivo n&atilde;o pode ser enviado."; 
    }




    /* $Error = "Não foi possivel criar o diretório";
    Invalid($Error); */
} else {
    echo 'test';
}

?>