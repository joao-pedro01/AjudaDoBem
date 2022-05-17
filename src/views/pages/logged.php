<?php
    include dirname(__FILE__,4).'/src/controllers/functions.php';
    /* Verificar se a sessão não já está aberta. */
    if(!session_status() == PHP_SESSION_ACTIVE) {
        header("location: login.php");
    }else {
        include dirname(__FILE__,4).'/src/controllers/navbar.php';
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/login.css">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="shortcut icon" href="    " type="image/x-icon">
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
                <li>Foto: <?php echo $_SESSION['UserPicture']; ?></li>
            </ul>

            <a href="/AjudaDoBem/src/models/logout.php">Sair</a>
        </span>
</body>
</html>