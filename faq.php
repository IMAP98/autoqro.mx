<?php
require_once('./src/header.php')
?>

<section>
    <div class="portada_box d-flex align-items-end">
        <div class="titulo_portada p-3 col-5 mb-4">
            <div class="h1_portada">
                <h1 class="p-5 text-center fs-1 negritas"><?php echo $langFAQ['h3FAQ'] ?></h1>
            </div>
        </div>
    </div>
</section>

<section class="mx-auto mt-5 col-9">
    <!---------------- Inicio de la sección para las preguntas frecuentes ---------------->
    <div class="col-9 mx-auto p-3">
        <div class="mt-5">
            <ul class="mt-4 lista-faq">
                <li align="justify" class="fw-semibold fs-3 lista titulo_2 mt-4"><?php echo $langFAQ['li1FAQ'] ?></li>
                <p align="justify" class="mt-2 texto texto_gris fs-5"><?php echo $langFAQ['p1FAQ'] ?></p>
                <li align="justify" class="fw-semibold fs-3 lista titulo_2"><?php echo $langFAQ['li2FAQ'] ?></li>
                <p align="justify" class="mt-2 texto texto_gris fs-5">No.</p>
                <li align="justify" class="fw-semibold fs-3 lista titulo_2 mt-4"><?php echo $langFAQ['li3FAQ'] ?></li>
                <p align="justify" class="mt-2 texto texto_gris fs-5">Tampoco.</p>
                <li align="justify" class="fw-semibold fs-3 lista titulo_2 mt-4"><?php echo $langFAQ['li4FAQ'] ?></li>
                <p align="justify" class="mt-2 texto texto_gris fs-5">Sí.</p>
                <li align="justify" class="fw-semibold fs-3 lista titulo_2 mt-4"><?php echo $langFAQ['li5FAQ'] ?></li>
                <p align="justify" class="mt-2 texto texto_gris fs-5">Que no.</p>
                <li align="justify" class="fw-semibold fs-3 lista titulo_2 mt-4"><?php echo $langFAQ['li6FAQ'] ?></li>
                <p align="justify" class="mt-2 texto texto_gris fs-5">Mas o menos.</p>
                <li align="justify" class="fw-semibold fs-3 lista titulo_2 mt-4"><?php echo $langFAQ['li7FAQ'] ?></li>
                <p align="justify" class="mt-2 texto texto_gris fs-5"><?php echo $langFAQ['p7FAQ'] ?></p>
                <ul>
                    <li align="justify" class="lista2 texto_gris fs-5"><?php echo $langFAQ['ulli1FAQ'] ?></li>
                    <li align="justify" class="lista2 texto_gris fs-5"><?php echo $langFAQ['ulli2FAQ'] ?></li>
                    <li align="justify" class="lista2 texto_gris fs-5"><?php echo $langFAQ['ulli3FAQ'] ?></li>
                </ul>
                <li align="justify" class="fw-semibold fs-3 lista titulo_2 mt-4"><?php echo $langFAQ['li8FAQ'] ?></li>
                <p align="justify" class="mt-2 texto texto_gris fs-5"><?php echo $langFAQ['p8FAQ'] ?></p>
                <li align="justify" class="fw-semibold fs-3 lista titulo_2 mt-4"><?php echo $langFAQ['li9FAQ'] ?></li>
                <p align="justify" class="mt-2 texto texto_gris fs-5"><?php echo $langFAQ['p9FAQ'] ?></p>
                <li align="justify" class="fw-semibold fs-3 lista titulo_2 mt-4"><?php echo $langFAQ['li10FAQ'] ?></li>
                <p align="justify" class="mt-2 texto texto_gris fs-5"><?php echo $langFAQ['p10FAQ'] ?></p>
                <li align="justify" class="fw-semibold fs-3 lista titulo_2 mt-4"><?php echo $langFAQ['li11FAQ'] ?></li>
                <p align="justify" class="mt-2 texto texto_gris fs-5"><?php echo $langFAQ['p11FAQ'] ?></p>
                <ul>
                    <li align="justify" class="lista2 texto_gris fs-5"><?php echo $langFAQ['ulli4FAQ'] ?></li>
                    <li align="justify" class="lista2 texto_gris fs-5"><?php echo $langFAQ['ulli5FAQ'] ?></li>
                    <li align="justify" class="lista2 texto_gris fs-5"><?php echo $langFAQ['ulli6FAQ'] ?></li>
                    <li align="justify" class="lista2 texto_gris fs-5"><?php echo $langFAQ['ulli7FAQ'] ?></li>
                </ul>
                <p align="justify" class="mt-2 texto texto_gris fs-5"><?php echo $langFAQ['p12FAQ'] ?></p>
                <p align="justify" class="mt-2 texto texto_gris fs-5"><?php echo $langFAQ['p13-1FAQ'] ?><a class="texto-azul" href="mailto:y.ramos@autoqro.mx">y.ramos@autoqro.mx</a><?php echo $langFAQ['p13-2FAQ'] ?></p>
                <li align="justify" class="fw-semibold fs-3 lista titulo_2 mt-4"><?php echo $langFAQ['li12FAQ'] ?></li>
                <p align="justify" class="mt-2 texto texto_gris fs-5"><?php echo $langFAQ['p14FAQ'] ?></p>
                <ul>
                    <li align="justify" class="lista2 texto_gris fs-5"><?php echo $langFAQ['ulli8FAQ'] ?></li>
                    <li align="justify" class="lista2 texto_gris fs-5"><?php echo $langFAQ['ulli9FAQ'] ?></li>
                    <li align="justify" class="lista2 texto_gris fs-5"><?php echo $langFAQ['ulli10FAQ'] ?></li>
                    <li align="justify" class="lista2 texto_gris fs-5"><?php echo $langFAQ['ulli11FAQ'] ?></li>
                    <li align="justify" class="lista2 texto_gris fs-5"><?php echo $langFAQ['ulli12FAQ'] ?></li>
                    <li align="justify" class="lista2 texto_gris fs-5"><?php echo $langFAQ['ulli13FAQ'] ?></li>
                    <li align="justify" class="lista2 texto_gris fs-5"><?php echo $langFAQ['ulli14FAQ'] ?></li>
                </ul>
            </ul>
        </div>
    </div>
    <!---------------- Fin de la sección para las preguntas frecuentes ---------------->
</section>

<?php
require_once('./src/footer.php')
?>