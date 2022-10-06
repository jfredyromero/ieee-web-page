<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="">
    <meta name="abstract" content="Página de eventos de la rama IEEE de la Universidad del Cauca">
    <title>Rama IEEE Unicauca</title>
    <?php echo vite('main.js'); ?>
</head>

<body>
    <?php
    include_once "components/sidebar.php";
    ?>
    <div class="principal banner__anuario">
        <?php
        include_once "components/header.php";
        ?>
        <main class="container">
            <section class="banner">
                <div class="banner__info">
                    <div class="banner__name">
                        <h1 class="banner__titulo">Eventos</h1>
                        <h1 class="banner__subtitulo">Nuestros Eventos</h1>
                    </div>
                    <div class="banner__description">
                        <p class="banner__p">
                            ¿Qué hacemos? Enterate de todos los eventos que realizamos y que no te puedes perder
                        </p>
                    </div>
                    <a href="#eventos" class="banner__action">
                        <button class="banner__button">
                            Quiero ver
                            <i class="fa-solid fa-angle-right"></i>
                        </button>
                    </a>
                </div>
                <?php
                include_once "components/rrss.php";
                ?>
            </section>
        </main>
    </div>

    <div id="eventos" class="events">
        <h2 class="events__h2">Camino de Eventos</h2>
    </div>

    <section class="cd-timeline js-cd-timeline">
        <div class="container max-width-lg cd-timeline__container">

            <div class="cd-timeline__block">
                <div class="cd-timeline__img cd-timeline__img--movie">
                    <img src="" alt="Movie" class="movie-img">
                </div> <!-- cd-timeline__img -->

                <div class="cd-timeline__content text-component" id="tet-2022">
                    <img src="" alt="" class="img_event">
                    <p class="p_event">TET 2022</p>
                    <!-- <h2>TET 2022</h2>
                    <p class="color-contrast-medium">This is the content of the last section</p> -->

                    <div class="flex justify-between items-center">
                        <span class="cd-timeline__date">Feb 26</span>
                    </div>
                </div>
            </div> <!-- cd-timeline__block -->


            <div class="cd-timeline__block">
                <div class="cd-timeline__img cd-timeline__img--picture">
                    <img src="" alt="Picture" class="picture-img">
                </div> <!-- cd-timeline__img -->

                <div class="cd-timeline__content text-component" id="ieee-day">
                    <img src="" alt="" class="img_event">
                    <p class="p_event">IEEE Day</p>

                    <div class="flex justify-between items-center">
                        <span class="cd-timeline__date">Jan 14</span>
                    </div>
                </div> <!-- cd-timeline__content -->
            </div> <!-- cd-timeline__block -->

            <div class="cd-timeline__block">
                <div class="cd-timeline__img cd-timeline__img--movie">
                    <img src="" alt="Movie" class="movie-img">
                </div> <!-- cd-timeline__img -->

                <div class="cd-timeline__content text-component" id="navidad-fieeeliz">
                    <img src="" alt="" class="img_event">
                    <p class="p_event">Navidad FIEEELIZ</p>

                    <div class="flex justify-between items-center">
                        <span class="cd-timeline__date">Jan 18</span>
                    </div>
                </div> <!-- cd-timeline__content -->
            </div> <!-- cd-timeline__block -->

            <div class="cd-timeline__block">
                <div class="cd-timeline__img cd-timeline__img--picture">
                    <img src="" alt="Picture" class="picture-img">
                </div> <!-- cd-timeline__img -->

                <div class="cd-timeline__content text-component" id="dia-mujer">
                    <img src="" alt="" class="img_event">
                    <p class="p_event">Día de la Mujer</p>

                    <div class="flex justify-between items-center">
                        <span class="cd-timeline__date">Jan 24</span>
                    </div>
                </div> <!-- cd-timeline__content -->
            </div> <!-- cd-timeline__block -->

            <div class="cd-timeline__block">
                <div class="cd-timeline__img cd-timeline__img--location">
                    <img src="" alt="Location" class="location-img">
                </div> <!-- cd-timeline__img -->

                <div class="cd-timeline__content text-component" id="dia-niño">
                    <img src="" alt="" class="img_event">
                    <p class="p_event">Día del Niño</p>

                    <div class="flex justify-between items-center">
                        <span class="cd-timeline__date">Feb 14</span>
                    </div>
                </div> <!-- cd-timeline__content -->
            </div> <!-- cd-timeline__block -->

            <div class="cd-timeline__block">
                <div class="cd-timeline__img cd-timeline__img--location">
                    <img src="" alt="Location" class="location-img">
                </div> <!-- cd-timeline__img -->

                <div class="cd-timeline__content text-component" id="dia-madre">
                    <img src="" alt="" class="img_event">
                    <p class="p_event">Día de la Madre</p>

                    <div class="flex justify-between items-center">
                        <span class="cd-timeline__date">Feb 18</span>
                    </div>
                </div> <!-- cd-timeline__content -->
            </div> <!-- cd-timeline__block -->

            <div class="cd-timeline__block">
                <div class="cd-timeline__img cd-timeline__img--movie">
                    <img src="" alt="Movie" class="movie-img">
                </div> <!-- cd-timeline__img -->

                <div class="cd-timeline__content text-component" id="bienvenida-primiparos">
                    <img src="" alt="" class="img_event">
                    <p class="p_event">BIEEENVENIDA de Primiparos</p>

                    <div class="flex justify-between items-center">
                        <span class="cd-timeline__date">Feb 26</span>
                    </div>
                </div> <!-- cd-timeline__content -->
            </div> <!-- cd-timeline__block -->

            <div class="cd-timeline__block">
                <div class="cd-timeline__img cd-timeline__img--movie">
                    <img src="" alt="Movie" class="movie-img">
                </div> <!-- cd-timeline__img -->

                <div class="cd-timeline__content text-component" id="ramakon">
                    <img src="" alt="" class="img_event">
                    <p class="p_event">RAMAKON</p>

                    <div class="flex justify-between items-center">
                        <span class="cd-timeline__date">Feb 26</span>
                    </div>
                </div> <!-- cd-timeline__content -->
            </div> <!-- cd-timeline__block -->
        </div>
    </section> <!-- cd-timeline -->
    <!-- <div class="wave">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 195">
			<path fill="#123F72" fill-opacity="1" d="M0,32L48,53.3C96,75,192,117,288,122.7C384,128,480,96,576,90.7C672,85,768,107,864,101.3C960,96,1056,64,1152,74.7C1248,85,1344,139,1392,165.3L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
		</svg>
	</div> -->
    <?php
    include_once "components/footer.php";
    ?>
</body>

</html>