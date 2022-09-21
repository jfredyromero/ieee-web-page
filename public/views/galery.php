<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="">
	<meta name="abstract" content="Página de la galeria de la rama IEEE de la Universidad del Cauca">
	<title>Rama IEEE Unicauca</title>
	<?php echo vite('main.js'); ?>
</head>

<body>
	<?php
	include_once "components/sidebar.php";
	?>

	<div class="principal banner__galeria">
		<?php
		include_once "components/header.php";
		?>
		<main class="container">
			<section class="banner">
				<div class="banner__info">
					<div class="banner__name">
						<h1 class="banner__titulo">Galería</h1>
						<h1 class="banner__subtitulo">Momentos IEEE</h1>
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
	</div>
	<div class="grid-container">
		<div class="grid">
			<div class="gridLayer">
				<div class="gridBlock"></div>
			</div>
			<div class="gridLayer">
				<div class="gridBlock"></div>
			</div>
			<div class="gridLayer">
				<div class="gridBlock"></div>
			</div>
			<div class="gridLayer centerPiece">
				<div class="gridBlock centerBlock"></div>
			</div>
			<div class="gridLayer">
				<div class="gridBlock"><a href="https://greensock.com" target="_blank"></a></div>
			</div>
			<div class="gridLayer">
				<div class="gridBlock"></div>
			</div>
			<div class="gridLayer">
				<div class="gridBlock"></div>
			</div>
			<div class="gridLayer">
				<div class="gridBlock"></div>
			</div>
			<div class="gridLayer">
				<div class="gridBlock"></div>
			</div>
		</div>
	</div>
	<!-- <div class="galeria-scroll">
		<div class="galeria">
			<div class="galeria__item">
				<img src="" alt="" class="galeria__img">
			</div>
			<div class="galeria__item">
				<img src="" alt="" class="galeria__img">
			</div>
			<div class="galeria__item">
				<img src="" alt="" class="galeria__img">
			</div>
			<div class="galeria__item">
				<img src="" alt="" class="galeria__img">
			</div>
			<div class="galeria__item galeria__center-item">
				<img src="" alt="" class="galeria__img">
			</div>
			<div class="galeria__item">
				<img src="" alt="" class="galeria__img">
			</div>
			<div class="galeria__item">
				<img src="" alt="" class="galeria__img">
			</div>
			<div class="galeria__item">
				<img src="" alt="" class="galeria__img">
			</div>
		</div>

	</div> -->
	<!-- 
	<div class="galeria">
		<div class="grid-container">
			<div class="grid">
				<div class="gridLayer">
					<div class="gridBlock"></div>
				</div>
				<div class="gridLayer">
					<div class="gridBlock"></div>
				</div>
				<div class="gridLayer">
					<div class="gridBlock"></div>
				</div>
				<div class="gridLayer centerPiece">
					<div class="gridBlock centerBlock"></div>
				</div>
				<div class="gridLayer">
					<div class="gridBlock"><a href="https://greensock.com" target="_blank"></a></div>
				</div>
				<div class="gridLayer">
					<div class="gridBlock"></div>
				</div>
				<div class="gridLayer">
					<div class="gridBlock"></div>
				</div>
				<div class="gridLayer">
					<div class="gridBlock"></div>
				</div>
				<div class="gridLayer">
					<div class="gridBlock"></div>
				</div>
			</div>
		</div>
	</div>
 -->
	<?php
	include_once "components/footer.php";
	?>
</body>

</html>