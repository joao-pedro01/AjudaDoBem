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
    <script src="../js/cep.js"></script>
</head>
<body>
<?php include_once __DIR__.'/../../controllers/navbar.php';?>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="<?= $_SESSION['UserPicture']; ?>"><span class="font-weight-bold"><?= $_SESSION['UserNome']; ?></span><span class="text-black-50"><?= $_SESSION['UserEmail']; ?></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Configurações do perfil</h4>
                </div>
                <form action="/AjudaDoBem/src/models/update_user.php" method="post" enctype="multipart/form-data">
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Nome Completo</label><input type="text" name="name" class="form-control" placeholder="Digite seu nome completo" value="<?= $_SESSION['UserNome']; ?>"></div>
                        <div class="col-md-12"><label class="labels">CPF</label><input type="text" name="cpf" placeholder="Digite o seu cpf sem -." class="ls-mask-cpf form-control" readonly value="<?= $_SESSION['UserCpf']; ?>"></div>
                        <div class="col-md-12"><label class="labels">Nome de usuário</label><input type="text" name="username" placeholder="Ex: gustavo-pereira13" class="form-control" value="<?= $_SESSION['UserName']; ?>"></div>
                        <div class="col-md-12"><label class="labels">Data de nascimento</label><input  type="date" name="datenasc" class="form-control" value="<?= $_SESSION['BirthDate']; ?>"></div>
                        <div class="col-md-12"><label class="labels">Celular</label><input type="text" name="phone" placeholder="Digite o seu celular" class="ls-mask-phone9_with_ddd form-control" value="<?= $_SESSION['UserCelular']; ?>"></div>
                        <div class="col-md-12"><label class="labels">Email</label><input type="email" name="email" placeholder="seu@email.com" class="form-control" value="<?= $_SESSION['UserEmail']; ?>"></div>
                        <div class="col-md-12"><label class="labels">CEP</label><input name="cep" type="text" id="cep" size="10" maxlength="9" onblur="pesquisacep(this.value);" class="ls-mask-cep form-control" value="<?= $_SESSION['UserCep']; ?>"></div>
                        <div class="col-md-12"><label class="labels">Rua</label><input name="rua" type="text" id="rua" size="60" class="form-control" readonly></div>
                        <div class="col-md-12"><label class="labels">Bairro</label><input name="bairro" type="text" id="bairro" size="40" class="form-control" readonly></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-9"><label class="labels">Cidade</label><input name="cidade" type="text" id="cidade" size="40" class="form-control" readonly></div>
                        <div class="col-md-3"><label class="labels">Estado</label><input name="uf" type="text" id="uf" size="2" class="form-control"  readonly></div>
                    </div>
                    <div class="mt-5 text-center"><button type="submit" value="Criar Conta" type="button" class="btn btn-primary profile-button" type="button">Save Profile</button></div>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://assets.locaweb.com.br/locastyle/3.10.1/javascripts/locastyle.js" type="text/javascript"></script>
</body>
</html>