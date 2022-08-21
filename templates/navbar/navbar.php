<!-- Navbar -->
<head>
	<link rel="stylesheet" href="/src/views/styles/style_header.css">
</head>
	<style>
		.dropdown-toggle::after{
			border-color: transparent;
			
		}
	</style>
<section id="header">
	<a href="index"><img src="/src/views/images/logo_oficial.png" class="logo" alt="logo"></a>

	<div>
		<ul id="navbar">
			<li><a <?= $active =='index' ? 'class="active"' : ""; ?> href="home">Home</a></li>
			<li><a <?= $active =='sobre' ? 'class="active"' : ""; ?> href="sobre">Sobre nós</a></li>
			<li><a <?= $active =='doacoes' ? 'class="active"' : ""; ?> href="doacoes">Doações</a></li>
			<li><a <?= $active =='register' ? 'class="active"' : ""; ?> href="cadastro">Cadastre-se</a></li>
			<li><a <?= $active =='login' ? 'class="active"' : ""; ?> href="login">Entre</a></li>
		</ul>
	</div>
</section>