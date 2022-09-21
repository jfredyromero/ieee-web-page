<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="">
    <meta name="abstract" content="Página de error de la rama IEEE de la Universidad del Cauca">
    <title>Rama IEEE Unicauca</title>
    <?php echo vite('main.js'); ?>
</head>

<body>
    <main class="error-container">
        <div class="background">
            <div class="background__wave background__wave--first"></div>
            <div class="background__wave background__wave--second"></div>
            <div class="background__wave background__wave--third"></div>
        </div>
        <div class="error-container__caption">
            <img id="error-img" src="" class="error-container__img">
            <h1 class="error-container__text">
                Página no encontrada.
                <a href="<?php echo $GLOBALS["dominio"]; ?>">
                    <i class="fa-solid fa-house"></i>
                    Regresa al inicio
                    <i class="fa-solid fa-house"></i>
                </a>

                </span>
            </h1>
        </div>
    </main>
</body>

</html>