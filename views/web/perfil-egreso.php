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
        p {
            line-height: 2;
        }

        ul.timeline {
            list-style-type: none;
            position: relative;
        }

        ul.timeline:before {
            content: ' ';
            background: #d4d9df;
            display: inline-block;
            position: absolute;
            left: 29px;
            width: 2px;
            height: 100%;
            z-index: 400;
        }

        ul.timeline>li {
            margin: 25px 0;
            padding-left: 20px;
        }

        ul.timeline>li:before {
            content: ' ';
            background: white;
            display: inline-block;
            position: absolute;
            border-radius: 50%;
            border: 3px solid #ffa300;
            left: 19px;
            width: 23px;
            height: 23px;
            z-index: 400;
        }

        #portada {
            background-image: url(/assets/img/portada-all-2.png);
            background-size: 100%;
            color: white;
            padding-top: 2em;
            height: 240px;
        }

        #portada .breadcrumb-item::before {
            color: white;
        }

        #portada h1 {
            font-size: 2.5em;
            margin-top: .9em;
        }

        button.accordion-button {
            font-family: 'Nunito-Bold';
            color: var(--color4);
            text-transform: uppercase;
            border: none;
            padding: 2px 14px;
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
            #portada {
                background-image: url(/assets/img/portada-sm-1.png);
                background-size: 100% 100%;
                height: 160px;
                padding-top: 1.5em;
            }

            #portada h1 {
                font-size: 2.1em;
            }
        }
    </style>

    <section class="container-fluid px-0" id="portada">
        <div class="container px-3">
            <ol class="breadcrumb text-white" style="font-size: 16px;">
                <li class="breadcrumb-item text-white"><a href="/" class="text-white">Inicio</a></li>
                <li class="breadcrumb-item text-white"><a href="" class="text-white">Propuesta Educativa</a></li>
                <li class="breadcrumb-item text-white" aria-current="page">Perfil de Egreso</li>
            </ol>
            <h1>Perfil de Egreso</h1>
        </div>
    </section>

    <br><br><br>

    <section class="container">
        <div class="row justify-content-between">
            <div class="col-md-5 mb-4 text-justify">
                <br>
                <p>El estudiante de los colegios YMCA demuestra carácter, integridad, es social y cívicamente responsable, con pensamiento crítico y creativo, capaz de plantear alternativas de solución innovadoras y éticas ante problemas y necesidades de su contexto, ejerciendo un liderazgo con principios cristianos.</p>
                <br>
                <div class="accordion" id="accordionExample">
                    <ul class="timeline">
                        <li>
                            <div class="accordion-item border-0">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false">
                                    Salud física, mental y espiritual
                                </button>
                                <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-justify">
                                        El estudiante asume un estilo de vida saludable evidenciado en sus buenos hábitos físicos, mentales y espirituales de manera diaria.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="accordion-item border-0">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false">
                                    Comunicación efectiva
                                </button>
                                <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-justify">
                                        El estudiante se comunica con las personas en su lengua materna y en el inglés, como segunda lengua, de manera asertiva, efectiva y constructiva a fin de interactuar en diferentes contextos y propósitos comunicativos.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="accordion-item border-0">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false">
                                    Inteligencia emocional
                                </button>
                                <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-justify">
                                        El estudiante demuestra seguridad emocional, autonomía en la toma de decisiones y respeto por los sentimientos y percepciones de los demás.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="accordion-item border-0">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false">
                                    Pensamiento crítico
                                </button>
                                <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-justify">
                                        El estudiante analiza e interpreta de manera objetiva, crítica y ética problemáticas, fenómenos o situaciones personales, sociales, ambientales, políticas, económicas, culturales y tecnológicas; así mismo, defiende su posición sobre la base del conocimiento y la ética.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="accordion-item border-0">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false">
                                    Pensamiento creativo
                                </button>
                                <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-justify">
                                        El estudiante aporta soluciones originales e innovadoras a problemas de su contexto, desde un marco ético.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="accordion-item border-0">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false">
                                    Razonamiento lógico-matemático
                                </button>
                                <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-justify">
                                        El estudiante utiliza estrategias y conocimientos lógico-matemáticos en diversas situaciones de su vida diaria, aportando a su entorno.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="accordion-item border-0">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false">
                                    Investigación científica
                                </button>
                                <div id="collapse7" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-justify">
                                        El estudiante indaga y analiza los fenómenos naturales y artificiales mediante el método científico, y se apropia de los conocimientos científicos para mejorar su calidad de vida y el cuidado del medio ambiente.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="accordion-item border-0">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false">
                                    Dominio de las TIC
                                </button>
                                <div id="collapse9" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-justify">
                                        El estudiante emplea de manera creativa, efectiva y ética las tecnologías de la información y la comunicación, con el fin de comunicarse, seguir aprendiendo y brindar soluciones a problemas de su contexto.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="accordion-item border-0">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false">
                                    Metacognición
                                </button>
                                <div id="collapse10" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-justify">
                                        El estudiante demuestra conocimiento, control y regulación en sus procesos de aprendizaje, demostrando estrategias para el autoaprendizaje, de forma responsable y comprometida, a través de la lectura, la investigación y la evaluación de los aprendizajes que desarrolla.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="accordion-item border-0">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false">
                                    Identidad
                                </button>
                                <div id="collapse11" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-justify">
                                        El estudiante se reconoce como persona digna, capaz, única y valiosa, con un propósito trascendente de acuerdo a su diseño determinado por Dios y comprometido con su permanente crecimiento personal para favorecer su propio bienestar y el de los demás.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="accordion-item border-0">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false">
                                    Responsabilidad cívica y ciudadana
                                </button>
                                <div id="collapse12" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-justify">
                                        El estudiante reconoce y asume responsablemente sus deberes cívico-ciudadanos; así mismo, promueve la democracia como forma de gobierno y de convivencia social.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="accordion-item border-0">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="false">
                                    Responsabilidad social
                                </button>
                                <div id="collapse13" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-justify">
                                        El estudiante demuestra sensibilidad y solidaridad por los que menos tienen; así mismo, asume un estilo de vida a favor del cuidado del medio ambiente y el patrimonio nacional.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="accordion-item border-0">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse14" aria-expanded="false">
                                    Liderazgo cristiano
                                </button>
                                <div id="collapse14" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-justify">
                                        El estudiante se conduce de acuerdo al modelo de liderazgo de servicio de Jesucristo, basado en principios y valores cristianos.
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5">
                <img src="/assets/img/fotos/perfil-egreso.jpg" width="100%">
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