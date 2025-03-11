<?php
$menu_1 = 'nav-link';
$menu_2 = 'nav-link';
$menu_3 = 'nav-link';
$menu_4 = 'nav-link';
$menu_5 = 'nav-link';
$menu_6 = 'nav-link';
switch ($namepag) {
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
<div id="header-top"></div>
<header class="fixed-top" id="header">
    <div class="barsup">
        <a href="https://ymcaperu.org/" target="_blank">YMCA</a>
        <a href="https://colegios.pucp.edu.pe/abrahamvaldelomar/login/index.php" class="mx-4" target="_blank">Infopuc</a>
        <a href="/revista">Revista</a>
        <div class="ms-auto">
            <a href="<?php echo $pivotHome['intranet'] ?>" target="_blank">
                <i class="fa fa-globe" aria-hidden="true"></i>
                <span>Intranet</span>
            </a>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand animate__animated animate__zoomIn" href="/">
            <img src="<?php echo WEBURL ?>/assets/img/icons/logotipo.png" id="logotipo">
        </a>
        <button class="navbar-toggler py-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse animate__animated animate__zoomIn" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="<?php echo $menu_1 ?>" href="/">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="<?php echo $menu_2 ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Quiénes somos <i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/nosotros">Nosotros</a></li>
                        <li><a class="dropdown-item" href="/convenios">Convenios</a></li>
                        <li><a class="dropdown-item" href="/testimonios">Testimonios</a></li>
                        <li><a class="dropdown-item" href="/reconocimientos">Reconocimientos</a></li>
                        <li><a class="dropdown-item" href="/infraestructura">Infraestructura</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="<?php echo $menu_3 ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Propuesta Educativa <i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/perfil-egreso">Perfil de egreso</a></li>
                        <li><a class="dropdown-item" href="/metodologia">Metodología YMCA</a></li>
                        <li><a class="dropdown-item" href="/talleres">Talleres</a></li>
                        <li><a class="dropdown-item" href="/tutoria">Tutoría personalizada</a></li>
                        <li><a class="dropdown-item" href="/departamento">Dpto. Psicopedagógico</a></li>
                        <li><a class="dropdown-item" href="/educacion-distancia">Educación a distancia</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="<?php echo $menu_4 ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Empoderamiento Juvenil <i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/estudiantes">Estudiantes</a></li>
                        <li><a class="dropdown-item" href="/red-educativa">Red Educativa YMCA</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="<?php echo $menu_5 ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Noticias <i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/noticias/esta-pasando">Lo que está pasando</a></li>
                        <li><a class="dropdown-item" href="/noticias/reflexiones">Reflexiones sobre la familia</a></li>
                        <li><a class="dropdown-item" href="/noticias/conversando">Conversando con Dios</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="<?php echo $menu_6 ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Admisión <i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/admision">Proceso 2022</a></li>
                    </ul>
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