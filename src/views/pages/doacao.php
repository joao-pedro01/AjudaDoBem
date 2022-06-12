<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style_donation.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <title>Document</title>
</head>
<body>

<?php include_once '../../controllers/navbar.php'; ?>

<section id="prodetails" class="selection-p1">
    <div class="single-pro-image">
        <div class="input_upload">
    <form class="form-upload">
  <label class="input-personalizado">
    <span class="botao-selecionar">Selecione uma imagem</span>
    <img class="imagem" />
  
    <input type="file" name=image id="MainImg" class="input-file" accept="image/*">
  </label>
</form></div>
    </div>    
    <form action="/AjudaDoBem/src/models/register_donation.php" method="post" enctype="multipart/form-data">
        <input type="text" name=title placeholder="Titulo" id="input-doacao"><br><br>
     <div class="single-pro-details">
        <select class="form-select" name=category aria-label="Default select example"><br>
            <option selected>Selecione a categoria</option>\
            <option value="alimentos">Alimentos</option>
            <option value="eletronicos">Eletronicos</option>
            <option value="higiene">Higiene pessoal</option>
            <option value="moveis">Móveis</option>
            <option value="roupas">Roupas</option>
            <option value="lazer">Lazer</option>
        </select><br><br>
        <select>
                <option>sua necessidade</option>
                <option>pequena</option>
                <option>média</option>
                <option>grande</option>
                <option>urgente</option>
            </select> <br><br>
     </div>
        <textarea name="description" cols="30" rows="10" placeholder="Descrição" id="input-doacao"></textarea><br><br>
        
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
</body>
<script>
    	const $ = document.querySelector.bind(document);

const previewImg = $('.imagem');
const fileChooser = $('.input-file');

fileChooser.onchange = e => {
  const fileToUpload = e.target.files.item(0);
  const reader = new FileReader();
  reader.onload = e => previewImg.src = e.target.result;
  reader.readAsDataURL(fileToUpload);
};
</script>
</html>