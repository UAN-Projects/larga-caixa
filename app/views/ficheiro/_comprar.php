<div class="modal fade" id="buyModal" tabindex="-1" role="dialog" aria-labelledby="buyModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Comprar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <?= form_open_multipart("$class/buy/$item->id");?>
        <?= validation_errors('<code>', '</code>'); ?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="fullname">Conta</label>
                    <?= form_input( array('name' => 'conta_origem', 'type' => 'text', 'id' => 'conta_destino', 'placeholder' => "1001", 'class' => 'form-control', ), set_value('conta_destino'));?>
                    <?=form_hidden('conta_destino', $item->conta);?>
                    <?=form_hidden('valor', $item->preco);?>
                </div>
            </div>
            <div class="modal-footer">
                <div class="text-right">
                    <button type="reset" class="btn btn-danger waves-effect waves-light">Reset</button>
                    <button type="submit" class="btn btn-success waves-effect waves-light">Salvar</button>
                </div>
            </div>

        <?= form_close(); ?>
    </div>
  </div>
</div>