<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="http://assets.locaweb.com.br/locastyle/3.10.1/stylesheets/locastyle.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="src/views/styles/login.css">
    <link rel="stylesheet" href="src/views/styles/style.css">
    <title>Cadastro | Ajuda Do Bem</title>
    <link rel="shortcut icon" href="src/views/images/favicon.ico" type="image/x-icon">
    <script src="../js/cep.js"></script>
</head>
<body>
    <?php include_once dirname(__FILE__,4).'/src/controllers/navbar.php';?>
    <div class="wrapper">
        <h2>Cadastro</h2>
        <p>Por favor, preencha este formulário para criar uma conta.</p>
        <form action="src/models/register.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
            <label>Nome completo</label>
                <input required id="validationServerName" aria-describedby="validationServerName"  type="text" name="name" placeholder="Ex: Gustavo Pereira Marques" class="form-control <?= $_SESSION['errorMessage']['errorName'] != NULL ? "is-invalid" : "" ?>">

                <?php if ($_SESSION['errorMessage']['errorName'] != NULL) : ?>
                <div id="validationServerName" class="invalid-feedback" role="alert">
                    <?= $_SESSION['errorMessage']['errorName']; ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label>Nome do usuário</label>
                <input required id="validationServerUserName" type="text" name="username" placeholder="Ex: gustavo-pereira13" class="form-control <?= $_SESSION['errorMessage']['errorUserName'] != NULL ? "is-invalid" : "" ?>">
            </div>
            <?php if ($_SESSION['errorMessage']['errorUserName'] != NULL) : ?>
                <div id="validationServerUserName" class="invalid-feedback" role="alert">
                    <?= $_SESSION['errorMessage']['errorUserName']; ?>
                </div>
            <?php endif; ?>
            <div class="form-group">
                <label>Data Nascimento</label>
                <input required type="date" name="datenasc" class="form-control">
            </div>
            <div class="form-group">
                <label>CPF</label>
                <input required id="validationServerCpf" aria-describedby="validationServerCpf" type="text" name="cpf" placeholder="Digite o seu cpf sem -." class="ls-mask-cpf form-control <?= $_SESSION['errorMessage']['errorCpf'] != NULL ? "is-invalid" : "" ?>">
                <?php if ($_SESSION['errorMessage']['errorCpf'] != NULL) : ?>
                <div id="validationServerCpf" class="invalid-feedback" role="alert">
                    <?= $_SESSION['errorMessage']['errorCpf']; ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label>Celular</label>
                <input required type="text" name="phone" placeholder="Digite o seu celular" class="ls-mask-phone9_with_ddd form-control <?= $_SESSION['errorMessage']['errorCell'] != NULL ? "is-invalid" : "" ?>">
            </div>
            <?php if ($_SESSION['errorMessage']['errorCell'] != NULL) : ?>
                <div id="validationServerCell" class="invalid-feedback" role="alert">
                    <?= $_SESSION['errorMessage']['errorCell']; ?>
                </div>
            <?php endif; ?>
            <div class="form-group">
                <label>Email</label>
                <input required type="email" name="email" placeholder="seu@email.com" class="form-control <?= $_SESSION['errorMessage']['errorEmail'] != NULL ? "is-invalid" : "" ?>">
            </div>
            <?php if ($_SESSION['errorMessage']['errorEmail'] != NULL) : ?>
                <div id="validationServerEmail" class="invalid-feedback" role="alert">
                    <?= $_SESSION['errorMessage']['errorEmail']; ?>
                </div>
            <?php endif; ?>
            <div class="form-group">
                <label>Cep:
                    <input required id="validationServerCep" aria-describedby="validationServerCep" name="cep" type="text" id="cep" value="" size="10" maxlength="9" onblur="pesquisacep(this.value);" class="ls-mask-cep form-control <?= $_SESSION['errorMessage']['errorCep'] != NULL ? "is-invalid" : "" ?>">
                </label>
                <?php if ($_SESSION['errorMessage']['errorCep'] != NULL) : ?>
                <div id="validationServerCpf" class="invalid-feedback" role="alert">
                    <?= $_SESSION['errorMessage']['errorCep']; ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input required type="password" name="password" placeholder="Use uma senha segura" class="form-control" id="password_field">
                <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#password_field" href="#"></a>
            </div>
            <div class="form-group">
                <label>Confirme a senha</label>
                <input required type="password" name="confirmpassword" placeholder="Repita a senha acima" class="form-control" id="confirm_password_field">
                <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#confirm_password_field" href="#"></a>
            </div>
            <div class="form-group">
                <label>Foto de perfil</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group">
                
                    <input type="submit" value="Criar Conta" type="button" class="btn btn-success">
                    <input type="reset" value="Apagar Dados" type="button" class="btn btn-danger">
                
            </div>
            <p>Já tem uma conta? <a href="login">Entre aqui</a>.</p>
        </form>
    </div>
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://assets.locaweb.com.br/locastyle/3.10.1/javascripts/locastyle.js" type="text/javascript"></script>
</body>
</html>
<?php if($_SESSION['errorMessage'] != NULL) unset($_SESSION['errorMessage']); ?>