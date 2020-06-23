<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/customer/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url(" admin/customer/edit") ?>" method="post"
							enctype="multipart/form-data" >

							<input type="hidden" name="id" value="<?php echo $customer->customer_id?>" />

							<div class="form-group">
								<label for="name">Name*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="name" placeholder="Customer name" value="<?php echo $customer->name ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>	
							
							<div class="form-group">
								<label for="email">Email*</label>
								<input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
								 type="text" name="email" placeholder="Email" value="<?php echo $customer->email ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('email') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="password">Password*</label>
								<input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
								 type="password" name="password" placeholder="Password" value="<?php echo $customer->password ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('password') ?>
								</div>
							</div>
							
							<!--<div class="form-group">
								<label for="gender">Gender*</label>
								<input class="form-control <?php echo form_error('gender') ? 'is-invalid':'' ?>"
								 type="text" name="gender" placeholder="Gender" value="<?php echo $customer->gender ?>" />
								<div class="invalid-feedback">
									<?php //echo form_error('gender') ?>
								</div>
							</div>-->
							
							<div class="form-group">
								  <label for="jenis_kelamin">Gender*&nbsp;&nbsp;&nbsp;</label>
								  <label><input type="radio" name="gender" value="Laki-laki"<?php echo ($customer->gender == 'Laki-laki' ? ' checked' : ''); ?>> Laki-laki&nbsp;&nbsp;&nbsp;</label>
								  <label><input type="radio" name="gender" value="Perempuan"<?php echo ($customer->gender == 'Perempuan' ? ' checked' : ''); ?>> Perempuan</label>
							 </div>
													
							<!--<div class="form-group">
								<label for="gender">Married*</label>
								<input class="form-control <?php echo form_error('married') ? 'is-invalid':'' ?>"
								 type="text" name="married" placeholder="Married" value="<?php echo $customer->married ?>" />
								<div class="invalid-feedback">
									<?php //echo form_error('married') ?>
								</div>
							</div>-->
							<div class="form-group">
								  <label for="jenis_kelamin">Married*&nbsp;&nbsp;&nbsp;</label>
								  <label><input type="radio" name="married" value="belum nikah"<?php echo ($customer->married == 'belum nikah' ? ' checked' : ''); ?>> Belum Nikah&nbsp;&nbsp;&nbsp;</label>
								  <label><input type="radio" name="married" value="Menikah"<?php echo ($customer->married == 'Menikah' ? ' checked' : ''); ?>> Menikah</label>
							 </div>
							
							<div class="form-group">
								<label for="name">Address*</label>
								<textarea class="form-control <?php echo form_error('address') ? 'is-invalid':'' ?>"
								 name="address" placeholder="Address"><?php echo $customer->address ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('address') ?>
								</div>
							</div>
							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
