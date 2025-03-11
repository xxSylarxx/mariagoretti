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

        #metodologia p {
            text-align: justify;
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
                background-image: url("./assets/img/portada-all-1.png");
                background-size: 100% 100%;
                height: 160px;
                padding-top: 1.5em;
            }

            #portada h1 {
                font-size: 2.1em;
            }
        }
    </style>

    <section class="container-fluid px-0" id="portada">
        <div class="container px-3">
            <ol class="breadcrumb text-white" style="font-size: 16px;">
                <li class="breadcrumb-item"><a href="/" style="color:var(--color8);">Inicio</a></li>
                <li class="breadcrumb-item"><a href="" style="color:var(--color8);">Nosotros</a></li>
                
            </ol>
            <h1>Propuesta Educativa</h1>
        </div>
    </section>



    <br><br><br>

    <section class="container">
        <div class="row">
            <p>El Comportamiento del alumno de la Institución
                Educativa ALEXANDER FLEMING, será evaluado a través
                del presente perfil, siendo respetuoso de las normas
                y reglas establecidas por la Institución. </p>
            <br>
        </div>
        <div class="row justify-content-between">
            <div class="col-md-5 mb-4 text-justify">
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
            <div class="col-md-5" style="display: flex;align-items:end;">
                <img src="./assets/img/fotos/perfil.png" width="70%">
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