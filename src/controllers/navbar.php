<?php
    session_start();

    if(trim($_SERVER["REQUEST_URI"], '/') == "AjudaDoBem"){
        $Directory = '';
    }else {
        $Directory = '../';
    }
    
    include_once "/xampp/htdocs/AjudaDoBem/config/config.php";
    include_once "/xampp/htdocs/AjudaDoBem/src/controllers/functions.php";
    $Directory = Directory();
    if(Logged($_SESSION) == true){
        include_once dirname(__FILE__,3).'/templates/navbar/navbarlogged.php';
        $Directory = '/AjudaDoBem/src/views/pages/test/doacao.php';
    }else {
        $Directory = '/AjudaDoBem/src/views/pages/login.php';
        include_once dirname(__FILE__,3).'/templates/navbar/navbar.php';
    }
?>