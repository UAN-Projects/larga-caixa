<div class="container">
    <main>
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span class="icon icon-info"> Utilizadores</span>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createUserModal">
                    Registar
                </button>
            </div>
            <div class="card-body">
                <?php if(isset($users)) { ?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>username</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Acção</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $user->username; ?></td>
                            <td><?= $user->email; ?></td>
                            <td><?= $user->phone; ?></td>
                            <td class="actions text-end">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                        Opções
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                        <li><a class="dropdown-item" href="<?= base_url("user/show/$user->id")?>">Visualizar</a></li>
                                        <li><a class="dropdown-item" href="#">Editar</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach;  ?>
                    </tbody>
                </table>
                <?php }  ?>
            </div>
        </div>
    </main>
</div>


<!-- Modal -->
<div class="modal fade" id="createUserModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Novo Utilizzador</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <?#= form_open("$class/$method"); ?>
      <?= form_open("user/index"); ?>
        
        <div class="modal-body">
        <?= validation_errors('<code>', '</code>'); ?>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Nome</label>
                        <?= form_input(array('name' => 'first_name', 'class' => 'form-control'), set_value('first_name'));?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <?= form_input(array('name' => 'email', 'class' => 'form-control'), set_value('email'));?>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Username</label>
                        <?= form_input(array('name' => 'username', 'class' => 'form-control'), set_value('username'));?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Senha\</label>
                        <?= form_input(array('name' => 'password', 'class' => 'form-control'));?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Confirmar Senha</label>
                        <?= form_input(array('name' => 'confirm_password', 'class' => 'form-control'));?>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a href="<?= base_url("user/index") ?>" class="btn btn-default pull-right" data-bs-dismiss="modal"> Cancelar </a>
            <?= form_submit(array('name'=>'salvar'), 'Salvar', array('class' => 'btn btn-primary'));?>
        </div>
      <?= form_close(); ?>
    </div>
  </div>
</div>
