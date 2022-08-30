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
                <input id="validationServerName" aria-describedby="validationServerName"  type="text" name="name" placeholder="Ex: Gustavo Pereira Marques" class="form-control <?= $_SESSION['errorMessage']['Name'] != NULL ? "is-invalid" : "" ?>">

                <?php if ($_SESSION['errorMessage']['Name'] != NULL) : ?>
                <div id="validationServerName" class="invalid-feedback" role="alert">
                    <?= $_SESSION['errorMessage']['Name']; ?>
                </div>
                <?php endif; ?>
            </div>
            <!-- end form-group name -->

            <div class="form-group">
                <label>Nome do usuário</label>
                <input id="validationServerUserName" aria-describedby="validationServerUserName" type="text" name="username" placeholder="Ex: gustavo-pereira13" class="form-control <?= $_SESSION['errorMessage']['UserName'] != NULL ? "is-invalid" : "" ?>">
                
                <?php if ($_SESSION['errorMessage']['UserName'] != NULL) : ?>
                    <div id="validationServerUserName" class="invalid-feedback" role="alert">
                        <?= $_SESSION['errorMessage']['UserName']; ?>
                    </div>
                <?php endif; ?>
            </div>
            <!-- end form-group UserName -->

            <div class="form-group">
                <label>Data Nascimento</label>
                <input type="date" name="datenasc" class="form-control">
            </div>

            <div class="form-group">
                <label>CPF</label>
                <input id="validationServerCpf" aria-describedby="validationServerCpf" type="text" name="cpf" placeholder="Digite o seu cpf sem -." class="ls-mask-cpf form-control <?= $_SESSION['errorMessage']['Cpf'] != NULL ? "is-invalid" : "" ?>">
                <?php if ($_SESSION['errorMessage']['Cpf'] != NULL) : ?>
                    <div id="validationServerCpf" class="invalid-feedback" role="alert">
                        <?= $_SESSION['errorMessage']['Cpf']; ?>
                    </div>
                <?php endif; ?>
            </div>
            <!-- end form-group cpf -->
            
            <div class="form-group">
                <label>Celular</label>
                <input  id="validationServerCpf" aria-describedby="validationServerCell" type="text" name="phone" placeholder="Digite o seu celular" class="ls-mask-phone9_with_ddd form-control <?= $_SESSION['errorMessage']['Cell'] != NULL ? "is-invalid" : "" ?>">
            
                <?php if ($_SESSION['errorMessage']['Cell'] != NULL) : ?>
                    <div id="validationServerCell" class="invalid-feedback" role="alert">
                        <?= $_SESSION['errorMessage']['Cell']; ?>
                    </div>
                <?php endif; ?>
            </div>
            <!-- end form-group phone -->

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="seu@email.com" class="form-control <?= $_SESSION['errorMessage']['Email'] != NULL ? "is-invalid" : "" ?>">
            
                <?php if ($_SESSION['errorMessage']['Email'] != NULL) : ?>
                    <div id="validationServerEmail" class="invalid-feedback" role="alert">
                        <?= $_SESSION['errorMessage']['Email']; ?>
                    </div>
                <?php endif; ?>
            </div>
            <!-- end form-group email -->

            <div class="form-group">
                <label>Cep:
                    <input id="validationServerCep" aria-describedby="validationServerCep" name="cep" type="text" id="cep" value="" size="10" maxlength="9" onblur="pesquisacep(this.value);" class="ls-mask-cep form-control <?= $_SESSION['errorMessage']['Cep'] != NULL ? "is-invalid" : "" ?>">
                </label>
                
                <?php if ($_SESSION['errorMessage']['Cep'] != NULL) : ?>
                <div id="validationServerCpf" class="invalid-feedback" role="alert">
                    <?= $_SESSION['errorMessage']['Cep']; ?>
                </div>
                <?php endif; ?>
            </div>
            <!-- end form-group cep -->

            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="password" placeholder="Use uma senha segura" class="form-control" id="password_field">
                <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#password_field" href="#"></a>
            </div>
            <!-- end form-group password -->

            <div class="form-group">
                <label>Confirme a senha</label>
                <input type="password" name="confirmpassword" placeholder="Repita a senha acima" class="form-control" id="confirm_password_field">
                <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#confirm_password_field" href="#"></a>
            </div>
            <!-- end form-group confirmPassword -->

            <div class="form-group">
                <label>Foto de perfil</label>
                <input type="file" accept="image/*" name="image" class="form-control">
            </div>
            <!-- end form-group image -->

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