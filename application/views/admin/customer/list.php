<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/customer/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Name</th>
										<th>Email</th>										
										<th>Password</th>
										<th>Gender</th>
										<th>Is_Married</th>
										<th>Address</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($customer as $customer): ?>
									<tr>
										<td width="150">
											<?php echo $customer->name ?>
										</td>
										<td>
											<?php echo $customer->email ?>
										</td>
										<td>
											<?php echo substr($customer->password, 0, 6) ?>...
										</td>
										<td>
											<?php echo $customer->gender ?>
										</td>
										<td>
											<?php echo $customer->married ?>
										</td>
										<td>
											<?php echo substr($customer->address, 0, 20) ?>...
										</td>
										<td width="250">
											<a href="<?php echo site_url('admin/customer/edit/'.$customer->customer_id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/customer/delete/'.$customer->customer_id) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
							
							<!--<br><br>
							<h5>Table dibawah ini menggunakan AJAX untuk menampilkan datanya</h5>
							
							<table class="table table-striped" id="mydata">
								<thead>
								<tr>
								<th>Name</th>
								<th>Email</th>
								<th>password</th>
								<th>gender</th>
								<th>married</th>
								<th>address</th>
								</tr>
								</thead>
							<tbody id="show_data">
							</tbody>
							</table>-->
							
							
						</div>
					</div>
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
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

	<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	
	
	
	 $(document).ready(function(){
        tampil_data_barang();   //pemanggilan fungsi tampil barang.
         
        $('#mydata').dataTable();
          
        //fungsi tampil barang
        function tampil_data_barang(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>kontak',
                async : false,
                dataType : 'json',
                success : function(data){				
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].name+'</td>'+
                                '<td>'+data[i].email+'</td>'+
                                '<td>'+data[i].password+'</td>'+
								'<td>'+data[i].gender+'</td>'+
								'<td>'+data[i].married+'</td>'+
								'<td>'+data[i].address+'</td>'+
								'<td width="250"><a href="<?php echo site_url("admin/customer/edit/'+data[i].id+'")?>"class="btn btn-small"><i class="fas fa-edit"></i> Edit</a><a onclick="deleteConfirm("<?php echo site_url("admin/customer/delete/".$customer->customer_id) ?>")"href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a></td>'
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
 
    });
	
	</script>
	
	
</body>

</html>
