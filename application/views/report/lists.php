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
								<a href="<?php echo base_url(); ?>index.php/position/form/db_add" class="btn btn-outline-danger"><i class="fe fe-file-text"></i> PDF</a>
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
														<th>Nama</th>
														<th>Jenis Kelamin</th>
														<th>Jabatan</th>
														<th>Tanggal Aktif Jabatan</th>
														<th>Tanggal Masuk</th>
														<th>Status Karyawan</th>
													</tr>
												</thead>
												<tbody>
												<?php
													$seq = 1;
													foreach($data->result() as $row)
													{
														$status = isset($row->endDate) ? 'Aktif' : 'Tidak Aktif';
														echo '<tr>';
														echo '<td>'.$seq.'</td>';
														echo '<td>'.$row->nip.'</td>';
														echo '<td>'.$row->name.'</td>';
														echo '<td>'.$row->sex.'</td>';
														echo '<td>'.$row->positionName.'</td>';
														echo '<td>'.$row->activeDate.'</td>';
														echo '<td>'.$row->startDate.'</td>';
														echo "<td>".$status."</td>";
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