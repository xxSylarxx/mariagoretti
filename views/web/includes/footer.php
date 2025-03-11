<footer class="container-fluid px-0" id="footer">
    <br>
    <div class="container py-1">
        <div class="row justify-content-between">
            <div class="col-md-5 my-2">
                <h2 class="text-white fw-bold">Contáctenos</h2>
                    <a href="<?php echo $pivotHome['whatsapp'] ?>" target="_blank">
                        <button class="btn btn-warning text-white my-3 fw-bold">Comunícate ahora &nbsp;<i class="fab fa-whatsapp"></i></button>
                    </a>
                <div class="d-flex text-white my-3" style="align-items: center;">
                    <span style="width: 10px; text-align: center;"><i class="far fa-envelope"></i></span>
                    <span class="ms-4"><?php echo $pivotHome['correo'] ?></span>
                </div>
                <div class="d-flex text-white my-3" style="align-items: center;">
                    <span style="width: 10px; text-align: center;"><i class="fas fa-phone-alt"></i></span>
                    <span class="ms-4">
                        <?php echo $pivotHome['celular'] ?>
                        <?php echo !empty($pivotHome['telefono']) ? '<br>' . $pivotHome['telefono'] : '' ?> 
                    </span>
                </div>
                <div class="d-flex text-white my-3" style="align-items: center;">
                    <span style="width: 10px; text-align: center;"><i class="fas fa-map-marker-alt"></i></span>
                    <span class="ms-4"><?php echo $pivotHome['direction'] ?></span>
                </div>
                <br>
                <a href="<?php echo $pivotHome['liblink'] ?>" target="_blank" class="text-white">
                    <img src="/assets/img/icons/book_reclamo.png" height="42">
                    <span>Libro de reclamaciones</span>
                </a>
            </div>
            <div class="col-md-6 my-2">
                <h2 class="text-white fw-bold">
                    Envíanos tu consulta
                </h2>
                <form class="form-group" id="form-contacto">
                    <input type="text" class="form-control my-3" name="nombre" placeholder="Ingrese nombre" required>
                    <input type="text" class="form-control my-3" name="correo" placeholder="Ingrese email" required>
                    <textarea class="form-control mb-4" rows="4" name="consulta" placeholder="Escribe tu consulta ..." required></textarea>
                    <button class="btn btn-warning text-white" type="submit">Enviar <i class="fas fa-chevron-circle-right"></i></button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <div class="barinf">
        <span>Colegio YMCA Abraham Valdelomar © <?php echo date('Y') ?></span>
        <a href="https://cubicol.pe" class="ms-auto">Desarrollado por Sensoft Solutions</a>
    </div>
</footer>

<script>
    const enviarCorreo = (e) => { 
        e.preventDefault();
        let form = new FormData(document.getElementById("form-contacto"));
        fetch('/admin/email/contacto', {
            method: "POST",
            body: form
        }).then(function(res){
            return res.text();
        }).then(function(res){
            alert(res);
            e.target.reset();
        });
    }
</script>