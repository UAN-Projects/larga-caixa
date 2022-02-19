<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center justify-content-between m-0 p-0">
                    <div >
                        <p> <h4> Ficheiro </h4> </p>
                    </div><!-- end col -->
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
                            <a class="dropdown-item" href="<?= base_url("$class"); ?>">Listagem</a>
                            <?php if( $item->user_id == $user_corrent) { ?>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#updateModal" data-whatever="@mdo">Editar</a>
                            <?php } ?>
                            <?php if(!$this->Core_model->getFiles($user_corrent) && $item->user_id != $user_corrent) { ?>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#buyModal" data-whatever="@mdo">Comprar</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row m-0 p-1">
                    <div class="col-sm-6">
                        <strong>Preço : </strong> <?= $item->preco; ?>
                    </div> <!-- end col -->

                    <div class="col-sm-6">
                        <strong>Ficheiro : </strong> <?= $item->ficheiro ?>
                    </div> <!-- end col -->
                </div> 
            </div>
            
            <div class="card-body">
                <div class="row m-0 p-1">
                    <div class="col-sm-6">
                        <strong>Nome : </strong> <?= $item->descricao; ?>
                    </div> <!-- end col -->
                    <div class="col-sm-6">
                        <strong>Conta : </strong> <?= $item->conta; ?>
                    </div> <!-- end col -->
                </div> 
            </div>
            
            <div class="card-footer">
                <div class="d-flex align-items-center justify-content-end m-0 p-0">
                    <div>
                        <strong>Criado em: </strong> <?= $item->created_at ?> 
                    </div>
                    <span> - </span>
                    <div>
                    <?php if($item->updated_at) { ?>
                        <strong> Actualizado em: </strong> <?= $item->updated_at ?>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div> <!-- end card-box -->
    </div> <!-- end col -->
</div>


<?php require('_edit.php'); ?>
<?php require('_comprar.php'); ?>