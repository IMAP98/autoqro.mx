<?php
require_once('./src/header.php');
include('./back-end/php/conexion.php');

$conn = connect();

$stmt = $conn->prepare("CALL STORE_PROCEDURE_NAME;");
$stmt->execute();

$result = $stmt->fetchAll();

$conn = null;

?>

<section>
    <div class="portada_box d-flex align-items-end">
        <div class="titulo_portada pt-3 pb-3 ps-4 pe-4 col-5 mb-4">
            <div class="h1_portada">
                <h1 class="p-5 text-center fs-1 negritas"><?php echo $langNoticias["h1Noticiash1"] ?></h1>
            </div>
        </div>
    </div>
</section>

<section class="mx-auto col-9">
    <div class="info_sec">
        <div class="row mb-3">
            <h1 class="titulo">Foro: Alternativas en materia de energía para lograr metas de descarbonización en las empresas</h1>
        </div>
        <div class="row justify-content-between mb-5">
            <div class="col-2">
                <p class="texto_1 fs-4 my-auto">21/12/2022</p>
            </div>
            <div class="col-2">
                <div class="row">
                    <a class="texto_1 float-end enlace">
                        <div class="row align-items-center justify-content-center">
                            <a class="col-1 fs-4 my-auto texto_1" href="./noticias.php">&lsaquo;Regresar</a>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="clearfix noticia">
            <img src="https://res.cloudinary.com/cluster-automotriz-de-queretaro/image/upload/v1674660427/Imagen_3_vf3ubq.png" class="col-md-6 float-md-end mb-3 ms-md-5 my-auto" alt="...">

            <p>El pasado Martes 06 de diciembre de 2022 se llevó a cabo el Foro Alternativas en materia de energía para lograr metas de descarbonización en las empresas en el que se presentaros los temas; Estado actual de la Industria Eléctrica en México y sus implicaciones en los planes de crecimiento de las empresas por el Dr. Gerardo Serrato Ángeles, Director General de Hartree Consultores y Alternativas de fuentes limpias para el suministro de energía en el sector industrial por el Ing. Joaõ Gama, Gerente de Desarrollo de Negocios en México de CapWatt.</p>

            <p>Así como la experiencia en el tema de energía por el Grupo Kaltex, S.A. de C.V., por el Ing. José Kalach , Vicepresidente del Grupo Kaltex.</p>

            <p>Participaron 23 empresas del sector automotriz, alimentos, textil y de centros educativos.</p>

        </div>
    </div>
</section>
<section>
    <div class="mx-auto p-5 pb-0">
        <div class="row mx-auto ms-5 me-5">
            <div class="col-2 my-auto text-center">
                <h5 class="titulo_2 mb-0">También podría interesarte</h5>
            </div>
            <div class="col-10 text-center d-flex">
                <div class="my-5 container float-end">
                    <div class="row align-items-center">
                        <div class="col-1 align-items-center justify-content-center">
                            <a role="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <div class="carousel-nav-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <path d="m88.6,121.3c0.8,0.8 1.8,1.2 2.9,1.2s2.1-0.4 2.9-1.2c1.6-1.6 1.6-4.2 0-5.8l-51-51 51-51c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-54,53.9c-1.6,1.6-1.6,4.2 0,5.8l54,53.9z" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="col-10">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <?php
                                            foreach ($result as $row) {
                                                echo '
                                                    <div class="col-12 col-md d-flex align-items-center justify-content-center">
                                                        <div class="card card_noticia" onclick="location.href=' . "'" . ''. $row['noti_enlace'] .'' . "'" . ';">
                                                            <img src="'. $row['noti_img_portada'] .'" class="card-img-top img-noti-caro" alt="./img/noticia_1.jpg">
                                                            <div class="card-body p-4">
                                                            <h5 class="card-title titulo_3 d-inline-block text-truncate" style="max-width: 14vw;">'. $row['noti_titulo'] .'</h5>
                                                                <p class="card-text texto_1 mt-3">'. $row['noti_fecha'] .'</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                ';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-1 d-flex align-items-center justify-content-center"><a role="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <div class="carousel-nav-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <path d="m40.4,121.3c-0.8,0.8-1.8,1.2-2.9,1.2s-2.1-0.4-2.9-1.2c-1.6-1.6-1.6-4.2 0-5.8l51-51-51-51c-1.6-1.6-1.6-4.2 0-5.8 1.6-1.6 4.2-1.6 5.8,0l53.9,53.9c1.6,1.6 1.6,4.2 0,5.8l-53.9,53.9z" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once('./src/footer.php')
?>
