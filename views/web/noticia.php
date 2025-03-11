<?php
if (isset($uri[1])) {
    require_once DIROOT . '/models/NoticiasModel.php';
    $model = new NoticiasModel();
    $listCategorias = $model->listarCategorias();
    $noticiaInfo = array();
    if (!empty($_POST) && $uri[1] == 'preview') {
        $noticiaInfo['titulo'] = $_POST['titulo'];
        $noticiaInfo['cuerpo'] = $_POST['cuerpo'];
        $noticiaInfo['fecpub'] = Helpers::formatDate($_POST['fecpub']);
        $noticiaInfo['tagname'] = Helpers::formatSlug($noticiaInfo['titulo']);
        $noticiaInfo['categoria'] = $listCategorias[$_POST['categ']]['nombre'];
    } else {
        $noticiaInfo = $model->buscarNoticiaxTag($uri[1]);
        $idcategoria = $noticiaInfo['categoria'];
        $noticiaInfo['fecpub'] = Helpers::formatDate($noticiaInfo['fecpub']);
        $noticiaInfo['categoria'] = $listCategorias[$idcategoria]['nombre'];
    }
    $listOtherNoticias = $model->listNoticiasWeb(0, 4, '');
} else {
    header("Location: noticias");
}

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
        li.list-group-item {
            display: flex;
            flex-direction: column;
            border-style: dashed;
            border-color: rgb(130, 130, 130);
            border-left: none;
            border-right: none;
        }

        a.titulo {
            font-size: 15px;
            color: var(--color4);
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            cursor: pointer;
        }

        div.fecha {
            margin-top: 5px;
            font-size: 13px;
            letter-spacing: 1px;
            color: rgb(110, 110, 110);
        }
    </style>

    <br><br>

    <section class="container bg-light border shadow-sm py-2 px-3">
        <ol class="breadcrumb pb-0 mb-0" style="font-size: 16px;">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href=""><?php echo $noticiaInfo['categoria'] ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo mb_strtolower($noticiaInfo['titulo'], 'utf-8'); ?></li>
        </ol>
    </section>

    <br>

    <section class="container pt-3">
        <div class="row justify-content-between">
            <div class="col-lg-9 my-2 px-2">
                <div class="card border-0 p-0 pe-4">
                    <div class="card-header px-1 pb-1" style="background: transparent;">
                        <h4 class="text-uppercase text-info fw-bold mb-3"><?php echo $noticiaInfo['titulo'] ?></h4>
                        <p class="text-warning fw-bold">Fecha de publicación : &nbsp;&nbsp; <i class="far fa-calendar-alt"></i> <?php echo $noticiaInfo['fecpub'] ?></p>
                    </div>
                    <div class="card-body px-1 pt-4">
                        <?php echo $noticiaInfo['cuerpo'] ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 my-2">
                <div class="card border-0">
                    <h4 class="text-warning mb-4">Publicaciones recientes</h4>
                    <ul class="list-group">
                        <?php
                        foreach ($listOtherNoticias as $key => $value) :
                            if ($value['idnot'] !== $noticiaInfo['idnot']) { ?>
                                <li class="list-group-item">
                                    <a href="/noticia/<?php echo $value['tagname'] ?>" class="titulo"><?php echo $value['titulo'] ?></a>
                                    <div class="fecha">Publicado el <?php echo $value['fecpub'] ?></div>
                                </li>
                        <?php }
                        endforeach; ?>
                    </ul>
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