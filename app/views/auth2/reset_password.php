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
	<link rel="stylesheet" href="<?= base_url("assets/css/style.css")?>" />
</head>
<body>

	<!-- Content -->
	<script type="text/javascript" src="<?= base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")?>"></script>
	<script type="text/javascript" src="<?= base_url("assets/js/scripts.js")?>"></script>
</body>
</html>

<h1><?php echo lang('reset_password_heading');?></h1>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open('auth/reset_password/' . $code);?>

	<p>
		<label for="new_password"><?php echo sprintf(lang('reset_password_new_password_label'), $min_password_length);?></label> <br />
		<?php echo form_input($new_password);?>
	</p>

	<p>
		<?php echo lang('reset_password_new_password_confirm_label', 'new_password_confirm');?> <br />
		<?php echo form_input($new_password_confirm);?>
	</p>

	<?php echo form_input($user_id);?>
	<?php echo form_hidden($csrf); ?>

	<p><?php echo form_submit('submit', lang('reset_password_submit_btn'));?></p>

<?php echo form_close();?>