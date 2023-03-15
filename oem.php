<?php
require_once('./src/header.php');
include('./back-end/php/conexion.php');

$conn = connect();

$stmt = $conn->prepare("CALL sp_Select_OEM;");
$stmt->execute();

$result = $stmt->fetchAll();

$conn = null;
?>

<section>
    <div class="portada_oem_aso d-flex align-items-end justify-content-end">
        <div class="titulo_portada p-3 col-5 mb-4">
            <div class="h1_portada">
                <h1 class="p-5 fs-1 negritas"><?php echo $langTR1['h1EmpresasAso'] ?></h1>
            </div>
        </div>
    </div>
</section>

<section class="mx-auto col-10">
    <!---------------- Inicio de la sección para la información de las empresas TR1 ---------------->
    <div class="row info_sec mx-auto justify-content-between">
        <div class="col-9 texto_1">
            <h2 class="fw-semibold titulo"><?php echo $langHeader['OEM'] ?></h2>
        </div>
        <div class="col-5 p-5 enlaces_cadsum card my-auto">
            <div class="mx-auto my-auto">
                <p class="mb-1"><a href="./oem.php"><?php echo $langHeader['OEM'] ?></a></p>
                <p class="mb-1"><a href="./tr1.php"><?php echo $langHeader['Tier1'] ?></a></p>
                <p class="mb-1"><a href="./tr2.php"><?php echo $langHeader['Tier2'] ?></a></p>
                <p class="mb-1"><a href="./afiliados.php"><?php echo $langHeader['Afiliados'] ?></a></p>
                <p class="mb-1"><a href="./academia.php"><?php echo $langHeader['Academia'] ?></a></p>
                <p class="mb-1"><a href="./centros_i+d.php"><?php echo $langHeader['CentrosI+D'] ?></a></p>
                <p class="mb-1"><a href="./gobierno.php"><?php echo $langHeader['Gobierno'] ?></a></p>
                <p class="mb-1"><a href="./aliados_estrategicos.php"><?php echo $langHeader['AliadosEstrategicos'] ?></a></p>
            </div>
        </div>
    </div>
    <!---------------- Fin de la sección para la información de las empresas TR1 ---------------->

    <!---------------- Inicio de la sección para las tarjetas de los asociados TR1 ---------------->
    <div class="mx-auto">
        <div class="row mt-5 mx-auto text-center">
            <?php
            foreach ($result as $row) {
                echo '
                        <div class="col-3 mx-auto mb-5">
                            <a data-bs-toggle="modal" data-bs-target="#aso_info_' . $row["aso_id"] . '">
                                <div class="card card_asociados">
                                    <!-- <div class="logo_card__asociado"></div> -->
                                    <img src=' . $row["aso_logo_org"] . ' alt="Logo ' . $row["aso_nombre_comercial"] . '" height="150">
                                    <div class="card-body ps-4 pe-4 row align-content-center nombre_card__asociado">
                                        <h5 class="card-title titulo_2">' . $row["aso_nombre_comercial"] . '</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    ';
            }
            ?>
        </div>
    </div>

    <?php

    $anfitrion = "";
    $fundador = "";
    $consejo = "";

    foreach ($result as $row) {

        if ($row["aso_anfitrion"] == 1) {

            $anfitrion = "./img/anfitrion_a.png";
        } else {

            $anfitrion = "./img/anfitrion.png";
        }

        if ($row["aso_fundador"] == 1) {

            $fundador = "./img/fundador_a.png";
        } else {

            $fundador = "./img/fundador.png";
        }

        if ($row["aso_consejo"] == 1) {

            $consejo = "./img/consejo_a.png";
        } else {

            $consejo = "./img/consejo.png";
        }

        echo '<div id="aso_info_' . $row["aso_id"] . '" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered mt-5">
                <div class="modal-content modal-info-aso d-flex">
                    <div class="p-5">
                        <div class="marco-logo mt-5">
                            <img class="logo-asociado mt-5" src="' . $row["aso_logo_org"] . '" alt="cookie">
                        </div>
                        <div class="row">
                            <div class="collapse col-md-4 offset-md-8 mb-3" id="collapsefundador1">
                                <div class="card p-3">
                                    <p class="m-0 text-center">Socio fundador</p>
                                </div>
                            </div>
                            <div class="collapse col-md-4 offset-md-8 mb-3" id="collapseconsejo1">
                                <div class="card p-3">
                                    <p class="m-0 text-center">Consejo Directivo</p>
                                </div>
                            </div>
                            <div class="collapse col-md-4 offset-md-8 mb-3" id="collapseanfitrion1">
                                <div class="card p-3">
                                    <p class="m-0 text-center">Súper anfitrión</p>
                                </div>
                            </div>
                            <div class="mb-3">
                                <a data-bs-toggle="collapse" href="#collapsefundador' . $row["aso_fundador"] . '" role="button" aria-expanded="false" aria-controls="collapsefundador' . $row["aso_fundador"] . '">
                                    <img class="reconocimientos float-end m-1" src="' . $fundador . '" alt="fundador" height="50" id="liveToastBtnfundador">
                                </a>
                                <a data-bs-toggle="collapse" href="#collapseconsejo' . $row["aso_consejo"] . '" role="button" aria-expanded="false" aria-controls="collapseconsejo' . $row["aso_consejo"] . '">
                                    <img class="reconocimientos float-end m-1" src="' . $consejo . '" alt="consejo" height="50" id="liveToastBtnconsejo">
                                </a>
                                <a data-bs-toggle="collapse" href="#collapseanfitrion' . $row["aso_anfitrion"] . '" role="button" aria-expanded="false" aria-controls="collapseanfitrion' . $row["aso_anfitrion"] . '">
                                    <img class="reconocimientos float-end m-1" src="' . $anfitrion . '" alt="anfitrion" height="50" id="liveToastBtnanfitrion">
                                </a>
                            </div>
                                <div>
                                    <p class="float-end m-2 fs-5 texto-azul">Miembro desde: '. $row["aso_fecha"] .'</p>
                                </div>
                            <div class="ms-5 mt-3">
                                <h2 class="titulo">' . $row["aso_nombre_comercial"] . '</h2>
                                <div class="col-6">
                                    <h5 class="titulo_2">' . $row["aso_razon_social"] . '</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="body-info-aso d-flex p-5">
                        <div class="mx-5">
                            <p class="m-0"><img class="me-3 mb-1" src="./img/pag_web.png" alt="Página web:" height="40"><a href="' . $row["aso_pagina_web"] . '" target="_blank" class="enlace-info-aso fs-5">' . $row["aso_pagina_web"] . '</a></p>
                            <div class="tipo-aso d-flex">
                                <h2 class="titulo fs-3 text-center my-auto mx-auto">' . $row["aso_niv_cad_sum"] . '</h2>
                            </div>
                            <div class="box-info-aso mt-4 p-4">
                                <p class="descripcion fs-5">' . $row["aso_descripcion"] . '</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ';
    }
    ?>
    <!---------------- Fin de la sección para las tarjetas de los asociados TR1 ---------------->
</section>

<?php
require_once('./src/footer.php')
?>