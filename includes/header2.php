<?php
$pagina = basename($_SERVER['PHP_SELF']);
$menu_1 = 'nav-link';
$menu_2 = 'nav-link';
$menu_3 = 'nav-link';
$menu_4 = 'nav-link';
$menu_5 = 'nav-link';
$menu_6 = 'nav-link';
switch ($pagina) {
    case 'index':
        $menu_1 .= ' active';
        break;
    case 'nosotros':
    case 'convenios':
    case 'testimonios':
    case 'reconocimientos':
    case 'infraestructura':
        $menu_2 .= ' active';
        break;
    case 'perfil-egreso':
    case 'metodologia':
    case 'talleres':
    case 'tutoria':
    case 'departamento':
    case 'educacion-distancia':
        $menu_3 .= ' active';
        break;
    case 'red-educativa':
    case 'estudiantes':
        $menu_4 .= ' active';
        break;
    case 'noticia':
    case 'noticias':
        $menu_5 .= ' active';
        break;
    case 'admision':
        $menu_6 .= ' active';
        break;
}
?>
<style>
    @media only screen and (max-width: 450px) {
    
    .navbar-light .navbar-toggler{
        color:white;
        border-color:white;
    }
}
</style>
<div id="header-top"></div>
<header class="fixed-top" id="header" style="background-color:var(--color3);">
    <!--  <div class="barsup">
        <a href="#" target="_blank">YMCA</a>
        <a href="#" class="mx-4" target="_blank">Infopuc</a>
        <a href="/revista">Revista</a>
        <div class="ms-auto">
            <a href="#" target="_blank">
                <i class="fa fa-globe" aria-hidden="true"></i>
                <span>Intranet</span>
            </a>
        </div>
    </div> -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand animate__animated animate__zoomIn" href="index.php">
            <img src="./assets/img/icons/logo_blanco.png" id="logotipo">
        </a>
        <button class="navbar-toggler py-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse animate__animated animate__zoomIn" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="<?php echo $menu_1 ?>" href="index.php">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="<?php echo $menu_2 ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Nosotros <i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="./somos.php">Quienes Somos</a></li>
                        <!-- <li><a class="dropdown-item" href="./filosofia.php">Nuestra Filosofía</a></li> -->
                       <!--  <li><a class="dropdown-item" href="./assets/files/reglamento_interno.pdf" target="_blank">Reglamento</a></li> -->
                        <li><a class="dropdown-item" href="./infraestructura.php">Infraestructura</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="<?php echo $menu_3 ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Propuesta Educativa <i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="./metodologia.php">Metodología</a></li>
                        <!-- <li><a class="dropdown-item" href="./perfiles.php">Perfiles</a></li> -->
                        <!-- <li><a class="dropdown-item" href="./distancia.php">Educación a distancia</a></li> -->
                        <li><a class="dropdown-item" href="./servicios.php">Servicios</a></li>
                        <li><a class="dropdown-item" href="./talleres.php">Talleres</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="<?php echo $menu_4 ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Niveles <i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="./inicial.php">Inicial</a></li>
                        <li><a class="dropdown-item" href="./primaria.php">Primaria</a></li>
                        <li><a class="dropdown-item" href="./secundaria.php">Secundaria</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="<?php echo $menu_5 ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Novedades <i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="./documentos.php">Documentos</a></li>
                        <li><a class="dropdown-item" href="./eventos.php">Eventos</a></li>
                        <li><a class="dropdown-item" href="./noticias.php">Noticias</a></li>
                    </ul>
                </li>
                <li class="nav-item">

                </li>
                <li class="nav-item dropdown">
                    <a class="<?php echo $menu_6 ?>" href="./admision.php">Admisión</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<script>
    // adaptar altura de cabecera
    var height = document.getElementById('header').clientHeight;
    document.getElementById('header-top').style.marginTop = height + "px";
</script>