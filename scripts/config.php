<?php
    $dsn = 'mysql:host=localhost;dbname=ajuda_do_bem';
    $user = 'root';
    $password = '';
    $query;

    try {
        $conexao = new PDO($dsn, $user, $password);

        $query = register();
        echo $query;
        // 0 == true 1 == false
        $Retorno = $conexao->exec($query);

    } catch(PDOException $Error) {
        echo 'Erro'.$Error->getcode().' Mensagem '.$Error->getMessage();
        // Registrar erro via json e redirecionar
    }
?>