<div class="col-md-12">
    <label for="name" class="form-label">Lenguaje</label>
    <input name="name" type="text" class="form-control <?= isset($err->name) ? 'is-invalid' : '' ?>" id="name" value="<?= isset($data->name) ? $data->name : '' ?>">
    <?php if (isset($err->name)) : ?>
        <div class="invalid-feedback">
            <?= $err->name ?>
        </div>
    <?php endif; ?>
</div>

<input type="hidden" name="id" value="<?= isset($data->id) ? $data->id : '' ?> ">