<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
				<div class="d-flex align-items-center justify-content-between mb-2">
					<button type="button" class="btn btn-primary" id="open-modal" data-toggle="modal" data-target="#createUserModal" data-whatever="@mdo"><i class="mdi mdi-plus-circle mr-1"></i> Add</button>
					<h4 class="header-title">Paises</h4>
				</div>

                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th class="text-right">Acção</th>
                        </tr>
                    </thead>
                
                
                    <tbody>
					<?php foreach ($paises as $pais): ?>
                        <tr>
                            <td> <?= $pais->nome?> </td>
                            <td class="text-right">
								<div class="btn-group">
									<button 
										class="btn btn-primary btn-sm dropdown-toggle" 
										type="button" 
										data-toggle="dropdown" 
										aria-haspopup="true" 
										aria-expanded="false"
									>Acções
									</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="<?= base_url("user/show/$pais->id"); ?>">Visualizar</a>
										<a class="dropdown-item" href="#" id="open-modal" data-toggle="modal" data-target="#<?= $pais->nome ?>" data-whatever="@mdo">Editar</a>
										<a class="dropdown-item text-danger" href="<?= base_url("user/delete/$pais->id"); ?>">Eliminar</a>
									</div>
								</div>
							</td>
                        </tr>
					<?php endforeach;  ?>
                    </tbody>
                </table>
                
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->

<?php require('_new.php'); ?>
<?php require('_edit.php'); ?>
