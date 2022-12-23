

		<?php $__env->startSection('styles'); ?>

		<!-- INTERNAL Data table css -->
		<link href="<?php echo e(asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />
		<link href="<?php echo e(asset('assets/plugins/datatable/responsive.bootstrap5.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />

		<?php $__env->stopSection(); ?>

							<?php $__env->startSection('content'); ?>

							<!-- Section -->
							<section>
								<div class="bannerimg cover-image" data-bs-image-src="<?php echo e(asset('assets/images/photos/banner1.jpg')); ?>">
									<div class="header-text mb-0">
										<div class="container ">
											<div class="row text-white">
												<div class="col">
													<h1 class="mb-0"><?php echo e(trans('langconvert.adminmenu.activetickets')); ?></h1>
												</div>
												<div class="col col-auto">
													<ol class="breadcrumb text-center">
														<li class="breadcrumb-item">
															<a href="#" class="text-white-50"><?php echo e(trans('langconvert.menu.home')); ?></a>
														</li>
														<li class="breadcrumb-item active">
															<a href="#" class="text-white"><?php echo e(trans('langconvert.adminmenu.activetickets')); ?></a>
														</li>
													</ol>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<!-- Section -->

							<!--Active Ticket List-->
							<section>
								<div class="cover-image sptb">
									<div class="container ">
										<div class="row">
											<?php echo $__env->make('includes.user.verticalmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
											
											<div class="col-xl-9">
												<div class="card mb-0">
													<div class="card-header border-0">
														<h4 class="card-title"><?php echo e(trans('langconvert.adminmenu.activetickets')); ?></h4>
													</div>
													<div class="card-body ">
														<div class="table-responsive">
															<button id="massdelete" class="btn btn-outline-light btn-sm ms-7 mb-4 data-table-btn mx-md-center"><i class="fe fe-trash me-1"></i> <?php echo e(trans('langconvert.admindashboard.delete')); ?></button>
															<table
																class="table table-vcenter text-nowrap table-bordered table-striped supportticket-list w-100"
																id="activeticket">
																<thead>
																	<tr class="">
																		<th ><?php echo e(trans('langconvert.admindashboard.id')); ?></th>
																		<th ><?php echo e(trans('langconvert.admindashboard.slNo')); ?></th>
																		
																		<th width="10" >
																			<input type="checkbox"  id="customCheckAll">
																			<label  for="customCheckAll"></label>
																		</th>
																		<th >#<?php echo e(trans('langconvert.admindashboard.id')); ?></th>
																		<th ><?php echo e(trans('langconvert.admindashboard.title')); ?></th>
																		<th ><?php echo e(trans('langconvert.admindashboard.priority')); ?></th>
																		<th ><?php echo e(trans('langconvert.admindashboard.category')); ?></th>
																		<th ><?php echo e(trans('langconvert.admindashboard.date')); ?></th>
																		<th ><?php echo e(trans('langconvert.admindashboard.status')); ?></th>
																		<th ><?php echo e(trans('langconvert.admindashboard.lastreply')); ?></th>
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
									</div>
								</div>
							</section>
							<!--Active Ticket List-->

							<?php $__env->stopSection(); ?>

		<?php $__env->startSection('scripts'); ?>

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
			
			(function($){

				// Csrf Field
				$.ajaxSetup({
					headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				//________ Data Table
				$('#activeticket').DataTable({
					
					language: {
						searchPlaceholder: 'Search...',
						sSearch: '',
					},
					processing: true,
					serverSide: true,
					ajax: {
					url: "<?php echo e(url('customer/activeticket')); ?>"
					},
					columns: [
						{data: 'id', name: 'id', 'visible': false},
						{data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false,searchable: false},
						{data: 'checkbox', name: 'checkbox',orderable: false,searchable: false},
						{ data: 'ticket_id', name: 'ticket_id' },
						{ data: 'subject', name: 'subject' },
						{ data: 'priority', name: 'priority' },
						{ data: 'category_id', name: 'category_id' },
						{ data: 'created_at', name: 'created_at' },
						{ data: 'status', name: 'status' },
						{ data: 'last_reply', name: 'last_reply' },
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
				
				// Delete Button
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
								url: SITEURL + "/customer/ticket/delete/"+_id,
								success: function (data) {
									toastr.error(data.error);
									$('#activeticket').DataTable().ajax.reload();
								},
								error: function (data) {
								console.log('Error:', data);
								}
							});
						}
					});

				});

				//Mass Delete 
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
									url:"<?php echo e(url('customer/ticket/delete/tickets')); ?>",
									method:"post",
									data:{id:id},
									success:function(data)
									{

										$('#activeticket').DataTable().ajax.reload();
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

				// Check All Checkbox
				$('#customCheckAll').on('click', function() {
					$('.checkall').prop('checked', this.checked);
				});
				
			})(jQuery);

		</script>

		<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.usermaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/user/ticket/viewticket/activeticket.blade.php ENDPATH**/ ?>