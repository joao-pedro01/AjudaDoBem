<?php
include_once 'functions.php';
session_start();

if(logged($_SESSION) == true){
    $Directory = '/AjudaDoBem/src/views/pages/test/doacao.php';
}else {
    $Directory = '/AjudaDoBem/src/views/pages/login.php';
    $_SESSION['logged'] = '/AjudaDoBem/src/views/pages/test/doacao.php';
}