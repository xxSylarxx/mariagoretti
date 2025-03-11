<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pivotHome['nombre'] ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="shortcut icon" href="<?php echo WEBURL ?>/assets/img/icons/escudo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="<?php echo WEBURL ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo WEBURL ?>/assets/css/web.css">
</head>

<body>
    <script async src="<?php echo WEBURL ?>/assets/js/popper.min.js"></script>
    <script async src="<?php echo WEBURL ?>/assets/js/bootstrap.min.js"></script>

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

    <?php include_once 'includes/header.php' ?>

    <style>
        #portada {
            background-image: url(/assets/img/portada-all-1.png);
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

        @media only screen and (max-width: 650px) {
            #portada {
                background-image: url(/assets/img/portada-sm-1.png);
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
                <li class="breadcrumb-item text-white"><a href="/" class="text-white">Home</a></li>
                <li class="breadcrumb-item text-white"><a href="" class="text-white">Quienes somos</a></li>
                <li class="breadcrumb-item text-white" aria-current="page">Convenios</li>
            </ol>
            <h1>Convenios</h1>
        </div>
    </section>

    <br><br><br>

    <section class="container-fluid">
        <div id="carouselConvenios" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-lg-6">
                                <h2 class="text-primary mb-3">INFOPUC</h2>
                                <p class="text-justify">
                                    Empoderamos a los estudiantes, desde 5to de primaria hasta 5to de secundaria, en el uso de herramientas tecnológicas de manera eficaz y pertinente, gracias al convenio educativo con el Instituto de Informática de la PUCP.
                                </p>
                                <p class="text-justify">
                                    Más de 10 años de experiencia, nos permite atender las necesidades de capacitación, acompañamiento, soporte tecnológico e investigación de nuestros estudiantes en el ámbito de las Tecnologías de la Información y la Comunicación (TIC).
                                </p>
                                <p>
                                    Estos son los beneficios:
                                </p>
                                <p> <i class="far fa-check-circle text-info"></i> Aprendizaje de dos softwares cada año.</p>
                                <p> <i class="far fa-check-circle text-info"></i> Dos certificaciones anuales para
                                    cada estudiante.</p>
                                <p> <i class="far fa-check-circle text-info"></i> Participación en el Proyecto LEO.
                                </p>
                                <p> <i class="far fa-check-circle text-info"></i> Capacitación docente en
                                    herramientas tecnológicas.</p>
                                <p> <i class="far fa-check-circle text-info"></i> Becas para estudiantes en
                                    talleres de verano.</p>
                                <p> <i class="far fa-check-circle text-info"></i> Participación en concursos de
                                    innovación tecnológica.</p>
                            </div>
                            <div class="col-lg-5 py-4 my-auto">
                                <img src="/assets/img/icons/INFOPUC_PUCP.png" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-lg-6">
                                <h2 class="text-primary mb-3">CAMBRIDGE UNIVERSITY PRESS</h2>
                                <p class="text-justify">
                                    Nuestro programa de enseñanza del idioma inglés está dirigido por Cambridge University Press y aporta beneficios a los estudiantes y a los docentes de inglés en los siguientes aspectos:
                                </p>
                                <p>
                                    Estos son los beneficios:
                                </p>
                                <div class="d-flex d-row">
                                    <p><i class="far fa-check-circle text-info"></i></p>
                                    <p class="ms-2">Capacitación y evaluación a los docentes de inglés.</p>
                                </div>
                                <div class="d-flex d-row">
                                    <p><i class="far fa-check-circle text-info"></i></p>
                                    <p class="ms-2">Acompañamiento pedagógico.</p>
                                </div>
                                <div class="d-flex d-row">
                                    <p><i class="far fa-check-circle text-info"></i></p>
                                    <p class="ms-2">Material educativo de alta calidad.</p>
                                </div>
                                <div class="d-flex d-row">
                                    <p><i class="far fa-check-circle text-info"></i></p>
                                    <p class="ms-2">Acceso a recursos digitales para estudiantes y maestros.</p>
                                </div>
                                <div class="d-flex d-row">
                                    <p><i class="far fa-check-circle text-info"></i></p>
                                    <p class="ms-2 text-left">Desarrollo de las competencias digitales.</p>
                                </div>
                                <div class="d-flex d-row">
                                    <p><i class="far fa-check-circle text-info"></i></p>
                                    <p class="ms-2 text-left">Acompañamiento en la preparación de estudiantes para los exámenes internacionales.</p>
                                </div>
                                <div class="d-flex d-row">
                                    <p><i class="far fa-check-circle text-info"></i></p>
                                    <p class="ms-2 text-left">Talleres de inglés para la certificación internacional. Actualmente, somos un colegio preparador para los exámenes internacionales.</p>
                                </div>
                            </div>
                            <div class="col-lg-5 my-auto py-4">
                                <img src="/assets/img/icons/cambridge.png" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-lg-6">
                                <h3 class="text-primary mb-3">PROYECTO OPTIMIST Y LA ESCUELA DE CAPACITACIÓN PEDAGÓGICA</h3>
                                <p class="text-justify">
                                    El proyecto Optimist desarrolla una educación personalizada e integral para los niños y
                                    niñas de Educación Inicial. Las situaciones de aprendizaje que desarrollan potencian una
                                    correcta estimulación temprana y el desarrollo de su creatividad, desde principios
                                    neurocientíficos, que serán los cimientos sólidos en el desarrollo del niño y en su
                                    éxito escolar posterior.<br>
                                    Los docentes cuentan con el asesoramiento permanente de la Escuela de Capacitación
                                    Pedagógica; así mismo, los padres reciben capacitaciones.
                                </p>
                                <p>
                                    Estos son los beneficios:
                                </p>
                                <div class="d-flex d-row">
                                    <p><i class="far fa-check-circle text-info"></i></p>
                                    <p class="ms-2">Capacitación y evaluación a los docentes de inglés.</p>
                                </div>
                                <div class="d-flex d-row">
                                    <p><i class="far fa-check-circle text-info"></i></p>
                                    <p class="ms-2">Acompañamiento pedagógico.</p>
                                </div>
                                <div class="d-flex d-row">
                                    <p><i class="far fa-check-circle text-info"></i></p>
                                    <p class="ms-2">Material educativo de alta calidad.</p>
                                </div>
                                <div class="d-flex d-row">
                                    <p><i class="far fa-check-circle text-info"></i></p>
                                    <p class="ms-2">Acceso a recursos digitales para estudiantes y maestros.</p>
                                </div>
                                <div class="d-flex d-row">
                                    <p><i class="far fa-check-circle text-info"></i></p>
                                    <p class="ms-2 text-left">Desarrollo de las competencias digitales.</p>
                                </div>
                                <div class="d-flex d-row">
                                    <p><i class="far fa-check-circle text-info"></i></p>
                                    <p class="ms-2 text-left">Acompañamiento en la preparación de estudiantes para los exámenes internacionales.</p>
                                </div>
                                <div class="d-flex d-row">
                                    <p><i class="far fa-check-circle text-info"></i></p>
                                    <p class="ms-2 text-left">Talleres de inglés para la certificación internacional. Actualmente, somos un colegio preparador para los exámenes internacionales.</p>
                                </div>
                            </div>
                            <div class="col-lg-5 my-auto py-4">
                                <img src="/assets/img/icons/9491099.png" height="250">
                                <br><br>
                                <img src="/assets/img/icons/PROYECTO_OPTIMIST.png" width="240">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselConvenios" data-bs-slide="prev" style="margin-left: -4em;">
                <span class="text-info fs-1"><i class="fas fa-chevron-circle-left"></i></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselConvenios" data-bs-slide="next" style="margin-right: -4em;">
                <span class="text-info fs-1"><i class="fas fa-chevron-circle-right"></i></span>
            </button>
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

</body>

</html>