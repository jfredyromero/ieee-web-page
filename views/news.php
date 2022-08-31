<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Rama IEEE Unicauca</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link rel="stylesheet" href="./assets/css/news.css" />
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
						<h1 class="banner__titulo">TET 2022</h1>
						<h1 class="banner__subtitulo">Organiza Rama Estudiantil IEEE</h1>
					</div>
					<div class="banner__description">
						<p class="banner__p">
							¿Quieres adquirir tu entrada al Noveno Seminario de Tecnologías
							Emergentes de Telecomunicaciones?
						</p>
					</div>
					<div class="banner__action">
						<button class="banner__button">
							¿Cómo Lo Hago?
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
	<section class="tet__container">
		<div class='info__tet'>

				<div class='logo_tet'>
					<img src="./assets/img/Logo_TET.png" alt="Error al cargar la imagen" class="img_logo_tet">
				</div>
				<div class='descp_tet'>
					<h2 class= "h2__tet">¡Hola!, Bienvenido al <span>9no</span> Seminario TET</h2>
					<p>
						El Seminario de Tecnologías Emergentes en Telecomunicaciones,
						es un espacio de divulgación tecnológica para empresas, académicos y demás
						interesados, organizado por la Rama Estudiantil IEEE de la Universidad del Cauca
					</p>
				</div>

		</div>

	</section>
	<section class="important">
		<div class="container">
			<div id="informacion" class="information">
				<div class="information__text">
					<h2 class="information__h2">Misión</h2>
					<p class="information__p">
					Contribuir a la formación del ambiente tecnológico de profesionales
					y estudiantes del área de las telecomunicaciones, con la generación
					de un espacio de interacción académica, en donde conferencistas de
					empresas, empresarios, emprendedores o académicos, del sector de la
					Telecomunicaciones y en general las TIC, expongan e incentiven sobre
					el funcionamiento y la realidad del país en cuanto a las Tecnologías
					Emergentes en Telecomunicaciones, mediante conferencias magistrales y tutoriales.
					</p>
				</div>

				<div class="information__graphic animate__animated animate__slideInRight">
					<img class="information__img" src="./assets/img/mision_tet.png" alt="" />
				</div>
			</div>
		</div>
	</section>
	<div class="wave">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 195">
			<path fill="#123F72" fill-opacity="1" d="M0,32L48,53.3C96,75,192,117,288,122.7C384,128,480,96,576,90.7C672,85,768,107,864,101.3C960,96,1056,64,1152,74.7C1248,85,1344,139,1392,165.3L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
		</svg>
	</div>
	<section class="important2">
		<div class="container2">
			<div id="informacion2" class="information2">

				<div class="information__graphic animate__animated animate__slideInRight">
					<img class="information__img" src="./assets/img/pintura.png" alt="" />
				</div>

				<div class="information2__text">
					<h2 class="information2__h2">Visión</h2>
					<p class="information2__p">
						El grupo organizador del TET 2022 prevé una comunidad Universitaria,
						altamente comprometida con la presentación, discusión y difusión de
						los trabajos I+D realizados en el área de telecomunicaciones, a nivel
						nacional e internacional, trabajando en conjunto con una sociedad
						empresarial, y política, que apoye tal compromiso, con la difusión e
						intercambio de sus propias experiencias y resultados.
					</p>
				</div>


			</div>
		</div>
	</section>
	</section class="map__container">
		<div class="map__info">
			<div class="map__name">
				<h1 class="map__titulo">Ubicación y Fecha</h1>
				<h1 class="map__subtitulo">10, 11 y 12 de Noviembre</h1>
			</div>
			<div class="map__ubi">
					<div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
						<div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
						<script>(function () {
								var setting = {"height":329,"width":769,"zoom":18, "queryString":"Teatro Municipal Guillermo Valencia, Carrera 6ª, Popayán, Cauca, Colombia","place_id":"ChIJ8YaY3Q8DMI4RJ4IkBKub1Yk","satellite":false,"centerCoord":[2.4432702506776103,-76.60608565],"cid":"0x89d59bab04248227","lang":"es","cityUrl":"/colombia/popayan-42225","cityAnchorText":"Mapa de Popayán, Nariño, Colombia","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"798087"};
								var d = document;
								var s = d.createElement('script');
								s.src = 'https://1map.com/js/script-for-user.js?embed_id=798087';
								s.async = true;
								s.onload = function (e) {
								window.OneMap.initMap(setting)
								};
								var to = d.getElementsByTagName('script')[0];
								to.parentNode.insertBefore(s, to);
							})();
						</script>
						<a href="https://1map.com/es/map-embed">1 Map</a>
					</div>
			</div>
		</div>
	<section>
	<div class="wave">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 195">
			<path fill="#123F72" fill-opacity="1" d="M0,32L48,53.3C96,75,192,117,288,122.7C384,128,480,96,576,90.7C672,85,768,107,864,101.3C960,96,1056,64,1152,74.7C1248,85,1344,139,1392,165.3L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
		</svg>
	</div>

	<section>
		<div class="tematic__container">

			<h1 class="tematic__titulo">Temática</h1>
			<div class="tematic__temas">
				<div class="tematic__group">
					<div class='tematic__img'><img class="tematic__logo" src="./assets/img/logo_IA.png" alt=""><div class='tematic__subtitulo'>Inteligencia Artificial</div></div>
					<div class='tematic__img'><img class="tematic__logo" src="./assets/img/logo_MarkD.png" alt=""><div class='tematic__subtitulo'>Marketing Digital</div></div>
				</div>
				<div class="tematic__group">
					<div class='tematic__img'><img class="tematic__logo" src="./assets/img/logo_MachL.png" alt=""><div class='tematic__subtitulo'>Machine Learning</div></div>
					<div class='tematic__img'><img class="tematic__logo" src="./assets/img/logo_BD.png" alt=""><div class='tematic__subtitulo'>Big Data</div></div>
				</div>
				<div class="tematic__group">
					<div class='tematic__img'><img class="tematic__logo" src="./assets/img/logo_R5.png" alt=""><div class='tematic__subtitulo'>Redes 5G</div></div>
					<div class='tematic__img'><img class="tematic__logo" src="./assets/img/logo_BCH.png" alt=""><div class='tematic__subtitulo'>Block Chain</div></div>
				</div>
				<div class="tematic__group">
					<div class='tematic__img'><img class="tematic__logo" src="./assets/img/logo_IND.png" alt=""><div class='tematic__subtitulo'>Industria 4.0</div></div>
					<div class='tematic__img'><img class="tematic__logo" src="./assets/img/logo_CD.png" alt=""><div class='tematic__subtitulo'>Ciencia de Datos</div></div>
				</div>

			</div>
		</div>
	</section>
	<section class="banner__price">
		<h1 class="price__titulo">Acerca del precio de la entrada</h1>

		<div class="price__container">
			<div class="costo__base">
				<h2 class="costo__titulo">Costo Base </h2>
				<hr class="costo__linea">

				<div class="group__descp">
					<div class="costo__descp">
						Estudiantes Unicauca <p class="col__precio">|  $250.000</p>
					</div>
					<div class="costo__descp">
						Profesores Unicauca <p class="col__precio">|  $280.000</p>
					</div>
					<div class="costo__descp">
						Profesionales 		<p class="col__precio">|  $320.000</p>
					</div>
				</div>
				<h2 class="costo__titulo">Descuentos </h2>
				<hr class="costo__linea">

				<div class="group__descp">
					<div class="costo__descp">
						Hasta el 1 Sep 2022 	<p class="col__desc">|  20%</p>
					</div>
					<div class="costo__descp">
						Del 2 Sep al 9 Nov 		<p class="col__desc">|  15% (Válido para <span class="desc__import">miembros IEEE</span> )</p>
					</div>
					<div class="costo__descp">
						Del 2 Sep al 15 Nov 	<p class="col__desc">|  10% (Válido para <span class="desc__import">NO miembros IEEE</span> )</p>
					</div>
				</div>



			</div>
			<div class="costo__img">
				<img  src="./assets/img/img_precio.png" alt="" />
			</div>
		</div>


	</section>

	<div class="wave">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 195">
			<path fill="#123F72" fill-opacity="1" d="M0,32L48,53.3C96,75,192,117,288,122.7C384,128,480,96,576,90.7C672,85,768,107,864,101.3C960,96,1056,64,1152,74.7C1248,85,1344,139,1392,165.3L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
		</svg>
	</div>
	<!-- FINANCIACION -->
	<section>
		<h1 class="ent__titulo">¿Cómo adquiero mi entrada?</h1>
		<h1 class="ent__subtitulo">Paso a Paso</h1>

		<div class="pasos__container">
			<div class="finan__container">
				<h2>Financiación</h2>
			</div>
			<div class="pagos__container">
				<h2>Pago Total</h2>
			</div>
		</div>
	</section>



	<?php
	include_once "components/footer.php";
	include_once "components/scripts.php";
	?>
</body>

</html>