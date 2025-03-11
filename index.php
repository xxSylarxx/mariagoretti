<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>María Goretti</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="shortcut icon" href="./assets/img/icons/escudo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/web.css">
    <link rel="stylesheet" href="./assets/css/card-animation.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <!-- carrousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script async src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>

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

    <?php include_once 'includes/header.php'; ?>


    <script>
        // adaptar altura de cabecera
        var height = document.getElementById('header').clientHeight;
        document.getElementById('header-top').style.marginTop = height + "px";
    </script>
    <!-- ventana emergente admin -->

    <style>
        div.bann-lema {
            position: absolute;
            width: 39.9%;
            padding-left: 2em;
            padding-right: 2em;
            background-color: rgba(243, 243, 243, 0.5);
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #section-slider {

            margin-top: -12px;
        }

        #section-slider .texto-encima {

            z-index: 10;
        }

        #img-banner {
            object-fit: cover;
            filter: brightness(60%);
        }

        .div-banner {
            padding-left: 10rem;
            position: absolute;
            display: flex;
            justify-content: start;
            align-items: flex-end;
            height: 100%;
            padding-bottom: 10%;
        }

        .tittle-banner1 {
            font-family: 'Nunito-Bold', sans-serif;
            font-size: 3.5rem;
            color: white;
            position: relative;
            font-weight: bold;
        }

        .tittle-banner2 {
            color: white;

            font-weight: 900;
        }


        #boton {
            background-color: var(--color6);
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

        /* Estilo de boton portada */
        .cssbuttons-io-button {
            background: var(--color4);
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
            box-shadow: inset 0 0 1.6em -0.6em var(--color4);
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
            box-shadow: 0.1em 0.1em 0.6em 0.2em var(--color4);
            right: 0.3em;
            transition: all 0.3s;
        }

        .cssbuttons-io-button:hover .icon {
            width: calc(100% - 0.6em);
        }

        .cssbuttons-io-button .icon svg {
            width: 1.1em;
            transition: transform 0.3s;
            color: var(--color4);
        }

        .cssbuttons-io-button:hover .icon svg {
            transform: translateX(0.1em);
        }

        .cssbuttons-io-button:active .icon {
            transform: scale(0.95);
        }

        #lema {
            background: linear-gradient(rgba(0, 0, 0, 0.5) 100%, #ffff 10%, #ffff 50%),
                url('./assets/img/fotos/lema.jpg');

            background-size: 100%;
            background-position: top;
            background-attachment: fixed;
            background-repeat: no-repeat;



        }

        #lema span {
            /* font-family: 'Archivo Black', sans-serif; */
            font-family: 'Nunito-Bold', sans-serif;
            padding-top: 10rem;
            padding-bottom: 10rem;
            display: flex;
            align-content: center;
            justify-content: center;
            font-size: 5rem;
            color: white;
            font-weight: 900;

        }

        #noticias .card .news {
            position: absolute;
            top: 20px;
            left: -16px;
            border-radius: 5px;
            padding: 4px 12px;
            background-color: var(--color1);
            color: white;
            font-size: 14px;
            font-weight: bold;


            transform: translateY(-5%);

        }

        #noticias div.card {
            transition: .3s;


        }

        #noticias div.card:hover {
            transform: scale(1.06);
        }

        #noticias .card .detalle {

            text-overflow: ellipsis;

            display: -webkit-box;

            -webkit-line-clamp: 2;

            -webkit-box-orient: vertical;

            overflow: hidden;

            text-align: justify;

            font-size: 17px;

            color: #747474;

            line-height: 1.6;

        }

        #noticias img {
            object-fit: cover;
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

        /* Estilo para el swiper slider vertical */
        .swiper {
            width: 100%;
            height: 300px;
            margin-top: -90px;
        }

        .swiper-slide {
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

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        @media only screen and (max-width: 450px) {

            #lema {
                background: linear-gradient(rgba(0, 0, 0, 0.5) 100%, #ffff 10%, #ffff 50%),
                    url('./assets/img/fotos/lema.jpg');

                background-size: 100%;
                background-position: top;
                background-attachment: none;
                background-repeat: no-repeat;
                height: 200px;



            }

            #lema span {
                padding-top: 5rem;
                font-size: 1.3rem;

            }


            .div-banner {
                padding-left: 4.5rem;
                position: absolute;
                display: flex;
                justify-content: start;
                align-items: flex-end;
                height: 100%;
                padding-bottom: 80%;
            }

            .tittle-banner1 {
                font-size: 1.3rem;
            }


            .swiper {
                z-index: -2;
            }

            .swiper p {
                display: none;
            }

            .swiper-slide img {
                height: 80px;
            }

            #boton {
                background-color: var(--color6);
            }

            #p-slider-reconocimientos {
                margin-bottom: 7rem;
            }
        }
    </style>


    <section id="section-slider">
        <div id="carouselExampleIndicators" class="carousel slide pointer-event" data-bs-ride="carousel">

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="container div-banner">
                        <div class="texto-encima">
                            <h2 class="tittle-banner1">Bienvenidos al colegio <br>María Goretti</h2>
                            <p style="color:white;">¡Te educamos para la vida!</p>
                            <br>
                            <div class="row d-flex justify-content-start">
                                <div class="col-lg-6 py-2">
                                    <a href="./admision.php">
                                        <button class="cssbuttons-io-button"> Admisión
                                            <div class="icon">
                                                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path>
                                                </svg>
                                            </div>
                                        </button>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <img src="./assets/img/banner/banner1.jpg" class="d-block crop w-100" style="height:100vh;" id="img-banner">
                </div>
                <div class="carousel-item">
                    <div class="container div-banner">
                        <div class="texto-encima">
                            <h2 class="tittle-banner1">Bienvenidos al colegio <br>María Goretti</h2>
                            <p style="color:white; font-size:2rem;">¡Te educamos para la vida!</p>
                            <br>
                            <div class="row d-flex justify-content-start">
                                <div class="col-lg-6 py-2">
                                    <a href="./admision.php">
                                        <button class="cssbuttons-io-button"> Admisión
                                            <div class="icon">
                                                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path>
                                                </svg>
                                            </div>
                                        </button>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <img src="./assets/img/banner/banner2.jpg" class="d-block crop w-100" style="height:100vh;" id="img-banner">
                </div>
               

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!--  <video src="./public/videos/video_prueba.mp4" controls height="100%" width="100%"></video> -->

    </section>

    <br><br><br><br>

    <section class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6 my-2 scroll my-auto">
                <h1 class="mb-3">BIENVENIDOS</h1>
                <p style="line-height: 2; text-align: justify;">Somos una institución educativa con 35 años de experiencia, dedicada a formar ciudadanos responsables, críticos y comprometidos con el mundo. Durante este tiempo, hemos construido una sólida trayectoria basada en la excelencia académica, la innovación pedagógica y el desarrollo integral de nuestros alumnos.
                </p>
                <p style="line-height: 2; text-align: justify;">
                    Nos enorgullece ofrecer un ambiente de aprendizaje cálido y estimulante, donde cada estudiante se siente valorado, respetado y motivado a alcanzar su máximo potencial. Nuestra propuesta educativa se basa en respeto, responsabilidad, excelencia y en el desarrollo de habilidades del siglo XXI, preparando a nuestros alumnos para enfrentar los desafíos del futuro con confianza y éxito. </p>
                <p style="line-height: 2; text-align: justify;">
                    Te invitamos a conocer más sobre nuestra institución y a formar parte de nuestra comunidad educativa.
                </p>
                <p style="font-weight:bold;">Dr. Director@ </p>
                <p style="font-weight:bold;">Director</p>
            </div>
            <div class="col-lg-6 my-2">
                <center><img id="imageborder" src="./assets/img/galeria/directora_maria_rogetti.png" class="img-fluid" width="60%" alt=""></center>
            </div>
        </div>
    </section>
    <br><br><br><br>
    <section class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <h1><span>PROPUESTA EDUCATIVA</span></h1>
            </div>
        </div>
        <div class="row pt-1">
            <div class="col-md-4 my-2">
                <div class="card card-8 stacked--down-right" style="border: 0;">
                    <img src="./assets/img/web/propuesta_inicial.jpg" width="100%" height="300" style="border-radius: 10px; object-fit: cover;">
                </div>
                <br>
                <!-- <p style="padding:0px 15px 0px 15px;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-align: justify;">En nivel Inicial se imparte una educación integral basada
                En el nivel inicial, el enfoque principal es el desarrollo integral del niño, atendiendo a sus necesidades físicas, cognitivas, socioemocionales y lingüísticas. A través de juegos, canciones, actividades de motricidad fina y gruesa, exploración sensorial, interacción social, fomento del lenguaje y desarrollo de la autonomía, los niños aprenden a explorar el mundo que les rodea, a comunicarse, a relacionarse con otros y a desarrollar habilidades básicas para su futuro aprendizaje.</p> -->
                <div class="text-center">
                    <a class="btn btn-warning" href="./inicial.php">Inicial</a>
                </div>
            </div>
            <div class="col-md-4 my-2">
                <div class="card card-8 stacked--down-right" style="border: 0;">
                    <img src="./assets/img/web/propuesta_primaria.jpg" width="100%" height="300" style="border-radius: 10px; object-fit: cover;">
                </div>
                <br>
                <!-- <p style="padding:0px 15px 0px 15px;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-align: justify;">En el nivel primario, se fortalece el aprendizaje de las habilidades básicas de lectura, escritura, matemática, desarrollo social y ciencias naturales. Se promueve el desarrollo del pensamiento crítico, la creatividad y el razonamiento lógico a través de actividades como la lectura, escritura, resolución de problemas matemáticos, experimentos científicos, trabajos en grupo, proyectos interdisciplinarios, fomento de la participación ciudadana y el respeto por la diversidad. </p> -->
                <div class="text-center">
                    <a class="btn btn-warning" href="./primaria.php">Primaria</a>
                </div>
            </div>
            <div class="col-md-4 my-2">
                <div class="card card-8 stacked--down-right" style="border: 0;">
                    <img src="./assets/img/web/propuesta_sec.jpg" width="100%" height="300" style="border-radius: 10px; object-fit: cover;">
                </div>
                <br>
                <!-- <p style="padding:0px 15px 0px 15px;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-align: justify;">En el nivel secundario, se profundiza en las áreas del conocimiento, promoviendo la especialización en áreas de interés, el desarrollo del pensamiento crítico, la investigación y la formación integral del estudiante.</p> -->
                <div class="text-center">
                    <a class="btn btn-warning" href="./secundaria.php">Secundaria</a>
                </div>
            </div>
        </div>
    </section>
    <br><br><br><br>
    <section id="lema">
        <span>"Te Educamos para la Vida"</span>
    </section>

    <br><br><br><br>
    <section id="noticias">
        <div class="container">
            <div class="row mb-4">
                <div class="col text-start">
                    <h1><span>NOTICIAS</span></h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row" style="padding-left:8%;padding-right:8%;">
                <div class="col-md-4 px-3 my-3">
                    <a href="view.php?id=4">
                        <div class="card shadow-sm h-100" style="background: rgb(248, 248, 248);">
                            <span class="news">Noticias</span>
                            <img src="./assets/img/web/noticia_rogetti_1.jpg" width="100%" height="300">

                            <div class="card-body">

                                <h5 class="fw-bold text-uppercase" style="font-size: 18px;color:var(--color9);">Bienvenidos al inicio de clases 2025</h5>

                                <div class="detalle">
                                    Inicio de clases 2025
                                </div>

                            </div>

                            <div class="card-footer text-info" style="background: transparent; font-size: 16px;">
                                <i class="fas fa-calendar-alt" aria-hidden="true"></i>

                                <span class="ms-2">10-03-2025</span>

                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-md-4 px-3 my-3">
                    <a href="view.php?id=1">
                        <div class="card shadow-sm h-100" style="background: rgb(248, 248, 248);">
                            <span class="news">Noticias</span>
                            <img src="./assets/img/web/dia_mujer.jpg" width="100%" height="300">

                            <div class="card-body">

                                <h5 class="fw-bold text-uppercase" style="font-size: 18px;color:var(--color9);">Feliz día de la Mujer</h5>

                                <div class="detalle">

                                    Celebramos el día de la mujer.
                                </div>

                            </div>

                            <div class="card-footer text-info" style="background: transparent; font-size: 16px;">
                                <i class="fas fa-calendar-alt" aria-hidden="true"></i>

                                <span class="ms-2">08-03-2025</span>

                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-md-4 px-3 my-3">
                    <a href="view3.php?id=2">
                        <div class="card shadow-sm h-100" style="background: rgb(248, 248, 248);">
                            <span class="news">Noticias</span>
                            <img src="./assets/img/web/ultimas_vacantes.jpg" width="100%" height="300">

                            <div class="card-body">

                                <h5 class="fw-bold text-uppercase" style="font-size: 18px;color:var(--color9);">Últimas vacantes 2025</h5>

                            </div>

                            <div class="card-footer text-info" style="background: transparent; font-size: 16px;">
                                <i class="fas fa-calendar-alt" aria-hidden="true"></i>

                                <span class="ms-2">04-03-2025</span>

                            </div>

                        </div>
                    </a>
                </div>
                <!-- <div class="col-md-4 px-3 my-3">
                    <a href="view2.php?id=3">
                        <div class="card shadow-sm h-100" style="background: rgb(248, 248, 248);">
                            <span class="news">Eventos</span>
                            <img src="./assets/img/galeria/evento1.jpg" width="100%" height="300">

                            <div class="card-body">

                                <h5 class="fw-bold text-uppercase" style="font-size: 18px;color:var(--color9);"> PROCESO DE ADMISIÓN 2023</h5>

                                <div class="detalle">

                                    Proceso de Admisión 2023
                                </div>

                            </div>

                            <div class="card-footer text-info" style="background: transparent; font-size: 16px;">
                                <i class="fas fa-calendar-alt" aria-hidden="true"></i>

                                <span class="ms-2">17-10-2022</span>

                            </div>

                        </div>
                    </a>
                </div> -->
            </div>
        </div>
    </section>

    <br><br><br>
    
    <div class="w-100" style="padding-top: 4%; padding-bottom: 2%;">
        <div class="container">
            <div class="row">
                <div class="col-xl h-100 col-sm text-center my-auto">
                    <h1><span>RECONOCIMEINTOS Y CONVENIOS</span></h1>
                    <p id="p-slider-reconocimientos">Con el fin de brindar mayores beneficios y facilidades,
                        contamos con diversos convenios exclusivos para nuestros estudiantes.</p>
                </div>
            </div>
            <div class="row owl-carousel mx-0" id="owl-one">
                <div class="col  d-flex justify-content-center align-content-center">
                    <img src="./assets/img/icons/convenio_cubicol.png">
                </div>
                <div class="col justify-content-center align-content-center">
                    <img src="./assets/img/icons/convenio_infopucp.png">
                </div>
                <div class="col justify-content-center align-content-center">
                    <img src="./assets/img/icons/convenio_junior.png">
                </div>
            </div>
        </div>
        <br><br><br>
    </div>
    <br><br><br>


    <?php include_once 'includes/footer.php'; ?>

    <script>
        const enviarCorreo = (e) => {
            e.preventDefault();
            let form = new FormData(document.getElementById("form-contacto"));
            fetch('/admin/email/contacto', {
                method: "POST",
                body: form
            }).then(function(res) {
                return res.text();
            }).then(function(res) {
                alert(res);
                e.target.reset();
            });
        };
    </script>
    <script>
        setTimeout(() => {
            let loader = document.getElementById('pre-load');
            loader.style.opacity = '0';
            setTimeout(() => {
                loader.style.display = 'none';
            }, 500);
        }, 2700);
    </script>
    <script>
        var swiper = new Swiper(".mySwiper", {
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
    <!-- Script para carousel automatico -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        let owlone = $('#owl-one');
        let owltwo = $('#owl-two');

        owlone.owlCarousel({
            loop: true,
            margin: 50,
            nav: false,
            autoplay: true,
            autoplayTimeout: 2000,
            dots: false,
            responsive: {
                0: {
                    items: 1,
                },
                800: {
                    items: 2,
                },
                1000: {
                    items: 5,
                },
            },
        });

        owltwo.owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            autoplay: true,
            autoplayTimeout: 4000,
            dots: false,
            responsive: {
                0: {
                    items: 1,
                },
                800: {
                    items: 2,
                },
                1000: {
                    items: 3,
                },
            },
        });
    </script>


</body>

</html>