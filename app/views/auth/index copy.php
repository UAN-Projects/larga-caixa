<div class="col-md-8 col-lg-6 col-xl-5">
    <div class="card">

        <div class="card-body p-4">
            
            <div class="text-center w-75 m-auto">
                <a href="index.html">
                    <span><img src="assets/images/logo-light.png" alt="" height="22"></span>
                </a>
                <p class="text-muted mb-4 mt-3">Enter your email address and password to access admin panel.</p>
            </div>

            <form action="#">

                <div class="form-group mb-3">
                    <label for="emailaddress">Email address</label>
                    <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                </div>

                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                </div>

                <div class="form-group mb-3">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                        <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                    </div>
                </div>

                <div class="form-group mb-0 text-center">
                    <button class="btn btn-primary btn-block" type="submit"> Log In </button>
                </div>

            </form>

            <div class="text-center">
                <h5 class="mt-3 text-muted">Sign in with</h5>
                <ul class="social-list list-inline mt-3 mb-0">
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                    </li>
                </ul>
            </div>

        </div> <!-- end card-body -->
    </div>
    <!-- end card -->

    <div class="row mt-3">
        <div class="col-12 text-center">
            <p> <a href="pages-recoverpw.html" class="text-muted ml-1">Forgot your password?</a></p>
            <p class="text-muted">Don't have an account? <a href="pages-register.html" class="text-primary font-weight-medium ml-1">Sign Up</a></p>
        </div> <!-- end col -->
    </div>
    <!-- end row -->

</div>



<div>
  <?= base_url(); ?>
</div>
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>SGTFC</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Entrar</p>
    <?php if($this->session->flashdata('login_erro')) { ?>
      <p class="text-center"> <?= $this->session->flashdata('login_erro'); ?> </p>
    <?php } ?>
    <?= form_open("login/index", 'class="user" '); ?>
    <?= validation_errors('<code>', '</code>'); ?>
    
      <div class="form-group has-feedback">
        <?= form_input(array('name' => 'login', 'class' => 'form-control', 'placeholder'=>"username ou e-mail"), set_value('login'));?>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <?= form_password(array('name' => 'senha', 'class' => 'form-control', 'placeholder'=>"Senha"));?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <a href="#">Esqueceu sua senha?</a><br>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <?= form_submit(array('name'=>'entrar'), 'Entrar', array('class' => 'btn btn-primary btn-block btn-flat'));?>
        </div>
        <!-- /.col -->
      </div>
      <?= form_close(); ?>
    <!-- /.social-auth-links -->
  </div>
  <!-- /.login-box-body -->
</div>




<main class="form-signin">
    <h1><?php echo lang('login_heading');?></h1>
    <p><?php echo lang('login_subheading');?></p>

    <div id="infoMessage">
    <?php if( $this->session->flashdata('error')) { ?>
        <?= $this->session->flashdata('error'); ?>
    <?php } ?>
    
    </div>
    <?php echo form_open("login/autenticacao");?>
    <span> <i class="fab fa-btc"></i> </span>

    <div class="form-floating">
        <p>
        <?php echo lang('login_identity_label', 'identity');?>
        <?= form_input( array('name' => 'identity', 'type' => 'text', 'id' => 'identity', 'class' => 'form-control', 'placeholder'=>"name@example.com"), set_value('identity'));?>
        </p>
    </div>
    <div class="form-floating">
        <p>
        <?php echo lang('login_password_label', 'password');?>
        <?= form_password(array('name' => 'password', 'class' => 'form-control', 'placeholder'=>"Senha"));?>
        </p>
    </div>

    <div class="checkbox mb-3">
        <p>
        <?php echo lang('login_remember_label', 'remember');?>
        <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
        </p>
    </div>

    <p>
    <?= form_submit(array('name'=>'submit'), lang('login_submit_btn'), array('class' => 'w-100 btn btn-lg btn-primary'));?>
    </p>

    <?php echo form_close();?>
</main>