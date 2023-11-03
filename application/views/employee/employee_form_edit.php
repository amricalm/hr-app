<?php $this->load->view('layouts/header');?>
	<!-- Page -->
	<div class="page">
		<div class="page-main">
			
			<?php $this->load->view('layouts/navbar');?>

			<?php $this->load->view('layouts/sidebar');?>

			<!-- App-Content -->
			<div class="app-content main-content">
				<div class="side-app">
					<!-- CONTAINER -->
					<div class="main-container container-fluid px-0">

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary"><?php echo ($title!='') ? $title : ''; ?></h4>
							</div>
						</div>
						<!--End Page header-->
						<!-- Row -->
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="table-responsive">
											<form action="<?php echo base_url() ?>index.php/employee/employee_exec/db_edit" method="POST" onsubmit="return validate()">
												<?php echo form_hidden('id',$data->row()->id); ?>
												<div class="row">
													<div class="col-sm-12 col-md-12">
														<div class="form-group">
															<label class="form-label">NIP</label>
															<input type="text" name="nip" class="form-control" id="nip" value="<?php echo $data->row()->nip ?>" autocomplete="off">
														</div>
													</div>
													<div class="col-sm-6 col-md-6">
														<div class="form-group">
															<label class="form-label">Nama Lengkap</label>
															<input type="text" name="name" class="form-control" id="name" value="<?php echo $data->row()->name ?>" autocomplete="off">
														</div>
													</div>
													<div class="col-sm-6 col-md-6">
														<div class="form-group">
															<label class="form-label">Jenis Kelamin</label>
															<select type="text" name="sex" class="form-control" id="sex" value="<?php echo $data->row()->sex ?>">
																<?php 
																	$sex = ['L'=>'Laki-Laki','P'=>'Perempuan'];
																	foreach ($sex as $key => $value) {
																		$pilih = ($key==$data->row()->sex) ? 'selected="selected" ' : '';
																		echo '<option value="'.$key.'"'.$pilih.'>'.$value.'</option>';
																	}
																?>
															</select>
														</div>
													</div>
													<div class="col-sm-6 col-md-6">
														<div class="form-group">
															<label class="form-label">Tanggal Masuk</label>
															<input type="date" name="startDate" class="form-control" id="startDate" value="<?php echo $data->row()->startDate ?>">
														</div>
													</div>
													<div class="col-sm-6 col-md-6">
														<div class="form-group">
															<label class="form-label">Tanggal Keluar</label>
															<input type="date" name="endDate" class="form-control" id="endDate" value="<?php echo $data->row()->endDate ?>">
														</div>
													</div>
												</div>
												<div class="form-footer mt-2">
													<input type="submit" class="btn btn-primary" value="Simpan"/>
													<a href="<?php echo base_url(); ?>index.php/employee" class="btn btn-outline-light">Batal</a>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->
					</div>
				</div>
			</div><!-- right app-content-->
		</div>
	</div>
	<!-- End Page -->
	<script type="text/javascript">
		function validate()
		{
			var warning = '';
			var nip     = $('#nip').val();
			var name    = $('#name').val();
			warning  += (nip=='') ? "NIP harus diisi!\n" : '';
			warning  += (name=='') ? "Nama harus diisi!\n" : '';
			if(warning!='')
			{
				alert(warning);
				return false;
			}
			else
			{
				return true;
			}
		}
	</script>
<?php $this->load->view('layouts/footer');?>

