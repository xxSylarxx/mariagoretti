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
        p {
            line-height: 1.8;
        }

        .serv-section-2 {
            position: relative;
            background: transparent;
            box-shadow: 0px 10px 30px 0px rgba(50, 50, 50, 0.16);
            overflow: hidden;
            padding: 23px;
            width: 100%;
            border-radius: 7px;
        }

        .serv-section-2:before {
            position: absolute;
            top: 0;
            right: 0px;
            z-index: 0;
            content: " ";
            width: 110px;
            height: 120px;
            background: #ffa300;
            border-bottom-left-radius: 136px;
            transition: all 0.4s ease-in-out;
            -webkit-transition: all 0.4s ease-in-out;
        }

        .serv-section-2-icon {
            position: absolute;
            top: 18px;
            right: 22px;
            max-width: 100px;
            z-index: 1;
            text-align: center;
        }

        .serv-section-2-icon i {
            color: #ffffff;
            font-size: 48px;
            line-height: 65px;
            transition: all 0.4s ease-in-out;
            -webkit-transition: all 0.4s ease-in-out;
        }

        .serv-section-desc {
            position: relative;
        }

        .serv-section-2 h4 {
            font-size: 20px;
            font-weight: 500;
            line-height: 1.5;
        }

        .flip-card {
            background-color: transparent;
            width: 100%;
            height: 130px;
            border: 0;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: auto;
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front,
        .flip-card-back {
            position: absolute;
            width: 100%;
            height: auto;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            border-radius: 7px;
            cursor: default;
        }

        .flip-card-front {
            background-color: white;
        }

        .flip-card-back {
            background-color: #0082b7;
            color: white;
            transform: rotateY(180deg);
        }

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
                <li class="breadcrumb-item text-white"><a href="/" class="text-white">Inicio</a></li>
                <li class="breadcrumb-item text-white"><a href="" class="text-white">Quienes somos</a></li>
                <li class="breadcrumb-item text-white" aria-current="page">Nosotros</li>
            </ol>
            <h1>Presentación</h1>
        </div>
    </section>

    <br><br><br>

    <section class="container">
        <div class="part-edit text-justify">
            <p>
                La Institución Educativa Abraham Valdelomar es promovida por la Asociación Cristiana de Jóvenes del Perú. Educamos a niños, niñas y adolescentes, desde un enfoque integral; para que sean capaces de responder a los desafíos del mundo actual, con carácter, integridad y de manera crítica y creativa, en concordancia con los principios cristianos promovidos por la Asociación Cristiana de Jóvenes del Perú, también conocida como YMCA Perú.
            </p>
            <p>
                Nuestros estudiantes son empoderados a través de su proyecto de vida; desarrollan amor por el conocimiento, rechazo de todo dogmatismo, fanatismo, perversidad, discriminación e injusticia, consolidando una moral autónoma e íntegra inspiradora para su generación.
            </p>
            <p>
                Nuestro equipo directivo, docentes y personal administrativo están comprometidos con la gran misión de educar con excelencia, cumpliendo el ejercicio responsable de sus funciones y salvaguardando la sana convivencia, siendo ejemplo de integridad y servicio.
            </p>
        </div>
    </section>

    <br><br><br>

    <section class="container">
        <div class="row">
            <div class="col-xl p-4 text-center bg-info text-white">
                <br>
                <h2 class="text-white mb-4">MISIÓN</h2>
                <p style="line-height: 1.8;">
                    Promover en los miembros de la comunidad educativa el pleno desarrollo de sus potencialidades, la alta competencia académica, el ejercicio del liderazgo cristiano y el voluntariado, de acuerdo a los principios y propósito del modelo educativo de YMCA Perú.
                </p>
                <br>
            </div>
            <div class="col-xl p-4 text-center bg-warning text-white">
                <br>
                <h2 class="text-white mb-4">VISIÓN</h2>
                <p style="line-height: 1.8;">
                    Aspiramos a formar personas integrales, capaces de vivir en armonía con la totalidad de la
                    creación, de ejercer el liderazgo cristiano, y de enriquecer plenamente su vida y la de los
                    demás en un proyecto de vida personal y colectivo.
                </p>
                <br>
            </div>
    </section>

    <br><br><br>

    <section class="container pt-3">
        <div class="row mb-4">
            <div class="col text-center">
                <h1 class="linea text-info mb-4"><span>Valores</span></h1>
                <p class="s1">
                    Nuestros valores promueven la convivencia en armonía y el respeto por la dignidad y la singularidad
                    de cada niño, niña y adolescente. Son trabajados de manera transversal en todas las áreas de
                    aprendizaje. Así mismo, son evaluados permanentemente a través de la elección del líder de la semana
                    en cada aula, y en la evaluación de la conducta, que es comunicada bimestralmente.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 my-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <div class="serv-section-2">
                                <div class="serv-section-2-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                                <div class="serv-section-desc">
                                    <div class="card-2 mt-2">
                                        <h3 class="text-info">Amistad</h3>
                                        <p>Una persona demuestra el <br> valor de la amistad cuando…</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <div class="serv-section-2">
                                <div class="serv-section-2-icon"> <i class="fa fa-users" aria-hidden="true"></i></div>
                                <div class="serv-section-desc">
                                    <div class="card-2">
                                        <span><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Sabe
                                            escuchar.</span><br>
                                        <span><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Es
                                            paciente.</span><br>
                                        <span><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Es
                                            agradecida.</span><br>
                                        <span><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Es cordial y
                                            empática.</span><br>
                                        <span><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Demuestra
                                            respeto.</span><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <div class="serv-section-2">
                                <div class="serv-section-2-icon"><i class="fa fa-heart" aria-hidden="true"></i></div>
                                <div class="serv-section-desc">
                                    <div class="card-2 mt-2">
                                        <h3 class="text-info">Honestidad</h3>
                                        <p>Una persona demuestra el <br> valor de la honestidad cuando…</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <div class="serv-section-2">
                                <div class="serv-section-2-icon"> <i class="fa fa-heart" aria-hidden="true"></i></div>
                                <div class="serv-section-desc">
                                    <div class="card-2">
                                        <span><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Siempre dice la
                                            verdad.</span><br>
                                        <span><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Es asertiva y
                                            conciliadora.</span><br>
                                        <span><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Cumple con su
                                            palabra.</span><br>
                                        <span><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Acepta sus errores y
                                            sabe perdonar.</span><br>
                                        <span><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Narra los hechos de
                                            manera objetiva.</span><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <div class="serv-section-2">
                                <div class="serv-section-2-icon"><i class="far fa-gem"></i></div>
                                <div class="serv-section-desc">
                                    <div class="card-2 mt-2">
                                        <h3 class="text-info">Equidad</h3>
                                        <p>Una persona demuestra el <br> valor de la equidad cuando…</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <div class="serv-section-2">
                                <div class="serv-section-2-icon"><i class="far fa-gem"></i></div>
                                <div class="serv-section-desc">
                                    <div class="card-2">
                                        <span><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Trata a todos por
                                            igual.</span><br>
                                        <span><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Es justa.</span><br>
                                        <span><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Busca el bien
                                            común.</span><br>
                                        <span><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Es
                                            tolerante.</span><br>
                                        <span><i class="fa fa-check" aria-hidden="true"></i></i>&nbsp;Comparte con los
                                            demás.</span><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        <div class="row justify-content-center">
            <div class="col-md-4 my-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <div class="serv-section-2">
                                <div class="serv-section-2-icon"><i class="far fa-handshake"></i></i>
                                </div>
                                <div class="serv-section-desc">
                                    <div class="card-2 mt-2">
                                        <h3 class="text-info">Servicio</h3>
                                        <p>Una persona demuestra el <br> valor del servicio cuando…</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <div class="serv-section-2">
                                <div class="serv-section-2-icon"><i class="far fa-handshake"></i></i>
                                </div>
                                <div class="serv-section-desc">
                                    <div class="card-2">
                                        <span><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Es
                                            generosa.</span><br>
                                        <span><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Ayuda a otros con
                                            humildad.</span><br>
                                        <span><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Demuestra
                                            amor.</span><br>
                                        <span><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Busca el bien de los
                                            demás.</span><br>
                                        <span><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Realiza trabajos de
                                            voluntariado.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <div class="serv-section-2">
                                <div class="serv-section-2-icon"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                </div>
                                <div class="serv-section-desc">
                                    <div class="card-2 mt-2">
                                        <h3 class="text-info">Responsabilidad</h3>
                                        <p>
                                            Una persona demuestra el <br> valor de la responsabilidad cuando…
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <div class="serv-section-2">
                                <div class="serv-section-2-icon"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                </div>
                                <div class="serv-section-desc">
                                    <div class="card-2">
                                        <span><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Respeta las
                                            normas.</span><br>
                                        <span><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Es disciplinada y
                                            puntual.</span><br>
                                        <span><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Es obediente a las
                                            autoridades.</span><br>
                                        <span><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Cumple con sus deberes
                                            escolares.</span><br>
                                        <span><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Asume las consecuencias de sus</span><br>
                                        <span class="ml-3">&nbsp;acciones.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br><br><br>
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