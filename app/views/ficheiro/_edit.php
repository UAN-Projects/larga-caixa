<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModal" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Utilizador</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?= form_open("$class/update/$item->id"); ?>
          <?= validation_errors('<code>', '</code>'); ?>
              <div class="modal-body">
                  <div class="form-group">
                      <label for="fullname">Nome</label>
                      <?= form_input( array('name' => 'preco', 'type' => 'text', 'id' => 'preco', 'placeholder' => "1001", 'required' => '', 'class' => 'form-control', ), set_value('preco', $item->preco));?>
                  </div>
                  <div class="form-group">
                      <label for="fullname">Nome</label>
                      <?= form_input( array('name' => 'conta', 'type' => 'text', 'id' => 'conta', 'placeholder' => "1001", 'required' => '', 'class' => 'form-control', ), set_value('conta', $item->conta));?>
                  </div>
                  <div class="form-group">
                      <label for="fullname">Descrição</label>
                      <?= form_textarea(array('name' => 'descricao', 'id' => 'descricao', 'required' => '', 'class' => 'form-control'), set_value('descricao', $item->descricao));?>
                  </div>
              </div>
              <div class="modal-footer">
                  <div class="text-right">
                      <button type="reset" class="btn btn-danger waves-effect waves-light">Reset</button>
                      <button type="submit" class="btn btn-success waves-effect waves-light">Actualizar</button>
                  </div>
              </div>
          <?= form_close(); ?>
      </div>
    </div>
  </div>
