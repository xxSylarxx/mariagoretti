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
                <li class="breadcrumb-item text-white" aria-current="page">Red Educativa YMCA</li>
            </ol>
            <h1>Red Educativa YMCA</h1>
        </div>
    </section>

    <br><br><br>

    <section class="container">
        <div class="row justify-content-between">
            <div class="col-md-6 text-justify">
                <p>
                    YMCA, al estar presente en más de 120 países en el mundo, cuenta con alianzas estratégicas que permiten potenciar los aprendizajes de los estudiantes y la interculturalidad a través de las siguientes propuestas de intervención:
                </p>
                <br>
                <div class="d-flex flex-row">
                    <p class="s1 me-2 text-warning"><i class="fa fa-check-circle" aria-hidden="true"></i></p>
                    <p class="s1">
                        Pasantías de estudiantes, conversatorios y torneos de debate a través de la Red educativa de América Latina y el Caribe.
                    </p>
                </div>
                <div class="d-flex flex-row">
                    <p class="s1 me-2 text-warning"><i class="fa fa-check-circle" aria-hidden="true"></i></p>
                    <p class="s1">
                        Clubes de inglés.
                    </p>
                </div>
                <div class="d-flex flex-row">
                    <p class="s1 me-2 text-warning"><i class="fa fa-check-circle" aria-hidden="true"></i></p>
                    <p class="s1">
                        Participación como panelistas en Encuentros Internacionales.
                    </p>
                </div>
                <div class="d-flex flex-row">
                    <p class="s1 me-2 text-warning"><i class="fa fa-check-circle" aria-hidden="true"></i></p>
                    <p class="s1">
                        Becas para programas de liderazgo en inglés.
                    </p>
                </div>
                <div class="d-flex flex-row">
                    <p class="s1 me-2 text-warning"><i class="fa fa-check-circle" aria-hidden="true"></i></p>
                    <p class="s1">
                        Talleres liderados por hablantes nativos de USA y Alemania.
                    </p>
                </div>
                <div class="d-flex flex-row">
                    <p class="s1 me-2 text-warning"><i class="fa fa-check-circle" aria-hidden="true"></i></p>
                    <p class="s1">
                        Talleres liderados por profesionales en Comunicaciones y Marketing.
                    </p>
                </div>
                <div class="d-flex flex-row">
                    <p class="s1 me-2 text-warning"><i class="fa fa-check-circle" aria-hidden="true"></i></p>
                    <p class="s1">
                        Programas de liderazgo.
                    </p>
                </div>
            </div>
            <div class="col-md-5">
                <img src="/assets/img/fotos/foto_red.jpg" width="88%" class="rounded shadow">
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