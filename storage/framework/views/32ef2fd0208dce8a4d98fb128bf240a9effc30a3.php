

		<?php $__env->startSection('styles'); ?>

		<!-- INTERNAl Summernote css -->
		<link rel="stylesheet" href="<?php echo e(asset('assets/plugins/summernote/summernote.css')); ?>?v=<?php echo time(); ?>">

		<!-- INTERNAL Data table css -->
		<link href="<?php echo e(asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />
		<link href="<?php echo e(asset('assets/plugins/datatable/responsive.bootstrap5.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />

        <!-- INTERNAL Datepicker css-->
        <link href="<?php echo e(asset('assets/plugins/modal-datepicker/datepicker.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />

		<!-- INTERNAL Sweet-Alert css -->
		<link href="<?php echo e(asset('assets/plugins/sweet-alert/sweetalert.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />

		<?php $__env->stopSection(); ?>

							<?php $__env->startSection('content'); ?>

							<!--Page header-->
							<div class="page-header d-xl-flex d-block">
								<div class="page-leftheader">
									<h4 class="page-title"><span class="font-weight-normal text-muted ms-2"><?php echo e(trans('langconvert.adminmenu.announcements')); ?></span></h4>
								</div>
							</div>
							<!--End Page header-->
							
							<!--Announcement List -->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card ">
									<div class="card-header border-0">
										<h4 class="card-title mb-md-max-2"><?php echo e(trans('langconvert.adminmenu.announcements')); ?></h4>
										<div class="card-options">
											<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Announcements Create')): ?>

											<a href="javascript:void(0)" class="btn btn-secondary me-3" id="create-new-testimonial"><?php echo e(trans('langconvert.admindashboard.addannouncement')); ?></a>
											<?php endif; ?>

										</div>
									</div>
									<div class="card-body" >
										<div class="table-responsive">
											<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Announcements Delete')): ?>

											<button id="massdeletenotify" class="btn btn-outline-light btn-sm mb-4 data-table-btn"><i class="fe fe-trash"></i> <?php echo e(trans('langconvert.admindashboard.delete')); ?></button>
											<?php endif; ?>

											<table class="table table-vcenter text-nowrap table-bordered table-striped ticketdeleterow w-100 " id="support-articlelists">
												<thead>
													<tr>
														<th  width="10"><?php echo e(trans('langconvert.admindashboard.slNo')); ?></th>
														<th  width="10"><?php echo e(trans('langconvert.admindashboard.id')); ?></th>
														<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Announcements Delete')): ?>

														<th width="10" >
															<input type="checkbox"  id="customCheckAll">
															<label  for="customCheckAll"></label>
														</th>
														<?php endif; ?>
														<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->denies('Announcements Delete')): ?>

														<th width="10" >
															<input type="checkbox"  id="customCheckAll" disabled>
															<label  for="customCheckAll"></label>
														</th>
														<?php endif; ?>

														<th ><?php echo e(trans('langconvert.admindashboard.title')); ?></th>
														<th ><?php echo e(trans('langconvert.admindashboard.startdate')); ?></th>
														<th ><?php echo e(trans('langconvert.admindashboard.enddate')); ?></th>
														<th ><?php echo e(trans('langconvert.admindashboard.status')); ?></th>
														<th ><?php echo e(trans('langconvert.admindashboard.actions')); ?></th>
													</tr>
												</thead>
											</table>
										</div>
									</div>
								</div>
							</div>
							<!-- End Announcement List -->

							<?php $__env->stopSection(); ?>
			<?php $__env->startSection('modal'); ?>

    		<?php echo $__env->make('admin.announcement.model', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

			<?php $__env->stopSection(); ?>

		<?php $__env->startSection('scripts'); ?>
		
		<!-- INTERNAL Summernote js  -->
		<script src="<?php echo e(asset('assets/plugins/summernote/summernote.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- INTERNAL Data tables -->
		<script src="<?php echo e(asset('assets/plugins/datatable/js/jquery.dataTables.min.js')); ?>?v=<?php echo time(); ?>"></script>
		<script src="<?php echo e(asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')); ?>?v=<?php echo time(); ?>"></script>
		<script src="<?php echo e(asset('assets/plugins/datatable/dataTables.responsive.min.js')); ?>?v=<?php echo time(); ?>"></script>
		<script src="<?php echo e(asset('assets/plugins/datatable/responsive.bootstrap5.min.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- INTERNAL Index js-->
		<script src="<?php echo e(asset('assets/js/support/support-sidemenu.js')); ?>?v=<?php echo time(); ?>"></script>
		<script src="<?php echo e(asset('assets/js/support/support-articles.js')); ?>?v=<?php echo time(); ?>"></script>

        <!-- INTERNAL Datepicker js -->
        <script src="<?php echo e(asset('assets/plugins/modal-datepicker/datepicker.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- INTERNAL Sweet-Alert js-->
		<script src="<?php echo e(asset('assets/plugins/sweet-alert/sweetalert.min.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- INTERNALdatepicker js-->
		
        <script type="text/javascript">
			
			(function($)  {
				"use strict";

				// Variables
				var SITEURL = '<?php echo e(url('')); ?>';
				var now = Date.now();
				
				// Csrf Field
				$.ajaxSetup({
					headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				//_____ Datatable
				$('#support-articlelists').dataTable({
					processing: true,
					serverSide: true,
					ajax: {
						url: "<?php echo e(url('/admin/announcement')); ?>"
					},
					columns: [
						{data: 'id', name: 'id', 'visible': false},
						{data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false,searchable: false},
						{data: 'checkbox', name: 'checkbox', orderable: false,searchable: false},
						{ data: 'title', name: 'title' },
						{ data: 'startdate', name: 'startdate' },
						{ data: 'enddate', name: 'enddate' },
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

				/*  When user click add announcement button */
				$('#create-new-testimonial').on('click', function () {
					// Datepicker
					$( '.fc-datepicker').datepicker({
						dateFormat: "yy M dd ",
						monthNamesShort: [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec" ],
						zIndex: 999998,
						autoHide: true,
						startDate:now,
					});

					$('#btnsave').val("create-product");
					$('#testimonial_id').val('');
					$('#description').summernote('code','');
					$('#testimonial_form').trigger("reset");
					$('.modal-title').html("<?php echo e(trans('langconvert.admindashboard.addannouncement')); ?>");
					$('#addtestimonial').modal('show');

				});

				/* When click announcement user */
				$('body').on('click', '.edit-testimonial', function () {

					// Datepicker
					$( '.fc-datepicker').datepicker({
						dateFormat: "yy M dd ",
						monthNamesShort: [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec" ],
						zIndex: 999998,
						autoHide: true,
						startDate:now,
					});

					var testimonial_id = $(this).data('id');
					$.get('announcement/' + testimonial_id , function (data) {
						$('#nameError').hide();
						$('#descriptionError').hide();
						$('#startdateError').hide();
						$('#enddateError').hide();
						$('.modal-title').html("<?php echo e(trans('langconvert.admindashboard.editanouncement')); ?>");
						$('#btnsave').val("edit-announcement");
						$('#addtestimonial').modal('show');
						$('#testimonial_id').val(data.id);
						$('#description').summernote('code',data.notice);
						$('#name').val(data.title);
						$('#startdate').val(data.startdate);
						$('#enddate').val(data.enddate);
						if (data.status == "1")
						{
							$('#myonoffswitch18').prop('checked', true);
						}

					})
				});

				/* When click delete announcement */
				$('body').on('click', '#delete-testimonial', function () {
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
								url: SITEURL + "/admin/announcement/delete/"+_id,
								success: function (data) {
								var oTable = $('#support-articlelists').dataTable();
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

				//Mass Delete 
				$('body').on('click', '#massdeletenotify', function () {
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
									url:"<?php echo e(route('announcementall.delete')); ?>",
									method:"post",
									data:{id:id},
									success:function(data)
									{
										$('#support-articlelists').DataTable().ajax.reload();
										toastr.error(data.error);
													
									},
									error:function(data){
										console.log(data);
									}
								});
							}   
						});			
					}else{
						toastr.error('<?php echo e(trans('langconvert.functions.checkboxselect')); ?>');
					}
				});

				// Announcement submit form
				$('body').on('submit', '#testimonial_form', function (e) {
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
						url: SITEURL + "/admin/announcement/create",
						data: formData,
						cache:false,
						contentType: false,
						processData: false,
						success: (data) => {
							$('#testimonial_form').trigger("reset");
							$('#addtestimonial').modal('hide');
							$('#btnsave').html('Save Changes');
							var oTable = $('#support-articlelists').dataTable();
							oTable.fnDraw(false);
							toastr.success(data.success);
							$('#nameError').html('');
							$('#descriptionError').html('');
							$('#startdateError').html('');
							$('#enddateError').html('');
						},
						error: function(data){
							$('#nameError').html('');
							$('#descriptionError').html('');
							$('#startdateError').html('');
							$('#enddateError').html('');
							$('#nameError').html(data.responseJSON.errors.title);
							$('#descriptionError').html(data.responseJSON.errors.notice);
							$('#startdateError').html(data.responseJSON.errors.startdate);
							$('#enddateError').html(data.responseJSON.errors.enddate);
							$('#btnsave').html('Save Changes');
						}
					});
				});

				// Announcement  status
				$('body').on('click', '.tswitch', function () {
					var _id = $(this).data("id");
					var status = $(this).prop('checked') == true ? '1' : '0';
						$.ajax({
							type: "post",
							url: SITEURL + "/admin/announcement/status"+_id,
							data: {'status': status},
							success: function (data) {
								var oTable = $('#support-articlelists').dataTable();
								oTable.fnDraw(false);
								toastr.success(data.success);
							},
							error: function (data) {
								console.log('Error:', data);
							}
						});
				});

				// Check all Checkbox
				$('#customCheckAll').on('click', function() {
					$('.checkall').prop('checked', this.checked);
				});

			})(jQuery);
		</script>
		

		<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/admin/announcement/index.blade.php ENDPATH**/ ?>