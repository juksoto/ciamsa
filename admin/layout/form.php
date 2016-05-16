
<div class="form-group">
    <label for="tipo_cultivos_id" class="col-sm-2 control-label">Tipos del cultivo</label>
    <div class="col-sm-10">
        <select class="form-control" name = "tipo_cultivos_id" required>
            <option value> Seleccione uno</option>
            <?php require 'helpers/consult_tipo_cultivo.php'; ?>
        </select>
    </div>
</div>
<div class="form-group">
    <label for="etapas_cultivos_id" class="col-sm-2 control-label">Etapas de cultivo</label>
    <div class="col-sm-10">
        <select class="form-control" name = "etapas_cultivos_id" required>
            <option value> Seleccione uno</option>
            <?php require 'helpers/consult_etapas_cultivo.php'; ?>
        </select>
    </div>
</div>
<div class="form-group">
    <label for="referencia_id" class="col-sm-2 control-label">Tipo de cultivo</label>
    <div class="col-sm-10">
        <select class="form-control" name="referencia_id" required>
            <option value> Seleccione uno</option>
            <?php require 'helpers/consult_referencia.php'; ?>
        </select>
    </div>
</div>
<button type="submit" class="btn btn-ciamsa">Enviar</button>
