<?php  if($_GET == NULL) {
    exit;
}; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="/AjudaDoBem/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../src/views/styles/style_header.css">
    <title>Ajuda do Bem</title>
</head>
<body>
<?php include_once '../../controllers/navbar.php'; ?>
<section id="prodetails" class="selection-p1">
    <div class="single-pro-image">
        <img src="<?= $_GET["image"] ?>" width="100%" id="MainImg" alt="imagem camisa">

        <div class="small-img-group">
            <div class="small-img-col">
                <img src="<?= $_GET["image"] ?>" width="100%" class="small-img" alt="">
            </div>

            <!-- <div class="small-img-col">
                <img src="../images/products/f3.jpg" width="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="../images/products/f4.jpg" width="100%" class="small-img" alt="">
            </div> -->
         </div>
  
        </div>
        <div class="single-pro-details">
            <h6>Home / <?= $_GET["category"]?></h6>
            <h4><?= $_GET["title"] ?></h4>
            <h2>Entre em contato com o doador</h2>
            <button class="normal" onclick="adicionar();">Entre em contato</button>
            <div id="alert">
                
            </div>
            <h4>Detalhes da doação</h4>
            <span><?= $_GET["description"] ?></span>
        </div>
</section>

    <section id="newsletter" class="selection-p1 selection-m1">
        <div class="newsletter">
            <h4>Saiba das nossas novidades</h4>
            <p>Coloque seu email para receber as <span>novidades</span>
            </p>
        </div>
        <div class="form">
            <input type="text" placeholder="coloque sei email aqui">
            <button class="normal">Entre aqui</button>
        </div>
    </section>
    <script>
        var MainImg=document.getElementById("MainImg");
        var smallimg=document.getElementsByClassName("small-img");
        smallimg[0].onclick=function(){
            MainImg.src=smallimg[0].src;
        }
        smallimg[1].onclick=function(){
            MainImg.src=smallimg[1].src;
        }
        smallimg[2].onclick=function(){
            MainImg.src=smallimg[2].src;
        }
    </script>
    <script>
        function adicionar() {
            var content  = document.getElementById("alert").innerHTML;
            content = '<div class="alert alert-success" role="alert" id="alert"><h4 class="alert-heading"><?= $_GET['nome'] ?></h4><ul><li>Número de telefone: <?= $_GET['number'] ?></ul><hr>Descrição: <?= $_GET['description'] ?></p></div>"';
            
            document.getElementById("alert").innerHTML = content;
        }
    </script>
    <script scr="script.js"></script>
</body>
</html>