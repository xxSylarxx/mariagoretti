<?php
include_once DIROOT . '/models/RevistaModel.php';
$model = new RevistaModel();
$revistas = $model->getListRevista();
?>
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
        .list-group-item {
            padding: 13px 18px;
            font-size: 16px;
            background: transparent;
            border-radius: 5px;
        }

        .list-group-item.active {
            background: var(--color3);
            color: white;
            cursor: pointer;
        }

        .list-group-item:hover {
            color: var(--color4);
            cursor: pointer;
        }
    </style>

    <br><br><br>

    <section class="container">
        <div class="row justify-content-around">
            <div class="col-md-3">
                <div class="card bg-light shadow h-100">
                    <div class="card-body px-0">
                        <div class="text-center py-4">
                            <img src="/assets/img/icons/revistas.png">
                            <h3 class="text-info">Revistas</h3>
                        </div>
                        <ul class="list-group list-group-flush mx-2" style="border-radius: 5px;">
                            <?php
                            foreach ($revistas as $key => $value) : ?>
                                <li class="list-group-item border-0 <?php echo $key == 0 ? 'active' : '' ?>" onclick="cambiarRevista(<?php echo $key ?>, '<?php echo $value['enlace'] ?>')">
                                    <i class="far fa-bookmark"></i>&nbsp;&nbsp; <?php echo $value['nombre'] ?>
                                </li>
                            <?php endforeach;
                            ?>
                        </ul>
                    </div>
                    <div class="card-footer text-center" style="font-size: 16px; padding-top: 13px; padding-bottom: 13px;">
                        <a href="<?php echo $revistas[0]['enlace'] ?>" id="enlace-tab" target="_blank"><i class="fas fa-border-style"></i>&nbsp; Ver en pantalla completa</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <iframe src="<?php echo $revistas[0]['enlace'] ?>" id="view-revista" frameborder="0" width="100%" height="800" class=" rounded shadow"></iframe>
            </div>
        </div>
    </section>

    <br><br><br>

    <?php include_once 'includes/footer.php' ?>

    <script>
        let lista = document.getElementsByClassName("list-group-item");

        function cambiarRevista(index, enlace) {
            for (var i = 0; i < lista.length; i++) {
                if (i == index) {
                    lista[i].classList.add("active");
                } else {
                    lista[i].classList.remove("active");
                }
            }
            document.getElementById("view-revista").setAttribute("src", enlace);
            document.getElementById("enlace-tab").setAttribute("href", enlace);
        }

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