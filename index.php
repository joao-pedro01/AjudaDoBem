<?php
if ( !session_status() == PHP_SESSION_ACTIVE )
{
session_start();
}
require_once 'src/controllers/functions.php';
$url = (isset($_GET['url'])) ? $_GET['url'] : 'home';
$url = array_filter(explode('/',$url));

//$file = "src/views/pages/".$url[0].'.php';
$page = $url[0];
if($page == "home" || $page == "index"){
    $file = "src/views/pages/home.php";
}else if($page == "cadastro"){
    $file = "src/views/pages/register.php";
}else if($page == "login" || $page == "entrar"){
    $file = "src/views/pages/login.php";
}else if($page == "doacao"){
    $file = "src/views/pages/doacao_solo.php";
}else if($page == "doacoes"){
    $file = "src/views/pages/doacao.php";
}else {
    if(Logged($_SESSION) == false){ 
        if($page == "postar-doacao"){
            $file = "src/views/pages/registro_doacao.php";
        }else if($page == "atualizar-cadastro"){
            $file = "src/views/pages/update_register.php";
        }else if($page == "sair"){
            $file = "src/models/logout.php";
        }else if($page == "atualizar-perfil"){
            $file = "src/views/pages/update_register.php";
        }
    }
}

if($page == "model"){
    $file = "src/models/".$url[1].'.php';
}

if(is_file($file)){
    include $file;
}else{
    echo '404.php';
}            
?>