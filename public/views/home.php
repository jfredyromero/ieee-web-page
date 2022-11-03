<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="">
	<meta name="abstract" content="Página de inicio de la rama IEEE de la Universidad del Cauca">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<title>Rama IEEE Unicauca</title>
	<?php echo vite('main.js'); ?>
</head>

<body>
	<?php
	include_once "components/sidebar.php";
	?>
	<div class="principal">
		<?php
		include_once('components/header.php');
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
							El IEEE es una organización sin ánimo de lucro y es considerada la mayor asociación del mundo para el desarrollo tecnológico.
						</p>
					</div>
					<a href="https://www.instagram.com/ieeeunicauca/" target="_blank" class="banner__action">
						<button class="banner__button">
							Contáctanos
							<i class="fa-solid fa-angle-right"></i>
						</button>
					</a>
				</div>
				<?php
				include_once('components/rrss.php');
				?>
			</section>
		</main>
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
						<img id="mision-img" src="" alt="" class="nosotros__img" />
					</div>

					<div class="nosotros__card-title">
						<h3 class="nosotros__h3">Misión</h3>
					</div>

					<div class="nosotros__card-description">
						<p class="nosotros__p">
							Nuestra misión es difundir avances científicos y tecnológicos y ser agentes de cambio para nuestra Comunidad Herediana a través de la generación de proyectos humanitarios y científicos, talleres y conferencias que apoyen a nuestros miembros y la comunidad en su crecimiento profesional.
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
						<img id="vision-img" src="" alt="" class="nosotros__img" />
					</div>

					<div class="nosotros__card-title">
						<h3 class="nosotros__h3">Visión</h3>
					</div>

					<div class="nosotros__card-description">
						<p class="nosotros__p">
							Estar capacitados para desarrollar cualquier proyecto tecnológico propuesto a nuestra asociación por parte de la Comunidad Herediana y externos, y además ser una Rama Estudiantil ejemplar y referente de eventos , conferencias y talleres de alta calidad relacionados con ciencia y tecnología.
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
						<img id="valores-img" src="" alt="" class="nosotros__img" />
					</div>

					<div class="nosotros__card-title">
						<h3 class="nosotros__h3">Principios y Valores</h3>
					</div>

					<div class="nosotros__card-description">
						<p class="nosotros__p">
							Somos un grupo donde esta presente la union, el trabajo en equipo, la disposicion de ayudar y la participacion con las diferentes habilidades que tiene cada miembro, que con respeto y comprencion aportamos a cada miembro una construccion sana y positiva para su siguiente paso.
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
					<h2 class="information__h2">Haz parte de esta gran familia!</h2>
					<p class="information__p">
						Sé parte de la aventura IEEE, ayudandonos a crecer con tu potencial, ¡Animate!
					</p>
				</div>

				<div class="information__graphic animate__animated animate__slideInRight">
					<img id="ensenar-img" class="information__img" src="" alt="Enseñar" />
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
	?>
</body>

</html>