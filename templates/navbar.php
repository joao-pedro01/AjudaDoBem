<?php
    session_start();


    if(trim($_SERVER["REQUEST_URI"], '/') == "AjudaDoBem"){
        $Directory = ''; 
    }else {
        $Directory = '../';
    }
    
    include_once "{$Directory}scripts/config.php";
    include_once "{$Directory}scripts/functions.php";

    if(Logged($_SESSION) == true){
        include_once "{$Directory}templates/navbarlogged.php";
    }else {
        include_once "{$Directory}templates/navbarnotlogged.php";

    }
?>