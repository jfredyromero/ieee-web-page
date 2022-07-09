<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rama IEEE Unicauca</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="./assets/css/events2.css" />
    <link rel="stylesheet" href="./assets/css/events.css" />
    <script src="https://kit.fontawesome.com/8e13114fca.js" crossorigin="anonymous"></script>
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

    <div class="events">
        <h2 class="events__h2">Camino de Eventos</h2>
    </div>

    <section class="cd-timeline js-cd-timeline">
        <div class="container max-width-lg cd-timeline__container">

            <div class="cd-timeline__block">
                <div class="cd-timeline__img cd-timeline__img--movie">
                    <img src="assets/img/cd-icon-movie.svg" alt="Movie">
                </div> <!-- cd-timeline__img -->

                <div class="cd-timeline__content text-component" id="tet2022">
                    <img class="img_event" src="assets/img/header.png" alt="">
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
                    <img src="assets/img/cd-icon-picture.svg" alt="Picture">
                </div> <!-- cd-timeline__img -->

                <div class="cd-timeline__content text-component">
                    <img class="img_event" src="assets/img/header.png" alt="">
                    <p class="p_event">IEEE Day</p>

                    <div class="flex justify-between items-center">
                        <span class="cd-timeline__date">Jan 14</span>
                    </div>
                </div> <!-- cd-timeline__content -->
            </div> <!-- cd-timeline__block -->

            <div class="cd-timeline__block">
                <div class="cd-timeline__img cd-timeline__img--movie">
                    <img src="assets/img/cd-icon-movie.svg" alt="Movie">
                </div> <!-- cd-timeline__img -->

                <div class="cd-timeline__content text-component">
                    <img class="img_event" src="assets/img/header.png" alt="">
                    <p class="p_event">Navidad FIEEELIZ</p>

                    <div class="flex justify-between items-center">
                        <span class="cd-timeline__date">Jan 18</span>
                    </div>
                </div> <!-- cd-timeline__content -->
            </div> <!-- cd-timeline__block -->

            <div class="cd-timeline__block">
                <div class="cd-timeline__img cd-timeline__img--picture">
                    <img src="assets/img/cd-icon-picture.svg" alt="Picture">
                </div> <!-- cd-timeline__img -->

                <div class="cd-timeline__content text-component">
                    <img class="img_event" src="assets/img/header.png" alt="">
                    <p class="p_event">Día de la Mujer</p>

                    <div class="flex justify-between items-center">
                        <span class="cd-timeline__date">Jan 24</span>
                    </div>
                </div> <!-- cd-timeline__content -->
            </div> <!-- cd-timeline__block -->

            <div class="cd-timeline__block">
                <div class="cd-timeline__img cd-timeline__img--location">
                    <img src="assets/img/cd-icon-location.svg" alt="Location">
                </div> <!-- cd-timeline__img -->

                <div class="cd-timeline__content text-component">
                    <img class="img_event" src="assets/img/header.png" alt="">
                    <p class="p_event">Día del Niño</p>

                    <div class="flex justify-between items-center">
                        <span class="cd-timeline__date">Feb 14</span>
                    </div>
                </div> <!-- cd-timeline__content -->
            </div> <!-- cd-timeline__block -->

            <div class="cd-timeline__block">
                <div class="cd-timeline__img cd-timeline__img--location">
                    <img src="assets/img/cd-icon-location.svg" alt="Location">
                </div> <!-- cd-timeline__img -->

                <div class="cd-timeline__content text-component">
                    <img class="img_event" src="assets/img/header.png" alt="">
                    <p class="p_event">Día de la Madre</p>

                    <div class="flex justify-between items-center">
                        <span class="cd-timeline__date">Feb 18</span>
                    </div>
                </div> <!-- cd-timeline__content -->
            </div> <!-- cd-timeline__block -->

            <div class="cd-timeline__block">
                <div class="cd-timeline__img cd-timeline__img--movie">
                    <img src="assets/img/cd-icon-movie.svg" alt="Movie">
                </div> <!-- cd-timeline__img -->

                <div class="cd-timeline__content text-component">
                    <img class="img_event" src="assets/img/header.png" alt="">
                    <p class="p_event">BIEEENVENIDA de Primiparos</p>

                    <div class="flex justify-between items-center">
                        <span class="cd-timeline__date">Feb 26</span>
                    </div>
                </div> <!-- cd-timeline__content -->
            </div> <!-- cd-timeline__block -->

            <div class="cd-timeline__block">
                <div class="cd-timeline__img cd-timeline__img--movie">
                    <img src="assets/img/cd-icon-movie.svg" alt="Movie">
                </div> <!-- cd-timeline__img -->

                <div class="cd-timeline__content text-component">
                    <img class="img_event" src="assets/img/header.png" alt="">
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

    <script src="./assets/js/events.js"></script>
    <!-- SWEETALERT2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>

    <script>
        document.getElementById("ieeeday").addEventListener("click", () => {
            Swal.fire({
                title: "IEEE Day",
                width: 1200,
                imageUrl: 'https://unsplash.it/400/200',
                imageWidth: 1200,
                imageHeight: 500,
                imageAlt: 'Custom image',
                showConfirmButton: false,
            })
        })

        document.getElementById("tet2022").addEventListener("click", () => {
            Swal.fire({
                title: "TET 2022",
                width: 1200,
                imageUrl: './assets/img/header.png',
                imageWidth: 1200,
                imageHeight: 500,
                imageAlt: 'Custom image',
                showConfirmButton: false,
            })
        })
    
    </script>

    <?php
    include_once "components/footer.php";
    include_once "components/scripts.php";
    ?>


</body>

</html>