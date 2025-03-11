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
    <!-- carrousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, .6)), url("./assets/img/fotos/distancia1.jpg");
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

        @media only screen and (max-width: 650px) {
            #portada {
                background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, .6)), url("./assets/img/fotos/distancia1.jpg");
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

            .swiper p {
                display: none;
            }
            .swiper  {
                width: 265%;
            }

            .swiper-slide img {
                height: 120px;
            }

            #boton {
                background-color: var(--color6);
            }

            #p-slider-reconocimientos {
                margin-bottom: 7rem;
            }
        }
    </style>

    <section class="container-fluid px-0" id="portada">
        <div class="container px-3">
            <ol class="breadcrumb text-white" style="font-size: 16px;">
                <li class="breadcrumb-item"><a href="./" style="color:var(--color8);">Inicio</a></li>
                <li class="breadcrumb-item" aria-current="page" style="color:var(--color8);">Propuesta Educativa</li>
            </ol>
            <h1 style="color:var(--color8);font-weight:bold;">Educación a Distancia</h1>
        </div>
    </section>



    <br><br><br>

    <section id="metodologia">
        <div class="container">

            <div class="row justify-content-between">
                <div class="col-md-5  my-auto">

                    <!-- <h1 class="mb-3" style="color:var(--color1);font-weight:bold;text-align:start;">Distancia</h1> -->
                    <p>
                        Nuestra institución se ha adaptado a los nuevos cambios dentro de la educación por lo que el uso de la tecnología y la virtualidad es una forma de aprendizaje que no podemos dejar de lado por eso nosotros planteamos nuestras clases híbridas.
                    </p>
                    <p>
                        Cuando hablamos de clases híbridas nos referimos a un método educativo que combina la educación online con la presencial, aprovechando los aspectos positivos de cada una de ellas y aumentando la eficiencia del aprendizaje.
                    </p>
                </div>
                <div class="col-md-6 pt-3" style="margin-bottom: 25rem;">
                    <div class="hub-slider">
                        <div class="hub-slider-slides">
                            <ul>
                                <li><img src="./assets/img/fotos/distancia1.jpg" class="crop shadow-sm"></li>
                                <li><img src="./assets/img/fotos/distancia2.png" class="crop shadow-sm"></li>
                                <li><img src="./assets/img/fotos/distancia3.png" class="crop shadow-sm"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <br><br><br>
    <div class="w-100" style="padding-top: 4%; padding-bottom: 2%;">
        <!-- <div class="container">
            <div class="row aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000">
                <div class="col-xl h-100 col-sm text-center my-auto">
                    <h1 style="color:var(--color1);font-weight:bold;"><span>CONVENIOS</span></h1>
                    <p id="p-slider-reconocimientos">Con el fin de brindar mayores beneficios y facilidades,
                        contamos con diversos convenios exclusivos para nuestros estudiantes.</p>
                </div>
                <div class="col-lg-5 my-auto">
                    <div class="row">
                        <div class="col-xl w-100 pl-0 col-sm text-center" style="height: 180px;">
                            <div class="swiper mySwiper swiper-initialized swiper-vertical swiper-pointer-events swiper-backface-hidden">
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
        </div> -->

        <div class="container">
            <div class="row">
                <div class="col-xl h-100 col-sm text-center my-auto">
                    <h1 style="color:var(--color1);font-weight:bold;"><span>CONVENIOS</span></h1>
                    <p id="p-slider-reconocimientos">Con el fin de brindar mayores beneficios y facilidades,
                        contamos con diversos convenios exclusivos para nuestros estudiantes.</p>
                </div>
            </div>
            <div class="row owl-carousel mx-0" id="owl-one">
                <div class="col  justify-content-center align-content-center">
                    <img src="./assets/img/fotos/universidad.png">
                </div>
                <div class="col justify-content-center align-content-center">
                    <img src="./assets/img/fotos/ucsm.png">
                </div>
                <div class="col justify-content-center align-content-center">
                    <img src="./assets/img/fotos/office365.png">
                </div>
                <div class="col justify-content-center align-content-center">
                    <img src="./assets/img/fotos/zoom.png">
                </div>
                <div class="col justify-content-center align-content-center">
                    <img src="./assets/img/fotos/tinkercad.png">
                </div>
            </div>
        </div>
        <br><br><br>
    </div>
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