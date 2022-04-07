<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Login | Ajuda do Bem</title>
</head>
<body>
    <form action="../scripts/register.php" method="post">
        <div class="row">
            <div class="col-5">
                <input type="email" class="form-control" placeholder="Email (Obrigatório)" name="email"><br>
                <input type="password" class="form-control" placeholder="Senha (Obrigatório)" name="password"><br>
                <input type="text" class="form-control" placeholder="Nome (Obrigatório)" name="name"><br>
                <input type="text" class="form-control" placeholder="Nome de usuario (Obrigatório)" name="username"><br>
                <input type="text" class="form-control" placeholder="Celular (Obrigatório)" name="phone"><br>
                <input type="number" class="form-control" placeholder="Telefone (Opcional)" name=telefone><br>
                <input type="number" class="form-control" placeholder="cpf (Obrigatório)" name="cpf"><br>
                <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
                <div id="div">
                    <?php echo $Error = ""; ?>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
