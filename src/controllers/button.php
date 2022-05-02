<?php
include_once 'functions.php';
session_start();

if(logged($_SESSION) == true){
    $directory = '/AjudaDoBem/src/views/pages/test/doacao.php';
    $_SESSION['HTTP_REFERER'] = $directory;
}else {
    $directory = '/AjudaDoBem/src/views/pages/login.php';
    $_SESSION['HTTP_REFERER'] = '/AjudaDoBem/src/views/pages/test/doacao.php';
}