<?php
require_once('./src/header.php');
include('./back-end/php/conexion.php');
?>

<section>
    <div class="portada_box d-flex align-items-end">
    </div>
</section>

<!---------------- Inicio de la sección para las tarjetas de los asociados TR2 ---------------->
<section class="info_sec">
    <div class="col-8 mx-auto aviso_privacidad">
        <h1 class="titulo"><?php echo $langAvisoPriv['h1AvisoPrivacidad'] ?></h1> <br>
        <p><?php echo $langAvisoPriv['p1CAQ'] ?></p>
        <p><?php echo $langAvisoPriv['p2Responsable'] ?></p>
        <p><?php echo $langAvisoPriv['p3DatosPers'] ?></p>

        <ul>
            <li class="lista"><?php echo $langAvisoPriv['li1Proveer'] ?></li>
            <li class="lista"><?php echo $langAvisoPriv['li2Atender'] ?></li>
            <li class="lista"><?php echo $langAvisoPriv['li3Ratificacion'] ?></li>
            <li class="lista"><?php echo $langAvisoPriv['li4Comunicarle'] ?></li>
            <li class="lista"><?php echo $langAvisoPriv['li5Evaluar'] ?></li>
        </ul>

        <p><?php echo $langAvisoPriv['p4ParaLlevar'] ?></p>

        <ul>
            <li class="lista"><?php echo $langAvisoPriv['li6Nombre'] ?></li>
            <li class="lista"><?php echo $langAvisoPriv['li7Registro'] ?></li>
            <li class="lista"><?php echo $langAvisoPriv['li8Clave'] ?></li>
            <li class="lista"><?php echo $langAvisoPriv['li9Lugar'] ?></li>
            <li class="lista"><?php echo $langAvisoPriv['li10Fecha'] ?></li>
            <li class="lista"><?php echo $langAvisoPriv['li11Firma'] ?></li>
            <li class="lista"><?php echo $langAvisoPriv['li12Nacionalidad'] ?></li>
            <li class="lista"><?php echo $langAvisoPriv['li13Domicilio'] ?></li>
            <li class="lista"><?php echo $langAvisoPriv['li14Telefono'] ?></li>
            <li class="lista"><?php echo $langAvisoPriv['li15Telefono'] ?></li>
            <li class="lista"><?php echo $langAvisoPriv['li16Correo'] ?></li>
            <li class="lista"><?php echo $langAvisoPriv['li17Edad'] ?></li>
            <li class="lista"><?php echo $langAvisoPriv['li18Puesto'] ?></li>
            <li class="lista"><?php echo $langAvisoPriv['li19Domicilio'] ?></li>
            <li class="lista"><?php echo $langAvisoPriv['li20Correo'] ?></li>
            <li class="lista"><?php echo $langAvisoPriv['li21Telefono'] ?></li>
            <li class="lista"><?php echo $langAvisoPriv['li22Referencias'] ?></li>
            <li class="lista"><?php echo $langAvisoPriv['li23Datos'] ?></li>
            <li class="lista"><?php echo $langAvisoPriv['li24Datos'] ?></li>
            <li class="lista"><?php echo $langAvisoPriv['li25Datos'] ?></li>
        </ul>

        <p><?php echo $langAvisoPriv['p5UstedTiene'] ?></p>

        <p><?php echo $langAvisoPriv['p6ParaEl'] ?></p>

        <p><?php echo $langAvisoPriv['p7Mediante'] ?></p>

        <p><?php echo $langAvisoPriv['p8ConRelacion'] ?></p>

        <ol>
            <li class="lista-or"><?php echo $langAvisoPriv['li26Cualquier'] ?></li>
            <li class="lista-or"><?php echo $langAvisoPriv['li270Renovacion'] ?></li>
            <li class="lista-or"><?php echo $langAvisoPriv['li281Nombre'] ?></li>
            <li class="lista-or"><?php echo $langAvisoPriv['li292ElNombre'] ?></li>
            <li class="lista-or"><?php echo $langAvisoPriv['li30LosDocumentos'] ?></li>
            <li class="lista-or"><?php echo $langAvisoPriv['li31LaDescripcion'] ?></li>
            <li class="lista-or"><?php echo $langAvisoPriv['li32Cualquier'] ?></li>
        </ol>

        <p><?php echo $langAvisoPriv['p9ParaEl'] ?></p>

        <ol>
            <li class="lista-or"><?php echo $langAvisoPriv['li33CAQ'] ?></li>
            <li class="lista-or"><?php echo $langAvisoPriv['li34LaObligacion'] ?></li>
            <li class="lista-or"><?php echo $langAvisoPriv['li35EnElCaso'] ?></li>
        </ol>

        <p><?php echo $langAvisoPriv['p10ConObjeto'] ?></p>

        <p><?php echo $langAvisoPriv['p11Mediante'] ?></p>

        <p><?php echo $langAvisoPriv['p12ElUsoDe'] ?></p>

        <p><?php echo $langAvisoPriv['p13LosDatos'] ?></p>

        <ul>
            <li class="lista"><?php echo $langAvisoPriv['li36Proveer'] ?></li>
            <li class="lista"><?php echo $langAvisoPriv['li36Atender'] ?></li>
            <li class="lista"><?php echo $langAvisoPriv['li36Comunicarle'] ?></li>
            <li class="lista"><?php echo $langAvisoPriv['li36Evaluar'] ?></li>
        </ul>

        <p><?php echo $langAvisoPriv['p14ParaLas'] ?></p>

        <p><?php echo $langAvisoPriv['p15LosDatos'] ?></p>

        <ul>
            <li><?php echo $langAvisoPriv['li37Direccion'] ?></li>
            <li><?php echo $langAvisoPriv['li38Region'] ?></li>
            <li><?php echo $langAvisoPriv['li36Tipo'] ?></li>
            <li><?php echo $langAvisoPriv['li36Tipo'] ?></li>
            <li><?php echo $langAvisoPriv['li36Fecha'] ?></li>
            <li><?php echo $langAvisoPriv['li36Paginas'] ?></li>
            <li><?php echo $langAvisoPriv['li36Busquedas'] ?></li>
        </ul>

        <p><?php echo $langAvisoPriv['p16Utilizamos'] ?></p>

        <p> <b><?php echo $langAvisoPriv['pbCookies'] ?></b> <?php echo $langAvisoPriv['p17LasCookies'] ?></p>

        <p> <b><?php echo $langAvisoPriv['pbWebBeacons'] ?></b> <?php echo $langAvisoPriv['p18Tambien'] ?></p>

        <p> <b><?php echo $langAvisoPriv['pbInhabilitar'] ?></b> <?php echo $langAvisoPriv['p19SiUsted'] ?></p>

        <p> <b><?php echo $langAvisoPriv['pbDireccion'] ?></b> <?php echo $langAvisoPriv['p20Nosotros'] ?></p>

        <p> <b><?php echo $langAvisoPriv['pbEstasTec'] ?></b> <?php echo $langAvisoPriv['p21SiUsted'] ?></p>

        <p><?php echo $langAvisoPriv['p22ElPresente'] ?></p>

        <p><?php echo $langAvisoPriv['p23NosComprometemos'] ?></p>

        <p><?php echo $langAvisoPriv['p24SusDatos'] ?></p>
    </div>
</section>

<!---------------- Fin de la sección para las tarjetas de los asociados TR2 ---------------->
<?php
include("form_contacto.php");
require_once('./src/footer.php')
?>