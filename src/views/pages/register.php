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
</head>
<body>
    <?php include_once dirname(__FILE__,4).'/src/controllers/navbar.php';?>
    <div class="wrapper">
        <h2>Cadastro</h2>
        <p>Por favor, preencha este formulário para criar uma conta.</p>
        <form action="/AjudaDoBem/src/models/register.php" method="post">
            <div class="form-group">
                <label>Nome completo</label>
                <input type="text" name="name" placeholder="Ex: Gustavo Pereira Marques" class="form-control">
            </div>
            <div class="form-group">
                <label>Data Nascimento</label>
                <input type="date" name="datenasc" class="form-control">
            </div>
            <div class="form-group">
                <label>CPF</label>
                <input type="text" name="cpf" placeholder="Digite o seu cpf sem -." class="form-control">
            </div>
            <div class="form-group">
                <label>Nome do usuário</label>
                <input type="text" name="username" placeholder="Ex: gustavo-pereira13" class="form-control">
            </div>
            <div class="form-group">
                <label>Celular</label>
                <input type="text" name="phone" placeholder="Digite o seu celular" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="seu@email.com" class="form-control">
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="password" placeholder="Use uma senha segura" class="form-control">
            </div>
            <div class="form-group">
                <label>Confirme a senha</label>
                <input type="password" name="confirmpassword" placeholder="Repita a senha acima" class="form-control">
            </div>
            <div class="form-group">
                
                    <input type="submit" value="Criar Conta" type="button" class="btn btn-success">
                    <input type="reset" value="Apagar Dados" type="button" class="btn btn-danger">
                
            </div>
            <div class='alert alert-warning'><?php echo $_SERVER['error'];?></div>
            <p>Já tem uma conta? <a href="login.php">Entre aqui</a>.</p>
        </form>
    </div>    
</body>
</html>