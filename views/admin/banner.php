<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BANNER - <?php echo EMPRESA ?></title>
    <link rel="shortcut icon" href="<?php echo WEBURL ?>/assets/img/icons/escudo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="<?php echo WEBURL ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo WEBURL ?>/assets/css/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.css">
</head>

<body>

    <!-- scripts -->
    <script src="<?php echo WEBURL ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo WEBURL ?>/assets/js/jquery-ui.min.js"></script>
    <script async src="<?php echo WEBURL ?>/assets/js/bootstrap.min.js"></script>
    <script async src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.js"></script>

    <!-- includes -->
    <?php include_once 'includes/header.phtml'; ?>
    <?php include_once 'includes/menu.phtml'; ?>

    <!-- styles -->
    <style>
        div.gallery ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        div.gallery ul li {
            float: left;
            width: auto;
            height: auto;
            display: inline;
            width: 25%;
            padding: 0 1%;
        }

        div.gallery .card {
            border: 0.1em solid rgb(190, 190, 190);
            box-shadow: 0 0 5px rgb(220, 220, 220);
        }

        div.gallery .card-body>img {
            width: 100%;
            height: 130px;
            object-fit: cover;
            cursor: move;
        }

        div.gallery .card-footer a {
            cursor: pointer;
        }

        div.gallery .card-footer a:hover {
            color: red;
        }

        div.backbox {
            position: absolute;
            width: 100%;
            height: 130px;
            background: rgb(0, 0, 0, .3);
            opacity: 0;
            transition: opacity .4s ease-in-out;
        }

        div.backbox:hover {
            opacity: 1;
            cursor: pointer;
        }

        div.card-file {
            color: rgb(95, 95, 95);
            border: 0.12em solid rgb(145, 145, 145);
        }

        div.card-file:hover {
            color: var(--color2);
            border: 0.12em solid var(--color2);
            cursor: pointer;
        }

        div.enlace {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            max-width: 100%;
        }
    </style>

    <!-- main content -->
    <main class="content" id="app">
        <!-- loading -->
        <div id="preloader">
            <div class="loading">
                <div class="circle"></div>
            </div>
        </div>

        <div class="d-flex px-1" style="align-items: center;">
            <div class="tab-titulo">
                BANNER PRINCIPAL
            </div>
            <div class="ms-auto d-flex flex-row" style="align-items: center;">
                <div class="ms-3">
                    <select class="form-select" onchange="cambiarTipo(this)">
                        <option value="slider" <?php echo ($this->tipo == 'slider') ? 'selected' : '' ?>>Banner tipo slider</option>
                        <option value="video" <?php echo ($this->tipo == 'video') ? 'selected' : '' ?>>Banner tipo video</option>
                    </select>
                </div>
                <button class="btn btn-danger mx-3" data-bs-toggle="modal" data-bs-target="#modal-archivos"><i class="fas fa-search"></i>&nbsp; Buscar archivos</button>
                <button class="btn btn-success" onclick="actualizar()"><i class="fas fa-sync"></i>&nbsp; Actualizar Banner</button>
            </div>
        </div>
        <hr>
        <?php if ($this->tipo == 'slider') { ?>
            <!-- section banner -->
            <section id="menu-slide">
                <div class="gallery">
                    <ul class="reorder_ul reorder-photos-list" id="list-items"></ul>
                </div>
            </section>
        <?php } else if ($this->tipo == 'video') { ?>
            <section id="menu-video">
                <div class="row pt-3">
                    <div class="col-sm-3">
                        <div class="card shadow-sm">
                            <div class="card-header px-3 py-2">
                                <b><i class="fas fa-bars"></i>&nbsp; Opciones</b>
                            </div>
                            <div class="card-body">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="video_opt_1" <?php echo $this->jsondata['control'] ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="video_opt_1">Mostrar controles</label>
                                </div>
                                <hr>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="video_opt_2" <?php echo $this->jsondata['muted'] ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="video_opt_2">Silenciado</label>
                                </div>
                                <hr>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="video_opt_3" <?php echo $this->jsondata['repeat'] ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="video_opt_3">Repetir video</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <video class="rounded" id="video-banner" class="shadow-sm" src="<?php echo $this->jsondata['video'] ?>" width="100%" controls></video>
                    </div>
                </div>
            </section>
        <?php } ?>


        <!-- Modal Archivos -->
        <div class="modal fade" id="modal-archivos" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Seleccionar <?php echo $this->tipo == 'slider' ? 'imagen' : 'video' ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <?php
                            if ($this->tipo == 'slider') {
                                foreach ($this->imgsBanner as $val) : ?>
                                    <div class="col-4 my-2">
                                        <div class="border" style="position: relative; border-radius: 4px;" title="<?php echo $val['name'] ?>">
                                            <div class="backbox rounded" onclick="addItem('<?php echo $val['path'] ?>')"></div>
                                            <img src="<?php echo $val['path'] ?>" class="rounded" width="100%" height="130" style="object-fit: cover;">
                                        </div>
                                    </div>
                                <?php endforeach;
                            } else {
                                foreach ($this->filesVideo as $val) : ?>
                                    <div class="col-4 my-2">
                                        <div class="card card-file">
                                            <div class="card-body px-0 py-2 text-center" onclick="addItem('<?php echo $val['path'] ?>')">
                                                <span style="font-size: 35px;"><i class="fas fa-film"></i></span>
                                                <div class="enlace px-3"><?php echo $val['name'] ?></div>
                                            </div>
                                        </div>
                                    </div>
                            <?php endforeach;
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- code javascript -->
    <?php
    if ($this->tipo == 'slider') { ?>
        <script>
            let sliderArray = JSON.parse(`<?php echo $this->jsondata ?>`);

            $("ul.reorder-photos-list").sortable({
                tolerance: 'pointer'
            });

            window.listItems();

            function addItem(url) {
                sliderArray.push({
                    imagen: url,
                    enlace: null,
                });
                listItems();
                $('#modal-archivos').modal('hide');
            }

            function deleteItem(index) {
                sliderArray.splice(index, 1);
                listItems();
            }

            function listItems() {
                var html = "";
                sliderArray.forEach((element, index) => {
                    html += `<li id="image_li_${index}" class="ui-sortable-handle my-3"><div class="card"><div class="card-body p-0">`;
                    html += `<img src="${element.imagen}"></div><div class="card-footer"><a onclick="deleteItem(${index})"><i class="far fa-trash-alt"></i> Eliminar</a></div></div></li>`;
                });
                $("#list-items").html(html);
            }

            function actualizar() {
                if (sliderArray.length < 1) {
                    showAlert("Debes agregar mínimo una imagen para continuar.", "warning");
                    return;
                }
                let auxArray = [];
                $("ul.reorder-photos-list li").each(
                    function() {
                        let id = $(this).attr('id').substr(9);
                        auxArray.push({
                            imagen: sliderArray[id].imagen,
                            enlace: sliderArray[id].enlace
                        });
                    }
                );
                let data = new FormData();
                data.append("tipo", "<?php echo $this->tipo ?>");
                data.append("cuerpo", JSON.stringify(auxArray));
                fetch("/admin/banner/actualizar", {
                    method: "POST",
                    body: data
                }).then(function(res) {
                    return res.text()
                }).then(function(res) {
                    if (res.trim() == "OK") {
                        showAlert("Cambios guardados correctamente", "success");
                    } else {
                        showAlert(res, "error");
                    }
                });
            }
        </script>
    <?php } else if ($this->tipo == 'video') { ?>
        <script>
            function addItem(uri) {
                $('#video-banner').attr('src', uri);
                $('#modal-archivos').modal('hide');
            }

            function actualizar() {
                let data = new FormData();
                data.append("tipo", "<?php echo $this->tipo ?>");
                data.append("cuerpo", JSON.stringify({
                    video: $('#video-banner').attr('src'),
                    control: $('#video_opt_1').prop('checked'),
                    muted: $('#video_opt_2').prop('checked'),
                    repeat: $('#video_opt_3').prop('checked')
                }));
                fetch("/admin/banner/actualizar", {
                    method: "POST",
                    body: data
                }).then(function(res) {
                    return res.text()
                }).then(function(res) {
                    if (res.trim() == "OK") {
                        showAlert("Cambios guardados correctamente", "success");
                    } else {
                        showAlert(res, "error");
                    }
                });
            }
        </script>
    <?php } ?>

    <script>
        function cambiarTipo(element) {
            location.href = '/admin/banner/' + element.value;
        }

        function showAlert(mensaje, icon) {
            Swal.fire({
                icon: icon,
                text: mensaje,
            });
        }

        setTimeout(() => {
            let loader = document.getElementById('preloader');
            loader.style.opacity = '0';
            setTimeout(() => {
                loader.style.display = 'none';
            }, 500);
        }, 2400);
    </script>

</body>

</html>