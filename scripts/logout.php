<?php
    /*
        log out
    */
    session_start();
    unset(
        $_SESSION['UserId'],
        $_SESSION['UserNome'],
        $_SESSION['UserName'],
        $_SESSION['UserCelular'],
        $_SESSION['UserEmail'],
        $_SESSION['UserDate'],
        $_SESSION['UserHour']
    );   
    $_SESSION['logindeslogado'] = "Deslogado com sucesso";
    //redirecionar o usuario para a página de login
    header("Location: ../index.html");