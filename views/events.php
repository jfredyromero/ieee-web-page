<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Rama IEEE Unicauca</title>
	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link rel="stylesheet" href="./assets/css/events.css" />
	<script src="https://kit.fontawesome.com/8e13114fca.js" crossorigin="anonymous"></script>
</head>

<body>
	<?php
	include_once "components/sidebar.php";
	?>

	<div class="principal banner__events">
		<?php
		include_once "components/header.php";
		?>
		<main class="container">
			<section class="banner">
				<div class="banner__info">
					<div class="banner__name">
						<h1 class="banner__titulo">Eventos</h1>
						<h1 class="banner__subtitulo">Calendario</h1>
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
		<div class="line_roadmap">

		</div>
		<section class="roadmap">
			<h2 class="roadmap__h2">Camino de Eventos</h2>
			<div class="cards_container">
				<div class="cards">
					IEEE Day
				</div>
				<div class="cards">
					Navidad <br> FIEEELIZ
				</div>
				<div class="cards">
					Día De La <br> Mujer
				</div>
			</div>
			<div class="cards_container">
				<div class="cards">
					Día De La <br> Madre
				</div>
				<div class="cards">
					Día Del <br> Niño
				</div>

			</div>
			<div class="cards_container">
				<div class="cards">
					Bienvenida <br> De Primiparos
				</div>
				<div class="cards">
					Ramakon
				</div>
				<div class="cards">
					TET <br> 2022
				</div>
			</div>
		</section>
	</div>

	<div class="container-timeline">
		<div class="swiper-container-wrapper swiper-container-wrapper--timeline">
			<!-- Timeline -->
			<ul class="swiper-pagination-custom">
				<li class='swiper-pagination-switch first active'><span class='switch-title'>1911</span></li>
				<li class='swiper-pagination-switch'><span class='switch-title'>1970</span></li>
				<li class='swiper-pagination-switch'><span class='switch-title'>2021</span></li>
				<li class='swiper-pagination-switch last'><span class='switch-title'>3000</span></li>
				<li class='swiper-pagination-switch last'><span class='switch-title'>New</span></li>
				<li class='swiper-pagination-switch last'><span class='switch-title'>New</span></li>
			</ul>
			<!-- Progressbar -->
			<div class="swiper-pagination swiper-pagination-progressbar swiper-pagination-horizontal"></div>
			<!-- Swiper -->
			<div class="swiper swiper-container swiper-container--timeline">
				<div class="swiper-wrapper">
					<!-- Slides -->
					<div class="swiper-slide"><span class="title">Swiper Timeline Progressbar</span></div>
					<div class="swiper-slide"><span class="title">Title 2</span></div>
					<div class="swiper-slide"><span class="title">Title 3</span></div>
					<div class="swiper-slide"><span class="title">Title 4</span></div>
					<div class="swiper-slide"><span class="title">Title 5</span></div>
					<div class="swiper-slide"><span class="title">Title 5</span></div>
				</div>
			</div>
		</div>
	</div>

	
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

	<script>
		document.addEventListener('DOMContentLoaded', function() {
			console.log("FUNCTION SWIPER");
			var mySwiper = new Swiper(".swiper", {
				autoHeight: true,
				autoplay: {
					delay: 5000,
					disableOnInteraction: false
				},
				speed: 500,
				direction: "horizontal",
				navigation: {
					nextEl: ".swiper-button-next",
					prevEl: ".swiper-button-prev"
				},
				pagination: {
					el: ".swiper-pagination",
					type: "progressbar"
				},
				loop: false,
				effect: "slide",
				spaceBetween: 30,
				on: {
					init: function() {
						$(".swiper-pagination-custom .swiper-pagination-switch").removeClass("active");
						$(".swiper-pagination-custom .swiper-pagination-switch").eq(0).addClass("active");
					},
					slideChangeTransitionStart: function() {
						$(".swiper-pagination-custom .swiper-pagination-switch").removeClass("active");
						$(".swiper-pagination-custom .swiper-pagination-switch").eq(mySwiper.realIndex).addClass("active");
					}
				}
			});
			$(".swiper-pagination-custom .swiper-pagination-switch").click(function() {
				mySwiper.slideTo($(this).index());
				$(".swiper-pagination-custom .swiper-pagination-switch").removeClass("active");
				$(this).addClass("active");
			});
		});
	</script>

	<?php
	include_once "components/footer.php";
	include_once "components/scripts.php";
	?>

	<!-- ICONOS ionic-icons (sección comites) -->
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



</body>

</html>