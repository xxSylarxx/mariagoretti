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
        <style>.bg-plomo {
            background-color: #f4f5f7;
        }

        #valores .flip {
            height: 172px;
            padding: 0.6em;
        }

        #valores .card {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 1s;
            transform-style: preserve-3d;
        }

        #valores .flip:nth-child(1):hover .card {
            transform: rotateY(180deg);
        }

        #valores .front,
        #valores .back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            cursor: default;
        }

        #valores .front {
            color: #fff;
            border: 2px solid #ececec;
        }

        #valores .back {
            color: white;
            transform: rotateY(180deg);
            border: 2px solid #ececec;
            padding: 0.5em;
        }

        #portada {
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, .6)), url("./assets/img/fotos/portada_general_interna.jpg");
            /* background-image: url("./assets/img/portada-all-1.png"); */
            background-size: 100%;
            /* background-position: center; */
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

        @media only screen and (max-width: 650px) {
            #portada {
                background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, .6)), url("./assets/img/fotos/portada_general_interna.jpg");
                /* background-image: url("./assets/img/portada-all-1.png"); */
                background-size: 150%;
                /* background-position: center; */
                background-repeat: no-repeat;
                color: white;
                padding-top: 3rem;
                padding-bottom: 2rem;
                height: 240px;

            }

            #portada h1 {
                font-size: 2.1em;
            }
        }
    </style>

    <section class="container-fluid px-0" id="portada">
        <div class="container px-3">
            <ol class="breadcrumb text-white" style="font-size: 16px;">
                <li class="breadcrumb-item"><a href="./" style="color:var(--color8);">Inicio</a></li>
                <li class="breadcrumb-item"><a href="" style="color:var(--color8);">Nosotros</a></li>
            </ol>
            <h1>Presentación</h1>
        </div>
    </section>

    <br><br><br>
    <section id="bienvenido">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="card  shadow">
                        <div class="card-body text-justify" style="padding: 6%;">
                            <div class="row ">

                                <h1 class="mb-3" style="text-align:center;">Bienvenidos</h1>
                            </div>

                            <br>
                            <br>
                            <p>
                                Somos una institución educativa con 36 años de experiencia, dedicada a formar ciudadanos responsables, críticos y comprometidos con el mundo. Durante este tiempo, hemos construido una sólida trayectoria basada en la excelencia académica, la innovación pedagógica y el desarrollo integral de nuestros alumnos.
                            </p>

                            <p>
                                Nos enorgullece ofrecer un ambiente de aprendizaje cálido y estimulante, donde cada estudiante se siente valorado, respetado y motivado a alcanzar su máximo potencial. Nuestra propuesta educativa se basa en respeto, responsabilidad, excelencia y en el desarrollo de habilidades del siglo XXI, preparando a nuestros alumnos para enfrentar los desafíos del futuro con confianza y éxito.
                            </p>
                            <p>
                                Te invitamos a conocer más sobre nuestra institución y a formar parte de nuestra comunidad educativa.
                            </p>
                            <br>
                            <p>Fraternalmente,</p>
                            <br>
                            <div style="display:flex;justify-content:center;">
                                <img src="./assets/img/galeria/directora_maria_rogetti.png" class="rounded shadow-sm" width="38%">
                            </div>
                            <br>
                            <p class="text-center" style="font-family: 'Dancing Script', cursive;">
                                <b style="font-size:1.6rem;color:var(--color4);">LIC. DIANA LUZ GONZALES SANCHEZ</b>
                            </p>
                            <p class="text-center">
                                <b>Director</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container" id="valores">
        <div class="row justify-content-center">
            <div class="col-lg-6 p-0">
                <div class="flip" style="background-color: var(--color1);">
                    <div class="card" style="background-color: var(--color1);">
                        <div class="front">
                            <span class="fs-1"><i class="fas fa-globe"></i></span>
                            <span class="fw-bold" style="background-color: var(--12);">Misión</span>
                        </div>
                        <div class="back">
                            <span>
                                Brindar una educación de calidad, para contribuir con la formación integral de los educandos, que sean capaces de ejercer un liderazgo responsable y solidario en la sociedad peruana
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="flip" style="background-color: #7e0d0b;">
                    <div class="card" style="background-color: #7e0d0b;">
                        <div class="front">
                            <span class="fs-1"><i class="fas fa-eye"></i></span>
                            <span class="fw-bold" style="background-color:var(--12);">Visión</span>
                        </div>
                        <div class="back">
                            <span>
                                Ser una comunidad educativa democrática en todas las instancias y niveles, capaz de brindar una solida formación integral para la vida, promoviendo valores, formando niños y jóvenes disciplinados, autónomos, reflexivos y críticos, competentes, con el apoyo y compromiso de los padres
                            </span>
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