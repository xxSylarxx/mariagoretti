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
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, .6)), url("./assets/img/fotos/robotica.jpg");
            /* background-image: url("./assets/img/portada-all-1.png"); */
            background-size: 100%;
            background-position: center;
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
            background-color: transparent;
            width: 5px;
            border-radius: 6px;
        }

        .scroll::-webkit-scrollbar-thumb {

            background-color: transparent;
        }

        /* Estilos de los cards de talleres */
        .card {
            transition: .6s ease-out;

        }

        .card .card-body {
            display: inline-block;
            background: linear-gradient(to left, white 50%, var(--color11) 50%) right;
            background-size: 200%;
            transition: .5s ease-out;
            text-align: center;
        }

        .card:hover {
            transform: translateY(-20px);
        }

        .card:hover .card-body {
            background-position: left;

        }

        .crop {
            height: 210px;
            max-height: 210px;
        }

        .crop>img {
            height: 210px;
            object-fit: cover;
        }



        .card-body span {
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-decoration: none;
            color: black;
            /*  text-align: justify;

            font-size: 17px;

            color: #747474;

            line-height: 1.6; */

        }

        .color-1 {
            color: var(--color3);
            font-weight: bold;
        }


        @media only screen and (max-width: 650px) {
            #portada {
                background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, .6)), url("./assets/img/fotos/robotica.jpg");
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
                font-size: 1.8em;
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
            <h1 style="color:var(--color8);font-weight:bold;">Talleres Deportivos, Culturales y Recreativos</h1>
        </div>
    </section>
    <!-- 
    <br><br><br>

    <section class="container">
        <p>Los Talleres, Deportivos, Culturales y Recreativos son pilares
            fundamentales en la formación de nuestros estudiantes.
            A través de su práctica, se favorece el desarrollo intelectual,
            emocional y motriz; asimismo, ayudan a construir una relación activa
            de los estudiantes con su comunidad, ya que, de manera natural, estimulan
            el sentido de identificación y pertenencia comunitaria y les permiten una
            mejor interacción con su entorno social.</p>
        <p>Lo más importante en todas estas actividades es que nuestros estudiantes
            puedan desarrollar su creatividad, sensibilidad, emotividad e
            imaginación en un ambiente agradable.</p>
        <p>Es una gran oportunidad para descubrir sus talentos y
            habilidades o su afinidad vocacional. Es así como han nacido deportistas
            destacados que han estado en la selección de sus colegios en vóley, handball,
            natación , futsal como también la expresión corporal a través de la danza, banda
            sinfónica, escultores o chef de alto prestigio.</p>

    </section> -->
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4 hvr-float">
                <a href="" data-bs-toggle="modal" data-bs-target="#robotica" target="_blank">
                    <div class="card h-100 shadow border-0">
                        <div class="crop">
                            <img src="./assets/img/fotos/robotica.jpg" class="w-100">
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="card-body">
                                <h4 class="color-1 text-center">Artes</h4>
                                <span style="text-align:center;display:block;">
                                    Música, Manualidades, Danza, Artes plásticas.
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-4 hvr-float">
                <a href="" data-bs-toggle="modal" data-bs-target="#robotica" target="_blank">
                    <div class="card h-100 shadow border-0">
                        <div class="crop">
                            <img src="./assets/img/fotos/robotica.jpg" class="w-100">
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="card-body">
                                <h4 class="color-1 text-center">Deportes</h4>
                                <span style="text-align:center;display:block;">
                                    Fútbol, Básquetbol, Vóley, Atletismo.
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-4 hvr-float">
                <a href="" data-bs-toggle="modal" data-bs-target="#robotica" target="_blank">
                    <div class="card h-100 shadow border-0">
                        <div class="crop">
                            <img src="./assets/img/fotos/robotica.jpg" class="w-100">
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="card-body">
                                <h4 class="color-1 text-center">Idiomas</h4>
                                <span style="text-align:center;display:block;">
                                    Inglés
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-md-4 mb-4 hvr-float">
                <a href="" data-bs-toggle="modal" data-bs-target="#robotica" target="_blank">
                    <div class="card h-100 shadow border-0">
                        <div class="crop">
                            <img src="./assets/img/fotos/robotica.jpg" class="w-100">
                        </div>
                        <div class="h-100 d-flex justify-content-center">
                            <div class="card-body">
                                <h4 class="color-1 text-center">Robótica y Programación</h4>
                                <span style="text-align:center;display:block;">
                                    Introducción a la robótica, programación básica, desarrollo de proyectos tecnológicos.
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-4 hvr-float">
                <a href="" data-bs-toggle="modal" data-bs-target="#robotica" target="_blank">
                    <div class="card h-100 shadow border-0">
                        <div class="crop">
                            <img src="./assets/img/fotos/robotica.jpg" class="w-100">
                        </div>
                        <div class="h-100 d-flex justify-content-center">
                            <div class="card-body">
                                <h4 class="color-1 text-center">Tecnologías aplicadas a la Inteligencia Artificial</h4>
                                <span style="text-align:center;display:block;">
                                    Desarrollar un pensamiento crítico sobre las oportunidades y los desafíos de la IA.
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-4 hvr-float">
                <a href="" data-bs-toggle="modal" data-bs-target="#robotica" target="_blank">
                    <div class="card h-100 shadow border-0">
                        <div class="crop">
                            <img src="./assets/img/fotos/robotica.jpg" class="w-100">
                        </div>
                        <div class="h-100 d-flex justify-content-center">
                            <div class="card-body">
                                <h4 class="color-1 text-center">Ciencias</h4>
                                <span style="text-align:center;display:block;">
                                    Experimentación científica, investigación, talleres de química, física y biología.
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!--  <div class="col-md-4 mb-4 hvr-float">
                <div class="card h-100 shadow border-0">
                    <div class="crop">
                        <img src="./assets/img/fotos/natacion.jpg" class="w-100">
                    </div>
                    <a href="" data-bs-toggle="modal" data-bs-target="#natacion" target="_blank">
                        <div class="card-body">
                            <h4 class="color-1">Taller de Natación</h4>
                            <span>
                                El taller de Natación tiene como propósito, estimular y fortalecer el desarrollo de habilidades y destrezas que permitan el dominio y disfrute del medio acuático.
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4 hvr-float">
                <div class="card h-100 shadow border-0">
                    <div class="crop">
                        <img src="./assets/img/fotos/musica.jpg" class="w-100">
                    </div>
                    <a href="" data-bs-toggle="modal" data-bs-target="#musica" target="_blank">
                        <div class="card-body">
                            <h4 class="color-1">Banda de Música</h4>
                            <span>
                                El taller de Banda de Música tiene como finalidad que el alumno descubra y desarrolle sus habilidades musicales mediante la lectura de partituras y la ejecución de instrumentos de viento, su capacidad auditiva, aumente su sensibilidad artística y acrecente su horizonte cultural.
                            </span>
                        </div>
                    </a>
                </div>
            </div> -->
        </div>
    </div>
    <div class="modal fade" id="robotica" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row mx-1 py-3" style="border:2px solid red;border-radius:5px;">
                        <!--  <div class="col-lg-5 my-auto">
                            <img src="./assets/img/fotos/robotica.jpg" class="img-fluid" alt="">
                        </div> -->
                        <div class="col-lg">
                            <h2 style="color:var(--color4);font-weight:bold;">ROBÓTICA</h2>
                            <p>Estimular a los participantes en el diseño, construcción y programación de robots, a través de experiencias y aplicaciones prácticas.</p>
                            <h5 style="font-weight:bold;">OBJETIVO GENERAL:</h5>
                            <ul>
                                <li>Despertar la vocación hacia la tecnología.</li>
                                <li>Fomentar el trabajo en equipo e inter cambio de ideas.</li>
                                <li>Inculcar la importancia de los métodos y procedimientos en el desarrollo de proyectos.</li>
                                <li>Desarrollar y fortalecer la creatividad.</li>
                            </ul>
                            <h5 style="font-weight:bold;">OBJETIVO ESPECÍFICO:</h5>
                            <ul>
                                <li>Crear en nuestra institución el club de robótica.</li>
                            </ul>

                            <p>Costo por taller: Gratuito.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="escultura" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row mx-1 py-3" style="border:2px solid red;border-radius:5px;">
                        <!-- <div class="col-lg-5 my-auto">
                            <img src="./assets/img/fotos/escultura.jpg" class="img-fluid" alt="">
                        </div> -->
                        <div class="col-lg">
                            <h2 style="color:var(--color4);font-weight:bold;">ESCULTURA</h2>
                            <p>El taller de Escultura del colegio Alexander Fleming está inspirada en el desarrollo del talento de los alumnos. En la enseñanza del que hacer escultórico, partimos de un compromiso con el arte y la cultura, otorgando al alumno los conocimientos pertinentes para su desarrollo .El manejo de fundamentos plásticos como el volumen, la linea, el ritmo y el espacio, asi como la experimentación con materiales diversos, desarrollará en el alumno la capacidad de relacionar ideas para crear sentido.</p>
                            <h5 style="font-weight:bold;">OBJETIVO GENERAL:</h5>
                            <ul>
                                <li>Reconocer diversos materiales y medios de expresión artística y aprender a utilizarlos adecuadamente.</li>
                                <li>Despertar y dinamizar la imaginación y la creatividad.</li>
                                <li>Potenciar la expresión conceptual y emocional a través de procedimientos plásticos.</li>
                                <li>Potenciar nuestras sensibilidades desarrollando la coordinación visual y manual.</li>
                            </ul>
                            <h5 style="font-weight:bold;">OBJETIVO ESPECÍFICO:</h5>
                            <ul>
                                <li>Representar figuras en plano o volumen, combinando formas y empleando variados materiales.</li>
                                <li>Confeccionar esculturas uniendo elementos a través de diferentes técnicas y materiales.</li>
                                <li>Modelar distintas figuras y elementos con masa, plastilina, en las que se pueda reconocer una figura.</li>
                            </ul>
                            <h5 style="font-weight:bold;">INDUMENTARIA:</h5>
                            <ul>
                                <li>Mandil de trabajo de escultura o guarda polvo institucional.</li>
                            </ul>

                            <p>Costo por taller: S/ 15.00 </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="gastronomia" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row mx-1 py-3" style="border:2px solid red;border-radius:5px;">
                        <!-- <div class="col-lg-5 my-auto">
                            <img src="./assets/img/fotos/robotica.jpg" class="img-fluid" alt="">
                        </div> -->
                        <div class="col-lg">
                            <h2 style="color:var(--color4);font-weight:bold;">GASTRONOMÍA</h2>
                            <p>Iniciar y despertar la pasión por el gran mundo
                                gastronómico a todos aquellos grandes y pequeños
                                chef, creando de esta forma buenas bases y técnicas
                                en la cocina para un éxito total en sus presentaciones profesionales.</p>
                            <h5 style="font-weight:bold;">OBJETIVO GENERAL:</h5>
                            <ul>
                                <li>Manejo de equipos, utensilios de cocina e higiene en la cocina.</li>
                                <li>Conocimiento de materia prima Corte de vegetales y frutas.</li>
                                <li>Conocimiento de la repostería en general.</li>
                            </ul>
                            <h5 style="font-weight:bold;">OBJETIVO ESPECÍFICO:</h5>
                            <ul>
                                <li>Ejecutar de manera autónoma, los distintos platillos de repostería, gestionando adecuadamente los recursos disponibles para adaptarlos a las peculiaridades de cada uno.</li>
                                <li>Clasificar los diferentes tipos de platillos por países según los elementos y estilo empleados.</li>
                                <li>Utilizar los conocimientos teóricos para la elaboración de los platillos.</li>
                                <li>Diseñar de manera creativa diferentes platillos y postres de Latinoamérica.</li>
                                <li>Desarrollar aptitudes y competencias para la preparación de platillos de repostería.</li>
                            </ul>

                            <h5 style="font-weight:bold;">INDUMENTARIA:</h5>
                            <ul>
                                <li>Mandil y gorro de gastronomía institucional.</li>
                            </ul>

                            <p>Costo bimestral por taller: S/30.00 </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="futsal" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row mx-1 py-3" style="border:2px solid red;border-radius:5px;">
                        <!-- <div class="col-lg-5 my-auto">
                            <img src="./assets/img/fotos/robotica.jpg" class="img-fluid" alt="">
                        </div> -->
                        <div class="col-lg">
                            <h2 style="color:var(--color4);font-weight:bold;">TALLER DE FUTSAL</h2>
                            <p>Recordemos que en esta etapa es fundamental incidir especialmente
                                en la coordinación psicomotriz, utilizando el juego como motor
                                central en las sesiones de entrenamiento y aplicando ejercicios
                                donde las habilidades y destrezas variadas tengan un papel relevante
                                y la velocidad de movimiento tenga especial atención en el momento de
                                trabajar la iniciación a la técnica individual basada en la familiarización
                                con el balón, a modo de ejercicios óculo pie-balón y óculo mano-balón,
                                sin dejar de lado los juegos grupales de cooperación y de oposición y
                                la iniciación a ciertas prácticas físicas para desarrollar algunas
                                capacidades condicionales concretas.</p>

                            <h5 style="font-weight:bold;">OBJETIVO ESPECÍFICO:</h5>
                            <ul>
                                <li>Mejorar las capacidades coordinativas generales
                                    en base a las habilidades y destrezas que el jugador ya posee.</li>
                                <li>Utilizar aprendizajes basados en los juegos de cooperación
                                    y oposición, la carrera, los saltos, las recepciones,
                                    los equilibrios, los giros, los lanzamientos y combinaciones de los mismos.</li>
                                <li>Utilizar ejercicios en la coordinación óculo pie-balón,
                                    óculo mano-balón: conducciones de balón, pases, recepciones,
                                    paradas, controles y disparos a portería.</li>
                            </ul>

                            <p>Costo por taller: Gratuito.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="voley" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row mx-1 py-3" style="border:2px solid red;border-radius:5px;">
                        <!--  <div class="col-lg-5 my-auto">
                            <img src="./assets/img/fotos/robotica.jpg" class="img-fluid" alt="">
                        </div> -->
                        <div class="col-lg">
                            <h2 style="color:var(--color4);font-weight:bold;">TALLER DE VOLEY</h2>
                            <p>El Voleibol es un juego extremadamente lógico y racional,
                                por lo cual ayuda a que estas habilidades y cualidades
                                se desarrollen en los alumnos. Les enseña a depender
                                del otro para ganar y a entender que uno depende de
                                los demás en un terreno de juego, es decir adquieren
                                habilidad para trabajar en equipo</p>
                            <h5 style="font-weight:bold;">OBJETIVO GENERAL:</h5>
                            <ul>
                                <li>Tiene como objetivo instruir al estudiante al conocimiento del deporte entregando información sobre la historia y el reglamento, familiarizar al estudiante con el Voleibol a través de juegos recreativos y que el estudiante adquiera a través de actividades específicas los fundamentos básicos del Voleibol.</li>
                            </ul>
                            <h5 style="font-weight:bold;">OBJETIVO ESPECIFICO:</h5>
                            <ul>
                                <li>Promover el aprendizaje y la práctica del Voleibol en los alumnos.</li>
                                <li>Colaborar con la formación integral de los alumnos (tolerancia a la frustración,
                                    disciplina y perseverancia) generando en ellos una filosofía de vida.</li>
                                <li>Cuidado de la salud y del cuerpo.</li>
                                <li>Aumentar las capacidades y destrezas físicas.</li>
                            </ul>

                            <p>Costo por taller: Gratuito.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="handball" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row mx-1 py-3" style="border:2px solid red;border-radius:5px;">
                        <!--  <div class="col-lg-5 my-auto">
                            <img src="./assets/img/fotos/robotica.jpg" class="img-fluid" alt="">
                        </div> -->
                        <div class="col-lg">
                            <h2 style="color:var(--color4);font-weight:bold;">TALLER DE HANDBALL</h2>
                            <p>El handball en edad escolar, como todo deporte,
                                debe de entenderse como un juego de balón para
                                niños, porque desde esta perspectiva se integran
                                las necesidades lúdicas del niño en la práctica del deporte.</p>
                            <p>Es decir, la práctica del balonmano en edad escolar facilita que se transmitan al niño experiencias positivas que permitan que se desarrolle correctamente en distintos niveles: motor, social y educativo.</p>
                            <h5 style="font-weight:bold;">OBJETIVO GENERAL:</h5>
                            <ul>
                                <li>Promover el conocimiento de este deporte e introducirse en el ámbito deportivo y hacer este un estilo de vida.</li>
                                <li>Desarrollar la capacidad de resolver situaciones concretas.</li>
                                <li>Desarrollar las capacidades condicionales de los alumnos
                                    (velocidad, resistencia, fuerza) a un nivel específico adecuado a la edad y al peso.</li>
                                <li>Mejorar coordinativamente todas las acciones motrices
                                    de los alumnos, para lograr una mayor eficacia en el juego y su desarrollo integral.</li>
                                <li>Trabajar sobre la motivación tanto a nivel individual
                                    como grupal, para lograr el gusto por el deporte y la actividad física.</li>
                                <li>Conocer y dominar la lógica del juego y los aspectos técnicos-tácticos.</li>
                                <li>Conocer el reglamento del handball.</li>
                            </ul>
                            <h5 style="font-weight:bold;">OBJETIVO ESPECÍFICO:</h5>
                            <ul>
                                <li>Desarrollo de la conciencia de juego en equipo.</li>
                                <li>Mejora de la técnica específica aplicada al deporte.</li>
                                <li>Capacidad de jugar bajo esquemas tácticos básicos en ataque y defensa.</li>
                            </ul>

                            <p>Costo por taller: Gratuito.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="natacion" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row mx-1 py-3" style="border:2px solid red;border-radius:5px;">
                        <!-- <div class="col-lg-5 my-auto">
                            <img src="./assets/img/fotos/robotica.jpg" class="img-fluid" alt="">
                        </div> -->
                        <div class="col-lg">
                            <h2 style="color:var(--color4);font-weight:bold;">TALLER DE NATACIÓN</h2>
                            <p>El taller de Natación tiene como propósito,
                                estimular y fortalecer el desarrollo de
                                habilidades y destrezas que permitan el dominio
                                y disfrute del medio acuático.</p>
                            <h5 style="font-weight:bold;">OBJETIVO GENERAL:</h5>
                            <ul>
                                <li>Que todos nuestros alumnos sean capaces de desenvolverse con total normalidad y autonomía en el medio acuático.</li>
                                <li>Desarrollar lo máximo posible las capacidades de nuestros alumnos en el medio acuático empezando por las habilidades acuáticas para concluir con técnicas específicas de nado.</li>
                                <li>Fomentar la necesidad de unas normas de convivencia y de respeto a los compañeros, material, instalaciones, monitores, etc.</li>
                                <li>Crear un sentimiento de pertenencia en un grupo e inculcar valores socializadores.</li>
                                <li>Aprender hábitos de higiene saludables.</li>
                                <li>Buscar diversión en la práctica.</li>
                            </ul>
                            <h5 style="font-weight:bold;">OBJETIVO ESPECÍFICO:</h5>
                            <ul>
                                <li>Disfrutar durante la práctica de actividad física.</li>
                                <li>Incrementar el conocimiento, el control del
                                    propio cuerpo y la autoestima, a través del trabajo de las habilidades motrices básicas en situaciones.</li>
                                <li>Adquirir hábitos de orden, seguridad e higiene durante la práctica de actividad física.</li>
                                <li>Relacionarse con los demás con respeto,
                                    colaboración y aceptación de la diferencia, sea del orden que sea.</li>
                            </ul>
                            <h5 style="font-weight:bold;">INDUMENTARIA:</h5>
                            <ul>
                                <li>DAMAS: Traje de baño institucional, Gorro y lentes de protección.</li>
                                <li>VARONES: Short de baño institucional, Gorro y lentes de protección.</li>
                            </ul>

                            <p>Costo por taller: gratuito.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="musica" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row mx-1 py-3" style="border:2px solid red;border-radius:5px;">
                        <!--  <div class="col-lg-5 my-auto">
                            <img src="./assets/img/fotos/robotica.jpg" class="img-fluid" alt="">
                        </div> -->
                        <div class="col-lg">
                            <h2 style="color:var(--color4);font-weight:bold;">BANDA DE MÚSICA</h2>
                            <p>El taller de Banda de Música tiene como finalidad
                                que el alumno descubra y desarrolle sus habilidades
                                musicales mediante la lectura de partituras y la ejecución
                                de instrumentos de viento, su capacidad auditiva, aumente su
                                sensibilidad artística y acrecente su horizonte cultural.</p>
                            <p>La banda es una formación de muchos músicos (más de 40) que tocan diversos tipos de instrumentos de las siguientes familias:</p>
                            <ul>
                                <li>Vientos: dividida en dos partes, de madera y de metal.</li>
                                <li>Percusión Tambor, cimbalos, tarola, etc.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br><br>
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