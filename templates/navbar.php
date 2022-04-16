<?php
    session_start();

    include_once '../scripts/config.php';
    include '../scripts/functions.php';
    //dd($_SESSION['UserName']);

    if(Logged($_SESSION) == false){
        include_once 'navbarlogged.php';
    }else {
        include_once 'navbarnotlogged.php';
    }
?>