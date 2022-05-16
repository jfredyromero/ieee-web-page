<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Rama IEEE Unicauca</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link rel="stylesheet" href="./assets/css/organization.css" />
	<script src="https://kit.fontawesome.com/8e13114fca.js" crossorigin="anonymous"></script>
</head>

<body>
	<?php
	include_once "components/sidebar.php";
	?>

	<div class="principal banner__noticias">
		<?php
		include_once "components/header.php";
		?>
		<main class="container">
			<section class="banner">
				<div class="banner__info">
					<div class="banner__name">
						<h1 class="banner__titulo">Organización</h1>
						<h1 class="banner__subtitulo">Junta y comités</h1>
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
				include_once "components/rrss.php";
				?>
			</section>
		</main>
		<web-particles id="particles-js" options='{"fps_limit":60,"interactivity":{"detectsOn":"canvas","events":{"onClick":{"enable":false,"mode":"push"},"onHover":{"enable":false,"mode":"repulse"},"resize":true},"modes":{"push":{"particles_nb":4},"repulse":{"distance":200,"duration":0.4}}},"particles":{"color":{"value":"#ffffff", "opacity":1},"links":{"color":"#ffffff","distance":150,"enable":true,"opacity":0.1,"width":1},"move":{"bounce":false,"direction":"none","enable":true,"outMode":"out","random":false,"speed":2,"straight":false},"number":{"density":{"enable":true,"area":800},"value":80},"opacity":{"value":0.5},"shape":{"type":"circle"},"size":{"random":true,"value":5}},"detectRetina":true}'></web-particles>
	</div>

	<div class="container">
		<section class="juntadirectiva">
			<h2 class="juntadirectiva__h2">Junta Directiva</h2>
			<img class="juntadirectiva__img" src="./assets/img/juntadirectiva.svg" alt="juntadirectiva">

			<div class="juntadirectiva__buttons">
				<button class="juntadirectiva__button active">Presidente</button>
				<button class="juntadirectiva__button">Vicepresidente</button>
				<button class="juntadirectiva__button">Secretario</button>
				<button class="juntadirectiva__button">Tesorero</button>
				<button class="juntadirectiva__button">Fiscal</button>
			</div>

			<h3 class="juntadirectiva__h3">Lina Virginia Muñoz Garcés</h3>
			<h4 class="juntadirectiva__h4">Presidente</h4>
			<p class="juntadirectiva__p">“This is an example web page design section to see your shape divider live in action on a beautiful design.”</p>
			<img src="./assets/img/juntaDirectiva/presidente.jpg" alt="imagen responsable del cargo de junta directiva" class="juntadirectiva__persona">

			<div class="juntadirectiva__menu">
				<div class="juntadirectiva__menu-item"></div>
				<div class="juntadirectiva__menu-item"></div>
				<div class="juntadirectiva__menu-item"></div>
				<div class="juntadirectiva__menu-item"></div>
				<div class="juntadirectiva__menu-item"></div>
			</div>

			<div class="juntadirectiva__cards">
				<div class="juntadirectiva__card"> <img src="./assets/img/juntaDirectiva/presidente.jpg" alt="imagen responsable del cargo de junta directiva" class="juntadirectiva__card-image active-card" data-card="presidente"> </div>
				<div class="juntadirectiva__card"> <img src="./assets/img/juntaDirectiva/vicepresidente.jpeg" alt="imagen responsable del cargo de junta directiva" class="juntadirectiva__card-image" data-card="vicepresidente"> </div>
				<div class="juntadirectiva__card"> <img src="./assets/img/juntaDirectiva/tesorero.jpg" alt="imagen responsable del cargo de junta directiva" class="juntadirectiva__card-image" data-card="tesorero"> </div>
				<div class="juntadirectiva__card"> <img src="./assets/img/juntaDirectiva/secretario.jpg" alt="imagen responsable del cargo de junta directiva" class="juntadirectiva__card-image" data-card="secretario"> </div>
				<div class="juntadirectiva__card"> <img src="./assets/img/juntaDirectiva/fiscal.jpg" alt="imagen responsable del cargo de junta directiva" class="juntadirectiva__card-image" data-card="fiscal"> </div>
			</div>

		</section>
	</div>

	<?php
	include_once "components/footer.php";
	include_once "components/scripts.php";
	?>


	<script>
		const juntaDirectiva = <?php echo json_encode($juntaDirectiva); ?>
	</script>

	<script src="assets/js/organization.js"></script>
</body>

</html>