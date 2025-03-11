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
            font-size: 2.8em;
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
                <li class="breadcrumb-item text-white" aria-current="page">Tallares</li>
            </ol>
            <h1>Talleres</h1>
        </div>
    </section>

    <br><br>

    <section class="container">
        <div class="row justify-content-around">
            <div class="col-lg-5 text-justify my-auto">
                <br>
                <p>
                    Nuestra propuesta pedagógica contempla talleres extracurriculares para el desarrollo integral de los estudiantes: natación, fustal, voleibol, básquet, danza, música, teatro, taekwondo, ajedrez, robótica, manualidades creativas.
                </p>
                <p>
                    Para el año 2021, en la modalidad virtual, se brindarán los siguientes talleres:
                </p>
            </div>
            <div class="col-lg-5 text-center my-3">
                <img src="<?php echo WEBURL ?>/assets/img/fotos/foto-de-talleres.jpg" width="90%">
            </div>
        </div>
        <br><br>
        <div class="row my-4" id="row-icons">
            <div class="col-md">
                <img src="/assets/img/icons/IMAG_23.png" class="w-100 img-zoom">
            </div>
            <div class="col-md">
                <img src="/assets/img/icons/IMAG_24.png" class="w-100 img-zoom">
            </div>
            <div class="col-md">
                <img src="/assets/img/icons/IMAG_25.png" class="w-100 img-zoom">
            </div>
            <div class="col-md">
                <img src="/assets/img/icons/IMAG_26.png" class="w-100 img-zoom">
            </div>
            <div class="col-md">
                <img src="/assets/img/icons/IMAG_27.png" class="w-100 img-zoom">
            </div>
            <div class="col-md">
                <img src="/assets/img/icons/IMAG_28.png" class="w-100 img-zoom">
            </div>
            <div class="col-md">
                <img src="/assets/img/icons/IMAG_29.png" class="w-100 img-zoom">
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