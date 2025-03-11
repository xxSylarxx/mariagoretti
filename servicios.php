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
            max-width: 500px;
            margin: 0 auto;
        }

        .course-item i {
            color: #7e0d0b;
            margin-right: 10px;
            font-size: 1.2rem;
        }

        #portada {
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, .6)), url("./assets/img/fotos/portada_general_interna.jpg");
            /* background-image: url("./assets/img/portada-all-1.png"); */
            background-size: 100%;
            /*   background-position: center; */
            color: white;
            padding-top: 7rem;
            padding-bottom: 4rem;
            height: 350px;

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

        /* Estilo para el swiper slider vertical */
        /*   .swiper {
            width: 100%;
            height: 300px;
            margin-top: -90px;
        }  */

        /* .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        } */

        /* .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        } */

        /* Swiper de visitas de estudio */
        #visitas .swiper {
            width: 100%;
            height: 350px;
        }

        #visitas .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        #visitas .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        #visitas .swiper-pagination-bullet {
            width: 20px;
            height: 20px;
            text-align: center;
            line-height: 20px;
            font-size: 12px;
            color: #000;
            opacity: 1;
            background: rgba(0, 0, 0, 0.5);
        }

        #visitas .swiper-pagination-bullet-active {
            color: #fff;
            background: var(--color11);
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

        /* Estilos de li en psicina */
        /* Estilos de perfiles */
        ul.timeline {
            list-style-type: none;
            position: relative;
        }

        ul.timeline:before {
            content: ' ';
            background: #d4d9df;
            display: inline-block;
            position: absolute;
            left: 29px;
            width: 2px;
            height: 100%;
            z-index: 400;
        }

        ul.timeline>li {
            margin: 25px 0;
            padding-left: 20px;
        }

        ul.timeline>li:before {
            content: ' ';
            background: white;
            display: inline-block;
            position: absolute;
            border-radius: 50%;
            border: 3px solid var(--color3);
            left: 19px;
            width: 23px;
            height: 23px;
            z-index: 400;
        }

        /* Estilo para scroll en bienvenidos */
        .scroll {
            overflow-y: auto;
            height: 320px;

        }

        .scroll::-webkit-scrollbar {
            background-color: var(--color12);
            width: 5px;
            border-radius: 6px;
        }

        .scroll::-webkit-scrollbar-thumb {

            background-color: var(--color1);
        }

        /* Estilo para scroll en bienvenidos */
        .scroll2 {
            /*  direction: rtl; */
            overflow-y: auto;
            height: 320px;

        }

        .scroll2::-webkit-scrollbar {
            background-color: var(--color12);
            width: 5px;
            border-radius: 6px;
        }

        .scroll2::-webkit-scrollbar-thumb {

            background-color: var(--color1);
        }
        .div-servicios {
            padding-top: 2rem;
            padding-bottom: 2rem;
        }
        .div-servicios p {
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

            #visitas .swiper-slide img {
                display: block;
                width: 90%;
                height: 70%;
                object-fit: cover;
            }
        }
    </style>

    <section class="container-fluid px-0" id="portada">
        <div class="container px-3">
            <ol class="breadcrumb text-white" style="font-size: 16px;">
                <li class="breadcrumb-item"><a href="./" style="color:var(--color8);">Inicio</a></li>
                <li class="breadcrumb-item"><a href="" style="color:var(--color8);">Nosotros</a></li>
                <li class="breadcrumb-item" aria-current="page" style="color:var(--color8);">Propuesta Educativa</li>
            </ol>
            <h1 style="color:var(--color8);font-weight:bold;">Servicios</h1>
        </div>
    </section>
    <section class="container div-servicios" id="servicios">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 px-lg-4">
                <h1 class="mb-3" style="color:var(--color1);font-weight:bold;text-align:start;">Servicios</h1>
                <p>
                    <b>Laboratorio de Informática: </b>
                    Es un espacio equipado con computadoras de última generación, acceso a internet de alta velocidad y software especializado para apoyar el desarrollo de habilidades digitales en los estudiantes, fomentando el pensamiento lógico y el uso de la tecnología como una herramienta para el aprendizaje y la innovación.
                </p>
                <div class="row d-flex justify-content-center ">
                    <div class="row d-flex justify-content-between align-items-centers">
                        <ul class="course-list">
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i>	Equipos modernos con programas actualizados.
                            </li>
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i>Acceso a internet seguro y controlado.
                            </li>
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i>Clases de programación, diseño gráfico y ofimática.
                            </li>
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i>Talleres de alfabetización digital y uso responsable de la tecnología.
                            </li>
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i>Integración con plataformas educativas interactivas
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
    <section class="container div-servicios" id="servicios2">
        <div class="row justify-content-center ">
            <div class="col-md-6 px-lg-4 d-flex justify-content-center">
                <img id="imageborder" src="./assets/img/web/img-propuesta_metodologia2.jpg" class="" width="100%">
            </div>
            <div class="col-md-6 px-4 lg-0">
                <p><b>Laboratorio de Ciencias:</b> Es un espacio destinado a la experimentación en áreas como Física, Química y Biología, CTA, donde los estudiantes pueden realizar prácticas y fortalecer su aprendizaje a través de la observación y el método científico; asimismo permite desarrollar el pensamiento crítico y la curiosidad científica a través de la experimentación y el análisis.
                </p>
                <div clas="row d-flex justify-content-center ">
                    <div class="row d-flex justify-content-between align-items-center">
                        <ul class="course-list">
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i>Reactivos y materiales para experimentos en Biología, Química y Física.
                            </li>
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i>Microscopios y herramientas de medición científica.         
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container div-servicios" id="servicios3">
        <div class="row justify-content-center">
            <div class="col-md-6 px-lg-4">
                 <p><b>Laboratorio de Inglés: </b> Este espacio está diseñado para reforzar el aprendizaje del idioma inglés a través de tecnología y métodos interactivos, y así facilitar el aprendizaje del idioma mediante el uso de herramientas digitales que potencien la práctica y el dominio del idioma.</p>
                <div class="row d-flex justify-content-center align-items-center ">
                    <div class="row d-flex justify-content-between align-items-center">
                        <ul class="course-list">
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i>Software de aprendizaje adaptativo y actividades multimedia.
                            </li>
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i>Uso de audífonos y micrófonos para la práctica de la pronunciación.
                            </li>
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i>Clases con enfoque en la comprensión auditiva y expresión oral.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 px-4 d-flex justify-content-center">
                <img id="imageborder" src="./assets/img/fotos/robotica.jpg" class="" width="100%">
            </div>


        </div>
    </section>
    <section class="container div-servicios" id="servicios4">
        <div class="row justify-content-center ">
            <div class="col-md-6 px-lg-4 d-flex justify-content-center">
                <img id="imageborder" src="./assets/img/web/img-propuesta_metodologia2.jpg" class="" width="100%">
            </div>
            <div class="col-md-6 px-4 lg-0">
                <p><b>Aulas de Multimedia:</b> Las aulas están equipadas con tecnología avanzada para hacer que el proceso de enseñanza-aprendizaje sea más dinámico e interactivo y así brindar a los estudiantes una experiencia de aprendizaje inmersiva e innovadora mediante el uso de herramientas tecnológicas.
                </p>
                <div clas="row d-flex justify-content-center ">
                    <div class="row d-flex justify-content-between align-items-center">
                        <ul class="course-list">
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i>Proyectores y pantallas interactivas.
                            </li>
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i>Equipos de sonido de alta calidad.
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i>Acceso a plataformas educativas digitales.
                            </li>
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i>Recursos audiovisuales para complementar el aprendizaje.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container div-servicios" id="servicios5">
        <div class="row justify-content-center">
            <div class="col-md-6 px-lg-4">
                 <p><b>Plataforma Virtual: Cubicol – Paideia – Leo </b> El colegio cuenta con plataformas virtuales que facilitan la comunicación entre docentes, estudiantes y familias, ofreciendo un entorno de aprendizaje digital, integrando la tecnología en la educación para mejorar la comunicación y el acceso a los recursos de aprendizaje.</p>
                <div class="row d-flex justify-content-center align-items-center ">
                    <div class="row d-flex justify-content-between align-items-center">
                        <ul class="course-list">
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i>Cubicol
                                <ol class="">
                                    <li class=" course-item my-2">Plataforma de gestión académica con acceso a notas, asistencia y comunicación directa con docentes</li>
                                    <li class=" course-item my-2">Recursos educativos y materiales de estudio en línea.</li>
                                    <li class=" course-item my-2">Calendario de actividades escolares.</li>
                                </ol>
                            </li>
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i>Paideia
                                <ol class="">
                                    <li class=" course-item my-2">Herramienta pedagógica que fomenta el aprendizaje autónomo y colaborativo.</li>
                                    <li class=" course-item my-2">Espacios de discusión y foros interactivos.</li>
                                    <li class=" course-item my-2">Evaluaciones en línea y retroalimentación personalizada.</li>
                                </ol>
                            </li>
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i>Leo
                                <ol class="">
                                    <li class=" course-item my-2"> Plataforma enfocada en el desarrollo de habilidades lectoras. </li>
                                    <li class=" course-item my-2">Actividades interactivas para mejorar la comprensión lectora.</li>
                                    
                                </ol>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 px-4 d-flex justify-content-center">
                <img id="imageborder" src="./assets/img/fotos/robotica.jpg" class="" width="100%">
            </div>


        </div>
    </section>
    <section class="container div-servicios" id="servicios6">
        <div class="row justify-content-center ">
            <div class="col-md-6 px-lg-4 d-flex justify-content-center">
                <img id="imageborder" src="./assets/img/web/img-propuesta_metodologia2.jpg" class="" width="100%">
            </div>
            <div class="col-md-6 px-4 lg-0">
                <p><b>Orientación Educativa y Psicopedagógica:</b> Este servicio está diseñado para acompañar principalmente a los estudiantes en su desarrollo personal, emocional y académico, brindando apoyo en diferentes áreas, garantizando el bienestar general de los mismos.
                </p>
                <div clas="row d-flex justify-content-center ">
                    <div class="row d-flex justify-content-between align-items-center">
                        <ul class="course-list">
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i>Asesoramiento psicopedagógico para mejorar técnicas de estudio.
                            </li>
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i>Apoyo en el manejo de emociones y resolución de conflictos.
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i>Orientación vocacional para ayudar en la elección de carreras futuras.
                            </li>
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i>Charlas y talleres sobre inteligencia emocional, autoestima y convivencia escolar.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br><br>

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
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
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