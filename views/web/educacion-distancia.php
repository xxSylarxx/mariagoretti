<!DOCTYPE html>
<html lang="en">

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
        p {
            line-height: 2;
        }

        #portada {
            background-image: url(/assets/img/portada-all-2.png);
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

        
        img.img-zoom {
            transition: transform .3s ease-in-out;
        }

        img.img-zoom:hover {
            transform: scale(1.1);
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
                <li class="breadcrumb-item text-white"><a href="/" class="text-white">Inicio</a></li>
                <li class="breadcrumb-item text-white"><a href="" class="text-white">Propuesta Educativa</a></li>
                <li class="breadcrumb-item text-white" aria-current="page">Educación a distancia</li>
            </ol>
            <h1>Educación a distancia</h1>
        </div>
    </section>

    <br><br><br>

    <section class="container">
        <div class="row justify-content-between">
            <div class="col-md-5 text-justify my-auto pt-3 pb-3">
                <p>
                    Nuestra metodología de proyectos YMCA (MPY) emplea estrategias lúdicas, el aprendizaje experiencial, el estudio de casos, el trabajo de equipo y el uso de la matriz de marco lógico
                </p>
                <p>
                    Los estudiantes inician sus proyectos analizando e interpretando una problemática real de su contexto; de acuerdo a su edad, intereses y capacidades. Desde temprana edad, los estudiantes trabajan de manera colaborativa, aplican lo que van aprendiendo y evalúan el proceso y los resultados.
                </p>
                <p>
                    Sus habilidades blandas y duras son trabajadas de manera sostenida y simultánea, y van consolidando el logro de competencias de manera integral, convirtiéndose en agentes de cambio.
                </p>
            </div>
            <div class="col-md-6">
                <img src="/assets/img/fotos/edu_distancia.png" class="rounded shadow" width="100%">
            </div>
        </div>
        <br><br>
        <div class="container" id="icons">
            <div class="row my-4 justify-content-around">
                <div class="col-md-5">
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <div class="card-body p-0">
                                <img src="/assets/img/icons/IMAG_4.png" class="w-100 img-zoom">
                            </div>
                        </div>
                        <div class="col-md">
                            <br>
                            <h4 class="text-warning">Aulas virtuales</h4>
                            <p class="s1">en tiempo real con Microsoft Teams</p>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <div class="card-body p-0">
                                <img src="/assets/img/icons/IMAG_5.png" class="w-100 img-zoom">
                            </div>
                        </div>
                        <div class="col-md">
                            <br>
                            <h4 style="color: #005392;">Clases interactivas
                            </h4>
                            <p class="s1">
                                y uso de
                                herramientas
                                tecnológicas
                            </p>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <div class="card-body p-0">
                                <img src="/assets/img/icons/IMAG_6.png" class="w-100 img-zoom">
                            </div>
                        </div>
                        <div class="col-md">
                            <br>
                            <h4 class="text-info">Tutoría personalizada
                            </h4>
                            <p class="s1">
                                y acompañamiento
                                del Dpto.
                                Psicopedagógico
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <div class="card-body p-0">
                                <img src="/assets/img/icons/IMAG_7.png" class="w-100 img-zoom">
                            </div>
                        </div>
                        <div class="col-md">
                            <br>
                            <h4 class="text-warning">Plataforma de Intranet</h4>
                            <p class="s1">
                                y comunicación
                                permanente
                                con los padres
                                de familia
                            </p>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <div class="card-body p-0">
                                <img src="/assets/img/icons/IMAG_8.png" class="w-100 img-zoom">
                            </div>
                        </div>
                        <div class="col-md">
                            <br>
                            <h4 style="color: #005392;">Retroalimentación de los aprendizajes</h4>
                            <p class="s1">
                                de manera sincrónica
                                y asincrónica
                            </p>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <div class="card-body p-0">
                                <img src="/assets/img/icons/IMAG_9.png" class="w-100 img-zoom">
                            </div>
                        </div>
                        <div class="col-md">
                            <br>
                            <h4 class="text-info">Cuadernos Digitales</h4>
                            <p class="s1">
                                de trabajo
                                para los
                                proyectos
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <br><br>

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