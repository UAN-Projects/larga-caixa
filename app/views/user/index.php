<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
				<div class="d-flex align-items-center justify-content-between mb-2">
					<button type="button" class="btn btn-primary" id="open-modal" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="mdi mdi-plus-circle mr-1"></i> Add</button>
					<h4 class="header-title">Utilizadores</h4>
				</div>

                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>status</th>
                            <th>Ultimo Login</th>
                            <th class="text-right">Acção</th>
                        </tr>
                    </thead>
                
                
                    <tbody>
					<?php foreach ($users as $user): ?>
                        <tr>
                            <td> <?= $user->first_name?> </td>
                            <td> <?= $user->email?> </td>
                            <td> <?= ($user->active)? 'ativo' : 'desativo' ?> </td>
                            <td> <?= date("Y-m-d H:i:s", $user->last_login); ?> </td>
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
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
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

<?php require('_form.php'); ?>
