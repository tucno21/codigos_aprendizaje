<?php include ext('layoutdash.head') ?>
<div class="pcoded-content">
    <!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col d-flex flex-column flex-md-row justify-content-between align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Editar Lenguaje</h5>
                    </div>
                    <div class="">
                        <a href="<?= route('lenguajes.index') ?>" class="btn btn-primary btn-sm">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->

    <!-- [ Main Content ] start -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Completar los campos</h5>
                </div>
                <div class="card-body">
                    <!-- <h5>Form controls</h5>
                    <hr> -->
                    <form action="<?= route('lenguajes.edit') ?>" method="POST">
                        <?= csrf() ?>
                        <div class="row g-2">

                            <?php include_once 'imputs.php' ?>

                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary" type="submit">Actualizar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
</div>
<?php include ext('layoutdash.footer') ?>