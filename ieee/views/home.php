<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Rama IEEE Unicauca</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link rel="stylesheet" href="./ieee/assets/css/home.css" />
	<script src="https://kit.fontawesome.com/8e13114fca.js" crossorigin="anonymous"></script>
</head>

<body>

	<?php
		include_once "components/sidebar.php";
	?>

	<div class="principal">

		<?php
			include_once('./ieee/views/components/header.php');
		?>

		<main class="container">
			<section class="banner">
				<div class="banner__info">
					<div class="banner__name">
						<h1 class="banner__titulo">RAMA IEEE</h1>
						<h1 class="banner__subtitulo">Unicauca</h1>
					</div>
					<div class="banner__description">
						<p class="banner__p">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit
							dolore atque minus corrupti. Exercitationem, molestiae neque!
						</p>
					</div>
					<div class="banner__action">
						<button class="banner__button">
							Join Us
							<i class="fa-solid fa-angle-right"></i>
						</button>
					</div>
				</div>

				<?php
				include_once('./ieee/views/components/rrss.php');
				?>

			</section>
		</main>

		<web-particles id="particles-js" options='{"fps_limit":60,"interactivity":{"detectsOn":"canvas","events":{"onClick":{"enable":false,"mode":"push"},"onHover":{"enable":false,"mode":"repulse"},"resize":true},"modes":{"push":{"particles_nb":4},"repulse":{"distance":200,"duration":0.4}}},"particles":{"color":{"value":"#ffffff", "opacity":1},"links":{"color":"#ffffff","distance":150,"enable":true,"opacity":0.1,"width":1},"move":{"bounce":false,"direction":"none","enable":true,"outMode":"out","random":false,"speed":2,"straight":false},"number":{"density":{"enable":true,"area":800},"value":80},"opacity":{"value":0.5},"shape":{"type":"circle"},"size":{"random":true,"value":5}},"detectRetina":true}'></web-particles>
	</div>

	<div class="container">
		<section id="QuienesSomos" class="nosotros">
			<h2 class="nosotros__h2">¿Quienes Somos?</h2>
			<div class="nosotros__cards">
				<div class="nosotros__card nosotros-1">
					<div class="nosotros__icons">
						<ul class="nosotros__ul">
							<li class="nosotros__li">
								<span class="nosotros__span">
									<i class="nosotros__i fa-solid fa-users"></i>
								</span>
							</li>
							<li class="nosotros__li">
								<span class="nosotros__span">
									<i class="nosotros__i fa-solid fa-users"></i>
								</span>
							</li>
							<li class="nosotros__li">
								<span class="nosotros__span">
									<i class="nosotros__i fa-solid fa-mars-and-venus"></i>
								</span>
							</li>
						</ul>
					</div>

					<div class="nosotros__logo-card">
						<img src="./ieee/assets/img/mision.png" alt="" class="nosotros__img" />
					</div>

					<div class="nosotros__card-title">
						<h3 class="nosotros__h3">Misión</h3>
					</div>

					<div class="nosotros__card-description">
						<p class="nosotros__p">
							Lorem ipsum dolor, sit amet consectetur adipisicing elit.
							Distinctio quisquam soluta, non iure nihil explicabo.
						</p>
					</div>
				</div>

				<div class="nosotros__card nosotros-2">
					<div class="nosotros__icons">
						<ul class="nosotros__ul">
							<li class="nosotros__li">
								<span class="nosotros__span">
									<i class="nosotros__i fa-solid fa-users"></i>
								</span>
							</li>
							<li class="nosotros__li">
								<span class="nosotros__span">
									<i class="nosotros__i fa-solid fa-users"></i>
								</span>
							</li>
							<li class="nosotros__li">
								<span class="nosotros__span">
									<i class="nosotros__i fa-solid fa-mars-and-venus"></i>
								</span>
							</li>
						</ul>
					</div>

					<div class="nosotros__logo-card">
						<img src="./ieee/assets/img/mision.png" alt="" class="nosotros__img" />
					</div>

					<div class="nosotros__card-title">
						<h3 class="nosotros__h3">Misión</h3>
					</div>

					<div class="nosotros__card-description">
						<p class="nosotros__p">
							Lorem ipsum dolor, sit amet consectetur adipisicing elit.
							Distinctio quisquam soluta, non iure nihil explicabo.
						</p>
					</div>
				</div>

				<div class="nosotros__card nosotros-3">
					<div class="nosotros__icons">
						<ul class="nosotros__ul">
							<li class="nosotros__li">
								<span class="nosotros__span">
									<i class="nosotros__i fa-solid fa-users"></i>
								</span>
							</li>
							<li class="nosotros__li">
								<span class="nosotros__span">
									<i class="nosotros__i fa-solid fa-users"></i>
								</span>
							</li>
							<li class="nosotros__li">
								<span class="nosotros__span">
									<i class="nosotros__i fa-solid fa-mars-and-venus"></i>
								</span>
							</li>
						</ul>
					</div>

					<div class="nosotros__logo-card">
						<img src="./ieee/assets/img/mision.png" alt="" class="nosotros__img" />
					</div>

					<div class="nosotros__card-title">
						<h3 class="nosotros__h3">Misión</h3>
					</div>

					<div class="nosotros__card-description">
						<p class="nosotros__p">
							Lorem ipsum dolor, sit amet consectetur adipisicing elit.
							Distinctio quisquam soluta, non iure nihil explicabo.
						</p>
					</div>
				</div>
			</div>
		</section>
	</div>

	<section class="important">
		<div class="container">
			<div id="informacion" class="information">
				<div class="information__text">
					<h2 class="information__h2">Titulo Sección</h2>
					<p class="information__p">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit.
						Explicabo ducimus dolor possimus odio ipsa? Vero aliquid illum
						dolor doloribus maiores sed, velit, quisquam sapiente fuga
						delectus, adipisci perspiciatis nostrum ad!
					</p>
				</div>

				<div class="information__graphic animate__animated animate__slideInRight">
					<img class="information__img" src="./ieee/assets/img/Ensenar.png" alt="" />
				</div>
			</div>
		</div>
	</section>

	<div class="wave">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 195">
			<path fill="#123F72" fill-opacity="1" d="M0,32L48,53.3C96,75,192,117,288,122.7C384,128,480,96,576,90.7C672,85,768,107,864,101.3C960,96,1056,64,1152,74.7C1248,85,1344,139,1392,165.3L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
		</svg>
	</div>

	<div class="informe-anual">
		<div class="container">
			<h2 class="informe-anual__h2">Informe Anual</h2>
			<div class="informe-anual__graphics">

				<div class="informe-anual__graphic ocultar animar">
					<div class="pie" data-pie='{ "percent": 56 }'></div>
					<h3 class="informe-anual__title">Eventos</h3>
				</div>

				<div class="informe-anual__graphic ocultar animar">
					<div class="pie" data-pie='{ "percent": 60 }'></div>
					<h3 class="informe-anual__title">Miembros</h3>
				</div>

				<div class="informe-anual__graphic ocultar animar">
					<div class="pie" data-pie='{ "percent": 36 }'></div>
					<h3 class="informe-anual__title">IEEE Awards</h3>
				</div>

			</div>
		</div>
	</div>

	<?php
	include_once "components/footer.php";
	include_once "components/scripts.php";
	?>

</body>

</html>