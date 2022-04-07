<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="../styles/login.css">
</head>
<body>
    <section id="header">
            <a href="#"><img src="logo3.png" class="logo" alt="logo"></a>

            <div>
                <ul id="navbar">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="Doações.html">Doações</a></li>
                    <li><a href="Blog.html">Blog</a></li>
                    <li><a href="Sobre_nos.html">Sobre nós</a></li>
                    <li><a class="active" href="Contato.html">Contato</a></li>
                    <li>
                        <a href="Sacola.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div id="mobile">
                <a href="Sacola.html"><i class="far fa-shopping-bag"></i></a>
                <i id="bar" class="fas fa-outdent"></i>
            </div>
    </section>

    <div class="wrapper">
        <h2>Cadastro</h2>
        <p>Por favor, preencha este formulário para criar uma conta.</p>
        <form action="../scripts/register.php" method="post">
            <div class="form-group">
                <label>Nome completo</label>
                <input type="text" name="name" placeholder="Ex: Gustavo Pereira Marques" class="form-control">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group">
                <label>CPF</label>
                <input type="text" name="cpf" placeholder="Digite o seu cpf sem -." class="form-control">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group">
                <label>Nome do usuário</label>
                <input type="text" name="username" placeholder="Ex: Gustavo Pereira Marques" class="form-control">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="password" placeholder="Use uma senha segura" class="form-control">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirme a senha</label>
                <input type="password" name="confirmpassword" placeholder="Repita a senha acima" class="form-control">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <div class="botao_registo">
                    <input type="submit" value="Criar Conta">
                    <span><input type="reset" value="Apagar Dados"></span>
                </div>
            </div>
            <p>Já tem uma conta? <a href="login.php">Entre aqui</a>.</p>
        </form>
    </div>    
</body>
</html>