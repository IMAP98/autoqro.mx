<?php
require_once('./src/header.php')
?>

<style>
    footer {
        margin-top: 0px !important;
    }
</style>

<section>
    <div class="portada_box d-flex align-items-end">
        <div class="titulo_portada p-3 col-5 mb-4">
            <div class="h1_portada">
                <h1 class="p-5 text-center fs-1 negritas"><?php echo $langNosotros['h1QS'] ?></h1>
            </div>
        </div>
    </div>
</section>

<!---------------- Inicio de la sección para las tarjetas de los asociados TR2 ---------------->
<section class="mx-auto nosotros pb-4" id="QuienesSomos">
    <div class="col-9 mx-auto pt-5">
        <h2 class="fw-bold titulo mb-5"><?php echo $langNosotros['h2Nosotros'] ?></h2>
        <p class="texto_gris"><?php echo $langNosotros['p1ElCAQes'] ?></p>
    </div>
</section>
<section class="mx-auto pt-5 pb-5">
    <div class="col-9 mx-auto">
        <h2 class="fw-bold titulo mb-5"><?php echo $langNosotros['h2NuestraC'] ?></h2>
    </div>
    <div class="col-9 mx-auto causa p-5">
        <p class="fw-bold text-center m-0"><?php echo $langNosotros['p1CreamosV'] ?></p>
    </div>
</section>
<section class="mx-auto pb-5 col-11">
    <div class="row justify-content-center align-items-center">
        <div class="col-5">
            <h2 class="fw-bold titulo mb-5"><?php echo $langNosotros['h2NuestraF'] ?></h2>
            <p class="my-auto texto_gris"><?php echo $langNosotros['p2DesdeSu'] ?></b></p>
        </div>
        <div class="col-5">
            <img class="d-flex mx-auto" src="./img/formula.png" alt="Imagen - Nuestra fórmula" height="300">
        </div>
    </div>
</section>
<section class="col-9 mx-auto pb-5">
    <div class="mx-auto">
        <h2 class="fw-bold titulo mb-5"><?php echo $langNosotros['h2NuestroS'] ?></h2>
        <p class="my-auto texto_gris"><?php echo $langNosotros['p3CnstruirU'] ?></b></p>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img class="mx-auto float-end" style="width: 95%;" src="./img/nuestro_sueño (1).png" alt="Imagen - Nuestra fórmula">
        </div>
        <div class="col-4">
            <img class="mx-auto float-end" style="width: 95%;" src="./img/nuestro_sueño (2).png" alt="Imagen - Nuestra fórmula">
        </div>
        <div class="col-4">
            <img class="mx-auto float-end" style="width: 100%;" src="./img/nuestro_sueño (3).png" alt="Imagen - Nuestra fórmula">
        </div>
    </div>
</section>
<section class="mx-auto nosotros pb-5 pt-5" id="OrganigramaGeneral">
    <div class="col-9 mx-auto pt-5">
        <h2 class="fw-bold titulo mb-5"><?php echo $langNosotros['h2OrganigramaG'] ?></h2>
        <div class="row align-items-center justify-content-center">
            <div class="col-3 p-5 organigrama">
                <p class="texto-azul text-center m-0 titulo_3 fw-bold"><?php echo $langNosotros['p4_1Consejo'] ?> <br><?php echo $langNosotros['p4_2directivo'] ?></p>
            </div>
            <div class="col-1 text-center">
                <img class="mx-auto" src="./img/arrow.png" alt="Imagen - Nuestra fórmula" width="50">
            </div>
            <div class="col-3 p-5 organigrama">
                <p class="texto-azul text-center m-0 titulo_3 fw-bold"><?php echo $langNosotros['p5CusterAQ'] ?></p>
            </div>
            <div class="col-1 text-center">
                <img class="mx-auto" src="./img/arrow.png" alt="Imagen - Nuestra fórmula" width="50">
            </div>
            <div class="col-3 p-5 organigrama">
                <p class="texto-azul text-center m-0 titulo_3 fw-bold"><?php echo $langNosotros['p6_1Comites'] ?><br> <?php echo $langNosotros['p6_1deTrabajo'] ?></p>
            </div>
        </div>
    </div>
</section>
<section class="mx-auto pt-5 pb-5">
    <div class="col-9 mx-auto">
        <h2 class="fw-bold titulo mb-5"><?php echo $langNosotros['h2ConsejoDirectivo'] ?></h2>
        <img class="d-flex mx-auto col-9" src="./img/consejo_directivo.png" alt="Consejo directivo">
    </div>
</section>
<section class="mx-auto nosotros pt-5 pb-5" id="MiembrosEquipo">
    <div class="col-9 mx-auto">
        <h2 class="fw-bold titulo mb-5"><?php echo $langNosotros['h2MiembrosDel'] ?></h2>
        <img class="d-flex mx-auto col-9" src="./img/equipo_caq.png" alt="Miembros del equipo">
    </div>
</section>

<!---------------- Fin de la sección para las tarjetas de los asociados TR2 ---------------->
<?php
require_once('./src/footer.php')
?>