
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
      <div class="container">
            <main>
                  <div class="card">
                        <div class="card-body">
                              <div class="col-md-7 col-lg-8">
                                    <h4 class="mb-3">Novo Utilizador</h4>
                                    <form class="needs-validation" novalidate>
                                    <div class="row g-3">
                                          <div class="col-sm-6">
                                          <label for="firstName" class="form-label">Primeiro Nome</label>
                                          <?= form_input( array('name' => 'first_name', 'type' => 'text', 'id' => 'firstName', 'class' => 'form-control', ), set_value('first_name'));?>
                                          </div>

                                          <div class="col-sm-6">
                                          <label for="lastName" class="form-label">Last name</label>
                                          <?= form_input( array('name' => 'last_name', 'type' => 'text', 'id' => 'lastName', 'class' => 'form-control', ), set_value('last_name'));?>
                                          </div>

                                          <div class="col-12">
                                          <label for="username" class="form-label">Username</label>
                                          <div class="input-group has-validation">
                                          <span class="input-group-text">@</span>
                                          <?= form_input( array('name' => 'identity', 'type' => 'text', 'id' => 'identity', 'class' => 'form-control', ), set_value('identity'));?>

                                          <input type="text" class="form-control" id="username" placeholder="Username" required>
                                          <?= form_input( array('name' => 'username', 'type' => 'text', 'id' => 'Username', 'class' => 'form-control', ), set_value('username'));?>
                                          </div>
                                          </div>

                                          <div class="col-12">
                                          <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                                          <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                          <div class="invalid-feedback">
                                          Please enter a valid email address for shipping updates.
                                          </div>
                                          </div>

                                          <div class="col-12">
                                          <label for="address" class="form-label">Address</label>
                                          <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                                          <div class="invalid-feedback">
                                          Please enter your shipping address.
                                          </div>
                                          </div>

                                          <div class="col-12">
                                          <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
                                          <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                                          </div>

                                          <div class="col-md-5">
                                          <label for="country" class="form-label">Country</label>
                                          <select class="form-select" id="country" required>
                                          <option value="">Choose...</option>
                                          <option>United States</option>
                                          </select>
                                          <div class="invalid-feedback">
                                          Please select a valid country.
                                          </div>
                                          </div>

                                          <div class="col-md-4">
                                          <label for="state" class="form-label">State</label>
                                          <select class="form-select" id="state" required>
                                          <option value="">Choose...</option>
                                          <option>California</option>
                                          </select>
                                          <div class="invalid-feedback">
                                          Please provide a valid state.
                                          </div>
                                          </div>

                                          <div class="col-md-3">
                                          <label for="zip" class="form-label">Zip</label>
                                          <input type="text" class="form-control" id="zip" placeholder="" required>
                                          <div class="invalid-feedback">
                                          Zip code required.
                                          </div>
                                          </div>
                                    </div>

                                    <hr class="my-4">

                                    <div class="form-check">
                                          <input type="checkbox" class="form-check-input" id="same-address">
                                          <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
                                    </div>

                                    <div class="form-check">
                                          <input type="checkbox" class="form-check-input" id="save-info">
                                          <label class="form-check-label" for="save-info">Save this information for next time</label>
                                    </div>

                                    <hr class="my-4">

                                    <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
                                    </form>
                              </div>
                              <!-- Content -->
                              <div class="col-md-12">

                              <h1><?php echo lang('create_user_heading');?></h1>
                              <p><?php echo lang('create_user_subheading');?></p>

                              <div id="infoMessage"><?php echo $message;?></div>

                              <?php echo form_open("auth/create_user");?>

                                    <p>
                                          <?php echo lang('create_user_fname_label', 'first_name');?> <br />
                                          <?php echo form_input($first_name);?>
                                    </p>

                                    <p>
                                          <?php echo lang('create_user_lname_label', 'last_name');?> <br />
                                          <?php echo form_input($last_name);?>
                                    </p>
                                    
                                    <?php
                                    if($identity_column!=='email') {
                                    echo '<p>';
                                    echo lang('create_user_identity_label', 'identity');
                                    echo '<br />';
                                    echo form_error('identity');
                                    echo form_input($identity);
                                    echo '</p>';
                                    }
                                    ?>

                                    <p>
                                          <?php echo lang('create_user_company_label', 'company');?> <br />
                                          <?php echo form_input($company);?>
                                    </p>

                                    <p>
                                          <?php echo lang('create_user_email_label', 'email');?> <br />
                                          <?php echo form_input($email);?>
                                    </p>

                                    <p>
                                          <?php echo lang('create_user_phone_label', 'phone');?> <br />
                                          <?php echo form_input($phone);?>
                                    </p>

                                    <p>
                                          <?php echo lang('create_user_password_label', 'password');?> <br />
                                          <?php echo form_input($password);?>
                                    </p>

                                    <p>
                                          <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
                                          <?php echo form_input($password_confirm);?>
                                    </p>


                                    <p><?php echo form_submit('submit', lang('create_user_submit_btn'));?></p>

                              <?php echo form_close();?>
                              </div>
                        </div>
                  </div>
            </main>
      </div>

	<script type="text/javascript" src="<?= base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")?>"></script>
	<script type="text/javascript" src="<?= base_url("assets/js/scripts.js")?>"></script>
</body>
</html>


