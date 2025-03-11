<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODAL - <?php echo EMPRESA ?></title>
    <link rel="shortcut icon" href="<?php echo WEBURL ?>/assets/img/icons/escudo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="<?php echo WEBURL ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo WEBURL ?>/assets/css/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.css">
</head>

<body>

    <!-- scripts -->
    <script src="<?php echo WEBURL ?>/assets/js/bootstrap.min.js"></script>
    <script async src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.js"></script>

    <!-- includes -->
    <?php include_once 'includes/header.phtml'; ?>
    <?php include_once 'includes/menu.phtml'; ?>

    <!-- styles -->
    <style>
        div.card-file {
            color: rgb(95, 95, 95);
            border: 0.12em solid rgb(145, 145, 145);
        }

        div.card-file:hover {
            color: var(--color4);
            border: 0.12em solid var(--color4);
            cursor: pointer;
        }

        div.enlace {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            max-width: 100%;
        }

        img.img-crop:hover {
            filter: grayscale(100%);
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
                VENTANA EMERGENTE
            </div>
            <div class="ms-auto" style="align-items: center;">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="check-visible" style="border-radius: 2px; transform: scale(1.08); cursor: pointer;" <?php echo $this->modalData['visible'] == 'S' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="check-visible">Ventana visible</label>
                </div>
                <button class="btn btn-danger mx-3" type="button" data-bs-toggle="modal" data-bs-target="#modal-archivos"><i class="fas fa-search"></i>&nbsp; Buscar archivos</button>
                <button class="btn btn-success" onclick="actualizar()"><i class="fas fa-sync"></i>&nbsp; Guardar cambios</button>
            </div>
        </div>
        <hr>
        <div class="row justify-content-center">
            <div class="col-8 pb-3">
                <div class="modal-dialog modal-lg shadow">
                    <div class="modal-content">
                        <div class="modal-header">
                            <input type="text" class="form-control" id="cuerpo-titulo" placeholder="Escribe un titulo para la ventana" value="<?php echo $this->modalData['titulo'] ?>">
                            <button type="button" class="btn-close ms-3" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="cuerpo-modal">
                            <?php echo $this->modalData['cuerpo'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modal-archivos" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <ul class="nav nav-pills w-100 " role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded me-1 active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true" onclick="onContFiles(<?php echo count($this->pivotFiles['galeria']) ?>)"><i class="far fa-image"></i> Imagenes</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded mx-1" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" onclick="onContFiles(<?php echo count($this->pivotFiles['video']) ?>)"><i class="fas fa-film"></i> Videos</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded mx-1" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false" onclick="onContFiles(<?php echo count($this->pivotFiles['files']) ?>)"><i class="far fa-folder"></i> Archivos</button>
                            </li>
                            <li class="ms-auto d-flex" style="align-items: center;">
                                <span id="numfiles"><?php echo count($this->pivotFiles['galeria']) ?> archivos</span>
                            </li>
                        </ul>
                    </div>
                    <div class="modal-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="row">
                                    <?php
                                    foreach ($this->pivotFiles['galeria'] as $val) : ?>
                                        <div class="col-3 my-2">
                                            <div class="border" style="position: relative; border-radius: 4px;" title="<?php echo $val['name'] ?>">
                                                <img src="<?php echo $val['path'] ?>" class="rounded img-crop" width="100%" height="145" onclick="addContentHtml('img', '<?php echo $val['path'] ?>')" style="object-fit: cover; cursor: pointer;">
                                            </div>
                                        </div>
                                    <?php endforeach;
                                    ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="row">
                                    <?php
                                    if (empty($this->pivotFiles['video'])) {
                                        echo "<p>No se encontrarón archivos de video</p>";
                                    }
                                    foreach ($this->pivotFiles['video'] as $val) : ?>
                                        <div class="col-4 my-2">
                                            <div class="card card-file">
                                                <div class="card-body px-0 py-2 text-center" onclick="addContentHtml('video', '<?php echo $val['path'] ?>')">
                                                    <span style="font-size: 35px;"><i class="fas fa-film"></i></span>
                                                    <div class="enlace px-3"><?php echo $val['name'] ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach;
                                    ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <div class="row">
                                    <?php
                                    foreach ($this->pivotFiles['files'] as $val) : ?>
                                        <div class="col-4 my-2">
                                            <div class="card card-file">
                                                <div class="card-body px-0 py-2 text-center" onclick="addContentHtml('<?php echo $val['tipo'] ?>', '<?php echo $val['path'] ?>')">
                                                    <span style="font-size: 35px;"><i class="far fa-file"></i></span>
                                                    <div class="enlace px-3"><?php echo $val['name'] ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>

    <!-- code javascript -->
    <script>
        let modal = new bootstrap.Modal(document.getElementById('modal-archivos'));

        function addContentHtml(tipo, uri) {
            let html = '';
            if (tipo == 'img') {
                html += `<img src="${uri}" width="100%">`;
            } else if (tipo == 'video') {
                html += `<video src="${uri}" width="100%" height="450" muted controls></video>`;
            } else if (tipo == 'pdf') {
                html += `<iframe src="${uri}" width="100%" height="680" frameborder="0"></iframe>`;
            }
            document.getElementById("cuerpo-modal").innerHTML = html;
            modal.hide();
        }

        function actualizar() {
            let isvisible = document.getElementById('check-visible').checked;
            let form = new FormData();
            form.append("titulo", document.getElementById("cuerpo-titulo").value);
            form.append("cuerpo", document.getElementById("cuerpo-modal").innerHTML);
            form.append("visible", isvisible ? 'S' : 'N');
            fetch("/admin/modal/actualizar", {
                method: "POST",
                body: form
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

        function onContFiles(num) {
            document.getElementById("numfiles").innerText = `${num} archivos`;
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