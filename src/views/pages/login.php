<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- import botstrap -->
    <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- import locaweb -->
    <link href="http://assets.locaweb.com.br/locastyle/3.10.1/stylesheets/locastyle.css" rel="stylesheet" type="text/css">
    <!--- css local -->
    <link rel="stylesheet" href="/src/views/styles/login.css">
    <link rel="stylesheet" href="/src/views/styles/style.css">
    <title>Login | Ajuda Do Bem</title>
    <link rel="shortcut icon" href="/src/views/images/logo_oficial.png" type="image/x-icon">
</head>
<body>
    <?php include_once __DIR__.'/../../controllers/navbar.php'; ?>

    <div class="wrapper">
        <span>
            <h2>Login</h2>
            <p>Por favor, preencha os campos para fazer o login.</p>

            <form action="src/models/<?php isset($_GET["url"]) == "doacao" ? print_r("login.php/doacao") : print_r("login") ?>" method="post">
                <div class="form-group">
                    <label>Nome do usuário</label>
                    <input type="text" name="username" id="username" class="form-control <?= $_SESSION['errorMessage']['Login'] != NULL ? "is-invalid" : "" ?>" onblur="userName();">
                </div>

                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="password" class="form-control <?= $_SESSION['errorMessage']['Login'] != NULL ? "is-invalid" : "" ?>">
                </div>

                <?php if ($_SESSION['errorMessage']['Login'] != NULL) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $_SESSION['errorMessage']['Login']; ?>
                    </div>
                <?php endif; ?>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Entrar">
                </div>
                <p>Não tem uma conta? <a href="cadastro">Inscreva-se agora</a>.</p>
            </form>
        </span>
    </div>
    <script src="src/views/js/user.js"></script>
</body>
</html>
<?php if($_SESSION['errorMessage'] != NULL) unset($_SESSION['errorMessage']); ?>