<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="">
	<meta name="abstract" content="Página del anuario de la rama IEEE de la Universidad del Cauca">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<title>Rama IEEE Unicauca</title>
	<?php echo vite('main.js'); ?>
</head>

<body>
	<?php
	include_once "components/sidebar.php";
	?>
	<div class="principal banner__anuario">
		<?php
		include_once "components/header.php";
		?>
		<main class="container">
			<section class="banner">
				<div class="banner__info">
					<div class="banner__name">
						<h1 class="banner__titulo">Anuario</h1>
						<h1 class="banner__subtitulo">Nuestros Miembros</h1>
					</div>
					<div class="banner__description">
						<p class="banner__p">
							Enterate más de quién hace parte de nosotros y nuestra historia a lo largo del tiempo
						</p>
					</div>
					<a href="#mosaico" class="banner__action">
						<button class="banner__button">
							Miembros actuales
							<i class="fa-solid fa-angle-right"></i>
						</button>
					</a>
				</div>
				<?php
				include_once "components/rrss.php";
				?>
			</section>
		</main>
		<web-particles id="particles-js" options='{"fps_limit":60,"interactivity":{"detectsOn":"canvas","events":{"onClick":{"enable":false,"mode":"push"},"onHover":{"enable":false,"mode":"repulse"},"resize":true},"modes":{"push":{"particles_nb":4},"repulse":{"distance":200,"duration":0.4}}},"particles":{"color":{"value":"#ffffff", "opacity":1},"links":{"color":"#ffffff","distance":150,"enable":true,"opacity":0.1,"width":1},"move":{"bounce":false,"direction":"none","enable":true,"outMode":"out","random":false,"speed":2,"straight":false},"number":{"density":{"enable":true,"area":800},"value":80},"opacity":{"value":0.5},"shape":{"type":"circle"},"size":{"random":true,"value":5}},"detectRetina":true}'></web-particles>
	</div>

	<section id="QuienesSomos" class="nosotros">
		<h2 class="nosotros__h2">Línea de Tiempo</h2>
		<div class="timeline__container">
			<div class="timeline__arrow timeline__arrow--left">
				<div class="center-arrow" id="left-arrow">
				</div>
			</div>
			<div class="timeline__arrow timeline__arrow--right">
				<div class="center-arrow" id="right-arrow">
				</div>
			</div>
			<div class="timeline-scroller">
				<div class="timeline" id="timeline">
					<?php
					for ($i = $anioInicio; $i <= $anioFinal; $i = $i + $intervalo) {
					?>
						<div class="timeline__interval">
							<a href="#mosaico" class="timeline__year-selector" data-id="<?php echo $i ?>">
								<div class="flex-1"></div>
								<img data-img="<?php echo $img ?>" src="" alt="<?php echo $i ?>-Image" class="timeline-img">
								<div class="timeline__vertical-line"></div>
								<span><?php echo $i ?>s</span>
							</a>
						</div>
					<?php
						$img++;
					}
					?>
				</div>
			</div>
		</div>
	</section>
	<div class="mosaico">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 195">
			<path fill="#FFFFFF" fill-opacity="1" d="M0,32L48,53.3C96,75,192,117,288,122.7C384,128,480,96,576,90.7C672,85,768,107,864,101.3C960,96,1056,64,1152,74.7C1248,85,1344,139,1392,165.3L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
		</svg>
		<div id="mosaico" class="year-title">2020</div>
		<div class="grid-layout">
			<div class="vertical-timeline-layout">
				<div class="vertical-timeline">
					<div class="year-interval year-interval-icon">
						<a href="#timeline">
							<img id="year-interval-icon-img" src="" alt="year-icon">
						</a>
					</div>
					<?php
					for ($i = $anioInicio; $i <= $anioFinal; $i = $i + $intervalo) {
					?>
						<a class="year-link" data-id="<?php echo $i ?>">
							<div class="year-interval"><?php echo $i ?></div>
						</a>
					<?php
					}
					?>
				</div>
			</div>
			<div class="mini-cards-layout" id="mini-cards-layout">
				<div class="mini-card" data-id="1">
					<div class="bg-blue">
						<div class="img-container">
							<img class="member-img" src="https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png">
							<div class="glass-hover">
								<i class="fas fa-arrow-circle-right fa-3x"></i>
								<p>Ver Más</p>
							</div>
						</div>
						<p class="member-name">Jhon Doe</p>
					</div>
					<div class="insignias">
						<div class="mini-card-medalla"><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></div>
						medallas
						<div class="mini-card-medalla"><a href="mailto:"><i class="fas fa-envelope"></i></a></div>
					</div>
				</div>
			</div>
		</div>
		<div class="card-view-layout" id="card-view-layout">
			<div class="empty-panel" id="card-view-empty-panel"></div>
			<div class="card-view" id="card-view">
				<div class="flip-container" id="flip-container">
				</div>
			</div>
		</div>
	</div>
	</div>
	<?php
	include_once "components/footer.php";
	?>
</body>

</html>