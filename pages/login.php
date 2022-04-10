<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- import botstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- import locaweb -->
    <link href="http://assets.locaweb.com.br/locastyle/3.10.1/stylesheets/locastyle.css" rel="stylesheet" type="text/css">
    <!--- style.css local -->
    <link rel="stylesheet" href="../styles/login.css">
    <title>Login | Ajuda Do Bem</title>
</head>
<body>
    
</body>
</html>
<body>
<?php include_once "../templates/navbar.html";?>
    <div class="wrapper">
        <div class="row col-xs-12 col-sm-12 col-md-12 col-lg-12"  align="center">
            <span>
                <h2>Login</h2>
                <p>Por favor, preencha os campos para fazer o login.</p>

                <form action="../scripts/login.php" method="post">
                    <div class="form-group">
                        <label>Nome do usuário</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Senha</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Entrar">
                    </div>
                    <p>Não tem uma conta? <a href="register.php">Inscreva-se agora</a>.</p>
                </form>
            </span>
        </div>
    </div>
</body>
</html>