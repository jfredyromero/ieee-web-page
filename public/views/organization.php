<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="">
	<meta name="abstract" content="Página de la organización de la rama IEEE de la Universidad del Cauca">
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
				<img id="junta-directiva-img" src="" alt="juntadirectiva" class="juntadirectiva__img">

				<div class="juntadirectiva__timeline">
					<div class="events">

						<?php
						for ($i = 0; $i < count($juntaDirectiva); $i++) {
						?>
							<div class="event">
								<div class="knob"></div>
								<div class="date">
									<h2 class="event__h2"><?php echo $juntaDirectiva[$i]['cargo'] ?></h2>
								</div>
							</div>
							<div class="line"></div>
						<?php
						}
						?>
					</div>
				</div>

				<div class="juntadirectiva__buttons">

					<?php
					for ($i = 0; $i < count($juntaDirectiva); $i++) {
					?>
						<button class="juntadirectiva__button"> <?php echo $juntaDirectiva[$i]['cargo'] ?> </button>
					<?php
					}
					?>
				</div>

				<h3 class="juntadirectiva__h3"> <?php echo ($juntaDirectiva[0]['primerNombre'] . " " . $juntaDirectiva[0]['segundoNombre'] . " " . $juntaDirectiva[0]['primerApellido'] . " " . $juntaDirectiva[0]['segundoApellido']) ?> </h3>
				<h4 class="juntadirectiva__h4"><?php echo $juntaDirectiva[0]['cargo'] ?></h4>
				<p class="juntadirectiva__p">“<?php echo $juntaDirectiva[0]['frase'] ?>”</p>

				<div class="juntadirectiva__cards">

					<?php
					for ($i = 0; $i < count($juntaDirectiva); $i++) {
					?>
						<div class="juntadirectiva__card"> <img src="<?php echo $juntaDirectiva[$i]['urlFoto'] ?>" alt="imagen responsable del cargo de <?php echo $juntaDirectiva[$i]['cargo'] ?>" class="juntadirectiva__card-image" data-card="<?php echo $juntaDirectiva[$i]['cargo'] ?>"> </div>
					<?php
					}
					?>

				</div>
			</section>
		</div>
	</div>
	<section class="comites-fondo">
		<div class="container comites">
			<h2 class="comites__titulo">Comités</h2>
			<img id="comites-img" src="" alt="" class="comites__img">
			<h3 class="comites__nombre-comite">Comité <?php echo $comites[0]['comite'] ?></h3>
			<p class="comites__descripcion">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in volutpat nisi, et elementum ante. Vestibulum ullamcorper mauris vel euismod mattis. Vestibulum efficitur in nunc in eleifend <?php echo $comites[0]['comite'] ?></p>
			<div class="comites__buttons">
				<?php
				for ($i = 0; $i < count($comites); $i++) {
				?>
					<div class="comites__button " data-comite="<?php echo $comites[$i]['comite'] ?>">
						<i class="comites__icono fa-solid fa-<?php echo $iconos[$i] ?>" data-comite="<?php echo $comites[$i]['comite'] ?>"></i>
						<h5 class="comites__h5" data-comite="<?php echo $comites[$i]['comite'] ?>"> <?php echo $comites[$i]['comite'] ?> </h5>
					</div>
				<?php
				}
				?>
			</div>
			<div class="comites__coordinadores">
				<div class="comites__coordinador">
					<div class="comites__persona">
						<img src="assets/img/comites/coordinadorAcademico.jpeg" alt="Coordinador del comité" class="comites__persona-img" id="comites-coordinador">
					</div>
					<div class="comites__persona-info">
						<h3 class="comites__coordinador-nombre">Johan Santiago Yangana</h3>
						<h4 class="comites__coordinador-cargo">Coordinador</h4>
					</div>
				</div>
				<div class="comites__coordinador">
					<div class="comites__persona">
						<img src="assets/img/comites/coordinadorAcademico.jpeg" alt="Sub-coordinador del comité" class="comites__persona-img" id="comites-subcoordinador">
					</div>
					<div class="comites__persona-info">
						<h3 class="comites__subcoordinador-nombre">Luis Fernando Coral Patiño</h3>
						<h4 class="comites__subcoordinador-cargo">Sub-Coordinador</h4>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
	include_once "components/footer.php";
	?>
</body>

</html>