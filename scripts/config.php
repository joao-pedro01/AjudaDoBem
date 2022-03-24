<?php
    define ('dsn', 'mysql:host=localhost;dbname=ajuda_do_bem');
    define ('user','root');
    define ('password', '');

    /* Tentativa de conexão com o banco de dados MySQL */
    try {
        $query;
        $conexao = new PDO(dsn, user, password);
        $Retorno = $conexao->exec($query);
        //0 == false 1 == true
        //echo $Retorno;
    } catch(PDOException $e) {
        die($e->getcode()." - ERROR: Não foi possível conectar.".$e->getMessage());
    
        // Registrar erro via json e redirecionar
	    //$Error = file_get_contents('..files/error.json');
    }
    //$Error = 'Erro'.$e->getcode().' Mensagem '.$e->getMessage();
    //$Error = "Test";
    // Registrar erro via json e redirecionar
    //$Error = file_get_contents('..files/error.json');
?>