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
    <script src="../js/cep.js"></script>
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
            <button type="button" class="normal" data-toggle="modal" onclick="pesquisacep(this.<?= $_GET['cep'];?>);" data-target="#staticBackdrop">Entre em contato</button>
            <div id="alert">
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Contatos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4 class="alert-heading">
                            <?= $_GET['nome'] ?>
                        </h4>
                        <ul>
                            <li>Número de telefone: <?= $_GET['number'] ?></ul>
                            <li>Descrição: <?= $_GET['description'] ?></li>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
                </div>                
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://assets.locaweb.com.br/locastyle/3.10.1/javascripts/locastyle.js" type="text/javascript"></script>
</body>
</html>