<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Rama IEEE Unicauca</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link rel="stylesheet" href="./assets/scss/organization.css" />
	<script src="https://kit.fontawesome.com/8e13114fca.js" crossorigin="anonymous"></script>
</head>

<body>
	<?php
	include_once "components/sidebar.php";
	?>
	<div class="principal banner__organizacion">
		<?php
		include_once "components/header.php";
		?>



		<main class="container">
			<section class="banner">
				<div class="banner__info">
					<div class="banner__name">
						<h1 class="banner__h1-ramaieee">Organización</h1>
						<h1 class="banner__h1-unicauca">Junta y comités</h1>
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
				<button class="juntadirectiva__button">Vice-presidente</button>
				<button class="juntadirectiva__button">Secretario</button>
				<button class="juntadirectiva__button">Tesorero</button>
				<button class="juntadirectiva__button">Fiscal</button>
			</div>

			<h3 class="juntadirectiva__h3">Lina Virginia Muñoz Garcés</h3>
			<h4 class="juntadirectiva__h4">Presidente</h4>
			<p class="juntadirectiva__p">“This is an example web page design section to see your shape divider live in action on a beautiful design.”</p>
			<img src="./assets/img/lina.png" alt="imagen presidente" class="juntadirectiva__persona">

		</section>
	</div>

	<?php
	include_once "components/footer.php";
	?>
</body>
<!-- <script src="../assets/js/organization.js"></script> -->

</html>