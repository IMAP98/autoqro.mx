<?php
include("./back-end/php/config.php");

$host = $_SERVER["HTTP_HOST"];
$url = $_SERVER["REQUEST_URI"];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NZX5KZ8');
    </script>
    <!-- End Google Tag Manager -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title><?php echo $langHeader['title'] ?></title>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=TAG_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'TAG_ID');
    </script>
</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NZX5KZ8" height="0" width="0" style="display:none;visibility:hidden">
        </iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <style>
        .logo_card__asociado {
            background-image: linear-gradient(to right, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.3)), url("./img/noticia_1.jpg") !important;
            background-size: cover;
            min-height: 17vh;
            position: relative;
            overflow: hidden;
        }

        .nombre_card__asociado {
            min-height: 17vh;
            max-height: 17vh;
        }
    </style>

    <div class="aviso_cookies p-4 pt-5 text-center" id="aviso_cookies">
        <img class="cookie" src="./img/cookie.svg" alt="cookie">
        <h3 class="titulo_2 fs-2 pt-3 pb-2">Cookies</h3>
        <p class="fs-5">Utilizamos cookies propias y de terceros para mejorar nuestros servicios.</p>
        <button class="btn text-center mb-3 btn_aceptar__cookies" id="btn_aceptar__cookies">De acuerdo</button>
        <a href="#" id="link_aviso__cookies" data-bs-toggle="modal" data-bs-target="#modal_cookies">Aviso de cookies</a>
    </div>
    <div class="fondo_aviso__cookies" id="fondo_aviso__cookies"></div>
    <!---------------- Inicio de la barra de navegación ---------------->
    <div class="d-flex justify-content-center">
        <nav class="navbar navbar-expand-xxl mt-3 d-flex">
            <div class="container-fluid m-2">
                <a class="navbar-brand m-0" href="./index.php"><img id="img_nav" src="./img/Logo CAQ - Blanco.png" alt="Inicio" height="50"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-wrap" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mb-2 mb-lg-0 mx-auto">
                        <li class="nav-item me-2 my-auto"><a class="nav-link titulos" href="./queretaro.php">QUERÉTARO</a></li>
                        <li class="nav-item dropdown dropdown-mega position-static me-2 my-auto">
                            <a class="nav-link titulos" href="#" data-bs-toggle="dropdown"><?php echo $langHeader['Asociados'] ?></a>
                            <div class="dropdown-menu shadow m-0 pt-5 pb-5 ps-2 pe-2">
                                <div class="mega-content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-9 asociarme">
                                                <div class="row ps-5 pe-5 mt-3 mb-3">
                                                    <div class="col mx-auto my-auto pt-4 pb-4 ms-2 me-2 menu_asociados oem" onclick="location.href='./oem.php';">
                                                        <p class="titulo_2 text-white me-4 mb-4"><?php echo $langHeader['OEM'] ?></p>
                                                    </div>
                                                    <div class="col mx-auto my-auto pt-4 pb-4 ms-2 me-2 menu_asociados tr1" onclick="location.href='./tr1.php';">
                                                        <p class="titulo_2 text-white me-4 mb-4"><?php echo $langHeader['Tier1'] ?></p>
                                                    </div>
                                                    <div class="col mx-auto my-auto pt-4 pb-4 ms-2 me-2 menu_asociados tr2_aso" onclick="location.href='./tr2.php';">
                                                        <p class="titulo_2 text-white me-4 mb-4"><?php echo $langHeader['Tier2'] ?></p>
                                                    </div>
                                                    <div class="col mx-auto my-auto pt-4 pb-4 ms-2 me-2 menu_asociados afiliados" onclick="location.href='./afiliados.php';">
                                                        <p class="titulo_2 text-white me-4 mb-4"><?php echo $langHeader['Afiliados'] ?></p>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center ps-5 pe-5 mt-3 mb-3">
                                                    <div class="col mx-auto pt-4 pb-4 ms-2 me-2 menu_asociados aliados" onclick="location.href='./aliados_estrategicos.php';">
                                                        <p class="titulo_2 text-white text-end me-4 mb-4"><?php echo $langHeader['AliadosEstrategicos'] ?></p>
                                                    </div>
                                                    <div class="col mx-auto pt-4 pb-4 ms-2 me-2 menu_asociados academia" onclick="location.href='./academia.php';">
                                                        <p class="titulo_2 text-white me-4 mb-4"><?php echo $langHeader['Academia'] ?></p>
                                                    </div>
                                                    <div class="col mx-auto pt-4 pb-4 ms-2 me-2 menu_asociados c_id" onclick="location.href='./centros_i+d.php';">
                                                        <p class="titulo_2 text-white me-4 mb-4"><?php echo $langHeader['CentrosI+D'] ?></p>
                                                    </div>
                                                    <div class="col mx-auto pt-4 pb-4 ms-2 me-2 menu_asociados gobierno" onclick="location.href='./gobierno.php';">
                                                        <p class="titulo_2 text-white me-4 mb-4"><?php echo $langHeader['Gobierno'] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3 p-5 mx-auto my-auto">
                                                <div class="p-4 d-flex mb-3">
                                                    <h2 class="titulo_2"><?php echo $langHeader['QuieroUnirme'] ?></h2>
                                                </div>
                                                <div class="d-flex">
                                                    <a class="btn_1 ms-4 pt-4 pb-4 ps-5 pe-5" href="./contacto.php" role="button"><?php echo $langHeader['VerMas'] ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-mega position-static me-2 my-auto">
                            <a class="nav-link titulos" href="#" data-bs-toggle="dropdown"><?php echo $langHeader['Comites'] ?></a>
                            <div class="dropdown-menu shadow m-0 p-4">
                                <div class="mega-content">
                                    <div class="container-fluid">
                                        <div class="row justify-content-evenly ps-5 pe-5 mt-3 mb-3">
                                            <div class="col-2 pt-4 pb-4 d-flex align-items-end menu_comites proveedores" onclick="location.href='./comite_desarrollo_proveedores.php';">
                                                <img class="img-fluid p-4 pb-0" src="./img/proveedores blanco.png">
                                            </div>
                                            <div class="col-2 pt-4 pb-4 d-flex align-items-end menu_comites ambiental" onclick="location.href='./comite_sustentabilidad.php';">
                                                <img class="img-fluid p-4 pb-0" src="./img/ambiental blanco.png">
                                            </div>
                                            <div class="col-2 pt-4 pb-4 d-flex align-items-end menu_comites exop" onclick="location.href='./comite_excelencia_operacional.php';">
                                                <img class="img-fluid p-4 pb-0" src="./img/operacional blanco.png">
                                            </div>
                                            <div class="col-2 pt-4 pb-4 d-flex align-items-end menu_comites humano" onclick="location.href='./comite_capital_humano.php';">
                                                <img class="img-fluid p-4 pb-0" src="./img/huamano blanco.png">
                                            </div>
                                            <div class="col-2 pt-4 pb-4 d-flex align-items-end menu_comites industrial" onclick="location.href='./comite_seguridad_industrial.php';">
                                                <img class="img-fluid p-4 pb-0" src="./img/industrial blanco.png">
                                            </div>
                                        </div>
                                        <div class="row justify-content-center ps-5 pe-5 mt-3 mb-3">
                                            <div class="col-2 pt-4 pb-4 mx-3 d-flex align-items-end menu_comites patrimonial" onclick="location.href='./comite_seguridad_patrimonial.php';">
                                                <img class="img-fluid p-4 pb-0" src="./img/patrimonial blanco.png">
                                            </div>
                                            <div class="col-2 pt-4 pb-4 mx-3 d-flex align-items-end menu_comites tr2" onclick="location.href='./comite_tr2.php';">
                                                <img class="img-fluid p-4 pb-0" src="./img/tr2 blanco.png">
                                            </div>
                                            <div class="col-2 pt-4 pb-4 mx-3 d-flex align-items-end menu_comites innovacion" onclick="location.href='#';">
                                                <img class="img-fluid p-4 pb-0" src="./img/innovacion blanco.png">
                                            </div>
                                            <div class="col-2 pt-4 pb-4 mx-3 d-flex align-items-end menu_comites capacitacion" onclick="location.href='./comite_capacitacion.php';">
                                                <img class="img-fluid p-4 pb-0" src="./img/capacitacion blanco.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-mega position-static me-2 my-auto">
                            <a class="nav-link titulos" href="#" data-bs-toggle="dropdown"><?php echo $langHeader['Nosotros'] ?></a>
                            <div class="dropdown-menu shadow m-0 p-4">
                                <div class="mega-content px-4">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-3 caja-menu p-5 mx-auto my-auto">
                                                <div class="d-flex">
                                                    <h2 class="text-center"><a href="./nosotros.php#QuienesSomos" class="titulo fs-4"><?php echo $langHeader['QuienesSomos'] ?></a></h2>
                                                </div>
                                                <div class="mt-2">
                                                    <div class="row">
                                                        <a href="./nosotros.php#QuienesSomos" class="enlace_gris"><?php echo $langHeader['NosotrosMin'] ?></a>
                                                    </div>
                                                    <div class="row">
                                                        <a href="./nosotros.php#OrganigramaGeneral" class="enlace_gris"><?php echo $langHeader['Organigrama'] ?></a>
                                                    </div>
                                                    <div class="row">
                                                        <a href="./nosotros.php#MiembrosEquipo" class="enlace_gris"><?php echo $langHeader['MiembrosEquipo'] ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3 caja-menu p-5">
                                                <div class="text-center">
                                                    <h2><a href="#" class="fw-bold nav-link titulo fs-4 disabled pista"><?php echo $langHeader['PreguntasFrecuentes'] ?></a></h2>
                                                </div>
                                            </div>
                                            <div class="col-3 caja-menu p-5">
                                                <div class="text-center">
                                                    <h2><a href="./noticias.php" class="titulo fs-4"><?php echo $langHeader['Actualidad'] ?></a></h2>
                                                </div>
                                            </div>
                                            <div class="col-3 p-5">
                                                <div class="text-center">
                                                    <h2><a href="./contacto.php" class="titulo fs-4"><?php echo $langHeader['Contacto'] ?></a></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item me-2 my-auto">
                            <a class="nav-link titulos" href="#" data-bs-toggle="dropdown"><?php echo $langHeader['ProyectosEstrategicos'] ?></a>
                            <div class="dropdown-menu proy-estra shadow m-0 p-4">
                                <div class="mega-content px-4">
                                    <div class="container-fluid">
                                        <div class="row align-items-center justify-content-center">
                                            <div class="col-4 p-5 mx-auto my-auto">
                                                <div class="text-center mt-4">
                                                    <img class="logo-economia" src="./img/eco-circ.png" alt="Economía circular">
                                                </div>
                                            </div>
                                            <div class="col-4 p-5 caja-menu text-center">
                                                <a class="btn_susten align-self-center pt-4 pb-4 ps-5 pe-5" target="_blank" href="https://economiacircularqro.mx/" role="button">Conoce más</a>
                                            </div>
                                            <div class="col-4 p-5">
                                                <div class="text-center">
                                                    <h2><a href="#" class="fw-bold nav-link titulo_3 fs-4 disabled pista"><?php echo $langHeader['PistaPruebas'] ?></a></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="nav-item d-flex align-items-center m-2">
                        <a href="./contacto.php"><img class="contacto ms-2 me-2" src="./img/Contacto Blanco.png" height="17" alt="Contacto"></a>
                    </div>
                    <!-- <form role="search" method="get" class="search-form" action="">
                        <label>
                            <input type="search" class="search-field mt-1 ms-2 me-2" placeholder="<?php echo $langHeader['Buscar'] ?>">
                        </label>
                        <input type="submit" class="search-submit" value="Search" />
                    </form> -->

                    <!-- <li class="nav-item dropdown dropdown-mega position-static m-2 my-auto">
                        <a href="#" data-bs-toggle="dropdown"><img src="./img/search blanco.png" alt="Idioma" height="20" class="my-auto" id="btn-search"></a>
                        <div class="dropdown-menu shadow m-0 p-5">
                            <div class="mega-content">
                                <div class="container-fluid">
                                    <form role="search" method="get" class="search-form" action="">
                                        <div class="input-group">
                                            <input class="form-control" id="search-input" type="search" placeholder="Buscar...">
                                            <span class="input-group-append">
                                                <button class="btn btn-outline-secondary border-start-0 ms-n3" id="img_nav__busqueda" type="button">
                                                    <img src="./img/search.png" alt="Idioma" height="20" class="my-auto">
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li> -->

                    <li class="nav-item dropdown dropdown-mini position-static m-1 my-auto">
                        <a class="ms-2 me-2" href="#" data-bs-toggle="dropdown">
                            <img src="./img/idioma blanco.png" alt="Idioma" height="20" class="my-auto" id="img_nav__idioma">
                        </a>
                        <div class="dropdown-menu menu-idioma shadow m-0 p-2">
                            <div class="mini-content">
                                <div class="container-fluid">
                                    <a class="dropdown-item p-2 ps-3 mx-auto titulos" id="es" href="<?php echo "http://" . $host . $url . "?lang=es" ?>"><img class="bandera me-2" src="./img/MEX.png" alt="Español">ES-MX</a>
                                    <!--<a class="dropdown-item p-2 ps-3 mx-auto titulos disabled" id="en" href="<?php echo "http://" . $host . $url . "?lang=en" ?>"><img class="bandera me-2" src="./img/USA.png" alt="English">EN-US</a>-->
                                </div>
                            </div>
                        </div>
                    </li>

                    <div class="ms-2">
                        <a data-bs-toggle="modal" data-bs-target="#insignia_esca"><img id="img_insignia__nav" src="./img/insignia.png" alt="Inicio" height="50"></a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="insignia_esca" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content p-5">
                <div class="row">
                    <div class="col-5 my-auto mx-auto">
                        <h2 class="titulo"><?php echo $langHeader['Excelencia'] ?></h2>
                        <h3 class="titulo_2"><?php echo $langHeader['CME'] ?></h3>
                        <p class="texto_1 lista-faq mt-4 fs-5"><?php echo $langHeader['Iniciativa'] ?><br><?php echo $langHeader['BPO'] ?></p>
                        <p class="texto_1 lista-faq fs-5"><?php echo $langHeader['ECEI'] ?></p>
                    </div>
                    <div class="col-5 d-flex mx-auto my-auto">
                        <img class="d-flex mx-auto" height="600" src="./img/Querétaro Automotive Cluster - SILVER Certificate 2022 - 2024.jpg" alt="Insignia ESCA">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal_cookies" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
            <div class="modal-content p-5">
                <div class="modal-body">
                    <h2 class="titulo">Aviso de cookies</h2>
                    <p class="texto_1 mt-4">Con objeto de que usted pueda limitar el uso y divulgación de su información personal, le ofrecemos los siguientes medios:</p>

                    <p class="texto_1">Mediante solicitud para ejercer sus Derechos ARCO dirigida al Cluster Automotriz de Querétaro.</p>

                    <p class="texto_1">El uso de tecnologías de rastreo en nuestro portal de internet le informamos que en nuestra página de internet utilizamos cookies, web beacons u otras tecnologías, a través de las cuales es posible monitorear su comportamiento como usuario de internet, así como brindarle un mejor servicio y experiencia al navegar en nuestras páginas.</p>

                    <p class="texto_1">Los datos personales que recabamos a través de estas tecnologías, los utilizaremos para los siguientes fines:</p>

                    <ul>
                        <li class="texto_1 lista">Proveer los servicios solicitados</li>
                        <li class="texto_1 lista">Atender los trámites requeridos</li>
                        <li class="texto_1 lista">Comunicarle el seguimiento del trámite o servicio</li>
                        <li class="texto_1 lista">Evaluar la calidad del servicio brindado</li>
                    </ul>

                    <p class="texto_1">Para las finalidades señaladas en el presente aviso de privacidad, podemos recabar sus datos personales cuando usted nos los proporciona directamente a través de una ventanilla de trámites, una encuesta personal, cuando visita nuestro sitio de Internet o utiliza nuestros servicios en línea.</p>

                    <p class="texto_1">Los datos personales que obtenemos de estas tecnologías de rastreo son los siguientes:</p>

                    <p class="texto_1">Dirección IP,</p>

                    <p class="texto_1">Región en la que se encuentra el usuario,</p>

                    <p class="texto_1">Tipo de navegador del usuario,</p>

                    <p class="texto_1">Tipo de sistema operativo del usuario</p>

                    <p class="texto_1">Fecha y hora del inicio y final de una sesión de un usuario</p>

                    <p class="texto_1">Páginas web visitadas por un usuario</p>

                    <p class="texto_1">Búsquedas realizadas por un usuario</p>

                    <p class="texto_1">Utilizamos tecnologías comunes de Internet, tales como cookies y beacons para garantizar la integridad de nuestro sitio web y para personalizar partes del sitio para usted.</p>

                    <p class="texto_1">Cookies: Las cookies son pequeñas partes de información almacenada por su navegador en el disco duro de su computadora, a solicitud del sitio web. Las cookies de nuestros sitios de internet mencionados con anterioridad no contienen ninguna información personal, pero son utilizadas principalmente para rastrear información temporal; por ejemplo, las cookies nos permiten rastrear los contenidos que usted carga y descarga. Las cookies nos permiten recordarlo cuando se da de alta en lugares de nuestro sitio que requieren o no de membrecía, recordar su país y preferencias de idioma, ayudarnos a entender el tamaño de nuestra audiencia y patrones de tráfico, recolectar y grabar información acerca de lo que usted vio en nuestro sitio Web y lo que usted vio en nuestro correo electrónico, administrar y presentar información del sitio y las fotografías desplegadas en su computadora y entregarle información específica a sus intereses.</p>

                    <p class="texto_1">Web Beacons: También colocamos pequeños gifs rastreadores o beacons en muchas de las páginas de nuestro sitio web, en publicidad online con terceros y en nuestro correo electrónico. Utilizamos estos beacons, en conexión con nuestras cookies, para recolectar datos no personales sobre el uso de nuestro sitio incluyendo, pero no limitado, a la fecha y hora de la visita, las páginas visitadas, el sitio web referente, el tipo de navegador (por ejemplo Internet Explorer, Firefox), el tipo de sistema operativo (por ejemplo Windows, Linux o Mac), y el nombre de dominio del proveedor de Internet del visitante (por ejemplo AOL). Esta información es recolectada sobre miles de visitas de sitios y analizada en conjunto. Esta información es útil por ejemplo, rastrear el desempeño de nuestra publicidad en línea tales como banners en línea y determinar en dónde se colocará publicidad en el futuro en otros sitios web.</p>

                    <p class="texto_1">Cómo Inhabilitar los Cookies y Beacons: Si usted no está cómodo con la recolección de dicha información a través del uso de las cookies y beacons, le recomendamos que inhabilite estas funciones por medio de las preferencias de su explorador, pero por favor tome en cuenta que esto limitará el desempeño y la funcionalidad de nuestros sitios de internet anteriormente mencionados, la documentación de su explorador deberá de proporcionar los procedimientos específicos para inhabilitar la ayuda de las cookies y beacons.</p>

                    <p class="texto_1">Dirección IP: Nosotros analizamos direcciones IP con fines de administración del sistema y para recopilar información demográfica amplia. Nosotros no creamos vínculos de direcciones IP hacia su clave de usuario, salvo cuando usted coloca una orden utilizando nuestro proceso de pago en línea, nosotros grabamos la dirección IP de su computadora junto con su orden para que nos ayude a identificar el uso fraudulento de tarjetas de crédito. Nosotros podremos compartir esta información con las instituciones financieras que emitieron la tarjeta de crédito con la cual se colocó la orden o con las autoridades competentes si determinamos, o nos notifican, que el uso de la tarjeta de crédito fue fraudulento.</p>

                    <p class="texto_1">Estas tecnologías podrán deshabilitarse siguiendo los siguientes pasos: Si usted no está cómodo con la recolección de dicha información a través del uso de las cookies y beacons, le recomendamos que inhabilite estas funciones por medio de las preferencias de su explorador, pero por favor tome en cuenta que esto limitará el desempeño y la funcionalidad de nuestros sitios de internet anteriormente mencionados, la documentación de su explorador deberá de proporcionar los procedimientos específicos para inhabilitar la ayuda de las cookies y beacons.</p>

                    <p class="texto_1">El presente aviso de privacidad puede sufrir modificaciones, cambios o actualizaciones derivadas de nuevos requerimientos legales; de nuestras propias necesidades por los servicios que ofrecemos; de nuestras prácticas de privacidad; de cambios en nuestro modelo de atención, o por otras causas.</p>

                    <p class="texto_1">Nos comprometemos a mantenerlo informado sobre los cambios que pueda sufrir el presente aviso de privacidad, a través de: nuestras páginas de internet.</p>

                    <p class="texto_1">Sus datos personales serán tratados de conformidad con los términos y condiciones de acuerdo a los artículos 6 fracciones II y III, 16 párrafo segundo de la Constitución Política de los Estados Unidos Mexicanos y de acuerdo a la Ley Federal De Protección De Datos Personales En Posesión De Los Particulares.</p>

                </div>
            </div>
        </div>
    </div>

    <!---------------- Fin de la barra de navegación ---------------->