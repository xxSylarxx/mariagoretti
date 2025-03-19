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
        /* Estilo de Lista */
        ul.timeline {
            list-style-type: none;
            position: relative;
        }

        ul.timeline:before {
            content: ' ';
            background: var(--color2);
            display: inline-block;
            position: absolute;
            left: 30px;
            width: 2px;
            height: 95%;
            z-index: 400;
        }

        ul.timeline>li {
            margin: 14px 0;
            padding-left: 20px;
        }

        ul.timeline>li:before {
            content: ' ';
            background: white;
            display: inline-block;
            position: absolute;
            border-radius: 50%;
            border: 4px solid var(--color4);
            left: 15px;
            width: 32px;
            height: 32px;
            z-index: 400;
        }

        @media screen and (max-width:800px) {
            ul.timeline:before {
                height: 94%;
            }
        }

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
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, .4)), url("./assets/img/web/b_inicial4.jpg");
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
            object-position: center 10%;
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
            margin: 15px 0;
            padding-left: 20px;
        }

        ul.timeline>ol:before {
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

        #otros img {
            transition: .4s;
        }

        #otros img:hover {
            transform: scale(1.29);
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
                <li class="breadcrumb-item"><a href="" style="color:var(--color8);">Niveles</a></li>
                <!-- <li class="breadcrumb-item" aria-current="page" style="color:var(--color8);">Propuesta Educativa</li> -->
            </ol>
            <h1 style="color:var(--color8);font-weight:800;">INICIAL</h1>
        </div>
    </section>



    <br><br><br>
    <section class="container" id="metodologia">
        <div id="visitas" class="row justify-content-between align-items-center">
            <div class="col-md-6 px-lg-4 scroll my-auto">
                <h2 style="color:var(--color1);font-weight:800;">NIVEL INICIAL</h2>
                <br>
                <p>
                    En el nivel inicial, el enfoque está centrado en el aprendizaje a través del juego, la exploración y la socialización. Se promueve el desarrollo integral del niño en los aspectos cognitivo, emocional, social y motriz.
                <p><b> Objetivo:</b> Desarrollar la autonomía, la creatividad y la socialización del niño, preparando una base sólida para los siguientes niveles educativos</p>

                </p>
            </div>
            <div class="col-md-6 px-lg-4 d-flex justify-content-center">
                <div class="swiper mySwiper" id="imageborder">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="./assets/img/web/b_inicial.jpg" class="rounded shadow" alt=""></div>
                        <div class="swiper-slide"><img src="./assets/img/web/b_inicial2.jpg" class="rounded shadow" alt=""></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <!-- <br>
        <br>
        <br>
        <center><span style="font-weight:bold;font-size:1.5rem;">Se desarrolla las siguientes capacidades: </span></center>
        <br>
        <br>
        <br> -->
        <!--   <//?php include_once 'card.php' ?> -->

    </section>
    <br>
    <br>
    <br>
    <section id="curriculo">
        <div class="container">
            <center><span style="font-weight:bold;font-size:1.5rem;">Metodología: </span></center>
            <br>
            <br>
            <div class="row justify-content-start">

                <div class="col-md-6 my-auto" style="display: flex;align-items:end;">
                    <img id="imageborder" src="./assets/img/web/b_inicial3.jpg" class="" width="100%">
                </div>
                <br>
                <br>
                <br>   
                <div class="col-md mb-4 text-justify">
                    <br>
                    <div class="accordion" id="accordionExample">
                        <ul class="timeline">
                            <li>
                                <strong>Aprendizaje basado en el juego: </strong> Actividades lúdicas para desarrollar la creatividad y la imaginación.
                            </li>
                            <li>
                                <strong>Enfoque en el desarrollo socioemocional: </strong> Se enseñan habilidades de convivencia y expresión emocional.
                            </li>
                            <li>
                                <strong> Trabajo por proyectos:</strong> Exploración de temas de interés a través de actividades sensoriales y experimentales.
                            </li>
                            <li>
                                <strong> Estimulación temprana:</strong> Desarrollo de habilidades motrices finas y gruesas mediante actividades dinámicas.
                            </li>
                            <li>
                                <strong> Ambientes preparados:</strong> Espacios diseñados para incentivar la curiosidad y la autonomía.
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="row d-flex justify-content-center py-5">
                <div class="row d-flex justify-content-around">
                    <div class="col-lg-3 pt-0 px-0">
                        <ul class="course-list">
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i> Niños autónomos y seguros en su entorno.
                            </li>
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i> Habilidades de comunicación y socialización fortalecidas.
                            </li>

                        </ul>
                    </div>

                    <div class="col-lg-3 p-0">
                        <ul class="course-list">
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i> Desarrollo de la creatividad e imaginación.
                            </li>
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i> Expresión emocional y capacidad de autorregulación.
                            </li>
                        </ul>
                    </div>


                    <div class="col-lg-3 p-0">
                        <ul class="course-list">
                            <li class="course-item my-2">
                                <i class="fas fa-check-circle"></i> Primeros pasos en la resolución de problemas y la toma de decisiones.
                            </li>
                        </ul>
                    </div>

                </div>

            </div>

    </section>
    <br><br><br>
    <!-- <section>
        <div class="container">
            <div class="row">
                <div id="otros" class="col-lg-3" style="display:flex;flex-direction:column;justify-content:center;align-items:center;">
                    <img src="./assets/img/icons/dibujo.png" height="70" width="70" alt="">
                    <span style="margin-top:10px;margin-bottom:10px">Dibujo y Pintura</span>
                </div>
                <div id="otros" class="col-lg-3" style="display:flex;flex-direction:column;justify-content:center;align-items:center;"><img src="./assets/img/icons/gimnasia.png" height="70" width="70" alt=""><span style="margin-top:10px;margin-bottom:10px">Gimnasia Rítmica</span></div>
                <div id="otros" class="col-lg-3" style="display:flex;flex-direction:column;justify-content:center;align-items:center;"><img src="./assets/img/icons/teatro.png" height="70" width="70" alt=""><span style="margin-top:10px;margin-bottom:10px">Teatro</span></div>
                <div id="otros" class="col-lg-3" style="display:flex;flex-direction:column;justify-content:center;align-items:center;"><img src="./assets/img/icons/ajedrez.png" height="70" width="70" alt=""><span style="margin-top:10px;margin-bottom:10px">Ajedrez</span></div>
            </div>
        </div>
    </section>
    <br><br><br> -->
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