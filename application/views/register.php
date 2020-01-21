<?php include ('include/header.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<div class="card>
				<img class="card-img-top">
			<div class="card-body">
				<h5 class="card-title">Admin Register</h5>
				<?php echo form_open('welcome/store')?>
					<fieldset>

						<div class="form-group row">
							<label for="staticEmail" class="col-sm-2 col-form-label">User Name</label>
							<div class="col-sm-6">
								<input type="text" name="username" class="form-control" placeholder="User Name">
								<?php echo form_error('username', '<div class="text-danger">', '</div>'); ?>
							</div>
						</div>

						<div class="form-group row">
							<label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
							<div class="col-sm-6">
								<input type="email" name="email" class="form-control" placeholder="Email">
								<?php echo form_error('email', '<div class="text-danger">', '</div>'); ?>
							</div>
						</div>

						<div class="form-group row">
							<label for="staticEmail" class="col-sm-2 col-form-label">Role</label>
							<select name="role_id" id="" class="col-sm-6 form-control">
								<option value="">Select</option>
								<?php if(count($loadRoles)): ?>
								<?php foreach ($loadRoles as $loadRole): ?>
									<option value="<?php echo $loadRole->role_id ?>"><?php echo $loadRole->rolename ?></option>

								<?php endforeach; ?>
								<?php endif;?>
							</select>
							<br>
							<?php echo form_error('role_id', '<div class="text-danger">', '</div>'); ?>
						</div>

						<div class="form-group row">
							<label for="staticEmail" class="col-sm-2 col-form-label">Password</label>
							<div class="col-sm-6">
								<input type="password" name="password" class="form-control">
								<?php echo form_error('password', '<div class="text-danger">', '</div>'); ?>
							</div>
						</div>

						<div class="form-group row">
							<label for="staticEmail" class="col-sm-2 col-form-label">Confirm Password</label>
							<div class="col-sm-6">
								<input type="password" name="confirm_password" class="form-control">
								<?php echo form_error('confirm_password', '<div class="text-danger">', '</div>'); ?>
							</div>
						</div>



						<button type="submit" class="btn btn-primary">Submit</button>
					</fieldset>
				<?php echo form_close()?>

			</div>
		</div>
	</div>
</div>
</div>



<?php include ('include/footer.php'); ?>
