<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
				<div class="d-flex align-items-center justify-content-between mb-2">
					
					<h4 class="header-title"> Ficheiros </h4>
				</div>

                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>Criado por: </th>
                            <th>Preço</th>
                            <th>Ficheiro</th>
                            <th class="text-right">Acção</th>
                        </tr>
                    </thead>
                
                    <tbody>
					<?php foreach ($items as $item): ?>
                        <tr>
                            <td> <?= $this->ion_auth->user($item->user_id)->row()->first_name; ?> </td>
                            <td> <?= $item->preco; ?> </td>
                            <td> <?= $item->ficheiro; ?> </td>
                            <td class="text-right">
								<div class="btn-group">
									<button 
										class="btn btn-primary btn-sm dropdown-toggle" 
										type="button" 
										data-toggle="dropdown" 
										aria-haspopup="true" 
										aria-expanded="false"
									> Acções
									</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="<?= base_url("$class/show/$item->id"); ?>">Visualizar</a>
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


<?= print_r($this->Core_model->getFiles($user_corrent)); ?>

<?php require('_new.php'); ?>
<?php require('_edit.php'); ?>

