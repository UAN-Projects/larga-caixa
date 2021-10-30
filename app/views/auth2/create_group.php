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

<h1><?php echo lang('create_group_heading');?></h1>
<p><?php echo lang('create_group_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_group");?>

      <p>
            <?php echo lang('create_group_name_label', 'group_name');?> <br />
            <?php echo form_input($group_name);?>
      </p>

      <p>
            <?php echo lang('create_group_desc_label', 'description');?> <br />
            <?php echo form_input($description);?>
      </p>

      <p><?php echo form_submit('submit', lang('create_group_submit_btn'));?></p>

<?php echo form_close();?>