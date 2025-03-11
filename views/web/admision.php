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

    <?php include_once 'includes/header.php' ?>

    <style>
        p {
            line-height: 2;
        }

        /*Line*/
        .timeline>li::before {
            content: '';
            position: absolute;
            width: 3px;
            background-color: #E7E7E7;
            top: 0;
            bottom: 0;
            left: -19px;
        }

        /*Circle*/
        .timeline>li::after {
            text-align: center;
            padding-top: 10px;
            z-index: 10;
            content: counter(item);
            font-family: 'Nunito-Bold';
            position: absolute;
            width: 50px;
            height: 50px;
            border: 3px solid #ffa300;
            background-color: #ffffff;
            border-radius: 50%;
            top: 0;
            left: -43px;
        }

        /*Content*/
        .timeline>li {
            counter-increment: item;
            padding: 10px 10px;
            margin-left: 0px;
            min-height: 70px;
            position: relative;
            background-color: white;
            list-style: none;
        }

        .timeline>li:nth-last-child(1)::before {
            width: 0px;
        }

        .bg-franja {
            background: linear-gradient(to right, #ffffff 80%, rgb(248, 248, 248) 30%);
            padding-top: 40px;
            padding-bottom: 70px;
        }

        button.accordion-button {
            color: var(--color4);
            border: none;
            padding: 11px 14px;
            font-size: 18px;
        }

        button.accordion-button::after {
            content: "";
            background-image: none;
        }

        button.accordion-button:not(.collapsed) {
            background: white;
            color: var(--color1);
            border: none;
        }

        button.accordion-button:not(.collapsed)::after {
            -webkit-transform: rotate(-180deg);
            transform: rotate(-180deg);
            background: white;
        }

        button.accordion-button:focus {
            border-color: white;
            box-shadow: none;
            border: none;
        }
        @media only screen and (max-width: 650px) {
            #col-botones {
                display: none;
            }
        }
    </style>

    <br><br><br>

    <section class="container">
        <div class="row justify-content-between">
            <div class="col">
                <h1 class="text-info">ADMISIÓN 2022</h1>
            </div>
            <div class="col text-end" id="col-botones">
                <a href="#documentos" class="btn btn-warning">Documentos</a>
                <a href="#preguntas" class="btn btn-warning ms-3">Preguntas Frecuentes</a>
            </div>
        </div>
        <br><br>
        <div class="row justify-content-between">
            <div class="col-md-5">
                <div class="text-justify">
                    <h3 class="text-warning">Proceso: Estudiantes Nuevos</h3>
                    <br>
                    <ul class="timeline">
                        <li>
                            <p class="ms-4">Completar la ficha de inscripción</p>
                        </li>
                        <li>
                            <p class="ms-4">Presentación de la propuesta pedagógica: cita personal con el coordinador académico</p>
                        </li>
                        <li>
                            <p class="ms-4">Entrega de documentos: copia del DNI del estudiante y los padres de familia, copia del Informe Académico del colegio de procedencia</p>
                        </li>
                        <li>
                            <p class="ms-4">Experiencia de incorporación: cita con el Dpto. Psicopedagógico</p>
                        </li>
                        <li>
                            <p class="ms-4">Documentos de ingreso entregados por nuestro colegio: Constancia de ingreso y pasos para la matrícula</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 text-center py-4">
                <img src="<?php echo WEBURL ?>/assets/img/fotos/foto-de-admision.png" class="w-100">
                <br><br><br>
                <a href="https://abrahamvaldelomar.cubicol.pe/visitante/registro-interesados" target="_blank" class="btn btn-warning text-white">
                    Inicia tu proceso aquí
                </a>
            </div>
        </div>
    </section>

    <br><br>

    <section class="container bg-franja" id="documentos">
        <div class="row">
            <h2 class="text-warning">Documentos: Estudiantes Nuevos</h2>
        </div>
        <div class="row pt-4">
            <div class="col-md-7 my-2">
                <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
                    <div class="d-flex flex-row">
                        <span class="text-info"><i class="far fa-check-circle"></i></span>
                        <span class="s1 ms-2">Copia de la partida de nacimiento del estudiante</span>
                        <br><br>
                    </div>
                    <div class="d-flex flex-row">
                        <span class="text-info"><i class="far fa-check-circle"></i></span>
                        <span class="s1 ms-2">Copia del DNI del estudiante y los padres de familia</span>
                        <br><br>
                    </div>
                    <div class="d-flex flex-row">
                        <span class="text-info"><i class="far fa-check-circle"></i></span>
                        <span class="s1 ms-2">Informe Académico Anual 2021 (Informe de Progreso de las Competencias del Estudiante 2021) del colegio de procedencia</span>
                        <br><br><br>
                    </div>
                    <div class="d-flex flex-row">
                        <span class="text-info"><i class="far fa-check-circle"></i></span>
                        <span class="s1 ms-2">Constancia de no adeudo del colegio de procedencia</span>
                        <br><br>
                    </div>
                    <div class="d-flex flex-row">
                        <span class="text-info"><i class="far fa-check-circle"></i></span>
                        <span class="s1 ms-2">Ficha de matrícula del SIAGIE</span>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-md my-2">
                <div class="d-flex flex-row">
                    <span class="text-info"><i class="far fa-check-circle"></i></span>
                    <span class="s1 ms-2">Constancia de matrícula del SIAGIE</span>
                    <br><br>
                </div>
                <div class="d-flex flex-row">
                    <span class="text-info"><i class="far fa-check-circle"></i></span>
                    <span class="s1 ms-2">Certificados de estudios</span>
                    <br><br>
                </div>
                <div class="d-flex flex-row">
                    <span class="text-info"><i class="far fa-check-circle"></i></span>
                    <span class="s1 ms-2">Copia de carné de vacunas (Nivel Inicial)</span>
                    <br><br>
                </div>
                <div class="d-flex flex-row">
                    <span class="text-info"><i class="far fa-check-circle"></i></span>
                    <span class="s1 ms-2">1 Fotografía tipo carné digital</span>
                    <br><br>
                </div>
                <div class="d-flex flex-row" id="list-item-3">
                    <span class="text-info"><i class="far fa-check-circle"></i></span>
                    <span class="s1 ms-2">Constancia del pago de la cuota de ingreso</span>
                    <br>
                </div>
            </div>
        </div>
    </section>

    <br><br>

    <section class="container" id="preguntas">
        <div class="row mb-4">
            <div class="col">
                <h2 class="text-warning">Preguntas Frecuentes <i class="fas fa-question-circle"></i></h2>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-5 my-2">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item border-0">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            ¿En qué fecha inicia y finaliza el proceso de admisión?
                        </button>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-justify">
                                <p>Inicia en junio y finaliza en febrero, de acuerdo a las vacantes disponibles.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            ¿Hay algún tipo de prioridad para el ingreso?
                        </button>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-justify">
                                <p>Sí. Tienen primera opción de ingreso los hermanos de los estudiantes del colegio y los hijos de los exalumnos, así como familiares directos de los miembros de la comunidad educativa.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            ¿A qué edad debe postular mi hijo(a) al colegio cuando aún no ha asistido a ninguna institución educativa?
                        </button>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-justify">
                                <p>Lo ideal es que inicie con los 3 años cumplidos al 31 de marzo a la primera aula de Educación Inicial, de esta manera tendrá la adecuada estimulación temprana para desarrollar sus capacidades cognitivas, emocionales y sociomotrices.</p>
                                <p>A primer grado de primaria, podrá postular con 6 años cumplidos al 31 de marzo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                            ¿Debo realizar algún pago por inscripción o evaluación?
                        </button>
                        <div id="flush-collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-justify">
                                <p>No. Si es estudiante nuevo, el pago que realiza es el de la cuota de ingreso. Este pago se realiza después de pasar la experiencia de incorporación y ya ha recibido la constancia de ingreso al colegio.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                            ¿Qué es la experiencia de incorporación?
                        </button>
                        <div id="flush-collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-justify">
                                <p>Es una evaluación inicial e integral del estudiante y la familia con el fin de identificar las fortalezas del estudiante y sus necesidades de aprendizaje. De esta manera, podremos determinar de manera más clara las metas de aprendizaje y/o los acompañamientos que requiere cada estudiante. Este proceso es llevado a cabo por nuestro Dpto. Psicopedagógico, que está integrado por nuestro equipo de psicólogas, quienes son especialistas y altamente capacitadas para llevar a cabo todo este proceso.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                            ¿Debo pagar por la experiencia de incorporación?
                        </button>
                        <div id="flush-collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-justify">
                                <p>No.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
                            ¿Los talleres son los mismos para cada grado y nivel?
                        </button>
                        <div id="flush-collapse7" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-justify">
                                <p>No. Cada grado y nivel tienen talleres diferenciados de acuerdo a las necesidades de aprendizaje de los estudiantes. Estos son presentados después de la matrícula.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse8" aria-expanded="false" aria-controls="flush-collapse8">
                            ¿Se paga adicional por los talleres extracurriculares?
                        </button>
                        <div id="flush-collapse8" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-justify">
                                <p>No. Estos talleres son brindados como parte de la formación integral a los estudiantes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse9" aria-expanded="false" aria-controls="flush-collapse9">
                            ¿Cuántos talleres puede llevar mi hijo(a)?
                        </button>
                        <div id="flush-collapse9" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-justify">
                                <p>Puede llevar hasta 2 talleres.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse10" aria-expanded="false" aria-controls="flush-collapse10">
                            ¿Participar en los talleres es obligatorio?
                        </button>
                        <div id="flush-collapse10" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-justify">
                                <p>No. Los talleres son opcionales.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse11" aria-expanded="false" aria-controls="flush-collapse11">
                            ¿Si mi hijo(a) no participa en ningún taller, ¿me brindan un descuento en la pensión?
                        </button>
                        <div id="flush-collapse11" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-justify">
                                <p>No. Es un servicio adicional y opcional.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse12" aria-expanded="false" aria-controls="flush-collapse12">
                            ¿Cómo puedo acceder a una beca para mi hijo(o)?
                        </button>
                        <div id="flush-collapse12" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-justify">
                                <p>Solo los estudiantes que han estudiado, como mínimo, un año escolar en el colegio y han demostrado buen desempeño académico y conductual, pueden postular a una beca parcial. Esta beca parcial se solicita estrictamente por razones económicas. El buen desempeño académico y conductual es una condición obligatoria para la postulación, no determina que el estudiante califique para una beca parcial.</p>
                                <p>
                                    Hay un límite de becas que puede otorgar el colegio de acuerdo al presupuesto para el siguiente año lectivo. Las postulaciones se cierran el 30 de noviembre de cada año. Por tanto, todos los que postulen hasta esa fecha y califiquen de acuerdo a la sustentación documentaria, recibirán un porcentaje de beca de acuerdo a límite estipulado.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 my-2">
                <img src="<?php echo WEBURL ?>/assets/img/fotos/estudiantes-admision.png" width="100%">
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