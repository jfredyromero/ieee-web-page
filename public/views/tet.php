<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="">
	<meta name="abstract" content="Página del TET 2022 de la rama IEEE de la Universidad del Cauca">
	<title>Rama IEEE Unicauca</title>
	<?php echo vite('main.js'); ?>
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
						<h1 class="banner__subtitulo">Evento Insignia</h1>
					</div>
					<div class="banner__description">
						<p class="banner__p">
							¿Quieres adquirir tu entrada al Noveno Seminario de Tecnologías
							Emergentes de Telecomunicaciones?
						</p>
					</div>
					<div class="banner__action">
						<a href="#pasos">
							<button class="banner__button">
								¿Cómo Lo Hago?
								<i class="fa-solid fa-angle-right"></i>
							</button>
						</a>
					</div>
				</div>
				<?php
				include_once "components/rrss.php";
				?>
			</section>
		</main>
	</div>
	<section class="tet__container">
		<div class='info__tet'>

			<div class='logo_tet'>
				<img id="logo-tet-img" src="" alt="Error al cargar la imagen" class="img_logo_tet">
			</div>
			<div class='descp_tet'>
				<h2 class="h2__tet">¡Hola!, Bienvenido al <span>9no</span> Seminario TET</h2>
				<p>
					El Seminario de Tecnologías Emergentes en Telecomunicaciones,
					es un espacio de divulgación tecnológica para empresas, académicos y demás
					interesados, organizado por la Rama Estudiantil IEEE de la Universidad del Cauca
				</p>
			</div>

		</div>
	</section>
	<!-- <section class="important">
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
					<img id="mision-tet-img" src="" alt="" class="information__img" />
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
					<img id="pintura-tet-img" src="" alt="" class="information__img" />
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
	</section> -->
	<section class="map__container">
		<div class="map__info">
			<div class="map__name">
				<h1 class="map__titulo">Ubicación y Fecha</h1>
				<h1 class="map__subtitulo">10, 11 y 12 de Noviembre</h1>
			</div>
			<div class="map__ubi">
				<div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
					<div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
					<script>
						(function() {
							var setting = {
								"height": 329,
								"width": 769,
								"zoom": 18,
								"queryString": "Teatro Municipal Guillermo Valencia, Carrera 6ª, Popayán, Cauca, Colombia",
								"place_id": "ChIJ8YaY3Q8DMI4RJ4IkBKub1Yk",
								"satellite": false,
								"centerCoord": [2.4432702506776103, -76.60608565],
								"cid": "0x89d59bab04248227",
								"lang": "es",
								"cityUrl": "/colombia/popayan-42225",
								"cityAnchorText": "Mapa de Popayán, Nariño, Colombia",
								"id": "map-9cd199b9cc5410cd3b1ad21cab2e54d3",
								"embed_id": "798087"
							};
							var d = document;
							var s = d.createElement('script');
							s.src = 'https://1map.com/js/script-for-user.js?embed_id=798087';
							s.async = true;
							s.onload = function(e) {
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
	</section>
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
					<div class='tematic__img'><img class="tematic__logo" src="./ieee/assets/img/logo_IA.png" alt="">
						<div class="container__cube">
							<div class="box" id="IA__cube">
								<div class="card IA__cube" id="front"> </div>
								<div class="card IA__cube" id="left"> </div>
								<div class="card IA__cube" id="right"> </div>
								<div class="card IA__cube" id="top"> </div>
								<div class="card IA__cube" id="bottom"> </div>
							</div>
						</div>

						<div class='tematic__subtitulo'>Inteligencia Artificial</div>
					</div>
					<div class='tematic__img'><img class="tematic__logo" src="./ieee/assets/img/logo_MarkD.png" alt="">
						<div class="container__cube">
							<div class="box" id="MD__cube">
								<div class="card MD__cube" id="front"> </div>
								<div class="card MD__cube" id="left"> </div>
								<div class="card MD__cube" id="right"> </div>
								<div class="card MD__cube" id="top"> </div>
								<div class="card MD__cube" id="bottom"> </div>
							</div>
						</div>
						<div class='tematic__subtitulo'>Marketing Digital</div>
					</div>
				</div>
				<div class="tematic__group">
					<div class='tematic__img'><img class="tematic__logo" src="./ieee/assets/img/logo_MachL.png" alt="">
						<div class="container__cube">
							<div class="box" id="ML__cube">
								<div class="card ML__cube" id="front"> </div>
								<div class="card ML__cube" id="left"> </div>
								<div class="card ML__cube" id="right"> </div>
								<div class="card ML__cube" id="top"> </div>
								<div class="card ML__cube" id="bottom"> </div>
							</div>
						</div>
						<div class='tematic__subtitulo'>Machine Learning</div>
					</div>
					<div class='tematic__img'><img class="tematic__logo" src="./ieee/assets/img/logo_BD.png" alt="">
						<div class="container__cube">
							<div class="box" id="BD__cube">
								<div class="card BD__cube" id="front"> </div>
								<div class="card BD__cube" id="left"> </div>
								<div class="card BD__cube" id="right"> </div>
								<div class="card BD__cube" id="top"> </div>
								<div class="card BD__cube" id="bottom"> </div>
							</div>
						</div>
						<div class='tematic__subtitulo'>Big Data</div>
					</div>
				</div>
				<div class="tematic__group">
					<div class='tematic__img'><img class="tematic__logo" src="./ieee/assets/img/logo_R5.png" alt="">
						<div class="container__cube">
							<div class="box" id="R5__cube">
								<div class="card R5__cube" id="front"> </div>
								<div class="card R5__cube" id="left"> </div>
								<div class="card R5__cube" id="right"> </div>
								<div class="card R5__cube" id="top"> </div>
								<div class="card R5__cube" id="bottom"> </div>
							</div>
						</div>
						<div class='tematic__subtitulo'>Redes 5G</div>
					</div>
					<div class='tematic__img'><img class="tematic__logo" src="./ieee/assets/img/logo_BCH.png" alt="">
						<div class="container__cube">
							<div class="box" id="BC__cube">
								<div class="card BC__cube" id="front"> </div>
								<div class="card BC__cube" id="left"> </div>
								<div class="card BC__cube" id="right"> </div>
								<div class="card BC__cube" id="top"> </div>
								<div class="card BC__cube" id="bottom"> </div>
							</div>
						</div>
						<div class='tematic__subtitulo'>Block Chain</div>
					</div>
				</div>
				<div class="tematic__group">
					<div class='tematic__img'><img class="tematic__logo" src="./ieee/assets/img/logo_IND.png" alt="">
						<div class="container__cube">
							<div class="box" id="I4__cube">
								<div class="card I4__cube" id="front"> </div>
								<div class="card I4__cube" id="left"> </div>
								<div class="card I4__cube" id="right"> </div>
								<div class="card I4__cube" id="top"> </div>
								<div class="card I4__cube" id="bottom"> </div>
							</div>
						</div>
						<div class='tematic__subtitulo'>Industria 4.0</div>
					</div>
					<div class='tematic__img'><img class="tematic__logo" src="./ieee/assets/img/logo_CD.png" alt="">
						<div class="container__cube">
							<div class="box" id="CD__cube">
								<div class="card CD__cube" id="front"> </div>
								<div class="card CD__cube" id="left"> </div>
								<div class="card CD__cube" id="right"> </div>
								<div class="card CD__cube" id="top"> </div>
								<div class="card CD__cube" id="bottom"> </div>
							</div>
						</div>
						<div class='tematic__subtitulo'>Ciencia de Datos</div>
					</div>
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
						Estudiantes Unicauca <p class="col__precio">| $250.000</p>
					</div>
					<div class="costo__descp">
						Profesores Unicauca <p class="col__precio">| $280.000</p>
					</div>
					<div class="costo__descp">
						Profesionales <p class="col__precio">| $320.000</p>
					</div>
				</div>
				<h2 class="costo__titulo">Descuentos </h2>
				<hr class="costo__linea">

				<div class="group__descp">
					<div class="costo__descp">
						Hasta el 1 Sep 2022 <p class="col__desc">| 20%</p>
					</div>
					<div class="costo__descp">
						Del 2 Sep al 9 Nov <p class="col__desc">| 15% (Válido para <span class="desc__import">miembros IEEE</span> )</p>
					</div>
					<div class="costo__descp">
						Del 2 Sep al 15 Nov <p class="col__desc">| 10% (Válido para <span class="desc__import">NO miembros IEEE</span> )</p>
					</div>
				</div>
			</div>
			<div class="costo__img">
				<img src="./ieee/assets/img/img_precio.png" alt="" />
			</div>
		</div>


	</section>
	<div class="wave">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 195">
			<path fill="#123F72" fill-opacity="1" d="M0,32L48,53.3C96,75,192,117,288,122.7C384,128,480,96,576,90.7C672,85,768,107,864,101.3C960,96,1056,64,1152,74.7C1248,85,1344,139,1392,165.3L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
		</svg>
	</div>
	<!-- FINANCIACION -->
	<section class="finan__container" id="pasos">
		<div class="finan__title">
			¿Cómo adquiero mi entrada?
		</div>
		<div class="finan__subtitle">
			Paso a Paso
		</div>
		<div class="finan__group">
			<div class="finan__card">
				<div class="finan__metod">MÉTODO 1</div>
				<div class="finan__section">
					<div class="finan__subtitle">Por evento</div>
					<div class="finan__price">
						<div class="finan__price__COP">COP</div>
						<div class="finan__price2">250.000</div>
					</div>
					<div class="finan__footer">
						<span>TIPO A</span> - Reserva <span>20%</span> + 4 cuotas del <span>20%</span>
					</div>
					<div class="finan__description">
						<div class="finan__item__title">
							Consignar el valor total de la entrada a la siguiente cuenta de ahorro
						</div>
						<div class="finan__item__descp">
							Nombre: Asociacion Rama Estudiantil IEEE Unicauca <br>
							Número de cuenta: 86800066664 <br>
							NIT: 817004128
						</div>
						<hr>
						<div class="finan__item__title">
							Enviar un correo con asunto "ABONO TET" a ramaieee@unicauca.edu.co con los siguientes datos
						</div>
						<div class="finan__item__descp">
							Nombre completo <br>
							Cédula <br>
							Código <br>
							Número Celular <br>
							Fecha de inicio <br>
							Tipo de Plan <br>
							Comprobante de pago <br>
							<span>Nota: Este paso se debe realizar cada que se realice un abono</span>
						</div>
						<hr>
						<div class="finan__item__title">
							Una vez realizados todos los pagos, se te enviará tu boleta digital vía correo electrónico
						</div>
					</div>
					<div class="finan__button">
						<button><a href="https://linktr.ee/ieeeunicauca" target="_blank">Comprar Plan</a></button>
					</div>
				</div>
			</div>
			<div class="finan__card">
				<div class="finan__metod">MÉTODO 2</div>
				<div class="finan__section">
					<div class="finan__subtitle">Por evento</div>
					<div class="finan__price">
						<div class="finan__price__COP">COP</div>
						<div class="finan__price2">250.000</div>
					</div>
					<div class="finan__footer">
						<span>TIPO B</span> - Reserva <span>50%</span> + 4 cuotas del <span>12.5%</span>
					</div>
					<div class="finan__description">
						<div class="finan__item__title">
							Consignar el valor total de la entrada a la siguiente cuenta de ahorro
						</div>
						<div class="finan__item__descp">
							Nombre: Asociacion Rama Estudiantil IEEE Unicauca <br>
							Número de cuenta: 86800066664 <br>
							NIT: 817004128
						</div>
						<hr>
						<div class="finan__item__title">
							Enviar un correo con asunto "ABONO TET" a ramaieee@unicauca.edu.co con los siguientes datos
						</div>
						<div class="finan__item__descp">
							Nombre completo <br>
							Cédula <br>
							Código <br>
							Número Celular <br>
							Fecha de inicio <br>
							Tipo de Plan <br>
							Comprobante de pago <br>
							<span>Nota: Este paso se debe realizar cada que se realice un abono</span>
						</div>
						<hr>
						<div class="finan__item__title">
							Una vez realizados todos los pagos, se te enviará tu boleta digital vía correo electrónico
						</div>
					</div>
					<div class="finan__button">
						<button><a href="https://linktr.ee/ieeeunicauca" target="_blank">Comprar Plan</a></button>
					</div>
				</div>
			</div>
			<div class="finan__card">
				<div class="finan__metod">PAGO TOTAL</div>
				<div class="finan__section">
					<div class="finan__subtitle">Por evento</div>
					<div class="finan__price">
						<div class="finan__price__COP">COP</div>
						<div class="finan__price2">250.000</div>
					</div>
					<div class="finan__footer">
						<span>PAGO TOTAL</span>
					</div>
					<div class="finan__description">
						<div class="finan__item__title">
							Consignar el valor total de la entrada a la siguiente cuenta de ahorro
						</div>
						<div class="finan__item__descp">
							Nombre: Asociacion Rama Estudiantil IEEE Unicauca <br>
							Número de cuenta: 86800066664 <br>
							NIT: 817004128
						</div>
						<hr>
						<div class="finan__item__title">
							Enviaremos tu recibo de pago por correo electrónico o lo puedes recoger en fisico en la oficina 306 de la FIET
						</div>
						<hr>
						<div class="finan__item__title">
							En los días próximos al evento se te enviará tu boleta digital vía correo electrónico
						</div>
					</div>
					<div class="finan__button">
						<button><a href="https://linktr.ee/ieeeunicauca" target="_blank">Comprar Plan</a></button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- SPONSOR SECTION -->
	<section class="sponsor__section">
		<div class="sponsor__container">
			<div class="sponsor__title">
				Nuestros Patrocinadores
			</div>
			<div class="sponsor__group">
				<div class="sponsor__card ">
					<img src="" alt="" class="sponsor-img">
				</div>
				<div class="sponsor__card ">
					<img src="" alt="" class="sponsor-img">
				</div>
				<div class="sponsor__card ">
					<img src="" alt="" class="sponsor-img">
				</div>
				<div class="sponsor__card ">
					<img src="" alt="" class="sponsor-img">
				</div>
				<div class="sponsor__card ">
					<img src="" alt="" class="sponsor-img">
				</div>
				<div class="sponsor__card ">
					<img src="" alt="" class="sponsor-img">
				</div>
				<div class="sponsor__card ">
					<img src="" alt="" class="sponsor-img">
				</div>
				<div class="sponsor__card ">
					<img src="" alt="" class="sponsor-img">
				</div>
				<div class="sponsor__card ">
					<img src="" alt="" class="sponsor-img">
				</div>
				<div class="sponsor__card ">
					<img src="" alt="" class="sponsor-img">
				</div>
				<div class="sponsor__card ">
					<img src="" alt="" class="sponsor-img">
				</div>
				<div class="sponsor__card ">
					<img src="" alt="" class="sponsor-img">
				</div>
				<div class="sponsor__card ">
					<img src="" alt="" class="sponsor-img">
				</div>
				<div class="sponsor__card ">
					<img src="" alt="" class="sponsor-img">
				</div>
				<div class="sponsor__card ">
					<img src="" alt="" class="sponsor-img">
				</div>
				<div class="sponsor__card ">
					<img src="" alt="" class="sponsor-img">
				</div>
			</div>
		</div>
	</section>
	<section class="info__insta">
		<div class="insta__container">
			<div class="insta__text">
				<span class="item__bold">Para más informacion puedes <br>contactarnos vía instagram</span>
			</div>
			<a href="https://www.instagram.com/ieeeunicauca/" class="insta__contact" target="_blank">
				<i class="fa-brands fa-instagram insta__log"></i>
				Contáctanos
			</a>
		</div>
	</section>
	<?php
	include_once "components/footer.php";
	?>
</body>

</html>