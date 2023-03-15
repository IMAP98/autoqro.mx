<?php
require_once('./src/header.php')
?>

<section>
    <div class="portada_capa d-flex align-items-end">
        <div class="titulo_portada p-3 col-6 mb-4">
            <div class="h1_portada">
                <h1 class="p-5 text-center negritas fs-1"><?php echo $langComiteCapacitacion['h1ComCapCOMI'] ?></h1>
            </div>
        </div>
    </div>
</section>

<div class="titulo_imgComite col-4 mt-5 mb-4 text-center p-5">
    <img class="img-fluid" src="./img/Comité - Capacitación.png" alt="Logo Comité de Sustentabilidad" height="120">
</div>

<section class="col mx-auto">
    <!---------------- Inicio de la sección para la insignia ESCA ---------------->
    <div class="d-flex justify-content-center align-items-center">
        <div class="col-9">
            <div class="row justify-content-between mt-4">
                <div class="col-5 my-auto">
                    <h2 class="titulo_capa fs-1 mb-4"><?php echo $langComiteCapacitacion['h2ComCapPropo'] ?></h2>
                    <p class="texto_gris"><?php echo $langComiteCapacitacion['p1ComCapEspacio'] ?></p>
                </div>
                <div class="col-6 mb-5">
                    <div class="card card_comite">
                        <h5 class="card-header card-header-capa text-center p-4 fs-3"><?php echo $langComiteCapacitacion['h5ComCapActividades'] ?></h5>
                        <div class="card-body card-body-comite p-4">
                            <ul class="ps-5">
                                <li class="lista texto_gris "><?php echo $langComiteCapacitacion['liComCapSesion'] ?></li>
                                <li class="lista texto_gris "><?php echo $langComiteCapacitacion['liComCapActividades'] ?></li>
                                <li class="lista texto_gris "><?php echo $langComiteCapacitacion['liComCapImpulsar'] ?></li>
                                <li class="lista texto_gris "><?php echo $langComiteCapacitacion['liComCapPrograma'] ?></li>
                                <li class="lista texto_gris "><?php echo $langComiteCapacitacion['liComCapDesarrollar'] ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between mt-4">
                <div class="col-5">
                    <h2 class="titulo_capa fs-1 mb-4"><?php echo $langComiteCapacitacion['h2ComCapPilares'] ?></h2>
                    <div class="row mt-5">
                        <div class="col text-center">
                            <img class="mb-2" src="./img/identificacion_indicadores.png" alt="Identificación de indicadores de impacto de la capacitación">
                            <p class="texto_gris "><?php echo $langComiteCapacitacion['p2ComCapIden'] ?><br> <?php echo $langComiteCapacitacion['p2ComCapDeInd'] ?><br> <?php echo $langComiteCapacitacion['p2ComCapImpacto'] ?><br> <?php echo $langComiteCapacitacion['p2ComCapCap'] ?></p>
                        </div>
                        <div class="col text-center">
                            <img class="mb-2" src="./img/prospectiva_tecnologica.png" alt="Prospectiva tecnológica y de mercado">
                            <p class="texto_gris "><?php echo $langComiteCapacitacion['p2ComCapPros'] ?><br> <?php echo $langComiteCapacitacion['p2ComCapTec'] ?><br> <?php echo $langComiteCapacitacion['p2ComCapMer'] ?></p>
                        </div>
                        <div class="col text-center">
                            <img class="mb-2" src="./img/dinamizar.png" alt="Dinamizar la triple hélice">
                            <p class="texto_gris "><?php echo $langComiteCapacitacion['p2ComCapCre'] ?><br> <?php echo $langComiteCapacitacion['p2ComCapCad'] ?><br> <?php echo $langComiteCapacitacion['p2ComCapPro'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card card_comite">
                        <h5 class="card-header card-header-capa text-center p-4 fs-3"><?php echo $langComiteCapacitacion['h5ComCapPerfil'] ?></h5>
                        <div class="card-body card-body-comite p-4">
                            <div class="row">
                                <div class="col">
                                    <p class=" texto_gris text-center"><?php echo $langComiteCapacitacion['p2ComCapLid'] ?></p>
                                </div>
                                <div class="col">
                                    <ul class="ps-5">
                                        <li class="lista texto_gris"><?php echo $langComiteCapacitacion['liComCapCoor'] ?></li>
                                        <li class="lista texto_gris"><?php echo $langComiteCapacitacion['liComCapLid'] ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between mt-4">
                <div class="col-5">
                    <h2 class="titulo_capa fs-1 mb-4"><?php echo $langComiteCapacitacion['h2ComCapRes'] ?></h2>
                    <ul class="ps-5">
                        <li class="lista texto_gris"><?php echo $langComiteCapacitacion['liComCap6'] ?></li>
                        <li class="lista texto_gris"><?php echo $langComiteCapacitacion['liComCap75'] ?></li>
                        <li class="lista texto_gris"><?php echo $langComiteCapacitacion['liComCap27190'] ?></li>
                        <li class="lista texto_gris"><?php echo $langComiteCapacitacion['liComCap636'] ?></li>
                        <li class="lista texto_gris"><?php echo $langComiteCapacitacion['liComCap1328'] ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!---------------- Fin de la sección para la insignia ESCA ---------------->
</section>

<?php
require_once('./src/footer.php')
?>