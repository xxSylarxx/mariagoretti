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

    <script src="/assets/js/jquery.min.js"></script>
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
            background-image: url(/assets/img/portada-all-4.png);
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

        .bg-franja {
            background: linear-gradient(to right, #ffffff 80%, rgb(248, 248, 248) 30%);
            padding-top: 30px;
            padding-bottom: 70px;
            padding-left: 6%;
            padding-right: 6%;
        }

        .bg-franja-left {
            background: linear-gradient(to left, #ffffff 80%, rgb(248, 248, 248) 30%);
            padding-top: 30px;
            padding-bottom: 50px;
            padding-left: 6%;
        }

        span.btn-float {
            width: 40px;
            height: 40px;
            position: absolute;
            background-color: #006ec8;
            text-align: center;
            padding-top: 11px;
            cursor: pointer;
            font-size: 12px;
            border-radius: 50%;
            color: white;
            right: 0;
            top: 160px;
            margin-right: 10px;
        }

        span.btn-float:hover {
            background-color: #ffa300;
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
                <li class="breadcrumb-item text-white" aria-current="page">Reconocimientos</li>
            </ol>
            <h1>Reconocimientos</h1>
        </div>
    </section>

    <br><br><br>

    <div class="container bg-franja">
        <div class="row">
            <div class="col-md">
                <h2 class="text-info">CREA 3.0</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <p class="s1">
                    El Instituto de Informática de la PUCP promueve anualmente la creación de productos TIC que respondan de manera efectiva a una problemática social, a nivel nacional.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card h-100 shadow" style="border-radius: 8px;">
                    <img src="/assets/img/fotos/CREA_3_0_KIDS 2019.jpg" class="w-100" height="180" style="border-radius: 8px;" onclick="zoomImagen(this.src)">
                    <span class="btn-float" id="crea3-1">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </span>
                    <div class="text-center mb-2" id="c-crea3-1">
                        <br>
                        <h5 class="text-primary">SEGUNDO PUESTO</h5>
                        <h5 class="text-warning">Categoría: Kids 2019</h5>
                    </div>
                    <div id="d-crea3-1" class="mx-4" style="display: none;">
                        <br>
                        <p style="font-size: 15px;">
                            <b>Tema:</b> Promoviendo una vida saludable <br>
                            <b>Eje transversal:</b> Derecho y ciudadanía <br>
                            <b>Productos TIC:</b> Infografía y video
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow" style="border-radius: 8px;">
                    <img src="/assets/img/fotos/Imagen1.jpg" class="w-100" height="180" style="border-radius: 8px;" onclick="zoomImagen(this.src)">
                    <span class="btn-float" id="crea3-2">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </span>
                    <div class="text-center mb-2" id="c-crea3-2">
                        <br>
                        <h5 class="text-primary">SEGUNDO PUESTO</h5>
                        <h5 class="text-warning">Categoría: Junior 2019</h5>
                    </div>
                    <div id="d-crea3-2" class="mx-4" style="display: none;">
                        <br>
                        <p style="font-size: 15px;">
                            <b>Tema:</b> Protegiendo la biodiversidad<br>
                            <b>Eje transversal:</b> Cuidado del medio ambiente<br>
                            <b>Productos TIC:</b> Infografía, video y página web
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow" style="border-radius: 8px;">
                    <img src="/assets/img/fotos/Imagen2.jpg" class="w-100" height="180" style="border-radius: 8px;" onclick="zoomImagen(this.src)">
                    <span class="btn-float" id="crea3-3">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </span>
                    <div class="text-center mb-2" id="c-crea3-3">
                        <br>
                        <h5 class="text-primary">TERCER PUESTO</h5>
                        <h5 class="text-warning">Categoría: Teens 2019</h5>
                    </div>
                    <div id="d-crea3-3" class="mx-4" style="display: none;">
                        <br>
                        <p style="font-size: 15px;">
                            <b>Tema:</b> Conociendo los pueblos originarios de mi región o país<br>
                            <b>Eje transversal:</b> Interculturalidad <br>
                            <b>Productos TIC:</b> Infografía, video, historieta digital y página web
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br><br>

    <div class="container bg-franja-left">
        <div class="row justify-content-between">
            <div class="col-md-6 text-justify">
                <br><br><br>
                <h1 class="text-info">Torneo de Debate</h1>
                <br>
                <p class="s1" style="font-size: 19px; line-height: 2.5;">
                    El club de debate del colegio YMCA Abraham Valdelomar está inscrito en la Liga Nacional de Debate y
                    participa en torneos de debate con el fin de fortalecer sus capacidades comunicativas y de
                    argumentación, a partir de la investigación, análisis e interpretación crítica de la realidad
                    social, medioambiental, cultural, política y económica a nivel nacional y mundial.
                </p>
            </div>
            <div class="col-md-4 text-end">
                <br><br>
                <img src="/assets/img/fotos/DEBATE_2do_PUESTO.jpg" class="w-100 rounded shadow">
                <div>
                    <br>
                    <h5 class="text-primary">SEGUNDO PUESTO - LIMA</h5>
                    <h5 class="text-warning">EXPRESARTE 2019</h5>
                    <p class="text-muted" style="font-size: 15px;">
                        Torneo de debate a nivel regional <br>
                        Lugar de la final: Congreso de la República
                    </p>
                </div>
            </div>
        </div>
    </div>

    <br><br><br>

    <div class="container bg-franja">
        <br><br>
        <div class="row justify-content-between">
            <div class="col-md-5">
                <h1 class="text-info">Splash</h1>
                <br>
                <p class="s1">
                    El objetivo de este programa es que los estudiantes de 3ro a 5to de secundaria gestionen y ejecuten un proyecto de responsabilidad social a favor de la comunidad.
                </p>
                <div>
                    <h5 class="text-primary">PRIMER PUESTO</h5>
                    <h5 class="text-warning">Categoría: Bienestar y Salud 2019</h5>
                    <p class="text-muted" style="font-size: 15px;">
                        Proyecto: Programa de sensibilización a favor de la donación de órganos<br>
                        Concurso a nivel nacional
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="/assets/img/fotos/Proyecto_Splash.jpg" width="100%" style="border-radius: 10px;">
            </div>
        </div>
    </div>

    <br><br><br>

    <?php include_once 'includes/footer.php' ?>

    <script>
        $('#crea3-1').on('click', function() {
            if ($("#d-crea3-1").is(":visible")) {
                $('#d-crea3-1').slideUp();
                $('#c-crea3-1').slideDown();
            } else {
                $('#c-crea3-1').slideUp();
                $('#d-crea3-1').slideDown();
            }
        });
        $('#crea3-2').on('click', function() {
            if ($("#d-crea3-2").is(":visible")) {
                $('#d-crea3-2').slideUp();
                $('#c-crea3-2').slideDown();
            } else {
                $('#c-crea3-2').slideUp();
                $('#d-crea3-2').slideDown();
            }
        });
        $('#crea3-3').on('click', function() {
            if ($("#d-crea3-3").is(":visible")) {
                $('#d-crea3-3').slideUp();
                $('#c-crea3-3').slideDown();
            } else {
                $('#c-crea3-3').slideUp();
                $('#d-crea3-3').slideDown();
            }
        });
        $('#crea3-4').on('click', function() {
            if ($("#d-crea3-4").is(":visible")) {
                $('#d-crea3-4').slideUp();
                $('#c-crea3-4').slideDown();
            } else {
                $('#c-crea3-4').slideUp();
                $('#d-crea3-4').slideDown();
            }
        });
        $('#crea3-5').on('click', function() {
            if ($("#d-crea3-5").is(":visible")) {
                $('#d-crea3-5').slideUp();
                $('#c-crea3-5').slideDown();
            } else {
                $('#c-crea3-5').slideUp();
                $('#d-crea3-5').slideDown();
            }
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