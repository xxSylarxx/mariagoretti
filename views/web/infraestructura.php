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
                <li class="breadcrumb-item text-white" aria-current="page">Infraestructura</li>
            </ol>
            <h1>Infraestructura</h1>
        </div>
    </section>

    <br><br><br>

    <section class="container">
        <div class="row">
            <div class="col-lg-11">
                <h4 class="text-muted">Nuestro colegio cuenta con espacios de aprendizaje que permiten el desarrollo de todas las áreas de aprendizaje :</h4>
            </div>
        </div>
        <br>
        <div class="row justify-content-between">
            <div class="col-md-3 my-3">
                <h5 class="my-3 text-info"><i class="far fa-check-circle text-info"></i>&nbsp;&nbsp; Aulas multimedia</h5>
                <h5 class="my-3 text-info"><i class="far fa-check-circle text-info"></i>&nbsp;&nbsp; Laboratorio de informática</h5>
                <h5 class="my-3 text-info"><i class="far fa-check-circle text-info"></i>&nbsp;&nbsp; Piscina climatizada</h5>
                <h5 class="my-3 text-info"><i class="far fa-check-circle text-info"></i>&nbsp;&nbsp; Campos deportivos </h5>
                <h5 class="my-3 text-info"><i class="far fa-check-circle text-info"></i>&nbsp;&nbsp; Auditorio</h5>
                <h5 class="my-3 text-info"><i class="far fa-check-circle text-info"></i>&nbsp;&nbsp; Laboratorio de ciencias</h5>
                <h5 class="my-3 text-info"><i class="far fa-check-circle text-info"></i>&nbsp;&nbsp; Sala de atención a padres</h5>
                <h5 class="my-3 text-info"><i class="far fa-check-circle text-info"></i>&nbsp;&nbsp; Sala de psicopedagogía</h5>
                <h5 class="my-3 text-info"><i class="far fa-check-circle text-info"></i>&nbsp;&nbsp; Aulas para talleres</h5>
                <h5 class="my-3 text-info"><i class="far fa-check-circle text-info"></i>&nbsp;&nbsp; Cámaras de seguridad</h5>
                <h5 class="my-3 text-info"><i class="far fa-check-circle text-info"></i>&nbsp;&nbsp; Cafetería</h5>
            </div>
            <div class="col-md-8 my-3">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/assets/img/fotos/infraestructura-1.jpg" class="d-block w-100 rounded shadow" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/assets/img/fotos/infraestructura-2.jpg" class="d-block w-100 rounded shadow" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/assets/img/fotos/infraestructura-3.jpg" class="d-block w-100 rounded shadow" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/assets/img/fotos/infraestructura-4.jpg" class="d-block w-100 rounded shadow" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/assets/img/fotos/infraestructura-5.png" class="d-block w-100 rounded shadow" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/assets/img/fotos/infraestructura-6.jpg" class="d-block w-100 rounded shadow" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
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