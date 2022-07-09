<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="../styles/login.css">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Cadastro | Ajuda Do Bem</title>
    <link rel="shortcut icon" href="/AjudaDoBem/src/views/images/favicon.ico" type="image/x-icon">
    <script src="/AjudaDoBem/src/views/js/cep.js"></script>
</head>
<body>
<?php require_once __DIR__.'/../../models/exibirProduct.php';?>
<?php include_once __DIR__.'/../../controllers/navbar.php';?>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="<?= $_SESSION['UserPicture']; ?>">
                <span class="font-weight-bold"><?= $_SESSION['UserNome']; ?></span>
                <span class="text-black-50"><?= $_SESSION['UserEmail']; ?></span>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Configurações do perfil</h4>
                </div>
                <form action="/AjudaDoBem/src/models/update_user.php" method="post" enctype="multipart/form-data">
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="labels">Nome Completo</label>
                            <input type="text" name="name" class="form-control" placeholder="Digite seu nome completo" value="<?= $_SESSION['UserNome']; ?>">
                        </div>

                        <div class="col-md-12">
                            <label class="labels">CPF</label>
                            <input type="text" name="cpf" placeholder="Digite o seu cpf sem -." class="ls-mask-cpf form-control" readonly value="<?= $_SESSION['UserCpf']; ?>">
                        </div>

                        <div class="col-md-12">
                            <label class="labels">Nome de usuário</label>
                            <input type="text" name="username" placeholder="Ex: gustavo-pereira13" class="form-control" value="<?= $_SESSION['UserName']; ?>">
                        </div>

                        <div class="col-md-12">
                            <label class="labels">Data de nascimento</label>
                            <input  type="date" name="datenasc" class="form-control" value="<?= $_SESSION['BirthDate']; ?>">
                        </div>

                        <div class="col-md-12">
                            <label class="labels">Celular</label>
                            <input type="text" name="phone" placeholder="Digite o seu celular" class="ls-mask-phone9_with_ddd form-control" value="<?= $_SESSION['UserCelular']; ?>">
                        </div>

                        <div class="col-md-12">
                            <label class="labels">Email</label>
                            <input type="email" name="email" placeholder="seu@email.com" class="form-control" value="<?= $_SESSION['UserEmail']; ?>">
                        </div>

                        <div class="col-md-12">
                            <label class="labels">CEP</label>
                            <input name="cep" type="text" id="cep" size="10" maxlength="9" onblur="pesquisacep(this.value);" class="ls-mask-cep form-control" value="<?= $_SESSION['UserCep']; ?>">
                        </div>

                        <div class="col-md-12">
                            <label class="labels">Rua</label>
                            <input name="rua" type="text" id="rua" size="60" class="form-control" readonly>
                        </div>

                        <div class="col-md-12"><label class="labels">Bairro</label><input name="bairro" type="text" id="bairro" size="40" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-9">
                            <label class="labels">Cidade</label>
                            <input name="cidade" type="text" id="cidade" size="40" class="form-control" readonly>
                        </div>
                        
                        <div class="col-md-3">
                            <label class="labels">Estado</label>
                            <input name="uf" type="text" id="uf" size="2" class="form-control"  readonly>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <button type="submit" value="Criar Conta" type="button" class="btn btn-success profile-button" type="button">Salvar</button>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop">
                            Desativar conta
                        </button>
                    </div>
                </div>
            </form>
        </div>
        
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Doações </span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="list-group">
                    <?php foreach ($productsDonation as $item): ?>
                        <a href="/doacao/<?= $item['id'] ?>" >
                        <ul class="list-group list-group-horizontal col-12">
                            <li class="list-group-item">
                                <img height="100" width="100" src="<?= $item['path']; ?>" alt="">
                            </li>
                            <li class="list-group-item col-9">
                                <?= $item['title']; ?>
                            </li>
                        </ul>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tem certeza?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Sua conta podera ser reativada em até 60 dias.</p>
        <p>Após isso ela sera desativada, perdendo todas publicações e dados!!!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="../../models/delete_user.php"><button type="" value="Criar Conta" type="button" class="btn btn-danger profile-button" type="button">Desativar conta</button></a>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://assets.locaweb.com.br/locastyle/3.10.1/javascripts/locastyle.js" type="text/javascript"></script>
</body>
</html>