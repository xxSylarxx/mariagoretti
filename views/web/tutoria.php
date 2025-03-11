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
            font-size: 2.6em;
            margin-top: .9em;
        }

        img.img-zoom {
            transition: transform .3s ease-in-out;
        }

        img.img-zoom:hover {
            transform: scale(1.1);
        }

        #icons .card-body img {
            width: 100%;
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
                <li class="breadcrumb-item text-white" aria-current="page">Tutoría Personalizada</li>
            </ol>
            <h1>Tutoría Personalizada</h1>
        </div>
    </section>

    <br><br>

    <section class="container">
        <div class="row">
            <div class="col-lg text-justify">
                <p>
                    Nuestra tutoría brinda acompañamiento integral a cada estudiante. Se fundamenta en la construcción del vínculo afectivo entre el tutor y el estudiante, para la orientación y el monitoreo permanente. Cuenta con un programa integral que asume las necesidades y las características de cada grupo, asesorado por el Dpto. Psicopedagógico.
                </p>
                <p>
                    Este programa incluye actividades permanentes, sesiones de clase y planes de intervención individual y grupal. Nuestra tutoría personalizada fortalece en los estudiantes su autoestima, sus habilidades sociales, la regulación de sus impulsos, la toma de decisiones, el cumplimiento de las normas, la toma de consciencia frente a sus aprendizajes, la comunicación asertiva, el desarrollo adecuado de su sexualidad, la empatía, la amistad, la responsabilidad, la solidaridad, la justicia, la honestidad, el servicio y la ciudadanía responsable.
                </p>
            </div>
        </div>
    </section>

    <br>

    <section class="container" id="icons">
        <div class="row justify-content-around">
            <div class="col-md-5">
                <div class="row my-4">
                    <div class="col-md-3 my-1">
                        <div class="card-body p-0">
                            <img src="/assets/img/icons/IMAG_10.png" class="hvr-bounce-in">
                        </div>
                    </div>
                    <div class="col-md text-center">
                        <br>
                        <h4 class="text-primary">PROGRAMA DE HABILIDADES BLANDAS</h4>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-md-3 my-1">
                        <div class="card-body p-0">
                            <img src="/assets/img/icons/IMAG_11.png" class="hvr-bounce-in">
                        </div>
                    </div>
                    <div class="col-md text-center">
                        <br>
                        <h4 class="text-warning">PROGRAMA DE VALORES</h4>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-md-3 my-1">
                        <div class="card-body p-0">
                            <img src="/assets/img/icons/IMAG_12.png" class="hvr-bounce-in">
                        </div>
                    </div>
                    <div class="col-md text-center">
                        <br>
                        <h4 class="text-info">TRABAJO COLEGIADO ENTRE DOCENTES</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="row my-4">
                    <div class="col-md-3 my-1">
                        <div class="card-body p-0">
                            <img src="/assets/img/icons/IMAG_13.png" class="hvr-bounce-in">
                        </div>
                    </div>
                    <div class="col-md text-center">
                        <br>
                        <h4 class="text-primary">TRABAJO CON LAS FAMILIAS</h4>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-md-3 my-1">
                        <div class="card-body p-0">
                            <img src="/assets/img/icons/IMAG_14.png" class="hvr-bounce-in">
                        </div>
                    </div>
                    <div class="col-md text-center">
                        <br>
                        <h4 class="text-warning">ENTREVISTAS PLANIFICADAS Y NO PLANIFICADAS</h4>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-md-3 my-1">
                        <div class="card-body p-0">
                            <img src="/assets/img/icons/IMAG_15.png" class="hvr-bounce-in">
                        </div>
                    </div>
                    <div class="col-md text-center">
                        <br>
                        <h4 class="text-info">PLAN DE INTERVENCIÓN INDIVIDUAL Y GRUPAL</h4>
                    </div>
                </div>
            </div>
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