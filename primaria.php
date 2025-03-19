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
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, .3)), url("./assets/img/web/banner_primaria.jpg");
            /* background-image: url("./assets/img/portada-all-1.png"); */
            background-size: 100%;
            background-position: center;
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
                background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, .6)), url("./assets/img/fotos/primaria5.jpg");
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
                <li class="breadcrumb-item"><a href="" style="color:var(--color8);">Niveles</a></li>
                <!-- <li class="breadcrumb-item" aria-current="page" style="color:var(--color8);">Propuesta Educativa</li> -->
            </ol>
            <h1 style="color:var(--color8);font-weight:800;">PRIMARIA</h1>
        </div>
    </section>
    <br><br><br>
    <section class="container" id="metodologia">
        <div id="visitas" class="row justify-content-between align-items-center">
            <div class="col-md-6 px-lg-4">
                <h2 style="color:var(--color1);font-weight:800;">NIVEL PRIMARIA</h2>
                <br>
                <p>En este nivel se busca consolidar el aprendizaje a través de un enfoque activo y participativo, en el que los estudiantes son protagonistas de su propio proceso educativo.</p>
                <b> Objetivo:</b>
                Desarrollar el pensamiento crítico, la autonomía y las habilidades socioemocionales de los estudiantes.

            </div>
            <div class="col-md-6 px-lg-4 d-flex justify-content-center">
                <div class="swiper mySwiper" id="imageborder">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="./assets/img/web/b_primaria.jpg" alt=""></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <br><br>
        <section id="curriculo">
            <div class="container">
                <center><span style="font-weight:bold;font-size:1.5rem;">Metodología: </span></center>
                <br>
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6 px-0 ">
                        <br>
                        <div class="accordion" id="accordionExample">
                            <ul class="timeline">
                                <li>
                                    <strong>Aprendizaje basado en proyectos (ABP): </strong> Los estudiantes investigan y resuelven problemas aplicando el conocimiento a la vida real.
                                </li>
                                <li>
                                    <strong> Educación personalizada: </strong> Se respeta el ritmo de aprendizaje de cada estudiante.
                                </li>
                                <li>
                                    <strong>Enseñanza activa: </strong> Uso de estrategias como el trabajo en equipo, debates y experimentación.
                                </li>
                                <li>
                                    <strong> Integración de tecnología: </strong> Uso de plataformas educativas para reforzar el aprendizaje.
                                </li>
                                <li>
                                    <strong>Desarrollo de valores: </strong> Fomento de la responsabilidad, el respeto y la empatía en el aula.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>

                    <div class="col-md-6 px-lg-4" style="display: flex;align-items:end;">
                        <img id="imageborder" src="./assets/img/web/primaria_met.jpg" class="" width="100%">
                    </div>
                </div>
                <div class="row d-flex justify-content-center py-5 ">
                    <div class="row d-flex justify-content-around">
                        <div class="col-lg-3 pt-0 px-0">
                            <ul class="course-list">
                                <li class="course-item my-2">
                                    <i class="fas fa-check-circle"></i> Niños con capacidad de investigar y resolver problemas de forma autónoma.
                                </li>
                                <li class="course-item my-2">
                                    <i class="fas fa-check-circle"></i> Desarrollo del pensamiento crítico y la creatividad.
                                </li>

                            </ul>
                        </div>

                        <div class="col-lg-3 p-0">
                            <ul class="course-list">
                                <li class="course-item my-2">
                                    <i class="fas fa-check-circle"></i> Habilidades de trabajo en equipo y liderazgo.
                                </li>
                                <li class="course-item my-2">
                                    <i class="fas fa-check-circle"></i> Uso adecuado de herramientas tecnológicas para el aprendizaje.
                                </li>
                            </ul>
                        </div>


                        <div class="col-lg-3 p-0">
                            <ul class="course-list">
                                <li class="course-item my-2">
                                    <i class="fas fa-check-circle"></i> Formación de valores y habilidades emocionales.
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>

        </section>
        <!-- <div id="visitas" class="row justify-content-between align-items-center">

            <div class="col-md-6 px-lg-4 d-flex justify-content-center">
                <div class="swiper mySwiper" id="imageborder">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide"><img src="./assets/img/fotos/primaria3.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="./assets/img/fotos/primaria4.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="./assets/img/fotos/primaria5.jpg" alt=""></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="col-md-6 px-lg-4">

                <p>Durante esta etapa escolar procuramos desarrollar las
                    capacidades de comunicación y de procesamiento crítico d
                    e la información; la capacidad de identificación, planeamiento
                    y resolución de los problemas; el uso adecuado del razonamiento
                    abstracto y científico, el fortalecimiento de la voluntad y educación
                    de la afectividad a través de la práctica de las virtudes humanas y Valores Eticos y Morales.</p>
                <p>Logramos así, alumnos autónomos e independientes que ingresarán
                    a la secundaria con un despierto interés por aprender y con una
                    disciplina de estudio abocada a la auto adquisición de conocimientos.</p>
            </div>
        </div> -->

    </section>
    <br><br><br>
    <!-- <br><br><br>
    <section id="galeria">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="hub-slider">
                        <div class="hub-slider-slides">
                            <ul>
                                <li><img src="./assets/img/fotos/secundaria1.jpg" class="crop shadow-sm"></li>
                                <li><img src="./assets/img/fotos/secundaria2.jpg" class="crop shadow-sm"></li>
                                <li><img src="./assets/img/fotos/secundaria3.jpg" class="crop shadow-sm"></li>
                                <li><img src="./assets/img/fotos/secundaria4.jpg" class="crop shadow-sm"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <div class="w-100" style="padding-top: 4%; padding-bottom: 2%;">
        <div class="container">
            <div class="row aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000">
                <div class="col-xl h-100 col-sm text-center my-auto">
                    <h1 style="color:var(--color1);font-weight:bold;"><span>CONVENIOS</span></h1>
                    <p>Con el fin de brindar mayores beneficios y facilidades,
                        contamos con diversos convenios exclusivos para nuestros estudiantes.</p>
                </div>
                <div class="col-5 my-auto">
                    <div class="row">
                        <div class="col-xl w-100 pl-0 col-sm text-center" style="height: 180px;">
                            <div class="swiper2 mySwiper2 swiper-initialized swiper-vertical swiper-pointer-events swiper-backface-hidden">
                                <div class="swiper-wrapper" id="swiper-wrapper-6ba5f0cc9452103c5" aria-live="off" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                    <div class="swiper-slide swiper-slide-active" style="height: 300px;" role="group" aria-label="1 / 5">
                                        <img src="./assets/img/fotos/universidad.png" style="position:relative;" width="380">

                                        <p style="position:absolute;margin-top:15rem;">Convenio de cooperación interinstitucional entre
                                            Universidad católica San Pablo y la institución educativa particular Alexander Fleming </p>
                                    </div>
                                    <div class="swiper-slide swiper-slide-next" style="height: 300px;" role="group" aria-label="2 / 5"><img src="./assets/img/fotos/ucsm.png" style="position:relative;" width="380">
                                        <p style="position:absolute;margin-top:15rem;">Convenio de cooperación interinstitucional entre
                                            Universidad Católica de Santa María y la
                                            institución educativa particular Alexander Fleming</p>
                                    </div>
                                    <div class="swiper-slide" style="height: 300px;" role="group" aria-label="3 / 5"><img src="./assets/img/fotos/office365.png" width="380"></div>
                                    <div class="swiper-slide" style="height: 300px;" role="group" aria-label="4 / 5"><img src="./assets/img/fotos/zoom.png" width="380"></div>
                                    <div class="swiper-slide" role="group" aria-label="5 / 5" style="height: 300px;"><img src="./assets/img/fotos/tinkercad.png" width="380"></div>


                                </div>
                                <div class="swiper-pagination"></div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->
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