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
							<div class="page-rightheader">
								<a href="<?php echo base_url(); ?>index.php/employee/employee_form/db_add" class="btn btn-outline-primary"><i class="fe fe-plus"></i> Tambah</a>
                            </div>
						</div>
						<!--End Page header-->
						<!-- Row -->
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-body pb-2">
										<div class="table-responsive">
											<table class="table table-hover card-table table-vcenter text-nowrap">
												<thead>
													<tr>
														<th width="3%">NO</th>
														<th>NIP</th>
														<th>Nama Lengkap</th>
														<th>Jenis Kelamin</th>
														<th width="5%">#</th>
													</tr>
												</thead>
												<tbody>
												<?php
													$seq = 1;
													foreach($employee->result() as $row)
													{
														echo '<tr>';
														echo '<td>'.$seq.'</td>';
														echo '<td>'.$row->nip.'</td>';
														echo '<td>'.$row->name.'</td>';
														echo '<td>'.$row->sex.'</td>';
														echo '<td><a href="#" class="btn btn-outline-success btn-sm"><i class="fe fe-bar-chart"></i> Histori</a> <a href="'.base_url().'index.php/employee/employee_form/db_edit/'.$row->id.'" class="btn btn-outline-warning btn-sm"><i class="fe fe-edit-3"></i> Edit</a> <a href="'.base_url().'index.php/employee/employee_form/db_del/'.$row->id.'" class="btn btn-outline-danger btn-sm"><i class="fe fe-trash-2"></i> Hapus</a></td>';
														$seq++;
														echo '</tr>';
													}
												?>
												</tbody>
											</table>
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
<?php $this->load->view('layouts/footer');?>