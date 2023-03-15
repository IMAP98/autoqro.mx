<?php
require_once('./src/header.php');
include('./back-end/php/conexion.php');
?>

<section>
    <div class="portada_sus d-flex align-items-end">
        <div class="titulo_portada p-3 col-6 mb-4">
            <div class="h1_portada">
                <h1 class="p-5 text-center negritas fs-1">COMITÉS DE TRABAJO</h1>
            </div>
        </div>
    </div>
</section>

<div class="titulo_imgComite p-3 col-4 mt-5 mb-4 text-center p-4">
    <img src="./img/Comité - Sustentabilidad Ambiental.png" alt="Logo Comité de Sustentabilidad" height="120">
</div>

<section class="col mx-auto">
    <div class="d-flex justify-content-center align-items-center">
        <div class="col-9">
            <div class="row justify-content-between mt-4">
                <div class="col-5">
                    <h2 class="titulo_eco fs-1 mb-4">Propósito</h2>
                    <p class="texto_gris">Identificar nuevos elementos de competitividad a través del cuidado del medio ambiente, fortaleciendo las capacidades que permitan formular iniciativas innovadoras para el cumplimiento de los requerimientos de las OEM's, ODS y de la política estatal.</p>
                </div>
                <div class="col-6 mb-5">
                    <div class="card card_comite">
                        <h5 class="card-header card-header-sus text-center p-4 fs-3">Actividades principales</h5>
                        <div class="card-body card-body-comite p-4">
                            <ul class="ps-5">
                                <li class="lista texto_gris">Reuniones de Comité.</li>
                                <li class="lista texto_gris">Benchmark Tours.</li>
                                <li class="lista texto_gris">Colaboración para compartir prácticas.</li>
                                <li class="lista texto_gris">Formación.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between mt-4">
                <div class="col-5">
                    <h2 class="titulo_eco fs-1 mb-4">Pilares</h2>
                    <div class="row mt-5">
                        <div class="col text-center">
                            <img class="mb-2" src="./img/enfoque.png" alt="Enfoque circular">
                            <p class="texto_gris">Enfoque <br> circular</p>
                        </div>
                        <div class="col text-center">
                            <img class="mb-2" src="./img/Compilance.png" alt="Compilance">
                            <p class="texto_gris">Compliance</p>
                        </div>
                        <div class="col text-center">
                            <img class="mb-2" src="./img/ods.png" alt="ODS">
                            <p class="texto_gris">ODS</p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col text-center">
                            <img class="mb-2" src="./img/descarbonizacion.png" alt="Descarbonización">
                            <p class="texto_gris">Descarbonización</p>
                        </div>
                        <div class="col text-center">
                            <img class="mb-2" src="./img/netzero.png" alt="Net Zero">
                            <p class="texto_gris">Net Zero</p>
                        </div>
                        <div class="col text-center">
                            <img class="mb-2" src="./img/equipo.png" alt="Trabajo en equipo">
                            <p class="texto_gris">Trabajo en <br> equipo</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card card_comite">
                        <h5 class="card-header card-header-sus text-center p-4 fs-3">Perfil del participante </h5>
                        <div class="card-body card-body-comite p-4">
                            <div class="row">
                                <div class="col">
                                    <p class="texto_gris text-center">Líderes transformadores con una visión colaborativa para identificar oportunidades de mejora con un enfoque sustentable. </p>
                                </div>
                                <div class="col">
                                    <ul class="ps-5">
                                        <li class="lista texto_gris">Reuniones de Comité.</li>
                                        <li class="lista texto_gris">Benchmark Tours.</li>
                                        <li class="lista texto_gris">Colaboración para compartir prácticas.</li>
                                        <li class="lista texto_gris">Formación.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center mt-4">
                <div class="col-5 my-auto">
                    <h2 class="titulo_eco fs-1 mb-5">Resultados</h2>
                    <div class="text-center mt-4">
                        <img class="logo-economia" src="./img/eco-circ.png" alt="Economía circular">
                    </div>
                </div>
                <div class="col-4 text-center">
                    <!-- <a class="btn_sustentabilidad text-white pt-4 pb-4 ps-5 pe-5" target="_blank" href="https://economiacircularqro.mx/" role="button">Conoce más</a> -->
                    <a class="btn_susten align-self-center pt-4 pb-4 ps-5 pe-5" target="_blank" href="https://economiacircularqro.mx/" role="button">Conoce más</a>
                </div>
            </div>
        </div>
    </div>

    <!---------------- Fin de la sección para la insignia ESCA ---------------->
</section>

<?php
require_once('./src/footer.php')
?>