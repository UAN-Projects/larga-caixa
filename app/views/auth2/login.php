<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="assets/favicon.ico"/>
  <link rel="stylesheet" href="<?= base_url("assets/vendor/bootstrap/css/bootstrap.min.css")?>" />
  <link rel="stylesheet" href="<?= base_url("assets/vendor/font-awesome/css/font-awesome.css")?>" />
  <link rel="stylesheet" href="<?= base_url("assets/vendor/bootstrap/components/sign-in/signin.css")?>" />
  <link rel="stylesheet" href="<?= base_url("assets/css/style.css")?>" />
</head>
	<body>

  <!-- Content main -->

    <main class="form-signin">
      <h1><?php echo lang('login_heading');?></h1>
      <p><?php echo lang('login_subheading');?></p>

      <div id="infoMessage">
      <?php if(isset($message)) { ?>
        <?= $message;?>
      <?php } ?>
      </div>
      <?php echo form_open("auth/index");?>
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
    
    <script type="text/javascript" src="<?= base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/js/scripts.js")?>"></script>
	</body>
</html>