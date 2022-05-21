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

	<div class="juntadirectiva-fondo">
		<div class="waves">
			<div class="animated-wave white-wave1"></div>
			<div class="animated-wave white-wave2"></div>
			<div class="animated-wave white-wave3"></div>
		</div>
		<div class="container">
			<section class="juntadirectiva">
				<h2 class="juntadirectiva__h2">Junta Directiva</h2>
				<img class="juntadirectiva__img" src="./assets/img/juntadirectiva.svg" alt="juntadirectiva">

				<div class="juntadirectiva__timeline">
					<div class="title">
						<h4>Cargos</h4>
						<h3>Junta Directiva</h3>
					</div>
					<div class="events">
						<div class="event">
							<div class="knob active"></div>
							<div class="date">
								<h2>Presidente</h2>
							</div>
							<div class="description">
								<p>Lina Virginia Muñoz</p>
							</div>
						</div>
						<div class="event">
							<div class="knob"></div>
							<div class="date">
								<h2>Vice-presidente</h2>
							</div>
							<div class="description">
								<p>Juan Diego Bravo Guevara</p>
							</div>
						</div>
						<div class="event">
							<div class="knob"></div>
							<div class="date">
								<h2>Tesorero</h2>
							</div>
							<div class="description">
								<p>Isabela Omen</p>
							</div>
						</div>
						<div class="event">
							<div class="knob"></div>
							<div class="date">
								<h2>Secretario</h2>
							</div>
							<div class="description">
								<p>Paula Andrea Rosero</p>
							</div>
						</div>
						<div class="event">
							<div class="knob"></div>
							<div class="date">
								<h2>Fiscal</h2>
							</div>
							<div class="description">
								<p>Ana Isabel Caicedo</p>
							</div>
						</div>
						
						<div class="line"></div>
					</div>
				</div>

					<div class="juntadirectiva__buttons">
						<button class="juntadirectiva__button juntadirectiva__active-button">Presidente</button>
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
						<div class="juntadirectiva__card"> <img src="./assets/img/juntaDirectiva/presidente.jpg" alt="imagen responsable del cargo de junta directiva" class="juntadirectiva__card-image juntadirectiva__active-card" data-card="presidente"> </div>
						<div class="juntadirectiva__card"> <img src="./assets/img/juntaDirectiva/vicepresidente.jpeg" alt="imagen responsable del cargo de junta directiva" class="juntadirectiva__card-image" data-card="vicepresidente"> </div>
						<div class="juntadirectiva__card"> <img src="./assets/img/juntaDirectiva/tesorero.jpg" alt="imagen responsable del cargo de junta directiva" class="juntadirectiva__card-image" data-card="tesorero"> </div>
						<div class="juntadirectiva__card"> <img src="./assets/img/juntaDirectiva/secretario.jpg" alt="imagen responsable del cargo de junta directiva" class="juntadirectiva__card-image" data-card="secretario"> </div>
						<div class="juntadirectiva__card"> <img src="./assets/img/juntaDirectiva/fiscal.jpg" alt="imagen responsable del cargo de junta directiva" class="juntadirectiva__card-image" data-card="fiscal"> </div>
					</div>
			</section>
		</div>
	</div>

	<section class="comites-fondo">
		<div class="container comites">
			<h2 class="comites__titulo">Comités</h2>
			<img src="./assets/img/comites.svg" alt="" class="comites__img">

			<h3 class="comites__nombre-comite">Comité Académico</h3>

			<p class="comites__descripcion">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in volutpat nisi, et elementum ante. Vestibulum ullamcorper mauris vel euismod mattis. Vestibulum efficitur in nunc in eleifend</p>

			<div class="comites__buttons">
				<div class="comites__button comites__active-button" data-comite="Académico">
					<ion-icon name="book" class="comites__icono" data-comite="academico"></ion-icon>
					<h5 class="comites__h5 comites__active-h5"> Académico </h5>
				</div> <!-- academico -->
				<div class="comites__button" data-comite="Publicidad">
					<ion-icon name="newspaper" class="comites__icono" data-comite="publicidad"></ion-icon>
					<h5 class="comites__h5"> Publicidad </h5>
				</div> <!-- publicidad -->
				<div class="comites__button" data-comite="logistica">
					<ion-icon name="calendar-clear" class="comites__icono" data-comite="logistica"></ion-icon>
					<h5 class="comites__h5"> Logística </h5>
				</div> <!-- logistica -->
				<div class="comites__button" data-comite="patrocinios">
					<ion-icon name="wallet" class="comites__icono" data-comite="patrocinios"></ion-icon>
					<h5 class="comites__h5"> Patrocinios </h5>
				</div> <!-- patrocinios -->
				<div class="comites__button" data-comite="ludicas">
					<ion-icon name="balloon" class="comites__icono" data-comite="ludicas"></ion-icon>
					<h5 class="comites__h5"> Lúdicas </h5>
				</div> <!-- ludicas -->
			</div>

			<div class="comites__coordinadores">
				<div class="comites__coordinador">
					<div class="comites__persona">
						<img src="assets/img/comites/coordinadorAcademico.jpeg" alt="Coordinador del comité" class="comites__persona-img">
					</div>
					<div class="comites__persona-info">
						<h3 class="comites__persona-nombre">Johan Santiago Yangana</h3>
						<h4 class="comites__persona-cargo">Coordinador</h4>
					</div>
				</div>
				<div class="comites__coordinador">
					<div class="comites__persona">
						<img src="assets/img/comites/coordinadorAcademico.jpeg" alt="Sub-coordinador del comité" class="comites__persona-img">
					</div>
					<div class="comites__persona-info">
						<h3 class="comites__persona-nombre">Luis Fernando Coral Patiño</h3>
						<h4 class="comites__persona-cargo">Sub-Coordinador</h4>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php
	include_once "components/footer.php";
	include_once "components/scripts.php";
	?>

	<script>
		const juntaDirectiva = <?php echo json_encode($juntaDirectiva); ?>
		/* const coordinadores = <?php echo json_encode($coordiandores); ?>
		const comites = <?php echo json_encode($comites); ?> */
	</script>

	<script src="assets/js/organization.js"></script>

	<!-- ICONOS ionic-icons (sección comites) -->
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>