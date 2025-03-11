<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITOR - <?php echo EMPRESA ?></title>
    <link rel="shortcut icon" href="<?php echo WEBURL ?>/assets/img/icons/escudo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="<?php echo WEBURL ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo WEBURL ?>/assets/css/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.css">
    <script src="https://cdn.tiny.cloud/1/m923kxh2ht5z3iggdm8hghimyq6r44s6egfxl8xat90kag3t/tinymce/5/tinymce.min.js"></script>
</head>

<body>
    <!-- scripts -->
    <script async src="<?php echo WEBURL ?>/assets/js/bootstrap.min.js"></script>
    <script async src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.js"></script>

    <!-- includes -->
    <?php include_once 'includes/header.phtml'; ?>
    <?php include_once 'includes/menu.phtml'; ?>

    <!-- styles -->
    <style>
        #cuerpo {
            display: none;
        }
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

    <!-- contenido principal -->
    <main class="content" id="app">
        <!-- loading -->
        <div id="preloader">
            <div class="loading">
                <div class="circle"></div>
            </div>
        </div>
        <form id="form-data" action="/noticia/preview" method="POST" target="_blank" onsubmit="showpreview(event)" onkeypress="return event.keyCode != 13;">
            <div class="d-flex px-1" style="align-items: center;">
                <div class="tab-titulo">
                    EDICIÓN
                </div>
                <div class="ms-auto d-flex" style="align-items: center;">
                    <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#modal-archivos"><i class="fas fa-search"></i>&nbsp; Buscar archivos</button>
                    <button class="btn btn-info mx-3" type="submit"><i class="fas fa-eye"></i>&nbsp; Vista previa</button>
                    <button class="btn btn-success text-white" type="button" onclick="guardarNoticia()"><i class="fas fa-save"></i>&nbsp; Guardar noticia</button>
                </div>
            </div>
            <hr>
            <div class="row pt-2">
                <div class="col">
                    <input type="text" class="form-control text-uppercase" id="titulo" name="titulo" placeholder="Titulo de publicación" value="<?php echo $this->noticiaInfo['titulo'] ?>" autocomplete="off" required>
                    <div class="pt-3">
                        <textarea id="editor"><?php echo $this->noticiaInfo['cuerpo'] ?></textarea>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card bg-light p-3">
                        <span>Categoría:</span>
                        <select class="form-select mt-1 mb-3" name="categ">
                            <?php
                            foreach ($this->listCategorias as $key => $val) : ?>
                                <option value="<?php echo $key ?>" <?php echo $this->noticiaInfo['idcat'] == $key ? 'selected' : '' ?>>
                                    <?php echo $val['nombre'] ?>
                                </option>
                            <?php endforeach;
                            ?>
                        </select>
                        <span>Fecha de publicación:</span>
                        <input type="date" class="form-control mt-1 mb-3" name="fecpub" value="<?php echo $this->noticiaInfo['fecpub'] ?>">
                        <span>Detalle:</span>
                        <textarea class="form-control mt-1 mb-3" rows="1" id="txtdetalle" name="detalle" maxlength="250"><?php echo $this->noticiaInfo['detalle'] ?></textarea>
                        <span>Imagen de portada:</span>
                        <input type="link" class="form-control mt-1 mb-3" name="portada" value="<?php echo $this->noticiaInfo['portada'] ?>" onchange="onchangePortada(this.value)" autocomplete="off">
                        <img id="img-portada" src="<?php echo $this->noticiaInfo["portada"]; ?>" onerror="this.src = `https://via.placeholder.com/320x220`" class="rounded" width="100%" style="height: 200px; object-fit: cover;">
                        <!-- elementos ocultos -->
                        <input type="hidden" name="idnot" value="<?php echo $this->noticiaInfo['idnot'] ?>">
                        <textarea name="cuerpo" id="cuerpo"><?php echo $this->noticiaInfo['detalle'] ?></textarea>
                    </div>
                </div>
            </div>
        </form>

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
    </main>

    <script>
        let detalle = document.querySelector("#txtdetalle");
        let modal = new bootstrap.Modal(document.getElementById('modal-archivos'));
        detalle.addEventListener('input', autoResize, false);

        tinymce.init({
            selector: '#editor',
            language: "es",
            encoding: 'UTF-8',
            plugins: 'link media table image emoticons advlist lists code table template example paste',
            toolbar: 'formatselect | bold italic | alignleft aligncenter alignright alignjustify | numlist bullist checklist | forecolor backcolor | link media image emoticons removeformat code ',
            menubar: false,
            content_style: '@import url("https://fonts.googleapis.com/css2?family=Roboto&display=swap"); body {font-family: "Roboto", sans-serif; font-size: 17px; line-height: 1.6;}',
            height: '740',
            object_resizing: true,
            fix_list_elements: true,
            media_dimensions: true,
            forced_root_block: 'div',
            paste_as_text: true,
            paste_remove_styles: true,
            paste_remove_styles_if_webkit: true,
            default_link_target: "_blank",
        });

        function autoResize() {
            this.style.height = 'auto';
            this.style.height = this.scrollHeight + 'px';
        }

        function onContFiles(num) {
            document.getElementById("numfiles").innerText = `${num} archivos`;
        }

        function onchangePortada(val) {
            document.getElementById("img-portada").src = val;
        }

        function showpreview(e) {
            e.preventDefault();
            let cuerpo = document.getElementById("cuerpo");
            cuerpo.value = tinyMCE.get('editor').getContent();
            e.currentTarget.submit();
        }

        function guardarNoticia() {
            let titulo = document.getElementById("titulo");
            if (titulo.value == "") {
                titulo.focus();
                showAlert("Debe ingresar el titulo de la publicación para continuar", "warning");
                return;
            }
            document.getElementById("cuerpo").value = tinyMCE.get('editor').getContent();
            let form = new FormData(document.getElementById("form-data"));
            fetch("/admin/editor/<?php echo $this->action ?>", {
                method: "POST",
                body: form
            }).then(function(res) {
                return res.text()
            }).then(function(res) {
                if (res.trim() == "OK") {
                    showAlert("Publicación <?php echo $this->action == 'guardar' ? 'guardada' : 'editada' ?> correctamente", "success");
                } else {
                    showAlert(res, "error");
                }
            });
        }

        function showAlert(mensaje, icon) {
            Swal.fire({
                icon: icon,
                text: mensaje,
                allowOutsideClick: false
            }).then((result) => {
                if (result.isConfirmed) {
                    if (icon === 'success') {
                        location.href = '/admin/noticias/all';
                    }
                }
            });;
        }

        function addContentHtml(tipo, uri) {
            let html = tinyMCE.get('editor').getContent();
            if (tipo == 'img') {
                html += `<div><img src="${uri}" width="80%"></div>`;
            } else if (tipo == 'video') {
                html += `<div><video src="${uri}" width="100%" height="400" controls></video></div>`;
            } else if (tipo == 'pdf') {
                html += `<div><iframe src="${uri}" width="100%" height="670" frameborder="0"></iframe></div>`;
            } else {
                html += `<div><a href="${uri}" target="_blank">${uri}</a></div>`;
            }
            tinyMCE.get('editor').setContent(html);
            modal.hide();
        }

        setTimeout(() => {
            let loader = document.getElementById('preloader');
            loader.style.opacity = '0';
            setTimeout(() => {
                loader.style.display = 'none';
            }, 500);
        }, 2200);
    </script>

</body>

</html>