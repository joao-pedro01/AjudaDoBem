<?php
/*
    log out
*/

session_start();
session_destroy();

$_SESSION['logindeslogado'] = "Deslogado com sucesso";
//redirecionar o usuario para a página de login
header("Location: /home");