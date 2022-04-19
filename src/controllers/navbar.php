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
        include_once dirname(__FILE__,4).'/templates/navbarlogged.php';
    }else {
        include_once dirname(__FILE__,3).'/templates/navbar/navbar.php';

    }
?>