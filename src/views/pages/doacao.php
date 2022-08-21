<?php require_once __DIR__.'/../../models/exibirProduct.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/share/styles/style.php">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.min.css">
    <title>Ajuda do Bem</title>
    <?php include_once 'src/controllers/navbar.php'; ?>
    <section id="modelo">
        <h4>Ajuda para todos</h4>
        <h2>Uma comunidade únida</h2>
        <h1>Ajudando os vizinhos </h1>
        <p>Incentivando o Bem</p>
    </section>


    <form method="get">
        <div class="row my-4">
            <div class="row">
                <div class="col-5">
                    <label>Buscar por titulo</label>
                    <input type="text" name="busca" class="form-control" value="<?= $busca[1]; ?>">
                </div>
                <div class="col align-itens-end">
                    <button type="submit" class="btn btn-primary">Filtrar</button>
                </div>
            </div>
        </div>
    </form>

    <section id="page-header">
 
        <h2>#AjudaDoBem</h2>
     
        <h4>Escolha a sua doação</h4>
        
    </section>
    
    <section id="doação1" class="selection-p1">
        <div class="pro-container">
            <?php foreach ($products as $item): ?>
                <div class="pro">
                    <img src="<?= $item['path']; ?>" alt="">
                    <div class="des">
                        <span><?= $item['category']; ?></span>
                        <h5><?= $item['title']; ?></h5>
                        <h4>Receba agora</h4>
                    </div>
                    <a href="doacao/<?= $item['id']?>" ><i class="fal fa-box-heart heart"></i></a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section id="paginacao" class="selection-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fal fa-long-arrow-alt-right"></i></a>
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

    <script scr="Script.js"></script>
</body>
</html>