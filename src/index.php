<?php require_once 'models/exibirProduct.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/styles/style.css">
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
    <script src="../bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="shortcut icon" href="/AjudaDoBem/src/views/images/favicon.ico" type="image/x-icon">
</head>
    <?php include_once 'controllers/navbar.php'; ?>

    <section id="modelo">
        <h4>Ajuda para todos</h4>
        <h2>Uma comunidade únida</h2>
        <h1>Ajudando os vizinhos </h1>
        <p>Incentivando o Bem</p>
        <a href=<?= Logged($_SESSION) == false ? "views/pages/login.php?url=doacao" : "views/pages/doacao.php"; ?>><button>Doe Agora</button></a>
    </section>
    
    <section id="caracteristicas" class="selection-p1">
        <div class="fe-box">
            <img src="views\images\features\f1.png" alt="">
            <h6> conta grátis </h6>
        </div>
        <div class="fe-box">
            <img src="views\images\features\f2.png" alt="">
            <h6> Fácil entrega </h6>
        </div>
        <div class="fe-box">
            <img src="views\images\features\f3.png" alt="">
            <h6> valores váriados </h6>
        </div>
        <div class="fe-box">
            <img src="views\images\features\f4.png" alt="">
            <h6> Ajudas úteis </h6>
        </div>
        <div class="fe-box">
            <img src="views\images\features\f5.png" alt="">
            <h6> Doações do bairro </h6>
        </div>
        <div class="fe-box">
            <img src="views\images\features\f6.png" alt="">
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
                    <a href="views/pages/doacao_solo.php?<?= "image={$item['path']}&&title={$item['title']}&&category={$item['category']}&&description={$item['description']}"?>" ><i class="fal fa-box-heart heart"></i></a>
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
                            <i class="fa fa-star"></i>
                            <?php endfor; ?>
                        </div>
                        <h4>Receba agora</h4>
                    </div>
                    <a href="views/pages/doacao_solo.php?<?= "image={$item['path']}&&title={$item['title']}&&category={$item['category']}&&description={$item['description']}"?>" ><i class="fal fa-box-heart heart"></i></a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- <section id="sm-banner" class="selection-p1">
        <div class="banner-box">
            <h4>Venha doar</h4>
            <h2>Ajude sempre</h2>
            <span>Sua comunidade </span>
            <button class="white">Veja mais</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>Venha doar</h4>
            <h2>Ajude sempre</h2>
            <span>Sua comunidade </span>
            <button class="white">Veja mais</button>
        </div>
    </section>

    <section id="banner3">
        <div class="banner-box">
          
            <h2>VENHA AJUDAR</h2>
            <h3>toda ajuda é bem vinda</h3>
        </div>

        <div class="banner-box banner-box2">
          
            <h2>VENHA AJUDAR</h2>
            <h3>toda ajuda é bem vinda</h3>
        </div>

        <div class="banner-box banner-box3">
          
            <h2>VENHA AJUDAR</h2>
            <h3>toda ajuda é bem vinda</h3>
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
            <img class="logo" src="view/images/logo_oficial.png" alt="logo">
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
                <img src="images/pay/app.jpg" alt="App">
                <img src="images/pay/play.jpg" alt="App">
            </div>
            <p>Modos de doação em dinheiro</p>
            <img src="images/pay/pay.png" alt="">
        </div>

        <div class="copyright">
            ©Todos os direitos reservados aos alunos da Etec Fernando Prestes
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