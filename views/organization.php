<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Rama IEEE Unicauca</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link rel="stylesheet" href="./assets/scss/app.css" />
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

		<?php
			var_dump($juntaDirectiva);
			echo 'HOLA';
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
		<section id="QuienesSomos" class="juntadirectiva">
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
			<img src="./assets/img/lina.png" alt="imagen presidente" class="juntadirectiva__img">

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
					<img class="information__img" src="./assets/img/Ensenar.png" alt="" />
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
	<script>
		fetch('https://jsonplaceholder.typicode.com/todos/1')
		.then(response => response.json())
		.then(json => console.log(json))

		fetch('https://localhost/ieee-web-page/get-junta-directiva.php')
		.then(response => response.json())
		.then(json => console.log(json))
	</script>
</body>

</html>