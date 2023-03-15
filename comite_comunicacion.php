<?php
require_once('./src/header.php')
?>

<section>
    <div class="portada_com d-flex align-items-end">
        <div class="titulo_portada p-3 col-6 mb-4">
            <div class="h1_portada">
                <h1 class="p-5 text-center fs-1">COMITÉS DE TRABAJO</h1>
            </div>
        </div>
    </div>
</section>

<div class="titulo_imgComite p-3 col-4 mt-5 mb-4 text-center p-4">
    <img src="./img/Comité - Comunicación.png" alt="Logo Comité de Comunicación" height="120">
</div>

<section class="col mx-auto">
    <!---------------- Inicio de la sección para la insignia ESCA ---------------->
    <div class="d-flex justify-content-center align-items-center">
        <div class="col-4">
            <h2 class="titulo_eco fs-1 mb-4">Sustentabilidad <br> ambiental</h2>
            <p class="fs-4 texto_gris">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien massa, lacinia id viverra vel, elementum non eros. Morbi in nibh ex.</p>
            <p class="fs-4 texto_gris">Quisque vestibulum placerat placerat. Duis ullamcorper, quam bibendum tincidunt lobortis, leo enim rutrum nunc, at viverra dolor mi finibus nisi. Suspendisse vitae diam nunc.</p>
            <p class="fs-4 texto_gris">Nulla a nisl eu justo scelerisque rhoncus ac sit amet ante.</p>
        </div>
        <div class="col-6">
            <div class="mt-5 d-flex justify-content-around">
                <div class="col-4">
                    <div class="card card_comite text-center">
                        <h5 class="card-header p-5 fs-3">Perfil del participante</h5>
                        <div class="card-body p-5">
                            <p class="card-text fs-4 texto_gris">Nam sapien massa, lacinia id viverra vel, elementum non eros. Morbi in nibh ex.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card card_comite text-center">
                        <h5 class="card-header p-5 fs-3">Actividades</h5>
                        <div class="card-body p-5">
                            <p class="card-text fs-4 texto_gris">Nam sapien massa, lacinia id viverra vel, elementum non eros. Morbi in nibh ex.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 d-flex justify-content-around">
                <div class="col-4">
                    <div class="card card_comite text-center">
                        <h5 class="card-header p-5 fs-3">Proyecto estratégico</h5>
                        <div class="card-body p-5">
                            <img class="img-fluid" src="./img/economia_circular.png" alt="Logo - Economía Circular">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card card_comite text-center">
                        <h5 class="card-header p-5 fs-3">Resultados</h5>
                        <div class="card-body p-5">
                            <p class="card-text fs-4 texto_gris">Nam sapien massa, lacinia id viverra vel, elementum non eros. Morbi in nibh ex.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!---------------- Fin de la sección para la insignia ESCA ---------------->
</section>

<?php
require_once('./src/footer.php')
?>