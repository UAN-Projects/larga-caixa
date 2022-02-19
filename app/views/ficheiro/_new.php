<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Novo Utilizador</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <?= form_open_multipart("$class/$method");?>
        <?= validation_errors('<code>', '</code>'); ?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="fullname">Preço</label>
                    <?= form_input( array('name' => 'preco', 'type' => 'text', 'id' => 'first_name', 'placeholder' => "99.00", 'class' => 'form-control', ), set_value('preco'));?>
                </div>
                <div class="form-group">
                    <label for="fullname">Conta</label>
                    <?= form_input( array('name' => 'conta', 'type' => 'text', 'id' => 'conta', 'placeholder' => "1001", 'class' => 'form-control', ), set_value('conta'));?>
                </div>
                <div class="form-group">
                    <label for="fullname">Descrição</label>
                    <?= form_textarea(array('name' => 'descricao', 'id' => 'descricao', 'required' => '', 'class' => 'form-control'), set_value('descricao'));?>
                </div>
                <div class="form-group">
                    <label class="btn btn-success text-center">
                        <span><i class="mdi mdi-cloud-upload mr-1"></i> Carregar Ficheiro</span>
                        <input type="file" name="ficheiro" hidden>
                    </label>
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