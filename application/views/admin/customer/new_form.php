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

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/customer/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/customer/add') ?>" method="post" enctype="multipart/form-data" >
							
							<div class="form-group">
								<label for="name">Name*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="name" placeholder="Customer name" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">Email*</label>
								<input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
								 type="text" name="email" min="0" placeholder="Email" />
								<div class="invalid-feedback">
									<?php echo form_error('email') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="price">Password*</label>
								<input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
								 type="password" name="password" min="0" placeholder="Password" />
								<div class="invalid-feedback">
									<?php echo form_error('password') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="price">Gender*</label><br>
								<label>Laki-Laki
								&nbsp;&nbsp;&nbsp;<input class="form-control <?php echo form_error('gender') ? 'is-invalid':'' ?>"  value="Laki-laki" type="radio" name="gender" checked>
								</label>
								<label>
								Perempuan
								&nbsp;&nbsp;&nbsp;<input class="form-control <?php echo form_error('gender') ? 'is-invalid':'' ?>"  value="Perempuan" type="radio" name="gender">								
								</label>								
								<div class="invalid-feedback">
									<?php echo form_error('gender') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="price">Married*</label><br>
								<label>Belum Menikah
								&nbsp;&nbsp;&nbsp;<input class="form-control <?php echo form_error('married') ? 'is-invalid':'' ?>"  value="belum menikah" type="radio" name="married" checked>
								</label>
								<label>
								Menikah
								&nbsp;&nbsp;&nbsp;<input class="form-control <?php echo form_error('married') ? 'is-invalid':'' ?>"  value="Menikah" type="radio" name="married">								
								</label>								
								<div class="invalid-feedback">
									<?php echo form_error('married') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="price">Address*</label>
								<textarea class="form-control <?php echo form_error('address') ? 'is-invalid':'' ?>"
								 type="text" name="address" min="0" placeholder="Address"></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('address') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" id="simpan" name="btn" value="Save" />
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

<script>	 
		$(document).ready(function(){		
		
        $("#btn_add_data").click(function() {
            var name = $('input[name="name"]').val();
            var email = $('input[name="email"]').val();
			 var password = $('input[name="password"]').val();
			  var gender = $('input[name="gender"]').val();
             var married = $('input[name="married"]').val();
			 var address = $('textarea[name="address"]').val();
			 var urlnya = '<?php echo base_url(); ?>kontak';	    
			 
            $.ajax({
				type  : 'ajax',
                url   : urlnya,				
                type: 'POST',				
                data: {name:name,email:email,password:password,gender:gender,married:married,address:address},
                success: function(response){
					alert(data);
                    $('input[name="name"]').val("");
                    $('input[name="email"]').val("");
                    $('input[name="password"]').val("");
                    $('input[name="gender"]').val("");  
					$('input[name="married"]').val("");
					$('textarea[name="address"]').val("");
					
                }
            })
 
        });
		
		

 
    });
	</script>

