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
      <main class="form-signin">
      <h1><?php echo lang('forgot_password_heading');?></h1>
      <p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>

      <div id="infoMessage"><?php echo $message;?></div>

      <?php echo form_open("auth/forgot_password");?>

            <p>
                  <label for="identity"><?php echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?></label> <br />
                  <?php echo form_input($identity);?>
            </p>

            <p><?php echo form_submit('submit', lang('forgot_password_submit_btn'));?></p>

      <?php echo form_close();?>
      </main>
	<!-- Content -->
	<script type="text/javascript" src="<?= base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")?>"></script>
	<script type="text/javascript" src="<?= base_url("assets/js/scripts.js")?>"></script>
</body>
</html>
