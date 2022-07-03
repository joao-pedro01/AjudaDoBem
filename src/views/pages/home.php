<?php require_once 'src/models/exibirProduct.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ajuda do bem</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/views/styles/style.css">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="shortcut icon" href="src/views/images/favicon.ico" type="image/x-icon">
</head>
<style>
svg {
    width: 15px;
    height: 15px;
}
</style>
    <?php include_once  'src/controllers/navbar.php'; ?>

    <section id="modelo">
        <h4>Ajuda para todos</h4>
        <h2>Uma comunidade únida</h2>
        <h1>Ajudando os vizinhos </h1>
        <p>Incentivando o Bem</p>
        <a href=<?= Logged($_SESSION) == false ? "login" : "registro_doacao.php"; ?>><button>Doe Agora</button></a>
    </section>
    
    <section id="caracteristicas" class="selection-p1">
        <div class="fe-box">
            <img src="src\views\images\features\f1.png" alt="">
            <h6> conta grátis </h6>
        </div>
        <div class="fe-box">
            <img src="src\views\images\features\f2.png" alt="">
            <h6> Fácil entrega </h6>
        </div>
        <div class="fe-box">
            <img src="src\views\images\features\f3.png" alt="">
            <h6> valores váriados </h6>
        </div>
        <div class="fe-box">
            <img src="src\views\images\features\f4.png" alt="">
            <h6> Ajudas úteis </h6>
        </div>
        <div class="fe-box">
            <img src="src\views\images\features\f5.png" alt="">
            <h6> Doações do bairro </h6>
        </div>
        <div class="fe-box">
            <img src="src\views\images\features\f6.png" alt="">
            <h6> suporte online </h6>
        </div>
    </section>

    <section id="doação1" class="selection-p1">
        <h2>Nossas doações</h2>
        <p>Doações de todos os tipos de necessidades</p>
        <div class="pro-container">
            <?php foreach ($productsDonation as $item): ?>
                <div class="pro">
                    <img src="<?= $item['path']; ?>" alt="">
                    <div class="des">
                        <span><?= $item['category']; ?></span>
                        <h5><?= $item['title']; ?></h5>
                        <h4>Receba agora</h4>
                    </div>
                    <a href="doacao/<?= $item['id'] ?>"><i class="fal fa-box-heart heart"></i></a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

<!--     <section id="banner" class="selection-m1">
        <h4>Tipos de Doação</h4>
        <h2>As <span>doações</span> que vão te ajudar bem aqui!</h2>
        <button class="normal">Veja mais</button>
    </section> -->
    
    <section id="doação1" class="selection-p1">
        <h2>Necessidades</h2>
        <p>Pare de sofrer essa necessidade, e vanha receber ajuda</p>
        <div class="pro-container">
        <?php foreach ($productsNecessity as $item): ?>
                <div class="pro">
                    <img src="<?= $item['path']; ?>" alt="">
                    <div class="des">
                        <span><?= $item['category']; ?></span>
                        <h5><?= $item['title']; ?></h5>
                        <div class="star">
                            <?php for ($i=0; $i < $item['id_necessity']; $i++): ?>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z"/></svg>
                            <?php endfor; ?>
                        </div>
                        <h4>Receba agora</h4>
                    </div>
                    <a href="doacao/<?= $item['id'] ?>" ><i class="fal fa-box-heart heart"></i></a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- <section id="sm-banner" class="selection-p1">
        <div class="banner-box">
      <!--       <h4>Venha doar</h4>
            <h2>Ajude sempre</h2>
            <span>Sua comunidade </span>
            <button class="white">Veja mais</button> -->
        </div>
        <div class="banner-box banner-box2">
      <!--       <h4>Venha doar</h4>
            <h2>Ajude sempre</h2>
            <span>Sua comunidade </span>
            <button class="white">Veja mais</button> -->
        </div>
    </section>

    <section id="banner3">
        <div class="banner-box">
   <!--       
            <h2>VENHA AJUDAR</h2>
            <h3>toda ajuda é bem vinda</h3> --> 
        </div>

        <div class="banner-box banner-box2">
          
      <!--       
            <h2>VENHA AJUDAR</h2>
            <h3>toda ajuda é bem vinda</h3> --> 
        </div>

        <div class="banner-box banner-box3">
          
        <!--       
            <h2>VENHA AJUDAR</h2>
            <h3>toda ajuda é bem vinda</h3> --> 
        </div>

    </section>
 -->
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
            <img class="logo" src="../src/views/images/logo_oficial.png" alt="logo">
            <h4>Contato</h4>
<!--           <p><strong>Endereço: </strong> Rua Brigadeiro Tobias, 182, centro, Sorocaba-sp</p> -->
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

        <!-- <div class="col">
            <h4>Minha conta</h4>
            <a href="#"></a>
            <a href="#">Entrar na minha conta</a>
            <a href="#">Ver doações</a>
            <a href="#">Minhas doações</a>
            <a href="#">Ajuda</a>
        </div> -->
<!-- 
        <div class="col install">
            <h4>Instale App</h4>
            <p>App da App Store ou Google Play</p>
            <div class="row">
                <img src="images/pay/app.jpg" alt="App">
                <img src="images/pay/play.jpg" alt="App">
            </div>
            <p>Modos de doação em dinheiro</p>
            <img src="images/pay/pay.png" alt="">
        </div>
 -->
        <div class="copyright">
            ©Todos os direitos reservados a Ajuda Do Bem
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
    //Main Img.src=smallimg[2].src;
  }

</script>

    <script scr="js/script.js"></script>
</body>
</html>