<?php

require_once('./src/header.php');
include('./back-end/php/conexion.php');

$conn = connect();

$stmt = $conn->prepare("CALL sp_Select_Noticias;");
$stmt->execute();

$result = $stmt->fetchAll();

$conn = null;

?>

<section>
    <div class="portada_box d-flex align-items-end">
        <div class="titulo_portada p-3 col-5 mb-4">
            <div class="h1_portada">
                <h1 class="p-5 text-center fs-1 negritas"><?php echo $langNoticias['h1Noticiash1'] ?></h1>
            </div>
        </div>
    </div>
</section>

<section class="mx-auto mt-5 col-10">
    <div class="container info_sec">
        <!-- <div class="row">
            <div class="col-1">
                <p class="titulo_2">Filtrar</p>
            </div>
            <div class="col-4">
                <select class="form-select" name="Filtro" id="filtro_noticias">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-1"></div>
            <div class="col-2">
                <p class="titulo_2">Ordenar por</p>
            </div>
            <div class="col-4">
                <select class="form-select" name="Filtro" id="ordenar_noticias">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div> -->
        <div class="row mt-5 justify-content-between text-center">
            <?php
            foreach ($result as $row) {
                echo '
                        <div class="col">
                            <div class="card card_actulidad" onclick="location.href=' . "'" . '' . $row['noti_enlace'] . '' . "'" . ';">
                                <img src="' . $row['noti_img_portada'] . '" class="card-img-top" alt="' . $row['noti_img_portada'] . '" height="250">
                                <div class="card-body p-4">
                                <h5 class="card-title titulo_3 d-inline-block text-truncate" style="max-width: 20vw;">' . $row['noti_titulo'] . '</h5>
                                    <p class="card-text texto_1 mt-3">'. $row['noti_fecha'] .'</p>
                                </div>
                            </div>
                        </div>
                    ';
            }
            ?>
            
        </div>
    </div>
</section>

<?php
require_once('./src/footer.php')
?>