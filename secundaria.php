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
            max-width: 400px;
            margin: 0 auto;
        }

        .course-item i {
            color: #951310;
            margin-right: 10px;
            font-size: 1.2rem;
        }

        #portada {
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, .6)), url("./assets/img/web/banner_servicios.jpg");
            /* background-image: url("./assets/img/portada-all-1.png"); */
            background-size: 100%;
            background-position: center 30%;
            color: white;
            padding-top: 10rem;
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
            border: 3px solid var(--color4);
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
            background-color: transparent;
            width: 5px;
            border-radius: 6px;
        }

        .scroll::-webkit-scrollbar-thumb {

            background-color: transparent;
        }

        #reconocimientos .card .message {

            position: absolute;

            margin-top: 110px;

            height: 0px;

            background-color: rgba(0, 0, 0, .7);

            width: 100%;

            display: flex;

            flex-direction: row;

            align-items: center;

            justify-content: center;

            color: white;

            font-weight: bold;

            opacity: 0;

            transition: all .3s ease-in-out;

        }



        #reconocimientos .card:hover .message {

            opacity: 1;

            height: 50px;

        }

        .modal-content {
            width: 60% !important;
        }

        .modal-dialog {
            display: flex;
            justify-content: center;
        }



        @media only screen and (max-width: 650px) {
            #portada {
                background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, .6)), url("./assets/img/fotos/portada_secundaria.jpg");
                /* background-image: url("./assets/img/portada-all-1.png"); */
                background-size: 150%;
                background-position: center;
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
                <li class="breadcrumb-item"><a href="" style="color:var(--color8);">Niveles</a></li>
                <!-- <li class="breadcrumb-item" aria-current="page" style="color:var(--color8);">Propuesta Educativa</li> -->
            </ol>
            <h1 style="color:var(--color8);font-weight:800;">SECUNDARIA</h1>
        </div>
    </section>



    <br><br><br>
    <section class="container" id="metodologia">
        <div id="visitas" class="row justify-content-between align-items-center">
            <div class="col-md-6 px-lg-4">
                <h2 style="color:var(--color1);font-weight:800;">NIVEL SECUNDARIA</h2>
                <br>
                <p>En secundaria, la metodología se orienta a fortalecer el pensamiento analítico y la autonomía, preparando a los estudiantes para la educación superior y el mundo laboral.
                </p>
                <b> Objetivo:</b>
                Formar estudiantes críticos, creativos y autónomos, con una preparación sólida para enfrentar los desafíos del futuro


            </div>
            <div class="col-md-6 px-lg-4 d-flex justify-content-center">
                <img id="imageborder" src="./assets/img/web/b_secundaria.jpg" class="" width="90%">
            </div>
        </div>
        <br><br>

        <section class="container" id="metodologia">
            <div id="visitas" class="row justify-content-between align-items-center">
                <div class="col-md-6 px-lg-4 d-flex justify-content-center">
                </div>
            </div>
            </div>
            <br>
            <section id="curriculo">
                <div class="container">
                    <center><span style="font-weight:bold;font-size:1.5rem;">Metodología: </span></center>
                    <br>
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-6 px-0">
                            <br>
                            <div class="accordion" id="accordionExample">
                                <ul class="timeline">
                                    <li>
                                        <strong>Aprendizaje basado en competencias: </strong> Desarrollo de habilidades para resolver problemas y tomar decisiones.
                                    </li>
                                    <li>
                                        <strong> Uso de tecnologías educativas: </strong> Integración de herramientas digitales y plataformas de aprendizaje virtual.
                                    </li>
                                    <li>
                                        <strong>Trabajo colaborativo: </strong> Fomento del aprendizaje en equipo y la resolución de problemas de manera conjunta.
                                    </li>
                                    <li>
                                        <strong> Orientación vocacional: </strong> Guía para la elección de carreras y preparación para la educación superior.
                                    </li>
                                    <li>
                                        <strong>Proyectos interdisciplinarios: </strong> Aplicación de conocimientos de diferentes áreas en proyectos reales.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>

                        <div class="col-md-6 my-auto py-5" style="display: flex;align-items:end;">
                            <img id="imageborder" src="./assets/img/web/sec_metodologia.jpg" class="" width="100%">
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center ">
                        <div class="row d-flex justify-content-around">
                            <div class="col-lg-3 pt-0 px-0">
                                <ul class="course-list">
                                    <li class="course-item my-2">
                                        <i class="fas fa-check-circle"></i> Desarrollo del pensamiento crítico y analítico.
                                    </li>
                                    <li class="course-item my-2">
                                        <i class="fas fa-check-circle"></i> Desarrollo del pensamiento crítico y analítico.
                                    </li>

                                </ul>
                            </div>

                            <div class="col-lg-3 p-0">
                                <ul class="course-list">
                                    <li class="course-item my-2">
                                        <i class="fas fa-check-circle"></i> Habilidades digitales y tecnológicas avanzadas.
                                    </li>
                                    <li class="course-item my-2">
                                        <i class="fas fa-check-circle"></i> Preparación para la educación superior y el mundo laboral.
                                    </li>
                                </ul>
                            </div>


                            <div class="col-lg-3 p-0">
                                <ul class="course-list">
                                    <li class="course-item my-2">
                                        <i class="fas fa-check-circle"></i> Formación en valores y responsabilidad social.
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>

            </section>
            

        </section>
        
           
    
    
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
    <script>
        var swiper2 = new Swiper(".mySwiper2", {
            direction: "vertical",
            /*  pagination: {
                 el: ".swiper-pagination",
                 clickable: true,

             }, */
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
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