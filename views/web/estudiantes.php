<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pivotHome['nombre'] ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="shortcut icon" href="<?php echo WEBURL ?>/assets/img/icons/escudo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="<?php echo WEBURL ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo WEBURL ?>/assets/css/web.css">
</head>

<body>
    <script async src="<?php echo WEBURL ?>/assets/js/popper.min.js"></script>
    <script async src="<?php echo WEBURL ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo WEBURL ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo WEBURL ?>/assets/js/hubslider.min.js"></script>

    <?php include_once 'includes/header.php' ?>

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

    <style>
        p {
            line-height: 2;
        }

        #portada {
            background-image: url(/assets/img/portada-all-3.png);
            background-size: 100%;
            color: white;
            padding-top: 2em;
            height: 240px;
        }

        #portada .breadcrumb-item::before {
            color: white;
        }

        #portada h1 {
            font-size: 2.5em;
            margin-top: .9em;
        }

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
                background-image: url(/assets/img/portada-sm-2.png);
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
                <li class="breadcrumb-item text-white"><a href="/" class="text-white">Inicio</a></li>
                <li class="breadcrumb-item text-white"><a href="" class="text-white">Empoderamiento Juvenil</a></li>
                <li class="breadcrumb-item text-white" aria-current="page">Estudiantes</li>
            </ol>
            <h1>Estudiantes</h1>
        </div>
    </section>

    <br><br><br>

    <div class="container bg-franja">
        <div class="row">
            <div class="col-md">
                <div class="testimonial">
                    <div class="row">
                        <div class="col-md text-justify">
                            <h3 class="text-warning">Comité Estudiantil</h3><br>
                            <p class="s1">
                                Está conformado por los líderes del año, quienes son llamados constructores de paz. Tienen como principal función liderar dos proyectos sociales durante el año integrando a toda la comunidad educativa.
                            </p>
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md text-justify">
                            <br>
                            <h3 class="text-warning">Club de periodismo</h3>
                            <br>
                            <p class="s1">
                                Este club está conformado por los estudiantes más destacados en las competencias comunicativas, creativas y tecnológicas, de 3ro a 5to de secundaria. Tiene como principal función ser la voz actualizada de la información desde la mirada de los estudiantes y elaborar la revista mensual de la institución educativa. El Club de Periodismo es un espacio de empoderamiento juvenil, donde se revela el pensamiento crítico y creativo de los estudiantes, desde un marco ético cristiano y de responsabilidad cívica y ciudadana.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br>

    <div class="container bg-franja-left">
        <br><br><br>
        <div class="row">
            <div class="col-md">
                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <div class="media-zoom">
                            <img src="/assets/img/fotos/DEBATE_2do_PUESTO.jpg" class="rounded shadow" width="100%">
                        </div>
                    </div>
                    <div class="col-md-5 text-justify">
                        <h3 class="text-warning text-right">Club de Debate</h3><br>
                        <p class="s1">
                            Está conformado por los estudiantes que destacan por sus habilidades comunicativas orales y de argumentación, de 3ro a 5to de secundaria. Este club está inscrito en la Liga Peruana de Debate. Participa de conversatorios y torneos de debate en Lima y en la Red Educativa YMCA, sobre temas relacionados con ciudadanía, liderazgo, educación de calidad, medio ambiente, gobernanza y problemáticas sociopolíticas y económicas a nivel nacional y latinoamericano.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
    </div>

    <br><br>

    <div class="container bg-franja">
        <div class="row justify-content-between">
            <div class="col-md-5 text-justify">
                <br>
                <h3 class="text-warning">Club Interact – Rotary Club de Lima</h3>
                <br>
                <p>
                    El club Interact está conformado por estudiantes de 2do a 5to de secundaria con vocación de servicio y buen desempeño académico y conductual. Los miembros del club tienen como fin realizar proyectos de responsabilidad social en la comunidad. Ellos tienen la oportunidad de adquirir habilidades de liderazgo y buscar el bien de los demás poniendo en práctica sus capacidades, habilidades y valores.
                </p>
                <p>
                    Como es un Club que forma parte del Rotary International, los miembros tienen la oportunidad de fortalecer el aprendizaje de otras culturas y el dominio de un idioma a través de pasantías de un año en cualquier país del mundo donde exista un Rotary Club. Así mismo, los estudiantes del colegio conviven en sus aulas con estudiantes de otros países. Hemos tenido pasantes de USA, Canadá, Alemania, Francia, Taiwán, entre otros.
                </p>
            </div>
            <div class="col-md-6" style="padding-top: 8em;">
                <div class="hub-slider">
                    <div class="hub-slider-slides">
                        <ul>
                            <li><img src="/assets/img/fotos/Interact_2.jpg" class="crop"></li>
                            <li><img src="/assets/img/fotos/Interact_1.jpg" class="crop"></li>
                            <li><img src="/assets/img/fotos/Interact_3.jpg" class="crop"></li>
                            <li><img src="/assets/img/fotos/Interact.jpg" class="crop"></li>
                            <li><img src="/assets/img/fotos/Interact 2.jpg" class="crop"></li>
                            <li><img src="/assets/img/fotos/Interact 3.jpg" class="crop"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br><br>

    <?php include_once 'includes/footer.php' ?>

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