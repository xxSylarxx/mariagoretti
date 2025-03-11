<?php
require_once DIROOT . '/models/BannerModel.php';
require_once DIROOT . '/models/ModalModel.php';
require_once DIROOT . '/models/NoticiasModel.php';
$pivotModal = new ModalModel();
$pivotModal = $pivotModal->obtenerDataModal();
$pivotBanner = new BannerModel();
$pivotBanner = $pivotBanner->obtenerBanner();
$pivotBanner['cuerpo'] = (array) json_decode($pivotBanner['cuerpo'], true);
$pivotNoticias = new NoticiasModel();
$pivotNoticias = $pivotNoticias->listNoticiasWeb(0, 4, '');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pivotHome['nombre'] ?></title>
    <link rel="preload" href="/assets/fonts/Nunito-Black.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="/assets/fonts/Nunito-SemiBold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="shortcut icon" href="<?php echo WEBURL ?>/assets/img/icons/escudo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="<?php echo WEBURL ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo WEBURL ?>/assets/css/web.css">
    <link rel="stylesheet" href="/assets/css/card-animation.css">
</head>

<body>

    <script async src="<?php echo WEBURL ?>/assets/js/popper.min.js"></script>
    <script src="<?php echo WEBURL ?>/assets/js/bootstrap.min.js"></script>

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

    <?php include_once 'includes/header.php'; ?>

    <!-- ventana emergente admin -->
    <?php
    if ($pivotModal['visible'] == 'S') : ?>
        <div class="modal fade" id="modalAdmin" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title fw-bold text-primary"><?php echo $pivotModal['titulo'] ?></h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php echo $pivotModal['cuerpo'] ?>
                    </div>
                </div>
            </div>
        </div>
        <script>
            let modalAdmin = new bootstrap.Modal(document.getElementById('modalAdmin'));
            modalAdmin.show();
        </script>
    <?php endif;
    ?>

    <style>
        div.bann-lema {
            position: absolute;
            width: 39.9%;
            padding-left: 2em;
            padding-right: 2em;
            background-color: rgba(243, 243, 243, 0.5);
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

    <section class="container-fluid px-0">
        <?php
        if ($pivotBanner['tipo'] == 'slider') { ?>
            <div id="carouselBanner" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <?php
                    foreach ($pivotBanner['cuerpo'] as $key => $item) : ?>
                        <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="<?php echo $key ?>" class="<?php echo $key == 0 ? 'active' : '' ?>" aria-current="true" aria-label="Slide 1"></button>
                    <?php endforeach;
                    ?>
                </div>
                <div class="carousel-inner">
                    <?php foreach ($pivotBanner['cuerpo'] as $key => $item) : ?>
                        <div class="carousel-item <?php echo ($key == 0) ? 'active' : '' ?>">
                            <div class="bann-lema animate__animated animate__backInLeft">
                                <div class="text-center">
                                    <h1 class="text-white">Formamos líderes con valores cristianos y pensamiento crítico y creativo.</h1><br>
                                    <?php
                                    if (($key % 2) == 0) { ?>
                                        <a href="admision" class="btn btn-warning text-white">Admisión 2022</a>
                                    <?php } else { ?>
                                        <a href="testimonios" class="btn btn-warning text-white">Testimonios</a>
                                    <?php } ?>
                                </div>
                            </div>
                            <img src="<?php echo WEBURL . $item['imagen'] ?>" class="d-block w-100" importance="high">
                        </div>
                    <?php endforeach; ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselBanner" data-bs-slide="prev" style="margin-left: -3em;">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselBanner" data-bs-slide="next" style="margin-right: -3em;">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        <?php } else if ($pivotBanner['tipo'] == 'video') { ?>
            <video src="<?php echo $pivotBanner['cuerpo']['video']; ?>" width="100%" <?php echo $pivotBanner['cuerpo']['control'] ? 'controls' : '' ?> <?php echo $pivotBanner['cuerpo']['muted'] ? 'muted' : '' ?> autoplay></video>
        <?php } ?>
    </section>

    <br><br><br><br>

    <section class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5 my-2">
                <h1 class="text-info mb-3">Bienvenidos</h1>
                <p style="line-height: 2; text-align: justify;">
                    A la Institución Educativa Abraham Valdelomar. Educamos a niños, niñas y adolescentes, desde un enfoque integral; para que sean capaces de responder a los desafíos del mundo actual, con carácter, integridad y de manera crítica y creativa, en concordancia con los principios cristianos promovidos por la Asociación Cristiana de Jóvenes del Perú, también conocida como YMCA Perú.
                </p>
                <div class="text-center">
                    <button class="btn btn-warning text-white fw-bold px-4" onclick="location.href = 'nosotros'">Ver más</button>
                </div>
            </div>
            <div class="col-lg-6 my-2">
                <video src="/assets/video/video_inicio.mp4" class="rounded shadow" width="100%" muted autoplay controls repeat></video>
            </div>
        </div>
    </section>

    <br><br><br><br>

    <section class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <h1 class="linea text-info"><span>Propuesta Educativa</span></h1>
            </div>
        </div>
        <div class="row pt-1">
            <div class="col-md-4 my-2">
                <div class="card card-8 stacked--down-right" style="border: 0;">
                    <img src="/assets/img/fotos/front-inicial.jpg" width="100%" height="300" style="border-radius: 10px; object-fit: cover;">
                </div>
                <div class="text-center pt-4">
                    <a class="btn btn-warning" href="metodologia">Inicial</a>
                </div>
            </div>
            <div class="col-md-4 my-2">
                <div class="card card-8 stacked--down-right" style="border: 0;">
                    <img src="/assets/img/fotos/front-primaria.jpg" width="100%" height="300" style="border-radius: 10px; object-fit: cover;">
                </div>
                <div class="text-center pt-4">
                    <a class="btn btn-warning" href="metodologia">Primaria</a>
                </div>
            </div>
            <div class="col-md-4 my-2">
                <div class="card card-8 stacked--down-right" style="border: 0;">
                    <img src="/assets/img/fotos/front-secundaria.jpg" width="100%" height="300" style="border-radius: 10px; object-fit: cover;">
                </div>
                <div class="text-center pt-4">
                    <a class="btn btn-warning" href="metodologia">Secundaria</a>
                </div>
            </div>
        </div>
    </section>

    <br><br><br><br>

    <section class="container">
        <div class="row mb-3">
            <div class="col text-center">
                <h1 class="linea text-info"><span>Testimonios</span></h1>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col px-4">
                <div class="card shadow text-center border-0" style="padding: 2em 3em;">
                    <br>
                    <div class="mx-auto">
                        <img src="/assets/img/fotos/testiomonio_02.png" width="160">
                    </div>
                    <br>
                    <p>“Puedo afirmar, sin temor a equivocarme, que los mejores años de mi vida los pasé en el Valdelomar. A mis mejores amigos los conocí también en el colegio. Lo más importante, sin embargo, fue ser formado con valores y liderazgo que me prepararon, desde aquella época, para los retos del mundo de hoy.”</p>
                    <h4 class="text-warning">Diego Armando Morales Lozada, Prom. 2006</h4>
                    <p class="text-info">Abogado por la USMP, profesor de alemán, Vocal del Consejo Directivo de YMCA.</p>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col text-center">
                <a href="testimonios" class="btn btn-warning">Ver más testimonios</a>
            </div>
        </div>
    </section>

    <br><br><br><br>

    <section class="container">
        <div class="row mb-3">
            <div class="col text-center">
                <h1 class="linea text-info"><span>Creaciones del Estudiante</span></h1>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-md mb-4 px-4">
                <div class="card card-10 stacked--fan-right">
                    <a href="https://online.fliphtml5.com/kasml/qwcj/" target="_blank">
                        <img src="/assets/img/galeria/pinguino-bucky.png" class="rounded" width="100%" height="345">
                    </a>
                </div>
            </div>
            <div class="col-md mb-4 px-4">
                <div class="card card-10 stacked--fan-right">
                    <a href="https://online.fliphtml5.com/kasml/orhp/" target="_blank">
                        <img src="/assets/img/galeria/tortuga.png" class="rounded" width="100%" height="345">
                    </a>
                </div>
            </div>
            <div class="col-md mb-4 px-4">
                <div class="card card-10 stacked--fan-right">
                    <a href="https://online.fliphtml5.com/kasml/squw/" target="_blank">
                        <img src="/assets/img/galeria/ballena-sandy.png" class="rounded" width="100%" height="345">
                    </a>
                </div>
            </div>
            <div class="col-md mb-4 px-4">
                <div class="card card-10 stacked--fan-right">
                    <a href="https://online.fliphtml5.com/kasml/qcxb/" target="_blank">
                        <img src="/assets/img/galeria/peru_todos.png" class="rounded" width="100%" height="345">
                    </a>
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
        }, 2700);
    </script>

</body>

</html>