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
										<form action="<?php echo base_url() ?>index.php/position/exec/db_add" method="POST" onsubmit="return validate()">
											<div class="row">
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="form-label">Karyawan</label>
														<select type="text" class="form-control">
															<option value=""></option>
															
														</select>
													</div>
												</div>
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="form-label">Departement</label>
														<select type="text" class="form-control">
															<option value=""></option>
															
														</select>
													</div>
												</div>
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="form-label">Jabatan</label>
														<select type="text" class="form-control">
															<option value=""></option>
															
														</select>
													</div>
												</div>
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="form-label">Tanggal Aktif Jabatan</label>
														<input type="date" name="startdate" class="form-control" id="startdate" placeholder="Tanggal Masuk">
													</div>
												</div>
											</div>
											<div class="form-footer mt-2">
												<input type="submit" class="btn btn-primary" value="Simpan"/>
												<a href="<?php echo base_url(); ?>index.php/position" class="btn btn-outline-light">Batal</a>
											</div>
										</form>
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
