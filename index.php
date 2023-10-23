<?php
require_once('./src/header.php');
include('./back-end/php/conexion.php');

$conn = connect();

$stmt = $conn->prepare("CALL STORE_PROCEDURE_NAME;");
$stmt->execute();

$result = $stmt->fetchAll();

$conn = null;

?>

<!---------------- Inicio del contenido principal ---------------->
<div class="principal">
    <div class="cont">
        <!-- slider start -->
        <div class="fnc-slider CAQ-slider">
            <div class="fnc-slider__slides">
                <!-- slide start -->
                <div class="fnc-slide m--blend-green m--active-slide">
                    <div class="fnc-slide__inner">
                        <div class="fnc-slide__mask">
                            <div class="fnc-slide__mask-inner"></div>
                        </div>
                        <div class="fnc-slide__content">
                            <h2 class="fnc-slide__heading">
                                <div class="fnc-slide__heading-line">
                                    <span class="negritas pts45"><?php echo $langIndex['span1Creemos'] ?></span>
                                </div>
                                <div class="fnc-slide__heading-line">
                                    <span class="negritas pts45"><?php echo $langIndex['span2DeLa'] ?></span>
                                </div>
                                <div class="fnc-slide__body-line mt-3">
                                    <span><?php echo $langIndex['span3Creamos'] ?></span>
                                    <span><?php echo $langIndex['span4Automotriz'] ?></span>
                                </div>
                            </h2>
                            <!-- <h2 class="fnc-slide__heading">
              <div class="fnc-slide__heading-line">
                <span>Black</span>
              </div>
              <div class="fnc-slide__heading-line">
                <span>Widow</span>
              </div>
            </h2>
            <button type="button" class="fnc-slide__action-btn">
              Credits
              <span data-text="Credits">Credits</span>
            </button> -->
                        </div>
                    </div>
                </div>
                <!-- slide end -->
                <!-- slide start -->
                <!-- <div class="fnc-slide m--blend-dark">
                <div class="fnc-slide__inner">
                    <div class="fnc-slide__mask">
                        <div class="fnc-slide__mask-inner"></div>
                    </div>
                    <div class="fnc-slide__content"> -->
                <!-- <h2 class="fnc-slide__heading">
              <div class="fnc-slide__heading-line">
                <span>Captain</span>
              </div>
              <div class="fnc-slide__heading-line">
                <span>America</span>
              </div>
            </h2>
            <button type="button" class="fnc-slide__action-btn">
              Credits
              <span data-text="Credits">Credits</span>
            </button> -->
                <!-- </div>
                </div>
            </div> -->
                <!-- slide end -->
                <!-- slide start -->
                <!-- <div class="fnc-slide m--blend-red">
                <div class="fnc-slide__inner">
                    <div class="fnc-slide__mask">
                        <div class="fnc-slide__mask-inner"></div>
                    </div>
                    <div class="fnc-slide__content"> -->
                <!-- <button type="button" class="fnc-slide__action-btn">
              Credits
              <span data-text="Credits">Credits</span>
            </button> -->
                <!-- </div>
                </div>
            </div> -->
                <!-- slide end -->
                <!-- slide start -->
                <!-- <div class="fnc-slide m--blend-blue">
                <div class="fnc-slide__inner">
                    <div class="fnc-slide__mask">
                        <div class="fnc-slide__mask-inner"></div>
                    </div>
                    <div class="fnc-slide__content"> -->
                <!-- <button type="button" class="fnc-slide__action-btn">
              Credits
              <span data-text="Credits">Credits</span>
            </button> -->
                <!-- </div>
                </div>
            </div> -->
                <!-- slide end -->
                <!-- </div> -->
                <!-- <nav class="fnc-nav">
            <div class="fnc-nav__bgs">
                <div class="fnc-nav__bg m--navbg-green m--active-nav-bg"></div>
                <div class="fnc-nav__bg m--navbg-dark"></div>
                <div class="fnc-nav__bg m--navbg-red"></div>
                <div class="fnc-nav__bg m--navbg-blue"></div>
            </div>
            <div class="fnc-nav__controls">
                <button class="fnc-nav__control">
                    Economía Circular
                    <span class="fnc-nav__control-progress"></span>
                </button>
                <button class="fnc-nav__control">
                    Captain America
                    <span class="fnc-nav__control-progress"></span>
                </button>
                <button class="fnc-nav__control">
                    Iron Man
                    <span class="fnc-nav__control-progress"></span>
                </button>
                <button class="fnc-nav__control">
                    Thor
                    <span class="fnc-nav__control-progress"></span>
                </button>
            </div>
        </nav> -->
            </div>
        </div>
    </div>
    <!-- slider end -->
    <section id="pilares_caq__box">
        <div class="mx-auto p-5">
            <div class="mb-5">
                <h3 class="titulo text-center"><?php echo $langIndex['h3Nuestros'] ?></h3>
            </div>
            <div class="row ms-5 me-5">
                <div class="d-flex justify-content-evenly">
                    <div class="pilar_caq__box text-center col-2 ms-5 d-flex flex-column justify-content-center">
                        <img class="rounded mx-auto my-auto d-block" src="./img/colaboracion.png" alt="Colaboracion">
                        <p class="texto_1"><?php echo $langIndex['p1-1Colaboracion'] ?><br><?php echo $langIndex['p1-2Entre'] ?></p>
                    </div>
                    <div class="pilar_caq__box text-center col-2 d-flex flex-column justify-content-center">
                        <img class="rounded mx-auto my-auto d-block" src="./img/talento.png" alt="Colaboracion">
                        <p class="texto_1"><?php echo $langIndex['p2-1Compromiso'] ?><br><?php echo $langIndex['p2-2ConEl'] ?></p>
                    </div>
                    <div class="pilar_caq__box text-center col-2 d-flex flex-column justify-content-center">
                        <img class="rounded mx-auto my-auto d-block" src="./img/contenido_nacional.png" alt="Colaboracion">
                        <p class="texto_1"><?php echo $langIndex['p3-1Incremento'] ?><br><?php echo $langIndex['p3-2Contenido'] ?></p>
                    </div>
                    <div class="pilar_caq__box text-center col-2 d-flex flex-column justify-content-center">
                        <img class="rounded mx-auto my-auto d-block" src="./img/semillero_degradado.png" alt="Colaboracion">
                        <p class="texto_1"><?php echo $langIndex['p4Semillero'] ?></p>
                        <p></p>
                    </div>
                    <div class="pilar_caq__box text-center col-2 d-flex flex-column justify-content-center">
                        <img class="rounded mx-auto my-auto d-block" src="./img/competitividad.png" alt="Colaboracion">
                        <p class="texto_1"><?php echo $langIndex['p5-1MejorCompe'] ?><br><?php echo $langIndex['p5-2DelEco'] ?></p>
                    </div>
                    <div class="pilar_caq__box text-center col-2 me-5 d-flex flex-column justify-content-center">
                        <img class="rounded mx-auto my-auto d-block" src="./img/innovación.png" alt="Colaboracion">
                        <p class="texto_1"><?php echo $langIndex['p6-1Referencia'] ?><br><?php echo $langIndex['p6-2Innovacion'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="mx-auto p-5 pb-0">
            <div class="row ms-5 me-5">
                <div class="col my-auto">
                    <h5 class="titulo mb-5 float-end text-center"><?php echo $langIndex['h5LoUltimo'] ?></h5>
                    <a class="btn_1 fs-5 pt-4 pb-4 ps-5 pe-5 float-end" href="./noticias.php" role="button"><?php echo $langIndex['a1VerMas'] ?></a>
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
</div>
<?php
require_once('./src/footer.php')
?>
