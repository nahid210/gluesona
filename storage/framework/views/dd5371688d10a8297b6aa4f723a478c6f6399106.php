

		<?php $__env->startSection('styles'); ?>
		
		<!-- INTERNAL Data table css -->
		<link href="<?php echo e(asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />
		<link href="<?php echo e(asset('assets/plugins/datatable/responsive.bootstrap5.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />

		<!-- INTERNAL Sweet-Alert css -->
		<link href="<?php echo e(asset('assets/plugins/sweet-alert/sweetalert.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />

		<?php $__env->stopSection(); ?>

							<?php $__env->startSection('content'); ?>

							<!--Page header-->
							<div class="page-header d-xl-flex d-block">
								<div class="page-leftheader">
									<h4 class="page-title"><span class="font-weight-normal text-muted ms-2"><?php echo e(trans('langconvert.adminmenu.customers')); ?></span></h4>
								</div>
							</div>
							<!--End Page header-->

							<!-- Customer List -->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card ">
									<div class="card-header border-0 d-sm-max-flex">
										<h4 class="card-title"><?php echo e(trans('langconvert.admindashboard.customerslist')); ?></h4>
										<div class="card-options mt-sm-max-2">
											<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Customers Create')): ?>

											<a href="<?php echo e(url('admin/customer/create')); ?>" class="btn btn-success me-3"><i class="feather feather-user-plus"></i> <?php echo e(trans('langconvert.admindashboard.addcustomer')); ?></a>
											<?php endif; ?>
											
										</div>
									</div>
									<div class="card-body" >
										<div class="table-responsive spruko-delete">
											<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Customers Delete')): ?>

											<button id="massdelete" class="btn btn-outline-light btn-sm mb-4 data-table-btn"><i class="fe fe-trash"></i> <?php echo e(trans('langconvert.admindashboard.delete')); ?></button>
											<?php endif; ?>

											<table class="table table-vcenter text-nowrap table-bordered table-striped ticketdeleterow w-100" id="support-customerlist">
												<thead>
													<tr>
														<th  width="10"><?php echo e(trans('langconvert.admindashboard.id')); ?></th>
														<th  width="10"><?php echo e(trans('langconvert.admindashboard.slNo')); ?></th>
														<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Customers Delete')): ?>

														<th width="10" >
															<input type="checkbox"  id="customCheckAll">
															<label  for="customCheckAll"></label>
														</th>
														<?php endif; ?>
														<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->denies('Customers Delete')): ?>

														<th width="10" >
															<input type="checkbox"  id="customCheckAll" disabled>
															<label  for="customCheckAll"></label>
														</th>
														<?php endif; ?>

														<th ><?php echo e(trans('langconvert.admindashboard.name')); ?></th>
														<!--<th ><?php echo e(trans('langconvert.admindashboard.gender')); ?></th>-->
														<th ><?php echo e(trans('langconvert.admindashboard.usertype')); ?></th>
														<th ><?php echo e(trans('langconvert.admindashboard.verification')); ?></th>
														<th ><?php echo e(trans('langconvert.admindashboard.registerdate')); ?></th>
														<th class="w-5"><?php echo e(trans('langconvert.admindashboard.status')); ?></th>
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
							<!-- End Customer List -->
							<?php $__env->stopSection(); ?>

		<?php $__env->startSection('scripts'); ?>

		<!-- INTERNAL Vertical-scroll js-->
		<script src="<?php echo e(asset('assets/plugins/vertical-scroll/jquery.bootstrap.newsbox.js')); ?>"></script>

		<!-- INTERNAL Data tables -->
		<script src="<?php echo e(asset('assets/plugins/datatable/js/jquery.dataTables.min.js')); ?>"></script>
		<script src="<?php echo e(asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')); ?>"></script>
		<script src="<?php echo e(asset('assets/plugins/datatable/dataTables.responsive.min.js')); ?>"></script>
		<script src="<?php echo e(asset('assets/plugins/datatable/responsive.bootstrap5.min.js')); ?>"></script>

		<!-- INTERNAL Index js-->
		<script src="<?php echo e(asset('assets/js/support/support-sidemenu.js')); ?>"></script>

		<!-- INTERNAL Sweet-Alert js-->
		<script src="<?php echo e(asset('assets/plugins/sweet-alert/sweetalert.min.js')); ?>"></script>

		<script type="text/javascript">

			"use strict";

			(function($)  {

				// Variables
				var SITEURL = '<?php echo e(url('')); ?>';

				// Csrf Field
				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				// Datatable
				$('#support-customerlist').DataTable({
					processing: true,
					serverSide: true,
					ajax: {
						url: "<?php echo e(url('/admin/customer')); ?>"
					},
					columns: [
						{data: 'id', name: 'id', 'visible': false},
						{data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false,searchable: false},
						{data: 'checkbox', name: 'checkbox', orderable: false,searchable: false},
						{ data: 'username', name: 'username' },
				// 		{ data: 'gender', name: 'gender' },
						{ data: 'userType', name: 'userType' },
						{ data: 'verified', name: 'verified' },
						{ data: 'created_at', name: 'created_at'},
						{ data: 'status', name: 'status'},
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

				// Delete the customer
				$('body').on('click', '#show-delete', function () {
					var _id = $(this).data("id");
					swal({
						title: `<?php echo e(trans('langconvert.admindashboard.wanttocontinue')); ?>`,
						text: "<?php echo e(trans('langconvert.admindashboard.eraserecordspermanently')); ?>",
						icon: "warning",
						buttons: true,
						dangerMode: true,
					})
					.then((willDelete) => {
						if (willDelete) {
							$.ajax({
								type: "get",
								url: SITEURL + "/admin/customer/delete/"+_id,
								success: function (data) {
									toastr.error(data.error);
									var oTable = $('#support-customerlist').dataTable();
									oTable.fnDraw(false);
								},
								error: function (data) {
								console.log('Error:', data);

								}
							});
						}
					});
				});

				// Mass Delete 
				$('body').on('click', '#massdelete', function () {
					var id = [];
					$('.checkall:checked').each(function(){
						id.push($(this).val());
					});
					if(id.length > 0){
						swal({
							title: `<?php echo e(trans('langconvert.admindashboard.wanttocontinue')); ?>`,
							text: "<?php echo e(trans('langconvert.admindashboard.eraserecordspermanently')); ?>",
							icon: "warning",
							buttons: true,
							dangerMode: true,
						})
						.then((willDelete) => {
							if (willDelete) {
								$.ajax({
									url:"<?php echo e(url('admin/masscustomer/delete')); ?>",
									method:"GET",
									data:{id:id},
									success:function(data)
									{
										$('#support-customerlist').DataTable().ajax.reload();
										toastr.error(data.error);				
									},
									error:function(data){

									}
								});
							}
						});
					}else{
						toastr.error('<?php echo e(trans('langconvert.functions.checkboxselect')); ?>');
					}

				});

				// Checkbox check all
				$('#customCheckAll').on('click', function() {
					$('.checkall').prop('checked', this.checked);
				});
				
			})(jQuery);

		</script>
		<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.adminmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/admin/customers/index.blade.php ENDPATH**/ ?>