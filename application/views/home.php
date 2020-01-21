<?php include ('include/header.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<div class="card>
				<img class="card-img-top">
				<div class="card-body">
					<h5 class="card-title">Admin And Coadmin Login</h5>

					<?php echo anchor('welcome/registerForm', 'Admin Registration', ['class'=> 'btn btn-success'])	?>
					<a href="welcome/admin" class="btn btn-info">Admin Login</a>

				</div>
			</div>
		</div>
	</div>
</div>



<?php include ('include/footer.php'); ?>
