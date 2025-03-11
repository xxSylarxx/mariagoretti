<?php
require_once DIROOT . '/models/NoticiasModel.php';
$model = new NoticiasModel();
$listCategorias = $model->listarCategorias();
$categ = isset($uri[1]) ? $uri[1] : 'noticias';
$catId = '1';
foreach ($listCategorias as $key => $value) :
    if ($value['filtro'] == $categ) :
        $catId = $key;
        break;
    endif;
endforeach;
$listNoticias = $model->listNoticiasWeb(0, 6, $catId);
?>
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

    <?php include_once 'includes/header.php'; ?>

    <style>
        #noticias .card {
            transition: transform .3s ease-in-out;
        }

        #noticias .card:hover {
            transform: scale(1.06);
        }

        #noticias .card-body p {
            text-align: justify;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }

        #noticias h5.text-titulo {
            color: var(--color4);
            text-align: justify;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            text-transform: uppercase;
        }

        .list-group-item {
            padding-top: 13px;
            padding-bottom: 13px;
            font-size: 15px;
        }

        .list-group-item:hover {
            color: var(--color1);
        }

        .list-group-item.active {
            background-color: var(--color1);
            color: white;
        }
    </style>

    <section class="container-fluid px-0">
        <img src="/assets/img/portada-<?php echo $listCategorias[$catId]['filtro'] ?>.png" width="100%">
    </section>

    <br><br>

    <section class="container bg-light border shadow-sm py-2 px-3">
        <ol class="breadcrumb pb-0 mb-0" style="font-size: 16px;">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="">Categoría</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $listCategorias[$catId]['nombre'] ?></li>
        </ol>
    </section>

    <br>

    <section class="container" id="noticias">
        <div class="row justify-content-between">
            <div class="col-lg-9 my-1 pe-4 ps-1">
                <div class="row">
                    <?php if (empty($listNoticias)) { ?>
                        <div class="col text-center pt-3" style="height: 300px;">
                            <br><br>
                            <h3 class="text-info">No se encontrarón resultados!</h3>
                        </div>
                    <?php }
                    foreach ($listNoticias as $val) : ?>
                        <div class="col-md-4 my-4">
                            <a href="/noticia/<?php echo $val['tagname'] ?>" class="card h-100 shadow-sm">
                                <?php
                                if (!empty($val['portada'])) : ?>
                                    <div class="crop">
                                        <img src="<?php echo $val['portada'] ?>" width="100%" height="170" style="object-fit: cover;">
                                    </div>
                                <?php endif; ?>
                                <div class="card-body pb-2 bg-white">
                                    <h5 class="text-titulo mt-1 mb-2" style="font-size: 16px;"><?php echo $val['titulo'] ?></h5>
                                    <?php
                                    if (!empty($val['detalle'])) : ?>
                                        <p class="text-justify fs-6" style="color: rgb(60, 60, 60);"><?php echo $val['detalle'] ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="card-footer d-flex flex-row align-items-center bg-white px-3 py-2">
                                    <div class="text-warning">
                                        <i class="far fa-calendar-alt"></i>
                                        <span class="ms-1" style="font-size: 16px;"><?php echo Helpers::formatDate($val['fecpub']) ?></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-3 my-3">
                <h4 class="text-warning mb-3">Categorías</h4>
                <div class="list-group shadow-sm">
                    <?php
                    foreach ($listCategorias as $key => $value) : ?>
                        <a href="/noticias/<?php echo $value['filtro'] ?>" class="list-group-item <?php echo $catId == $key ? 'active' : '' ?>">
                            <i class="far fa-folder-open"></i>&nbsp;&nbsp; <?php echo $value['nombre'] ?>
                        </a>
                    <?php endforeach;
                    ?>
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