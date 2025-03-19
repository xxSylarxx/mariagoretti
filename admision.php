<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio María Goretti</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="shortcut icon" href="./assets/img/icons/escudo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/web.css">
    <!-- Estilos de slider wiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
</head>

<body>

    <script async src="./assets/js/popper.min.js"></script>
    <script async src="./assets/js/bootstrap.min.js"></script>

    <div id="pre-load">
        <div id="circle">
            <div class="loader">
                <div class="loader2">
                    <div class="loader">
                        <div class="loader2">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once 'includes/header2.php' ?>

    <style>
        #portada {
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, .4)), url("./assets/img/web/banner_metodologia.jpg");
            /* background-image: url("./assets/img/portada-all-1.png"); */
            background-size: 100%;
            background-position: center 30%;
            color: white;
            padding-top: 20rem;
            padding-bottom: 4rem;
            height: 550px;

        }


        #portada .breadcrumb-item::before {
            color: white;
            font-weight: bold;
        }

        #portada h1 {
            color: var(--color8);
            font-weight: bold;
            font-size: 2.5em;
            margin-top: .9em;
        }

        /* Estilo slider swiper */
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            /* display: flex; */
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .swiper {
            margin-left: auto;
            margin-right: auto;
        }

        #metodologia p {
            text-align: justify;
        }

        /* Estilos de slider con sombras */
        .hub-slider {
            position: relative
        }

        .hub-slider ul {
            list-style: none
        }

        .hub-slider ul li {
            width: 100%;
            height: 360px;
            background: #fdda7b;
            color: #fff;
            line-height: 360px;
            text-align: center;
            position: absolute;
            border-radius: 8px;
            left: 0;
            top: 0;
            padding: 4px 2%
        }

        .hub-slider ul li>img.crop {
            width: 100%;
            height: 320px;
            object-fit: cover;
            border-radius: 8px
        }

        .hub-slider-controls {
            position: absolute;
            right: 0;
            top: 0;
            z-index: 1000
        }

        .hub-slider-arrow {
            width: 40px;
            height: 40px;
            border: none;
            background: #2ebd75;
            color: #fff;
            font-weight: 700
        }

        /* Estilo de boton portada */
        .cssbuttons-io-button {
            background: var(--color1);
            color: white;
            font-family: inherit;
            padding: 0.35em;
            padding-left: 1.2em;
            font-size: 17px;
            font-weight: 500;
            border-radius: 0.9em;
            border: none;
            letter-spacing: 0.05em;
            display: flex;
            align-items: center;
            box-shadow: inset 0 0 1.6em -0.6em var(--color2);
            overflow: hidden;
            position: relative;
            height: 2.8em;
            padding-right: 3.3em;
        }

        .cssbuttons-io-button .icon {
            background: white;
            margin-left: 1em;
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 2.2em;
            width: 2.2em;
            border-radius: 0.7em;
            box-shadow: 0.1em 0.1em 0.6em 0.2em var(--color1);
            right: 0.3em;
            transition: all 0.3s;
        }

        .cssbuttons-io-button:hover .icon {
            width: calc(100% - 0.6em);
        }

        .cssbuttons-io-button .icon svg {
            width: 1.1em;
            transition: transform 0.3s;
            color: var(--color1);
        }

        .cssbuttons-io-button:hover .icon svg {
            transform: translateX(0.1em);
        }

        .cssbuttons-io-button:active .icon {
            transform: scale(0.95);
        }


        @media only screen and (max-width: 650px) {
            #portada {
                background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, .6)), url("./assets/img/fotos/portada_general_interna.jpg");
                /* background-image: url("./assets/img/portada-all-1.png"); */
                background-size: 150%;
                /*   background-position: center; */
                background-repeat: no-repeat;
                color: white;
                padding-top: 3rem;
                padding-bottom: 2rem;
                height: 240px;
            }

            #portada h1 {
                font-size: 2.1em;
            }

            #div-hubslider {
                padding-bottom: 20rem;
                padding-top: 7rem;
            }
        }
    </style>

    <section class="container-fluid px-0" id="portada">
        <div class="container px-3">
            <ol class="breadcrumb text-white" style="font-size: 16px;">
                <li class="breadcrumb-item"><a href="./" style="color:var(--color8);">Inicio</a></li>
                <li class="breadcrumb-item"><a href="" style="color:var(--color8);">Admisión</a></li>
            </ol>
            <h1>Admisión</h1>
        </div>
    </section>

    <br><br><br>

    <section class="container" id="metodologia">
        <br>
        <!--  <h1 class="mb-3" style="color:var(--color1);font-weight:bold;text-align:center;">Proceso</h1>
        <br> -->

        <div class="row justify-content-between align-items-center">
            <div class="col-md px-lg-4">
                <div>
                    <h2 style="text-align: center;"><span style="color: #f51832;"><strong>REQUISITOS PARA LA INSCRIPCI&Oacute;N DE UN ESTUDIANTE NUEVO</strong></span></h2>
                    <div>&nbsp;</div>
                    <div>Él o la postulante deberá contar con la edad requerida para el grado al que postula de acuerdo con las disposiciones del Ministerio de Educación, según detalle:</div>
                    <div>&nbsp;</div>
                    <ul>
                        <li>INICIAL 3 AÑOS: Cumplir 3 años hasta el 31 de marzo de 2025</li>
                        <li>INICIAL 4 AÑOS: Cumplir 4 años hasta el 31 de marzo de 2025</li>
                        <li>INICIAL 5 AÑOS: Cumplir 5 años hasta el 31 de marzo de 2025</li>
                        <li>PRIMER GRADO: Cumplir 6 años hasta el 31 de marzo de 2025</li>
                        <li>Fecha de Inscripción.</li>
                    </ul>
                    <br>
                    <ul>
                        
                        <li>Comprobante de pago por derecho de matrícula.</li>
                        <li>Comprobante de pago por derecho de cuota de ingreso&nbsp;</li>
                        <li>Partida Nacimiento (Copia u original)</li>
                        <li>Copia DNI del alumno</li>
                        <li>Copia DNI de los padres del alumno</li>
                        <li>Constancia de NO ADEUDO de la I.E. de procedencia</li>
                        <li>Copia de libreta de notas del a&ntilde;o 2024</li>
                        <li>Certificado de estudios de la I.E. de procedencia (Original)</li>
                        <li>Constancia Matricula -SIAGIE (excepto inicial 3 a&ntilde;os)</li>
                        <li>Copia de tarjeta de vacuna del estudiante (solo en el caso de estudiantes de Inicial)</li>
                        <li>Firmar el Contrato de servicio educativo.</li>
                    </ul>
                    <div>&nbsp;</div>
                    <h2 style="text-align: center;"><span style="color: #f51832;"><strong>REQUISITOS PARA LA INSCRIPCI&Oacute;N DE UN ESTUDIANTE ANTIGUO</strong></span></h2>
                    <div>&nbsp;</div>
                    <ul>
                        <li>Realizar el Pago de la Matr&iacute;cula 2025&nbsp;</li>
                        <li>Acercarse al colegio para completar y firmar el Contrato de servicio educativo</li>
                    </ul>
                    <div style="text-align: right;">&nbsp;</div>
                    <div style="text-align: right;"><strong>DIRECCI&Oacute;N</strong></div>
                </div>
            </div>
        </div>
        <br>
        <br>
    </section>
    <br><br><br>
    <br>
    <?php include_once 'includes/footer.php' ?>

    <script>
        setTimeout(() => {
            let loader = document.getElementById('pre-load');
            loader.style.opacity = '0';
            setTimeout(() => {
                loader.style.display = 'none';
            }, 500);
        }, 2200);
    </script>

    <!-- Script para Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/hubslider.min.js"></script>
    <script>
        $('.hub-slider-slides ul').hubSlider({
            selector: $('li'),
            button: {
                next: $('.hub-slider-arrow_next'),
                prev: $('.hub-slider-arrow_prev')
            },
            transition: '0.9s',
            startOffset: 30,
            auto: true,
            time: 3 // secondly
        });
        setTimeout(() => {
            let loader = document.getElementById('pre-load');
            loader.style.opacity = '0';
            setTimeout(() => {
                loader.style.display = 'none';
            }, 500);
        }, 2200);
    </script>
</body>

</html>