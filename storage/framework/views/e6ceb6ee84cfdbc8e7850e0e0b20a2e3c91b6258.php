


		<?php $__env->startSection('styles'); ?>

		<!-- INTERNAL Data table css -->
		<link href="<?php echo e(asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />
		<link href="<?php echo e(asset('assets/plugins/datatable/responsive.bootstrap5.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />

		<?php $__env->stopSection(); ?>

							<?php $__env->startSection('content'); ?>

							<!--Page header-->
							<div class="page-header d-xl-flex d-block">
								<div class="page-leftheader">
									<h4 class="page-title"><span class="font-weight-normal text-muted ms-2"><?php echo e(trans('langconvert.admindashboard.rolepermissions')); ?></span></h4>
								</div>
							</div>
							<!--End Page header-->

							<!--Role List-->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card ">
									<div class="card-header border-0 d-sm-max-flex">
										<h4 class="card-title"><?php echo e(trans('langconvert.admindashboard.roleslist')); ?></h4>
										<div class="card-options mt-sm-max-2">
											<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Roles & Permission Create')): ?>

											<a href="<?php echo e(url('admin/role/create')); ?>" class="btn btn-primary me-3" ><?php echo e(trans('langconvert.admindashboard.addrole')); ?></a>
											<?php endif; ?>

										</div>
									</div>
									<div class="card-body" >
										<div class="table-responsive role-table">
											<table class="table  table-vcenter text-nowrap table-bordered table-striped w-100" id="roleslist">
												<thead>
													<tr>
														<th  width="10"><?php echo e(trans('langconvert.admindashboard.id')); ?></th>
														<th  width="10"><?php echo e(trans('langconvert.admindashboard.slNo')); ?></th>
														<th ><?php echo e(trans('langconvert.admindashboard.role')); ?></th>
														<th ><?php echo e(trans('langconvert.admindashboard.employees')); ?></th>
														<th ><?php echo e(trans('langconvert.admindashboard.permissions')); ?></th>
														<th ><?php echo e(trans('langconvert.admindashboard.actions')); ?></th>
													</tr>
												</thead>
												<tbody>
													
												</tbody>
											</table>
										</div>
									</div>
									</div>
								</div>
							</div>
							<!--End Role List-->
			
							<?php $__env->stopSection(); ?>

		<?php $__env->startSection('scripts'); ?>

		<!-- INTERNAL Vertical-scroll js-->
		<script src="<?php echo e(asset('assets/plugins/vertical-scroll/jquery.bootstrap.newsbox.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- INTERNAL Data tables -->
		<script src="<?php echo e(asset('assets/plugins/datatable/js/jquery.dataTables.min.js')); ?>?v=<?php echo time(); ?>"></script>
		<script src="<?php echo e(asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')); ?>?v=<?php echo time(); ?>"></script>
		<script src="<?php echo e(asset('assets/plugins/datatable/dataTables.responsive.min.js')); ?>?v=<?php echo time(); ?>"></script>
		<script src="<?php echo e(asset('assets/plugins/datatable/responsive.bootstrap5.min.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- INTERNAL Index js-->
		<script src="<?php echo e(asset('assets/js/support/support-sidemenu.js')); ?>?v=<?php echo time(); ?>"></script>
		<script src="<?php echo e(asset('assets/js/support/support-admindash.js')); ?>?v=<?php echo time(); ?>"></script>

		<script type="text/javascript">

			"use strict";

			(function($)  {

				// Csrf Field
				$.ajaxSetup({
					headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				//Datatable
				$('#roleslist').DataTable({
					processing: true,
					serverSide: true,
					ajax: {
						url: "<?php echo e(url('/admin/role')); ?>"
					},
					columns: [
						{data: 'id', name: 'id', 'visible': false},
						{data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false,searchable: false},
						{ data: 'name', name: 'name' },
						{ data: 'rolescount', name: 'rolescount' },
						{ data: 'permissioncount', name: 'permissioncount'},
						{data: 'action', name: 'action', orderable: false},
					],
					order:[],
					responsive: true,
					drawCallback: function () {
						var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
						var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
							return new bootstrap.Tooltip(tooltipTriggerEl)
						});
						$('.form-select').select2({
							minimumResultsForSearch: Infinity,
							width: '100%'
						});
						$('#customCheckAll').prop('checked', false);
						$('.checkall').on('click', function(){
							if($('.checkall:checked').length == $('.checkall').length){
								$('#customCheckAll').prop('checked', true);
							}else{
								$('#customCheckAll').prop('checked', false);
							}
						});
					},
				});

			})(jQuery);
			
		</script>

		<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/admin/rolecreate/index.blade.php ENDPATH**/ ?>