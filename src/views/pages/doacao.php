<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style_donation.css">
    <link rel="stylesheet" href="/AjudaDoBem/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link href="http://assets.locaweb.com.br/locastyle/3.10.1/stylesheets/locastyle.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>

<?php include_once '../../controllers/navbar.php'; ?>

<section id="prodetails" class="selection-p1">
    <div class="single-pro-image">
        <div class="input_upload">
            <div class="form-upload">
                <label class="input-personalizado">
                    <span class="botao-selecionar">Selecione uma imagem</span>
                    <img class="imagem" />
        
                    <input onclick="exibirFoto()" type="file" name=image id="MainImg" class="input-file" accept="image/*">
                </label>
            </div>
        </div>
    </div>
    <form action="/AjudaDoBem/src/models/register_donation.php" method="post" enctype="multipart/form-data">
        <input type="text" name=title placeholder="Titulo" id="input-doacao"><br><br>
     <div class="single-pro-details">
        <select class="form-select" name=category aria-label="Default select example" required><br>
            <option disabled selected>Selecione a categoria</option>\
            <option value="alimentos">Alimentos</option>
            <option value="eletronicos">Eletronicos</option>
            <option value="higiene">Higiene pessoal</option>
            <option value="moveis">Móveis</option>
            <option value="roupas">Roupas</option>
            <option value="lazer">Lazer</option>
        </select><br><br>
    </div>
    <textarea name="description" id="" cols="30" rows="10" data-ls-module="charCounter" maxlength="255" placeholder="Descrição"></textarea><br><br>
    <label class="ls-label-text">
        <input type="radio" name="FlgPontua" value="necessidade" checked>Necessidade<br>
    </label>
    <label class="ls-label-text">
        <input type="radio" name="FlgPontua" value="doacao">
        Doação
      </label>
    
    <div class="camposExtras">
        <select name="priority" required>
            <option disabled selected>Prioridade da necessidade</option>
            <option value="1">Baixa</option>
            <option value="2">Média</option>
            <option value="3">Alta</option>
        </select>
    </div>
    <br><br>
    <input type="file" name="image" accept="image/*"><br>
    <input type="submit" value="Enviar" class="bnt_enviar">
</form>
</section>
<section id="newsletter" class="selection-p1 selection-m1">
        <div class="newsletter">
            <h4>Saiba das nossas novidades</h4>
            <p>Coloque seu email para receber as <span>novidades</span>
            </p>
        </div>
        <div class="form">
            <input type="text" placeholder="coloque sei email aqui">
            <button>Entre aqui</button>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://assets.locaweb.com.br/locastyle/3.10.1/javascripts/locastyle.js" type="text/javascript"></script>
    <script src="/AjudaDoBem/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
$('input[name="FlgPontua"]').change(function () {
    if ($('input[name="FlgPontua"]:checked').val() === "necessidade") {
        $('.camposExtras').show();
    } else {
        $('.camposExtras').hide();
    }
});
function exibirFoto() {
    const $ = document.querySelector.bind(document);

    const previewImg = $('.imagem');
    const fileChooser = $('.input-file');

    fileChooser.onchange = e => {
        const fileToUpload = e.target.files.item(0);
        const reader = new FileReader();
        reader.onload = e => previewImg.src = e.target.result;
        reader.readAsDataURL(fileToUpload);
    };
}        
</script>
</body>
</html>