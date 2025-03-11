<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REVISTA - <?php echo EMPRESA ?></title>
    <link rel="shortcut icon" href="<?php echo WEBURL ?>/assets/img/icons/escudo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="<?php echo WEBURL ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo WEBURL ?>/assets/css/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.css">
</head>

<body>

    <!-- scripts -->
    <script src="<?php echo WEBURL ?>/assets/js/vue.min.js"></script>
    <script async src="<?php echo WEBURL ?>/assets/js/bootstrap.min.js"></script>
    <script async src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.js"></script>

    <!-- includes -->
    <?php include_once 'includes/header.phtml'; ?>
    <?php include_once 'includes/menu.phtml'; ?>

    <style>
        table .btn {
            width: 32px;
            height: 31px;
            padding: 0;
        }

        table a.btn {
            padding-top: 2px;
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
                REVISTA
            </div>
            <div class="ms-auto d-flex flex-row" style="align-items: center;">
                <button class="btn btn-success" @click="add_item()"><i class="fas fa-plus"></i>&nbsp; Agregar revista</button>
            </div>
        </div>
        <hr>
        <div class="w-100 pt-2 pb-4">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-primary" style="width: 60px;">#</th>
                        <th class="text-primary">NOMBRE</th>
                        <th class="text-primary">ENLACE</th>
                        <th class="text-primary" style="width: 170px;">FECHA DE REGISTRO</th>
                        <th class="text-primary" style="width: 140px;">OPCIONES</th>
                    </tr>
                </thead>
                <tbody style="border-top: none;">
                    <tr v-for="(item, index) in revista_array">
                        <td>{{index+1}}</td>
                        <td><input type="text" class="form-control" v-model="item.nombre" placeholder="Ingresa nombre de la revista"></td>
                        <td><input type="link" class="form-control" v-model="item.enlace" placeholder="Ingresa enlace de revista"></td>
                        <td><input type="date" class="form-control" v-model="item.fecreg"></td>
                        <td>
                            <button class="btn btn-outline-primary mx-1" @click="save_item(index)" title="Guardar"><i class="fas fa-save"></i></button>
                            <button class="btn btn-outline-danger mx-1" @click="delete_item(index)" title="Eliminar"><i class="far fa-trash-alt"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <!-- scripts -->
    <script>
        new Vue({
            el: '#app',
            data() {
                return {
                    revista_array: JSON.parse('<?php echo $this->listRevista ?>')
                }
            },
            methods: {
                add_item() {
                    this.revista_array.unshift({
                        idrev: null,
                        nombre: '',
                        enlace: '',
                        fecreg: '<?php echo date('Y-m-d') ?>'
                    });
                },
                async save_item(index) {
                    let obj = this.revista_array[index];
                    let uri = obj.idrev == null ? '/admin/revista/guardar' : '/admin/revista/editar';
                    let dat = new FormData();
                    dat.append("idrev", obj.idrev);
                    dat.append("nombre", obj.nombre);
                    dat.append("enlace", obj.enlace);
                    dat.append("fecreg", obj.fecreg);
                    let res = await this.requestAJAX(uri, 'POST', dat);
                    if (res.length <= 2) {
                        this.revista_array[index].idrev = res.trim();
                        this.mostrarMessage("Datos guardados correctamente", "success");
			location.reload();
                    } else {
                        this.mostrarMessage(res, "error");
                    }
                },
                async delete_item(index) {
                    if (this.revista_array[index].idrev == null) {
                        this.revista_array.splice(index, 1);
                    } else {
                        let uri = "/admin/revista/eliminar/" + this.revista_array[index].idrev;
                        let res = await this.requestAJAX(uri, 'GET', null);
                        if (res == 'OK') {
                            this.mostrarMessage("Registro eliminado correctamente", "success");
                            this.revista_array.splice(index, 1);
                        } else {
                            this.mostrarMessage(res, "error");
                        }
                    }
                },
                mostrarMessage(message, type) {
                    if (type == 'success') {
                        Swal.fire({
                            icon: 'success',
                            text: message,
                            showConfirmButton: false,
                            timer: 1800
                        });
                    } else {
                        Swal.fire({
                            icon: type,
                            text: message,
                        });
                    }
                },
                requestAJAX(uri, metodo, data) {
                    const resp = fetch(uri, {
                        method: metodo,
                        body: data
                    }).then((res) => {
                        return res.text();
                    }).then((res) => {
                        return res;
                    });
                    return resp;
                }
            }
        });

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