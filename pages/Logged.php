<?php
    include '../templates/navbar.php';
    if (Logged($_SESSION) == false){
        $Error = 'Acesso negado!!!';
        Invalid($Error);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/login.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <title>Seja bem-vindo <?php echo $_SESSION['UserNome']; ?></title>
</head>
<body>
    <div class="wrapper">
        <span>
            <h1>Seja bem vindo <?php echo $_SESSION['UserNome']; ?></h1>
            <ul>
                <li>Id do usuário: <?php echo $_SESSION['UserId']; ?></li>
                <li>Nome do usuário: <?php echo $_SESSION['UserNome']; ?></li>
                <li>Nome de usuário: <?php echo $_SESSION['UserName']; ?></li>
                <li>Celular: <?php echo $_SESSION['UserCelular']; ?></li>
                <li>Email: <?php echo $_SESSION['UserEmail']; ?></li>
                <li>Data de cadastro: <?php echo $_SESSION['UserDate']; ?></li>
                <li>Hora de cadastro: <?php echo $_SESSION['UserHour']; ?></li>
            </ul>
            <a href="../scripts/logout.php">Sair</a>

</body>
</html>