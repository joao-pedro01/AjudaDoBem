<?php
if ( !session_status() == PHP_SESSION_ACTIVE )
{
    session_start();
}
require_once 'src/controllers/functions.php';
$url = (isset($_GET['url'])) ? $_GET['url'] : 'home';
$url = array_filter(explode('/',$url));

$page = $url[0];
if($page == "home" || $page == "index"){
    $file = "src/views/pages/home.php";
    $title = 'Home';
    $active = 'index';
}else if($page == "cadastro"){
    $file = "src/views/pages/register.php";
    $title = 'Cadastro';
    $active = 'register';
}else if($page == "login" || $page == "entrar"){
    $file = "src/views/pages/login.php";
    $title = 'Login';
    $active = 'login';
}else if($page == "doacao"){
    $file = "src/views/pages/doacao_solo.php";
    $active = 'Doacao';
}else if($page == "doacoes"){
    $file = "src/views/pages/doacao.php";
    $title = 'Doações';
    $active = 'doacoes';
}else if(Logged($_SESSION) == false){
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
if($page == "model"){
    $file = "src/models/".$url[1].'.php';
}

if(is_file($file)){
    include $file;
}else{
    include "src/views/pages/error-404.php";
}            
?>