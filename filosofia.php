<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>María Goretti</title>
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

        button.accordion-button {
            font-family: 'Nunito-Bold';
            color: var(--color4);
            text-transform: uppercase;
            border: none;
            padding: 2px 14px;
        }

        button.accordion-button::after {
            content: "";
            background-image: none;
        }

        button.accordion-button:not(.collapsed) {
            background: white;
            color: var(--color1);
            border: none;
        }

        button.accordion-button:not(.collapsed)::after {
            -webkit-transform: rotate(-180deg);
            transform: rotate(-180deg);
            background: white;
        }

        button.accordion-button:focus {
            border-color: white;
            box-shadow: none;
            border: none;
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

            /* #valores-slider {
                display: none;
            } */

            #valores-slider button {
                display: none;
            }

            #valores-slider h3,
            h2,
            p {
                margin: 20px 20px 20px 20px;
            }
        }
    </style>

    <section class="container-fluid px-0" id="portada">
        <div class="container px-3">
            <ol class="breadcrumb text-white" style="font-size: 16px;">
                <li class="breadcrumb-item"><a href="./" style="color:var(--color8);">Inicio</a></li>
                <li class="breadcrumb-item"><a href="" style="color:var(--color8);">Nosotros</a></li>
                <!-- <li class="breadcrumb-item" aria-current="page" style="color:var(--color8);">Nuestra Filosofía</li> -->
            </ol>
            <h1>Nuestra Filosofía</h1>
        </div>
    </section>



    <br><br><br>

    <section class="container">
        <div class="row">
            <div class="col-xl p-4 text-center text-white" style="background-color:var(--color3);">
                <br>
                <h2 class="text-white mb-4" style="font-weight: bold;">MISIÓN</h2>
                <p style="line-height: 1.6;text-align:justify;">
                    Brindar una educación de calidad, para contribuir con la formación integral de los educandos, que sean capaces de ejercer un liderazgo responsable y solidario en la sociedad peruana
                </p>
                <br>
            </div>
            <div class="col-xl p-4 text-center text-white" style="background-color:var(--color7);">
                <br>
                <h2 class="text-white mb-4" style="font-weight: bold;">VISIÓN</h2>
                <p style="line-height: 1.6;text-align:justify;">
                    Ser una comunidad educativa democrática en todas las instancias y niveles, capaz de brindar una solida formación integral para la vida, promoviendo valores, formando niños y jóvenes disciplinados, autónomos, reflexivos y críticos, competentes, con el apoyo y compromiso de los padres.
                </p>
                <br>
            </div>
    </section>
    <br><br><br>
    <section id="valores">
        <div class="container">
            <div class="row mb-4">
                <div class="col text-center">
                    <h1 style="color:var(--color1);font-weight:bold;"><span>VALORES</span></h1>
                </div>
            </div>
        </div>

    </section>
    <br><br><br>
    <section id="valores-slider" class="container-fluid">
        <div id="carouselConvenios" class="carousel slide pointer-event" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="card" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                            <div class="row py-5 justify-content-center">
                                <div class="col-lg-5 my-auto">
                                    <h3>I BIMESTRE</h3>
                                    <h2 style="color:var(--color1);font-weight:bold;"><span>RESPONSABILIDAD</span></h2>
                                    <br>
                                    <p class="text-justify">
                                        La responsabilidad se considera una característica positiva de las personas que son capaces de comprometerse y actuar de forma correcta. En muchos casos, la responsabilidad viene dada por un cargo, un rol o una circunstancia.
                                        Una persona se caracteriza por su responsabilidad porque tiene la virtud no solo de tomar una serie de decisiones de manera consciente, sino también de asumir las consecuencias que tengan las citadas decisiones y de responder de las mismas ante quien corresponda en cada momento.
                                    </p>
                                </div>
                                <div class="col-lg-5 py-4 my-auto" style="display:flex;justify-content:center;align-items:center;">
                                    <img src="./assets/img/fotos/responsabilidad.png" width="40%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="card" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                            <div class="row py-5 justify-content-center">
                                <div class="col-lg-5 my-auto">
                                    <h3>II BIMESTRE</h3>
                                    <h2 style="color:var(--color1);font-weight:bold;"><span>AMOR</span></h2>
                                    <br>
                                    <p class="text-justify">
                                        Es la fuerza que nos impulsa para hacer las cosas bien, por eso es considerado un valor que tiene muy clara la diferencia entre el bien y el mal.
                                        A su vez es un sentimiento moral, pues nos induce a actuar bien en nuestra vida y con las personas que amamos. Además, nos lleva a tener una vida plena de paz, tranquilidad y alegría, y, en consecuencia, de bienestar con nosotros mismos.

                                    </p>
                                </div>
                                <div class="col-lg-5 py-4 my-auto" style="display:flex;justify-content:center;align-items:center;">
                                    <img src="./assets/img/fotos/amor.png" width="40%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="card" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                            <div class="row py-5 justify-content-center">
                                <div class="col-lg-5 my-auto">
                                    <h3>III BIMESTRE</h3>
                                    <h2 style="color:var(--color1);font-weight:bold;"><span>JUSTICIA</span></h2>
                                    <br>
                                    <p class="text-justify">
                                        La justicia como valor es el principio moral de cada persona que decide vivir dando a cada quien lo que le corresponde o pertenece. La justicia busca el bien propio y de la sociedad.
                                        Siendo también el conjunto de pautas y criterios que establecen un marco adecuado para las relaciones entre personas e instituciones, autorizando, prohibiendo y permitiendo acciones específicas en la interacción de estos.
                                    </p>
                                </div>
                                <div class="col-lg-5 py-4 my-auto" style="display:flex;justify-content:center;align-items:center;">
                                    <img src="./assets/img/fotos/justicia.png" width="40%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="card" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                            <div class="row py-5 justify-content-center">

                                <div class="col-lg-5 my-auto ">
                                    <h3>IV BIMESTRE</h3>
                                    <h2 style="color:var(--color1);font-weight:bold;"><span>IDENTIDAD</span></h2>
                                    <br>
                                    <p class="text-justify">
                                        Es la propia imagen o la idea de sí mismo, lo que uno cree o piensa que es. La totalidad de lo que uno es. En otras palabras, es el reconocimiento que hacemos de nosotros mismos a partir de lo que nos diferencia y así mismo, es la manera de unirnos con las demás personas para conservar y enriquecer los bienes comunes. Identificarse con algo es reconocer en ese algo nuestra esencia.
                                        Es la concepción y expresión que tiene cada persona acerca de su individualidad y acerca de su pertenencia o no a ciertos grupos.

                                    </p>
                                </div>
                                <div class="col-lg-5 py-4 my-auto" style="display:flex;justify-content:center;align-items:center;">
                                    <img src="./assets/img/fotos/identidad.png" width="40%">
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselConvenios" data-bs-slide="prev" style="margin-left: -4em;">
                <span class="fs-1" style="color:var(--color9);"><i class="fas fa-chevron-circle-left"></i></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselConvenios" data-bs-slide="next" style="margin-right: -4em;">
                <span class="fs-1" style="color:var(--color9);"><i class="fas fa-chevron-circle-right"></i></span>
            </button>
        </div>
    </section>
    <br><br><br>
    <section id="perfiles">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <h1 style="color:var(--color1);font-weight:bold;text-align:center;"><span>PERFILES</span></h1>
                    <br>
                    <p>El Comportamiento del alumno de la Institución
                        Educativa ALEXANDER FLEMING, será evaluado a través
                        del presente perfil, siendo respetuoso de las normas
                        y reglas establecidas por la Institución. </p>
                    <br>
                </div>

            </div>

            <div class="row justify-content-between">
                <div class="col-md-4 mb-4 text-justify">
                    <br>
                    <div class="accordion" id="accordionExample">
                        <ul class="timeline">
                            <li>
                                <div class="accordion-item border-0">
                                    RESPONSABLE
                                </div>
                            </li>
                            <li>
                                <div class="accordion-item border-0">
                                    ORDENADO
                                </div>
                            </li>
                            <li>
                                <div class="accordion-item border-0">
                                    CORTES
                                </div>
                            </li>
                            <li>
                                <div class="accordion-item border-0">
                                    PUNTUAL
                                </div>
                            </li>
                            <li>
                                <div class="accordion-item border-0">
                                    COLABORADOR
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 mb-4 text-justify">
                    <br>
                    <div class="accordion" id="accordionExample">
                        <ul class="timeline">
                            <li>
                                <div class="accordion-item border-0">
                                    ESTUDIOSO
                                </div>
                            </li>
                            <li>
                                ASEADO
                            </li>
                            <li>
                                VERAZ
                            </li>
                            <li>
                                APLICADO
                            </li>
                            <li>
                                ATENTO
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4" style="display: flex;align-items:end;">
                    <img src="./assets/img/fotos/perfilf1.png" width="70%">
                </div>
            </div>
        </div>
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