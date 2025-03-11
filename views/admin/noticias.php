<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOTICIAS - <?php echo EMPRESA ?></title>
    <link rel="shortcut icon" href="<?php echo WEBURL ?>/assets/img/icons/escudo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="<?php echo WEBURL ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo WEBURL ?>/assets/css/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.css">
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
        div.card {
            background: rgb(248, 248, 248);
            border-color: rgb(218, 218, 218);
            color: rgb(70, 70, 70);
        }

        div.card-footer {
            display: flex;
            flex-direction: row;
            align-items: center;
            background: transparent;
            border-color: rgb(218, 218, 218);
            padding: 12px 17px;
        }

        div.card-footer .btn {
            padding-top: 6px;
            padding-bottom: 4px;
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
        <div class="d-flex px-1" style="align-items: center;">
            <div class="tab-titulo">
                NOTICIAS
            </div>
            <div class="ms-auto d-flex" style="align-items: center;">
                <div>Categoría : </div>
                <div class="ms-2 me-3">
                    <select class="form-select" onchange="cambiarCategoria(this.value)">
                        <option value="all">Todas</option>
                        <?php
                        foreach ($this->listCategorias as $key => $val) : ?>
                            <option value="<?php echo $key ?>" <?php echo $this->categoria == $key ? 'selected' : '' ?>>
                                <?php echo $val['nombre'] ?>
                            </option>
                        <?php endforeach;
                        ?>
                    </select>
                </div>
                <button class="btn btn-success text-white" onclick="location.href = '/admin/editor'"><i class="fas fa-plus"></i>&nbsp; Nueva noticia</button>
            </div>
        </div>
        <hr>
        <div class="row">
            <?php
            foreach ($this->listNoticias as $val) : ?>
                <div class="col-md-3 my-3 px-3" id="card-<?php echo $val['idnot'] ?>">
                    <div class="card h-100 shadow-sm">
                        <?php if(!empty($val['portada'])) { ?>
			    <img src="<?php echo $val["portada"]; ?>" onerror="this.src = `https://via.placeholder.com/320x220`" width="100%" height="190" style="object-fit: cover;">
			<?php } ?>
                        <div class="card-body p-3">
                            <h6 style="color: var(--color2);"><?php echo $val['catname'] ?></h6>
                            <a href="/noticia/<?php echo $val['tagname'] ?>" class="text-uppercase" target="_blank"><?php echo $val['titulo'] ?></a>
                            <h6 class="mt-2"><i class="far fa-calendar-alt"></i> <?php echo Helpers::formatDate($val['fecpub']) ?></h6>
                        </div>
                        <div class="card-footer gx-5">
                            <a href="/admin/editor/vista/<?php echo $val['idnot'] ?>" class="btn btn-sm btn-outline-success me-1" title="Editar"><i class="fas fa-pencil-alt"></i></a>
                            <button class="btn btn-sm btn-outline-danger ms-1" title="Eliminar" onclick="eliminarNoticia(<?php echo $val['idnot'] ?>)"><i class="far fa-trash-alt"></i></button>
                            <div class="ms-auto d-flex">
                                <label class="form-check-label me-1" style="padding-top: 1px; cursor: pointer;" for="check-<?php echo $val['idnot'] ?>">Visible</label>
                                <input class="form-check-input ms-1" type="checkbox" id="check-<?php echo $val['idnot'] ?>" onclick="cambiarEstado(<?php echo $val['idnot'] ?>)" style="border-radius: 2px; transform: scale(1.08); cursor: pointer;" <?php echo $val['visible'] == 'S' ? 'checked' : '' ?>>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;
            ?>
        </div>
        <hr>
        <div class="row pt-1 pb-4">
            <div class="col pt-1">
                Total de resultados : &nbsp; <?php echo $this->model->totalRows(); ?> registros
            </div>
            <div class="col">
                <?php
                if (count($this->listNoticias) > 0) : ?>
                    <ul class="pagination justify-content-end">
                        <?php echo $this->listPaginacion($this->categoria, $this->pagina); ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </main>

    <script>
        function cambiarCategoria(valor) {
            location.href = '/admin/noticias/' + valor;
        }

        function eliminarNoticia(id) {
            Swal.fire({
                icon: 'question',
                text: '¿Está seguro de eliminar este archivo?',
                showDenyButton: true,
                allowOutsideClick: false,
                confirmButtonText: 'Aceptar',
                denyButtonText: 'Cancelar',
            }).then(async (result) => {
                if (result.isConfirmed) {
                    let uri = `/admin/noticias/eliminarNoticia/${id}`;
                    fetch(uri, {
                        method: "GET"
                    }).then(function(res) {
                        return res.text()
                    }).then(function(res) {
                        if (res.trim() == "OK") {
                            document.getElementById("card-" + id).remove();
                            showAlert("NOTICIA ELIMINIDA CORRECTAMENTE", "success");
                        } else {
                            showAlert(res, "error");
                        }
                    });
                }
            });
        }

        function cambiarEstado(id) {
            let estado = document.getElementById("check-" + id).checked;
            estado = estado ? 'S' : 'N';
            let uri = `/admin/noticias/cambiarEstado/${id}/${estado}`;
            fetch(uri, {
                method: "GET"
            }).then(function(res) {
                return res.text()
            }).then(function(res) {
                if (res.trim() == "OK") {
                    showAlert("Se actualizo el estado de la publicación", "success");
                } else {
                    showAlert(res, "error");
                }
            });
        }

        function showAlert(mensaje, icon) {
            Swal.fire({
                icon: icon,
                text: mensaje,
                allowOutsideClick: true
            });
        }

        setTimeout(() => {
            let loader = document.getElementById('preloader');
            loader.style.opacity = '0';
            setTimeout(() => {
                loader.style.display = 'none';
            }, 500);
        }, 2000);
    </script>

</body>

</html>