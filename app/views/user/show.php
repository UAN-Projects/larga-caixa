<div class="container">
    <main>
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span class="icon icon-info"> Utilizadores</span>
                <a href="<?= base_url("user")?>">
                    <span class="icon icon-list"> </span>
                </a>
            </div>
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <span>
                        <strong> Username :</strong> <?= $user->username ?>
                    </span>
                    <span>
                        <strong> Email :</strong> <?= $user->email ?>
                    </span>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <span>
                        <strong> Nome :</strong> <?= $user->first_name ?> <?= $user->last_name ?>
                    </span>
                    <span>
                        <strong> Email :</strong> <?= $user->phone ?>
                    </span>
                </div>
            </div>
        </div>
    </main>

</div>