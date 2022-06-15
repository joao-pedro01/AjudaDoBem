<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="/AjudaDoBem/bootstrap/dist/css/bootstrap.min.css">
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

            <div class="small-img-col">
                <img src="../images/products/f3.jpg" width="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="../images/products/f4.jpg" width="100%" class="small-img" alt="">
            </div>
         </div>
  
        </div>
        <div class="single-pro-details">
            <h6>Home / <?= $_GET["category"]?></h6>
            <h4><?= $_GET["title"] ?></h4>
            <h2>Entre em contato com o doador</h2>
   <!--      <select>
                <option>sua necessidade</option>
                <option>pequena</option>
                <option>média</option>
                <option>grande</option>
                <option>urgente</option>
            </select>  -->   
            <button class="normal">Entre em contato</button>
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

    <footer class="selection-p1">
        <div class="col">
            <img class="logo" src="../images/logo.png" alt="logo">
            <h4>Contato</h4>
            <p><strong>Endereço: </strong> Rua Brigadeiro Tobias, 182, centro, Sorocaba-sp</p>
            <p><strong>Telefone: </strong> (15) 1111-1111</p>
            <p><strong>Horarios: </strong> 10:00 - 18:00, Seg - sábado</p>
            <div class="seguir">
                <h4>Nós siga</h4>
                <div class="icones">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>Sobre</h4>
            <a href="#">Sobre nós</a>
            <a href="#">Informações de entrega</a>
            <a href="#">Plolitica de privacidade</a>
            <a href="#">Termos de condições</a>
            <a href="#">Nós contate</a>
        </div>

        <div class="col">
            <h4>Minha conta</h4>
            <a href="#"></a>
            <a href="#">Entrar na minha conta</a>
            <a href="#">Ver doações</a>
            <a href="#">Minhas doações</a>
            <a href="#">Ajuda</a>
        </div>

        <div class="col install">
            <h4>Instale App</h4>
            <p>App da App Store ou Google Play</p>
            <div class="row">
                <img src="../images/pay/app.jpg" alt="App">
                <img src="../images/pay/play.jpg" alt="App">
            </div>
            <p>Modos de doação em dinheiro</p>
            <img src="../images/pay/pay.png" alt="">
        </div>

        <div class="copyright">
            ©Todos os direitos reservados a Galinha Pintadinha
        </div>
    </footer>

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
        <script scr="script.js"></script>
</body>

</html>