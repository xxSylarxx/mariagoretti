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
        .course-list {
            list-style: none;
            padding: 0;
            /* max-width: 500px; */
            margin: 0 auto;
        }

        .course-item i {
            color: #7e0d0b;
            margin-right: 10px;
            font-size: 1.2rem;
        }

        #portada {
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, .6)), url("./assets/img/web/banner_metodologia.jpg");
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

        .div-metodologia {
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        .div-metodologia p {
            text-align: justify;
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
        }
    </style>

    <section class="container-fluid px-0" id="portada">
        <div class="container px-3">
            <ol class="breadcrumb text-white" style="font-size: 16px;">
                <li class="breadcrumb-item"><a href="./" style="color:var(--color8);">Inicio</a></li>
                <li class="breadcrumb-item"><a href="" style="color:var(--color8);">Propuesta Educativa</a></li>
            </ol>
            <h1>Propuesta Educativa</h1>
        </div>
    </section>
    <br><br><br>
    <section class="container div-metodologia" id="metodologia">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 px-lg-4">
                <h1 class="mb-3" style="color:var(--color1);font-weight:bold;text-align:start;">Metodología</h1>
                <p>
                    <b>Aprendizaje significativo: </b>
                    El aprendizaje significativo en nuestra Institución permite que nuestros estudiantes relacionen la nueva información con conocimientos previos, logrando una comprensión más profunda y aplicable a su vida cotidiana.
                </p>
                <div class="row d-flex justify-content-center ">
                    <div class="row d-flex justify-content-between align-items-centers">
                        <ul class="course-list">
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i><b>Aprendizaje basado en proyectos (ABP):</b> Nuestros estudiantes desarrollan investigaciones y resuelven problemas reales.
                            </li>
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i><b>Estudios de caso:</b> Aplicación del conocimiento en situaciones del mundo actual.
                            </li>
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i><b>Aprendizaje experiencial:</b> Actividades prácticas, experimentos y visitas educativas que conectan la teoría con la realidad.
                            </li>
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i><b>Enfoque interdisciplinario:</b> Integración de distintas materias para abordar un mismo tema desde diferentes perspectivas
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 px-lg-4 d-flex justify-content-center">
                <img id="imageborder" src="./assets/img/web/img-propuesta_metodologia1.jpg" class="" width="100%">
            </div>
        </div>
    </section>
    <br>
    <section class="container div-metodologia" id="metodologia2">
        <div class="row justify-content-center ">
            <div class="col-md-6 px-lg-4 d-flex justify-content-center">
                <img id="imageborder" src="./assets/img/web/img_met_relig.jpg" class="" width="100%">
            </div>
            <div class="col-md-6 px-4 lg-0">
                <p><b>Desarrollo de Valores y Habilidades Emocionales:</b> Nuestro modelo educativo considera que el desarrollo personal y emocional es tan importante como el académico.
                </p>
                <div clas="row d-flex justify-content-center ">
                    <div class="row d-flex justify-content-between align-items-center">
                        <ul class="course-list">
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i><b>Educación en valores:</b> Se fomenta el respeto, la empatía, la responsabilidad y la solidaridad.
                            </li>
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i><b>Inteligencia emocional:</b> Se enseñan habilidades para el manejo de emociones y la toma de decisiones asertiva.
                            </li>
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i><b>Tutorías personalizadas:</b> Acompañamiento para la formación integral del estudiante.
                            </li>
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i><b>Proyectos de impacto social:</b> Actividades que promueven la conciencia social y la participación en la comunidad.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <section class="container div-metodologia" id="metodologia3">
        <div class="row justify-content-center">
            <div class="col-md-6 px-lg-4">
                <p><b>Aprendizaje significativo: </b> El aprendizaje significativo en nuestra Institución permite que nuestros estudiantes relacionen la nueva información con conocimientos previos, logrando una comprensión más profunda y aplicable a su vida cotidiana.</p>
                <div class="row d-flex justify-content-center align-items-center ">
                    <div class="row d-flex justify-content-between align-items-center">
                        <ul class="course-list">
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i><b>Integración de TIC (Tecnologías de la Información y Comunicación):</b>Uso de plataformas educativas, pizarras digitales y recursos multimedia.
                            </li>
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i><b>Gamificación:</b>Incorporación de dinámicas de juego para motivar y reforzar el aprendizaje.
                            </li>
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i><b>Aulas interactivas:</b>Espacios equipados con tecnología para un aprendizaje más dinámico.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 px-4 d-flex justify-content-center">
                <img id="imageborder" src="./assets/img/web/computadoras.jpg" class="" width="100%">
            </div>


        </div>
    </section>
    <br><br>

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
</body>

</html>