<!-- Navbar -->
<style>
	.dropdown-toggle::after{
		border: none;
		
	}

</style>


<nav class="navbar navbar-expand-lg navbar-light ">
	<!-- Container wrapper -->
	<div class="container-fluid">
		<!-- Toggle button -->
		<button
		class="navbar-toggler"
		type="button"
		data-mdb-toggle="collapse"
		data-mdb-target="#navbarSupportedContent"
		aria-controls="navbarSupportedContent"
		aria-expanded="false"
		aria-label="Toggle navigation"
		>
			<i class="fas fa-bars"></i>
		</button>

		<!-- Collapsible wrapper -->
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<!-- Navbar brand -->
			<a class="navbar-brand mt-2 mt-lg-0" href="/inicio">
				<img
				src="/src/views/images/logo.png"
				height="15"
				alt="MDB Logo"
				loading="lazy"
				/>
			</a>
			<!-- Left links -->
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			<li class="nav-item">
				<a class="nav-link" href="/home">Inicio</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="/postar-doacao">Fazer postagem</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="/doacoes">Doações</a>
				</li>
				<!-- <li class="nav-item">
				<a class="nav-link" href="#">Sobre nós</a>
				</li> -->
			</ul>
		<!-- Left links -->
		</div>
		<!-- Collapsible wrapper -->

		<!-- Right elements -->
		<div class="d-flex align-items-center">

			<!-- Notifications -->
			<!-- <div class="dropdown">
				<a
				class="text-reset me-3 dropdown-toggle hidden-arrow"
				href="#"
				id="navbarDropdownMenuLink"
				role="button"
				data-gs-toggle="dropdown"
				aria-expanded="false"
				>
					<i class="fas fa-bell"></i>
					<span class="badge rounded-pill badge-notification bg-danger">1</span>
				</a>
				<ul
				class="dropdown-menu dropdown-menu-end"
				aria-labelledby="navbarDropdownMenuLink"
				>
					<li>
						<a class="dropdown-item" href="../../src/index.php">Inicio</a>
					</li>
					<li>
						<a class="dropdown-item" href="../../src/views/pages/doacao.html">Doações</a>
					</li>
					<li>
						<a class="dropdown-item" href="#">Something else here</a>
					</li>
				</ul>
			</div> -->
			<!-- Avatar -->
			<div class="dropdown">
				<a
				class="dropdown-toggle d-flex align-items-center hidden-arrow"
				href="#"
				id="navbarDropdownMenuAvatar"
				role="button"
				data-bs-toggle="dropdown"
				aria-expanded="false"
				>
					<img
						src="<?= $_SESSION['UserPicture']; ?>"
						class="rounded-circle"
						height="25"
						alt="Black and White Portrait of a Man"
						loading="lazy"
					/>
				</a>
				<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
					<li>
						<a class="dropdown-item" href="atualizar-perfil">Meu perfil</a>
					</li>
					<!-- <li>
						<a class="dropdown-item" href="/AjudaDoBem/src/views/pages/update_register.php">Configurações</a>
					</li> -->
					<li>
						<a class="dropdown-item" href="sair">Sair</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- Right elements -->
	</div>
<!-- Container wrapper -->
</nav>
<!-- Navbar -->
