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

	<div class="principal">

		<?php
			include_once('./views/components/header.php');
		?>

		<main class="container">
			<section class="banner">
				<div class="banner__info">
					<div class="banner__name">
						<h1 class="banner__h1-ramaieee">RAMA IEEE</h1>
						<h1 class="banner__h1-unicauca">Unicauca</h1>
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
				include_once('./views/components/rrss.php');
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
						<img src="./assets/img/mision.png" alt="" class="nosotros__img" />
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
						<img src="./assets/img/mision.png" alt="" class="nosotros__img" />
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
						<img src="./assets/img/mision.png" alt="" class="nosotros__img" />
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

	<footer class="footer">
		<div class="wave">
			<div class="container">
				<img class="footer__img" src="./assets/img/footer.png" alt="" />
			</div>
			<svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%">
				<path d="M-2.54,64.64 C303.89,145.56 219.24,53.80 499.72,149.52 L499.15,151.48 L0.00,150.00 Z" style="stroke: none; fill: #123f72"></path>
			</svg>
		</div>
		<div class="footer__information">
			<div class="footer__top">
				<div class="container footer__top">
					<h2 class="footer__h2">Ready to get started?</h2>
					<div class="footer__actions">
						<button class="footer__button footer__join-us">
							Join Us
							<i class="footer__i fa-solid fa-angle-right"></i>
						</button>
						<button class="footer__button footer__contact-us">
							Contact
							<i class="footer__i fa-solid fa-angle-right"></i>
						</button>
					</div>
				</div>
			</div>
			<div class="footer__middle">
				<div class="container footer__middle">
					<div class="footer__ieee-sections">
						<ul class="footer__links">
							<h3 class="footer__h3">PRODUCTS</h3>
							<li class="footer__item">
								<a class="footer__link" href="">Overview</a>
							</li>
							<li class="footer__item">
								<a class="footer__link" href="">Transactions</a>
							</li>
							<li class="footer__item">
								<a class="footer__link" href="">Auth</a>
							</li>
							<li class="footer__item">
								<a class="footer__link" href="">Indentify</a>
							</li>
							<li class="footer__item">
								<a class="footer__link" href="">Balance</a>
							</li>
							<li class="footer__item">
								<a class="footer__link" href="">Assets</a>
							</li>
							<li class="footer__item">
								<a class="footer__link" href="">Income</a>
							</li>
						</ul>
						<ul class="footer__links">
							<h3 class="footer__h3">USE CASES</h3>
							<li class="footer__item">
								<a class="footer__link" href="">Personal finances</a>
							</li>
							<li class="footer__item">
								<a class="footer__link" href="">Consumer payments</a>
							</li>
							<li class="footer__item">
								<a class="footer__link" href="">Lending</a>
							</li>
							<li class="footer__item">
								<a class="footer__link" href="">Banking and brokerage</a>
							</li>
							<li class="footer__item">
								<a class="footer__link" href="">Business finances</a>
							</li>
						</ul>
						<ul class="footer__links">
							<h3 class="footer__h3">DOCS</h3>
							<li class="footer__item">
								<a class="footer__link" href="">Quickstart</a>
							</li>
							<li class="footer__item">
								<a class="footer__link" href="">API documentation</a>
							</li>
							<li class="footer__item">
								<a class="footer__link" href="">Libreries</a>
							</li>
							<li class="footer__item">
								<a class="footer__link" href="">Help center</a>
							</li>
						</ul>
						<ul class="footer__links">
							<h3 class="footer__h3">ABOUT US</h3>
							<li class="footer__item">
								<a class="footer__link" href="">Company</a>
							</li>
							<li class="footer__item">
								<a class="footer__link" href="">Careers</a>
							</li>
							<li class="footer__item">
								<a class="footer__link" href="">Blog</a>
							</li>
							<li class="footer__item">
								<a class="footer__link" href="">Contact</a>
							</li>
							<li class="footer__item">
								<a class="footer__link" href="">Press</a>
							</li>
							<li class="footer__item">
								<a class="footer__link" href="">Fin</a>
							</li>
							<li class="footer__item">
								<a class="footer__link" href="">Privacy statement</a>
							</li>
							<li class="footer__item">
								<a class="footer__link" href="">Security</a>
							</li>
							<li class="footer__item">
								<a class="footer__link" href="">Legal</a>
							</li>
							<li class="footer__item">
								<a class="footer__link" href="">For financial institutions</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer__wave" style="height: 150px; overflow: hidden;">
				<svg viewBox="0 0 500 120" preserveAspectRatio="none" style="height: 100%; width: 100%;">
					<path d="M0.00,49.98 C249.43,74.52 251.12,74.52 500.00,49.98 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: #123f72;"></path>
				</svg>
				<div class="footer__rectangle">
					<img class="footer__imglogo" src="./assets/img/logo_IEEE.svg" alt="" />
				</div>
			</div>
			<div class="footer__bottom">
				<div class="container bottom">
					<p class="footer__copy">
						&copy Copyright 2022 IEEE - All Rights Reserved
					</p>
					<ul class="footer__ul">
						<li class="footer__li">
							<p class="footer__span">
								<a href="https://www.linkedin.com/in/ieeeunicauca/" target="_blank" class="footer__a">
									<i class="footer__i fa-brands fa-linkedin-in"></i>
								</a>
							</p>
						</li>
						<li class="footer__li">
							<span class="footer__span">
								<a href="https://www.facebook.com/IEEEUnicauca" target="_blank" class="footer__a">
									<i class="footer__i fa-brands fa-facebook-square"></i>
								</a>
							</span>
						</li>
						<li class="footer__li">
							<span class="footer__span">
								<a href="https://www.instagram.com/ieeeunicauca/" target="_blank" class="footer__a">
									<i class="footer__i fa-brands fa-instagram"></i>
								</a>
							</span>
						</li>
						<li class="footer__li">
							<span class="footer__span">
								<a href="https://www.tiktok.com/@ieeeunicauca" target="_blank" class="footer__a">
									<i class="footer__i fa-brands fa-tiktok"></i>
								</a>
							</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>


	<!-- ==========SCRIPTS========== -->

	<!-- MENU BAR -->
	<script src="./assets/js/menu-bar.js"></script>

	<!-- CONTADORES -->
	<script src="https://cdn.jsdelivr.net/gh/tomik23/circular-progress-bar@1.1.9/dist/circularProgressBar.min.js"></script>
	<script src="./assets/js/circularProgressBar.min.js"></script>
	<script src="./assets/js/counters.js"></script>

	<!-- PARTICLES -->
	<script src="https://cdn.jsdelivr.net/npm/tsparticles@1.28.0/dist/tsparticles.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@webcomponents/webcomponentsjs@2.5.0/custom-elements-es5-adapter.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@webcomponents/webcomponentsjs@2.5.0/webcomponents-loader.js"></script>
	<script type="module" src="https://cdn.jsdelivr.net/npm/web-particles@1.1.0/dist/web-particles.min.js"></script>

	<!-- SCROLL-REVEAL -->
	<script src="https://unpkg.com/scrollreveal"></script>
	<script src="./assets/js/scroll-reveal.js"></script>

	<!-- GSAP - SCROLL-TRIGGER -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollToPlugin.min.js"></script>
	<script src="./assets/js/gsap.js"></script>
</body>

</html>