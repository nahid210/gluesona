

		<?php $__env->startSection('styles'); ?>

		<!-- INTERNAL Data table css -->
		<link href="<?php echo e(asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css')); ?>" rel="stylesheet" />
		<link href="<?php echo e(asset('assets/plugins/datatable/responsive.bootstrap5.css')); ?>" rel="stylesheet" />
		<link href="<?php echo e(asset('assets/plugins/datatable/buttonbootstrap.min.css')); ?>" rel="stylesheet" />

		<!-- INTERNAL Sweet-Alert css -->
		<link href="<?php echo e(asset('assets/plugins/sweet-alert/sweetalert.css')); ?>" rel="stylesheet" />
		
		<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->denies('Ticket Delete')): ?>

		<style>
			.ticketdelete{
				display: none;
			}
		</style>
		<?php endif; ?>
	

		<?php $__env->stopSection(); ?>

							<?php $__env->startSection('content'); ?>

							<!--Page header-->
							<div class="page-header d-xl-flex d-block">
								<div class="page-leftheader">
									<h4 class="page-title"><span class="font-weight-normal text-muted ms-2"><?php echo e(trans('langconvert.menu.dashboard')); ?></span></h4>
								</div>
								<div class="page-rightheader ms-md-auto">
									<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
										<div class="d-flex breadcrumb-res">
											<div class="header-datepicker me-3">
												<div class="input-group">
													<div class="input-group-text">
															<i class="feather feather-calendar"></i>
													</div><input class="form-control fc-datepicker pb-0 pt-0" value="<?php echo e(now(Auth::user()->timezone)->format(setting('date_format'))); ?>" type="text" disabled>
												</div>
											</div>
											<div class="header-datepicker picker2 me-3">
												<div class="input-group">
													<div class="input-group-text">
															<i class="feather feather-clock"></i>
													</div><!-- input-group-text -->
													<input id="tpBasic " type="text" placeholder="<?php echo e(\Carbon\Carbon::now(Auth::user()->timezone)->format(setting('time_format'))); ?>" class="form-control input-small pb-0 pt-0" disabled>
												</div>
											</div><!-- wd-150 -->
										</div>
									</div>
								</div>
							</div>
							<!--End Page header-->

							<!--Dashboard List-->
							<div class="row">

								<div class="col-xl-12 col-md-12 col-lg-12">
									<div class="row">
										<div class="col-xl-3 col-lg-6 col-md-12">
											<div class="card">
												<a href="<?php echo e(route('admin.alltickets')); ?>" class="admintickets"></a>
												<div class="card-body">
													<div class="row">
														<div class="col-8">
															<div class="mt-0 text-start"><span class="fs-14 font-weight-semibold"><?php echo e(trans('langconvert.adminmenu.alltickets')); ?></span>
																<h3 class="mb-0 mt-1 mb-2"><?php echo e($tickets->count()); ?></h3>
															</div>
														</div>
														<div class="col-4">
															<div class="icon1 bg-primary my-auto  float-end"> <i class="las la-ticket-alt"></i> </div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-md-12">
											<div class="card">
												<a href="<?php echo e(route('admin.activeticket')); ?>" class="admintickets"></a>
												<div class="card-body">
													<div class="row">
														<div class="col-8">
															<div class="mt-0 text-start"> <span class="fs-14 font-weight-semibold"><?php echo e(trans('langconvert.adminmenu.activetickets')); ?></span>
															<h3 class="mb-0 mt-1  mb-2"><?php echo e($active->count()); ?></h3> </div>
														</div>
														<div class="col-4">
															<div class="icon1 bg-primary brround my-auto  float-end"> <i class="las la-ticket-alt"></i> </div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-md-12">
											<div class="card">
												<a href="<?php echo e(route('admin.closedticket')); ?>" class="admintickets"></a>
												<div class="card-body">
													<div class="row">
														<div class="col-8">
															<div class="mt-0 text-start"> <span class="fs-14 font-weight-semibold"><?php echo e(trans('langconvert.adminmenu.closetickets')); ?></span>
																<h3 class="mb-0 mt-1 mb-2"><?php echo e($closed->count()); ?></h3>
															</div>
														</div>
														<div class="col-4">
															<div class="icon1 bg-primary my-auto  float-end"> <i class="las la-ticket-alt"></i> </div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-md-12">
											<div class="card">
												<a href="<?php echo e(route('admin.onholdticket')); ?>" class="admintickets"></a>
												<div class="card-body">
													<div class="row">
														<div class="col-8">
															<div class="mt-0 text-start"> <span class="fs-14 font-weight-semibold"><?php echo e(trans('langconvert.adminmenu.onholdtickets')); ?></span>
															<h3 class="mb-0 mt-1  mb-2"><?php echo e($onhold->count()); ?></h3> </div>
														</div>
														<div class="col-4">
															<div class="icon1 bg-primary brround my-auto  float-end"> <i class="las la-ticket-alt"></i> </div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-md-12">
											<div class="card">
												<a href="<?php echo e(url('/admin/myticket')); ?>" class="admintickets"></a>
												<div class="card-body">
													<div class="row">
														<div class="col-8">
															<div class="mt-0 text-start"><span class="fs-14 font-weight-semibold"><?php echo e(trans('langconvert.adminmenu.mytickets')); ?></span>
																<h3 class="mb-0 mt-1 mb-2"><?php echo e($myticket->count()); ?></h3>
															</div>
														</div>
														<div class="col-4">
															<div class="icon1 bg-primary my-auto  float-end"> <i class="las la-ticket-alt"></i> </div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-md-12">
											<div class="card">
												<a href="<?php echo e(url('/admin/assignedtickets')); ?>" class="admintickets"></a>
												<div class="card-body">
													<div class="row">
														<div class="col-8">
															<div class="mt-0 text-start"> <span class="fs-14 font-weight-semibold"><?php echo e(trans('langconvert.adminmenu.assigntickets')); ?></span>
															<h3 class="mb-0 mt-1  mb-2"><?php echo e($assigned->count()); ?></h3> </div>
														</div>
														<div class="col-4">
															<div class="icon1 bg-primary brround my-auto  float-end"> <i class="las la-ticket-alt"></i> </div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-md-12">
											<div class="card">
												<a href="<?php echo e(url('/admin/myassignedtickets')); ?>" class="admintickets"></a>
												<div class="card-body">
													<div class="row">
														<div class="col-8">
															<div class="mt-0 text-start"><span class="fs-14 font-weight-semibold"><?php echo e(trans('langconvert.adminmenu.myassigntickets')); ?></span>
																<h3 class="mb-0 mt-1 mb-2"><?php echo e($myassigned->count()); ?></h3>
															</div>
														</div>
														<div class="col-4">
															<div class="icon1 bg-primary my-auto  float-end"> <i class="las la-ticket-alt"></i> </div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-md-12">
											<div class="card">
												<a href="<?php echo e(route('admin.overdueticket')); ?>" class="admintickets"></a>
												<div class="card-body">
													<div class="row">
														<div class="col-8">
															<div class="mt-0 text-start"> <span class="fs-14 font-weight-semibold"><?php echo e(trans('langconvert.adminmenu.overduetickets')); ?></span>
															<h3 class="mb-0 mt-1  mb-2"><?php echo e($overdue->count()); ?></h3> </div>
														</div>
														<div class="col-4">
															<div class="icon1 bg-primary brround my-auto  float-end"> <i class="las la-ticket-alt"></i> </div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-12 col-lg-12 col-md-12">
											<div class="card mb-0">
												<div class="card-header border-0">
													<h4 class="card-title"><?php echo e(trans('langconvert.admindashboard.ticketssummary')); ?></h4>
												</div>
												<div class="card-body" >
													<div class="table-responsive delete-button" >
													<table class="table table-vcenter text-nowrap table-bordered table-striped w-100 ticketdeleterow" id="supportticket-dashe">
														<thead>
															<tr >
																<th ><?php echo e(trans('langconvert.admindashboard.id')); ?></th>	
																<th ><?php echo e(trans('langconvert.admindashboard.slNo')); ?></th>
																<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Ticket Delete')): ?>

																<th width="10" >
																	<input type="checkbox"  id="customCheckAll">
																	<label  for="customCheckAll"></label>
																</th>
																<?php endif; ?>
																<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->denies('Ticket Delete')): ?>

																<th width="10" >
																	<input type="checkbox"  id="customCheckAll" disabled>
																	<label  for="customCheckAll"></label>
																</th>
																<?php endif; ?>

																<th >#<?php echo e(trans('langconvert.admindashboard.id')); ?></th>
																<th ><?php echo e(trans('langconvert.admindashboard.user')); ?></th>
																<th ><?php echo e(trans('langconvert.admindashboard.title')); ?></th>
																<th ><?php echo e(trans('langconvert.admindashboard.priority')); ?></th>
																<th ><?php echo e(trans('langconvert.admindashboard.category')); ?></th>
																<th ><?php echo e(trans('langconvert.admindashboard.date')); ?></th>
																<th ><?php echo e(trans('langconvert.admindashboard.status')); ?></th>
																<th ><?php echo e(trans('langconvert.admindashboard.assignto')); ?></th>
																<th ><?php echo e(trans('langconvert.admindashboard.lastreply')); ?></th> 
																<th ><?php echo e(trans('langconvert.admindashboard.actions')); ?></th>
																
															</tr>
														</thead>
														<tbody id="refresh">
															
														</tbody>
													</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--Dashboard List-->

							<?php $__env->stopSection(); ?>
		<?php $__env->startSection('scripts'); ?>

		<!-- INTERNAL Vertical-scroll js-->
		<script src="<?php echo e(asset('assets/plugins/vertical-scroll/jquery.bootstrap.newsbox.js')); ?>"></script>

		<!-- INTERNAL Data tables -->
		<script src="<?php echo e(asset('assets/plugins/datatable/js/jquery.dataTables.min.js')); ?>"></script>
		<script src="<?php echo e(asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')); ?>"></script>
		<script src="<?php echo e(asset('assets/plugins/datatable/dataTables.responsive.min.js')); ?>"></script>
		<script src="<?php echo e(asset('assets/plugins/datatable/responsive.bootstrap5.min.js')); ?>"></script>
		<script src="<?php echo e(asset('assets/plugins/datatable/datatablebutton.min.js')); ?>"></script>
		<script src="<?php echo e(asset('assets/plugins/datatable/buttonbootstrap.min.js')); ?>"></script>


		<!-- INTERNAL Index js-->
		<script src="<?php echo e(asset('assets/js/support/support-sidemenu.js')); ?>"></script>
		<script src="<?php echo e(asset('assets/js/select2.js')); ?>"></script>

		<!-- INTERNAL Sweet-Alert js-->
		<script src="<?php echo e(asset('assets/plugins/sweet-alert/sweetalert.min.js')); ?>"></script>
		
        <script type="text/javascript">

			"use strict";

			(function($)  {

				// Variables
				var SITEURL = '<?php echo e(url('')); ?>';

				<?php if(Auth::user()->usetting != null): ?>
				<?php if(Auth::user()->usetting->ticket_refresh == 1): ?>

				// Auto Refresh Datatable js
				setInterval(function(){
					$('#supportticket-dashe').DataTable().ajax.reload();
					
				},30000);
					
				<?php endif; ?>
				<?php endif; ?>

				// csrf field
				$.ajaxSetup({
					headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				// Datatable
				var table = $('#supportticket-dashe').DataTable({
					dom: '<"row"<"col-md-12 col-lg-1"l><"col-md-12 col-lg-4"B><"col-md-12 col-lg-7"f>r>tip',
					buttons: [
						{
							className:'ticketdelete',
							text: `<i class="fe fe-trash"></i> <?php echo e(trans('langconvert.admindashboard.delete')); ?>`,
							action: function ( e, dt, node, conf ) {
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
											url:"<?php echo e(url('admin/ticket/delete/tickets')); ?>",
											method:"GET",
											data:{id:id},
											success:function(data)
											{

											$('#supportticket-dashe').DataTable().ajax.reload();
											
											toastr.error(data.error);
												
											},
											error:function(data){

											}
										});
									}
								});
								
							}
							else{
								toastr.error('<?php echo e(trans('langconvert.functions.checkboxselect')); ?>');
							}
							
								
							}
						},
						{
							className: '',
							text: ` <i class="fe fe-refresh-cw"></i> `,
							action: function ( e, dt, node, config ) {
								$('#supportticket-dashe').DataTable().ajax.reload();
							}
						},	
					],
					processing: true,
					serverSide: true,
					ajax: {
						url: "<?php echo e(url('admin')); ?>",
					},
					columns: [
						
						{data: 'id', name: 'id', visible: false},
						{data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false,searchable: false},
						{data: 'checkbox', name: 'checkbox',orderable: false,searchable: false},
						{ data: 'ticket_id', name: 'ticket_id' },
						{ data: 'cust_id', name: 'cust_id' },
						{ data: 'subject', name: 'subject' },
						{ data: 'priority', name: 'priority' },
						{ data: 'category_id', name: 'category_id' },
						{ data: 'created_at', name: 'created_at' },
						{ data: 'status', name: 'status' },
						{ data: 'toassignuser_id', name: 'toassignuser_id' },
						{ data: 'last_reply', name: 'last_reply' },
						{data: 'action', name: 'action', orderable: false},
					],
					order: [],
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

				//Auto reload on/off
				$('body').on('click', '#myonoffswitch18', function () {
					var _id = $(this).data("id");
					var status = $(this).prop('checked') == true ? '1' : '0';
						$.ajax({
							type: "post",
							url: SITEURL + "/admin/refresh/"+_id,
							data: {'status': status,
							'id': _id},
							success: function (data) {
								if(toastr.success(data.success))
								{
									window.location.reload();
								};
							},
							error: function (data) {
								console.log('Error:', data);
							}
						});
				});

				// TICKET DELETE SCRIPT
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
									url: SITEURL + "/admin/delete-ticket/"+_id,
								success: function (data) {
									toastr.error(data.error);
									var oTable = $('#supportticket-dashe').dataTable();
									oTable.fnDraw(false);
								},
								error: function (data) {
									console.log('Error:', data);
								}
							});
						}
					});

				});
				// TICKET DELETE SCRIPT END

				// when user click its get modal popup to assigned the ticket
				$('body').on('click', '#assigned', function () {
					var assigned_id = $(this).data('id');
					$('.select2_modalassign').select2({
						dropdownParent: ".sprukosearch",
						minimumResultsForSearch: '',
						placeholder: "Search",
						width: '100%'
					});
					$.get('admin/assigned/' + assigned_id , function (data) {
						$('#AssignError').html('');
						$('#assigned_id').val(data.assign_data.id);
						$(".modal-title").text('<?php echo e(trans('langconvert.admindashboard.assigntoagent')); ?>');
						$('#username').html(data.table_data);
						$('#addassigned').modal('show');
					});
				});

				// Assigned Submit button
            	$('body').on('submit', '#assigned_form', function (e) {
					e.preventDefault();
					var actionType = $('#btnsave').val();
					var fewSeconds = 2;
					$('#btnsave').html('Sending..');
					$('#btnsave').prop('disabled', true);
						setTimeout(function(){
							$('#btnsave').prop('disabled', false);
						}, fewSeconds*1000);
					var formData = new FormData(this);
					$.ajax({
						type:'POST',
						url: SITEURL + "/admin/assigned/create",
						data: formData,
						cache:false,
						contentType: false,
						processData: false,

						success: (data) => {

							$('#AssignError').html('');
							$('#assigned_form').trigger("reset");
							$('#addassigned').modal('hide');
							$('#btnsave').html('Save Changes');
							var oTable = $('#supportticket-dashe').dataTable();
							oTable.fnDraw(false);
							toastr.success(data.success);
						},
						error: function(data){
							$('#AssignError').html('');
							$('#AssignError').html(data.responseJSON.errors.assigned_user_id);
							$('#btnsave').html('Save Changes');
						}
					});	
				});

				// Remove the assigned from the ticket
                $('body').on('click', '#btnremove', function () {
					var asid = $(this).data("id");
					swal({
						title: `<?php echo e(trans('langconvert.admindashboard.agentremove')); ?>`,
						text: "<?php echo e(trans('langconvert.admindashboard.agentremove1')); ?>",
						icon: "warning",
						buttons: true,
						dangerMode: true,
					})
					.then((willDelete) => {
						if (willDelete) {

							$.ajax({
								type: "get",
								url: SITEURL + "/admin/assigned/update/"+asid,
								success: function (data) {
                                var oTable = $('#supportticket-dashe').dataTable();
					            oTable.fnDraw(false);
								toastr.error(data.error);
								
								},
								error: function (data) {
								console.log('Error:', data);
								}
								});

						}
					});
				});

				// checkbox checkall
				$('#customCheckAll').on('click', function() {
					$('.checkall').prop('checked', this.checked);
				});

			})(jQuery);

		</script>

		<?php $__env->stopSection(); ?>

		<?php $__env->startSection('modal'); ?>
		
 		<?php echo $__env->make('admin.modalpopup.assignmodal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>