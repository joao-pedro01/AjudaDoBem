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
    <form action="" method="post">
        <div class="row">
            <div class="col">
                <input type="email" class="form-control" placeholder="Email (Obrigatório)" name=email><br>
                <input type="password" class="form-control" placeholder="Senha (Obrigatório)" name=email><br>
                <input type="email" class="form-control" placeholder="Nome (Obrigatório)" name=nome><br>
                <input type="email" class="form-control" placeholder="Email (Obrigatório)" name=email>
            </div>

            <div class="col">
                <input type=submit value="OK">
            </div>
        </div>
    </form>
    
    <?php
        //echo "<br>O valor de CAMPO 2 é: " . $_POST["campo2"];
        require_once '../scripts/index.php'
    ?>
</body>
</html>