<?php
require_once('./src/header.php')
?>

<section>
    <div class="portada_box d-flex align-items-end">
        <div class="titulo_portada p-3 col-5 mb-4">
            <div class="h1_portada">
                <h1 class="p-5 text-center fs-1 negritas"><?php echo $langContacto['h1ContactoCon'] ?></h1>
            </div>
        </div>
    </div>
</section>

<!---------------- Inicio de la sección para las tarjetas de los asociados TR2 ---------------->
<section class="info_sec">
    <div class="col-11 mx-auto">
        <div class="row justify-content-evenly">
            <div class="col-5">
                <h2 class="titulo mb-5 ps-0"><?php echo $langContacto['EnvianosUn'] ?></h2>
                <div class="form_contacto pt-5 pb-5">
                    <form class="needs-validation" novalidate method="post">
                        <div class="row justify-content-evenly d-flex align-items-center mx-auto my-auto">
                            <div class="col-11 mx-auto">
                                <label for="nomCompCont" class="mb-1"><?php echo $langContacto['FormNomCont'] ?></label>
                                <input type="text" class="form-control input_form mb-3" id="nomCompCont" name="nomCompCont" pattern="^[a-zA-Z\D\s]{1,}$" required>
                                <div class="invalid-feedback">
                                    <p class="texto_1 text-danger">Este campo es obligatorio, por favor introduce el nombre de la persona u organización.</p>
                                </div>
                            </div>
                            <div class="col-11 mx-auto">
                                <label for="emailCont" class="mb-1"><?php echo $langContacto['FormEmailCont'] ?></label>
                                <input type="email" class="form-control input_form" id="emailCont" name="emailCont" pattern="^[a-zA-Z0-9.'!#$%&*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+[.](?:.[a-zA-Z0-9-]+)+$" required>
                                <div class="invalid-feedback">
                                    <p class="texto_1 text-danger">Este campo es obligatorio, por favor introduce una dirección de correo válida.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3 justify-content-evenly d-flex align-items-center mx-auto my-auto">
                            <div class="col-11 mx-auto">
                                <label for="asuntoCont" class="mb-1"><?php echo $langContacto['FormAsuntoCont'] ?></label>
                                <input type="text" class="form-control input_form mb-3" id="asuntoCont" name="asuntoCont">
                            </div>
                            <div class="col-11 mx-auto">
                                <label for="mensajeCont" class="mb-1"><?php echo $langContacto['FormMensajeCont'] ?></label>
                                <textarea class="form-control input_form ps-4 pe-4" id="mensajeCont" name="mensajeCont" pattern="^[a-zA-Z\D\s]{1,}$" required></textarea>
                                <div class="invalid-feedback">
                                    <p class="texto_1 text-danger">Este campo es obligatorio, por favor introduce el mensaje.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-evenly">
                            <div class="d-grid gap-2 d-md-flex mt-4 col-10">
                                <button type="submit" name="enviarFormCont" id="enviarFormCont" class="btn_1 mx-auto ps-4 pe-4 pt-2 pb-2"><?php echo $langContacto['FormBtnEnviarCont'] ?></button>
                            </div>
                        </div>
                    </form>
                </div>
                <h2 class="titulo mt-5 ps-0"><?php echo $langContacto['h2DatosContacto'] ?></h2>
                <div class="row mt-4">
                    <div class="col-1 d-flex my-auto">
                        <img src="./img/telefono.png" alt="Idioma" height="30" class="my-auto">
                    </div>
                    <div class="col my-auto">
                        <p class="m-0">(442) 388 5459   <br>  (442) 543 0289 </p>
                    </div>
                    <div class="col-1 d-flex my-auto">
                        <img src="./img/correo.png" alt="Idioma" height="30" class="my-auto">
                    </div>
                    <div class="col  my-auto">
                        <a class="texto-azul" href="mailto:clientes2@autoqro.mx">clientes2@autoqro.mx</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <h2 class="titulo ps-0"><?php echo $langContacto['h2Visitanos'] ?></h2>
                <p class="titulo_2"><?php echo $langContacto['p4CAQCon'] ?></p>
                <div class="row mx-auto mb-4">
                    <div class="col-1 my-auto">
                        <img src="./img/ubi.png" alt="Idioma" height="30" class="my-auto">
                    </div>
                    <div class="col">
                        <p class="m-0"><?php echo $langContacto['p1Direccion'] ?></p>
                        <p class="m-0"><?php echo $langContacto['p2Direccion'] ?></p>
                        <p class="m-0"><?php echo $langContacto['p3Direccion'] ?></p>
                    </div>
                </div>
                <div class="d-flex my-auto mx-auto">
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1712.2481557992576!2d-100.4083989280233!3d20.610948610905446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35bda8085ceb3%3A0x8da05608301f9db!2sCluster%20Automotriz%20de%20Quer%C3%A9taro!5e0!3m2!1ses-419!2smx!4v1667241930279!5m2!1ses-419!2smx" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!---------------- Fin de la sección para las tarjetas de los asociados TR2 ---------------->
<?php
include("./back-end/php/form_contacto.php");
require_once('./src/footer.php')
?>