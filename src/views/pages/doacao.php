<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/AjudaDoBem/src/views/styles/login.css">
    <title>Document</title>
</head>
<body>
    <form action="/AjudaDoBem/src/models/register_donation.php" method="post" enctype="multipart/form-data">
        <input type="text" name=title placeholder="Titulo"><br><br>
        <select class="form-select" name=category aria-label="Default select example"><br>
            <option selected>Selecione a categoria</option>\
            <option value="alimentos">Alimentos</option>
            <option value="eletronicos">Eletronicos</option>
            <option value="higiene">Higiene pessoal</option>
            <option value="moveis">Móveis</option>
            <option value="roupas">Roupas</option>
            <option value="lazer">Lazer</option>
        </select><br><br>
        <textarea name="description" id="" cols="30" rows="10" placeholder="Descrição"></textarea><br><br>
        <input type="file" name=image id="">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>