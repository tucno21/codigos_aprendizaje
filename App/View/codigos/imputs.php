<?php
$linksScript2 = [
    // 'https://cdn.ckeditor.com/ckeditor5/35.3.0/balloon/ckeditor.js',
    base_url . '/assets/js/ckeditorMensaje.js',
];
?>
<div class="col-md-6 position-relative mt-3">
    <label class="form-label mb-1">Titulo</label>
    <div class="input-group">
        <span class="input-group-text"><i class="bi bi-type-h1"></i></span>
        <input name="titulo" type="text" class="form-control <?= isset($err->titulo) ? 'is-invalid' : '' ?>" value="<?= isset($data->titulo) ? $data->titulo : '' ?>">
        <?php if (isset($err->titulo)) : ?>
            <div class="invalid-feedback">
                <?= $err->titulo ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<div class="col-md-6 position-relative mt-3">
    <label class="form-label mb-1">Lenguaje</label>
    <div class="input-group">
        <span class="input-group-text"><i class="bi bi-code-slash"></i></span>
        <select id="rol" name="lenguaje_id" class="form-select <?= isset($err->lenguaje_id) ? 'is-invalid' : '' ?>">
            <option value="">Seleccione...</option>
            <?php foreach ($lenguajes as $lenguaje) : ?>
                <option <?= isset($data->lenguaje_id) && $data->lenguaje_id == $lenguaje->id ? 'selected' : '' ?> value="<?= $lenguaje->id; ?>"><?= $lenguaje->name; ?></option>
            <?php endforeach; ?>
        </select>
        <?php if (isset($err->lenguaje_id)) : ?>
            <div class="invalid-feedback">
                <?= $err->lenguaje_id ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<div class="col-md-12 position-relative mt-3">
    <label class="form-label mb-1">Descripccion</label>
    <div class="input-group">
        <span class="input-group-text"><i class="bi bi-input-cursor-text"></i></span>
        <input name="descripcion" type="text" class="form-control <?= isset($err->descripcion) ? 'is-invalid' : '' ?>" value="<?= isset($data->descripcion) ? $data->descripcion : '' ?>">
        <?php if (isset($err->descripcion)) : ?>
            <div class="invalid-feedback">
                <?= $err->descripcion ?>
            </div>
        <?php endif; ?>
    </div>
</div>


<!-- codigo textarea -->
<div class="col-12 mt-3">
    <label class="form-label mb-1">codigo</label>
    <div class="input-group">
        <span class="input-group-text"><i class="bi bi-body-text"></i></span>
        <textarea id="codigoEmpresa" name="codigo" class="form-control <?= isset($err->codigo) ? 'is-invalid' : '' ?>" rows="3"><?= isset($data->codigo) ? $data->codigo : '' ?></textarea>
        <?php if (isset($err->codigo)) : ?>
            <div class="invalid-feedback">
                <?= $err->codigo ?>
            </div>
        <?php endif; ?>
    </div>
</div>


<input type="hidden" name="id" value="<?= isset($data->id) ? $data->id : '' ?> ">