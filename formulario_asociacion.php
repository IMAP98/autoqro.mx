<?php
require_once('./src/header.php')
?>

<section>
    <div class="portada_box d-flex align-items-end">
    </div>
</section>

<!---------------- Inicio de la sección para las tarjetas de los asociados TR2 ---------------->
<section class="info_sec">
    <div class="col-11 mx-auto">
        <div class="row justify-content-evenly">
            <div class="col-4 noticia">
                <p class="titulo m-0">Asociación</p> <br>
                <p class="titulo_2 fw-light m-0">Gracias por tu interés en formar parte de esta red de apoyo para el sector automotriz del Estado.</p> <br>
                <p class="m-0 texto_gris">Nuestro principal objetivo es que nuestros asociados encuentren en el cluster las herramientas necesarias para su desarrollo óptimo. Esperamos poder ayudarlos. </p> <br>
                <p class="m-0 texto_gris">Para brindarle a tu empresa una propuesta de asociación apropiada, <b>por favor compártenos la siguiente información</b>, después nos pondremos en contacto.</p> <br>
                <div class="row justify-content-center">
                    <h4 class="titulo_2 fw-light m-0">Si tienes alguna duda:</h4>
                </div>
                <div class="row justify-content-evenly">
                    <div class="d-grid gap-2 d-md-flex mt-4 col-10">
                        <button onclick="location.href='./contacto.php';" name="enviarFormCont" class="btn_1 mx-auto ps-4 pe-4 pt-2 pb-2">Contáctanos</button>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="form_contacto pt-5 pb-5">
                    <form class="needs-validation" novalidate method="post">
                        <div class="row justify-content-evenly d-flex align-items-center mx-auto my-auto">
                            <div class="col-11 mx-auto">
                                <label for="nomEmpSol" class="mb-1">Nombre de la empresa:</label>
                                <input type="text" class="form-control input_form mb-3" id="nomEmpSol" name="nomEmpSol" pattern="^[a-zA-Z\D\s]{1,}$" required>
                                <div class="invalid-feedback">
                                    <p class="texto_1 text-danger">Este campo es obligatorio, por favor introduce el nombre de la organización.</p>
                                </div>
                            </div>
                            <div class="col-11 mx-auto">
                                <label for="proSerSol" class="mb-1">Productos o servicios que ofrece:</label>
                                <input type="text" class="form-control input_form mb-3" id="proSerSol" name="proSerSol" pattern="^[a-zA-Z\D\s]{1,}$" required>
                                <div class="invalid-feedback">
                                    <p class="texto_1 text-danger">Este campo es obligatorio, por favor introduce los productos y servicios que ofrece la organización.</p>
                                </div>
                            </div>
                            <div class="col-11 mx-auto">
                                <label for="prinCliSol" class="mb-1">Principales clientes:</label>
                                <input type="text" class="form-control input_form mb-3" id="prinCliSol" name="prinCliSol" pattern="^[a-zA-Z\D\s]{1,}$" required>
                                <div class="invalid-feedback">
                                    <p class="texto_1 text-danger">Este campo es obligatorio, por favor introduce los clientes principales que tiene la organización.</p>
                                </div>
                            </div>
                            <div class="col-11 mx-auto">
                                <label for="ubiPlanSol" class="mb-1">Ubicación y n° de plantas:</label>
                                <input type="text" class="form-control input_form mb-3" id="ubiPlanSol" name="ubiPlanSol" pattern="^[a-zA-Z\D\s]{1,}$" required>
                                <div class="invalid-feedback">
                                    <p class="texto_1 text-danger">Este campo es obligatorio, por favor introduce la ubicación de la organización y el número de plantas que tiene.</p>
                                </div>
                            </div>
                            <div class="col-11 mx-auto">
                                <label for="emailSol" class="mb-1"><?php echo $langContacto['FormEmailCont'] ?></label>
                                <input type="email" class="form-control input_form mb-3" id="emailSol" name="emailSol" pattern="^[a-zA-Z0-9.'!#$%&*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+[.](?:.[a-zA-Z0-9-]+)+$" required>
                                <div class="invalid-feedback">
                                    <p class="texto_1 text-danger">Este campo es obligatorio, por favor introduce un correo electrónico válido.</p>
                                </div>
                            </div>
                            <div class="col-11 mx-auto">
                                <label for="presCorpSol" class="mb-2">Presentación corporativa:</label>
                                <div class="alert alert-primary" role="alert">
                                    <p class="m-0"><b>Importante:</b> Es necesario introducir el archivo de presentación corporativa en formato PDF.</p>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control input_form" id="presCorpSol" name="presCorpSol" pattern="^.*\.(pdf)$" accept="application/pdf" required>
                                    <div class="invalid-feedback">
                                        <p class="texto_1 text-danger">Este campo es obligatorio, por favor introduce un archivo válido.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-evenly">
                            <div class="d-grid gap-2 d-md-flex mt-4 col-10">
                                <button type="submit" name="enviarFormAso" class="btn_1 mx-auto ps-4 pe-4 pt-2 pb-2" id="enviarFormAso"><?php echo $langContacto['FormBtnEnviarCont'] ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!---------------- Fin de la sección para las tarjetas de los asociados TR2 ---------------->
<?php
include("./back-end/php/form_asociacion.php");
require_once('./src/footer.php')
?>