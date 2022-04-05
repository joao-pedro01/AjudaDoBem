<?php
    require_once '../db/db.class.php';

    $test = DB::query(" SELECT * FROM users where username = 'murillo_jesus' ");

    print_r($test);

    // date_default_timezone_set('America/Sao_Paulo');
    
    // try {
    //     $conexao = new PDO($dsn, $user, $password);
    // } catch(PDOException $Error) {
    //     echo 'Erro'.$Error->getcode().' Mensagem '.$Error->getMessage();
    //     // Registrar erro via json e redirecionar
    // }
?>