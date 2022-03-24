<?php
    $dsn = 'mysql:host=localhost;dbname=ajuda_do_bem';
    $user = 'root';
    $password = '';

    try {
        $conexao = new PDO($dsn, $user, $password);

        $query = '
            create table if not exists users(
                id int not null primary key auto_increment,
                nome varchar(50) not null,
                user varchar(25) not null,
                email varchar(100) not null,
                senha varchar(32) not null,
                celular varchar(15) not null,
                cpf varchar(14) not null,
                rg varchar(15),
                data datetime
            )
        ';

        $Retorno = $conexao->exec($query);
        //0
        echo $Retorno;
        insert();

    } catch(PDOException $Error) {
        echo 'Erro'.$Error->getcode().' Mensagem '.$Error->getMessage();
        // Registrar erro via json e redirecionar
    }

    function insert($conexao, $query){
        $Name = $_POST["nome"];
        $User = $_POST["usuario"];
        $Email = $_POST["email"];
        $Password = $_POST["Senha"];
        $Phone = $_POST["celular"];
        $Telephone = $_POST["telefone"];
        $Cpf = $_POST["cpf"];
        $Rg = $_POST["rg"];

        echo'
            insert into users(
                nome, user, email, senha, celular, telefone, cpf, rg
            ) values ('
                .$Name.$User.$Email.$Password.$Phone.$Telephone.$Cpf.$Rg.
            ')';
        
        $Retorno = $conexao->exec($query);
        echo $Retorno;
        
    }
?>