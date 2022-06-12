<!-- Navbar -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../src/views/styles/style_header.css">
</head>
	<style>
		.dropdown-toggle::after{
			border-color: transparent;
			
		}

	</style>
<body>
<section id="header">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
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
			<a class="navbar-brand mt-2 mt-lg-0" href="#">
				<img
				src="/AjudaDoBem/src/views/images/logo.png"
				height="15"
				alt="MDB Logo"
				loading="lazy"
				/>
			</a>
			<!-- Left links -->
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
				<a class="nav-link" href="#">Inicio</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="#">doações</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="#">Sobre nós</a>
				</li>
			</ul>
		<!-- Left links -->
		</div>
		<!-- Collapsible wrapper -->

		<!-- Right elements -->
		<div class="d-flex align-items-center">


			<!-- Notifications -->
			<div class="dropdown">
				<a
				class="text-reset me-3 dropdown-toggle hidden-arrow"
				href="#"
				id="navbarDropdownMenuLink"
				role="button"
				data-gs-toggle="dropdown"
				aria-expanded="false"
				>
					<i class="fas fa-user"></i>
					<span class="badge rounded-pill badge-notification bg-danger">1</span>
				</a>

			</div>
			<!-- Avatar -->
		</div>
		<!-- Right elements -->
	</div>
<!-- Container wrapper -->
</nav>
<!-- Navbar -->
</section>
</body>
</html>