<?php include ext('layout.head') ?>
<div class="container-fluid px-3">
    <div class="row">
        <div class="col-12 mb-3">
            <!-- buscardor -->
            <input id="searchCode" class="form-control form-control-dark  rounded-0 border-3" type="text" placeholder="Buscar..." aria-label="Search">
            <input id="listacodigos" type="hidden" data-link="<?= route('codigos.listacomparar'); ?>">
            <input id="linkCodigo" type="hidden" data-link="<?= route('codigos.show'); ?>">
        </div>
    </div>
    <div class="row" id="mostrarCodigos">
        <!-- <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="">Featured</h5>
                    <div class="">
                        <span class="badge text-bg-primary">Primary</span>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div> -->

    </div>
</div>

<!-- Modal -->
<div class="modal fade modal-xl" id="codigoModal" tabindex="-1" aria-labelledby="codigoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header p-3">
                <h1 class="modal-title fs-5" id="tituloModal">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-1 code-wrapper">
                <div id="contenidoModal"></div>
                <button id="copy-button">Copy <i class="bi bi-clipboard2"></i></button>
                <div class="">
                    <span id="copy-success">Código Copiado! <i class="bi bi-emoji-smile"></i></span>
                </div>
            </div>
            <div class="modal-footer p-1">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cerrar</button>
            </div>
        </div>
    </div>
</div>
<?php include ext('layout.footer') ?>