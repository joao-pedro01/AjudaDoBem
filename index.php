<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        * {
            background-color: #E3E6F3;
        }
        .warning {
            margin-top: 10%;
            width: 10rem;
        }
        h3 {
            margin-top: 2%;
        }
        .btn {
            display: flex;
            margin: auto;
        }
    </style>
    <title>Manuntenção!!!</title>
</head>
<body>
    <div class="d-flex flex-column align-items-center">
        <img class="warning" src="warning.png" alt="imagem-triangulo-alerta">
        <h1>Site em contrução</h1>
        <h3>
            Seja avisado quando o site estiver no ar!<br>
        </h3>
        <h4>Deixe seu email no campo abaixo!</h4>

        <div class="col-5 mt-3">
            <form action="email.php" method="post">
                <input type="email" name="email" class="form-control" onblur="validacaoEmail(f1.email)" placeholder="name@example.com" required>
                <button class="btn btn-light  mt-3" type="submit">Enviar email</button>
            </form>
        </div>
    </div>
    <script>
        var message = "<?php echo $_COOKIE['message'];unsetcookie('message', '/');?>"
        console.log(message);
        if(message != null){
            alert(message);
        }
    </script>
</body>
</html>
<?php 
    function unsetcookie($key, $path = '', $domain = '', $secure = false)
    {
        if (array_key_exists($key, $_COOKIE)) {
            if (false === setcookie($key, null, -1, $path, $domain, $secure)) {
                return false;
            }

            unset($_COOKIE[$key]);
        }

        return true;
    }
?>