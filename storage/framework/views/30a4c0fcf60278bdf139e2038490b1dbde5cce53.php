		

		<?php $__env->startSection('styles'); ?>

		<!-- INTERNAL Sweet-Alert css -->
		<link href="<?php echo e(asset('assets/plugins/sweet-alert/sweetalert.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />


		<?php $__env->stopSection(); ?>

							<?php $__env->startSection('content'); ?>

							<!--Page header-->
							<div class="page-header d-xl-flex d-block">
								<div class="page-leftheader">
									<h4 class="page-title"><span class="font-weight-normal text-muted ms-2"><?php echo e(trans('langconvert.menu.profile')); ?></span></h4>
								</div>
							</div>
							<!--End Page header-->
							
							<!-- Profile Page-->
							<div class="row">
								<div class="col-xl-3 col-lg-4 col-md-12">
									<div class="card user-pro-list overflow-hidden">
										<div class="card-body">
											<div class="user-pic text-center">
												<?php if(Auth::user()->image == null): ?>

												<span class="avatar avatar-xxl brround" style="background-image: url(../uploads/profile/user-profile.png)">
													<span class="avatar-status bg-green"></span>
												</span>
													<?php else: ?>

												<span class="avatar avatar-xxl brround" style="background-image: url(../uploads/profile/<?php echo e(Auth::user()->image); ?>)">
													<span class="avatar-status bg-green"></span>
												</span>
													<?php endif; ?>
												<div class="pro-user mt-3">
													<h5 class="pro-user-username text-dark mb-1 fs-16"><?php echo e(Auth::user()->name); ?></h5>
													<h6 class="pro-user-desc text-muted fs-12"><?php echo e(Auth::user()->email); ?></h6>
													<?php if(!empty(Auth::user()->getRoleNames()[0])): ?>
													<h6 class="pro-user-desc text-muted fs-12"><?php echo e(Auth::user()->getRoleNames()[0]); ?></h6>
													<?php endif; ?>
													<div class="profilerating" data-rating="<?php echo e($avg); ?>"></div>

													<div class="btn-list">
														<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Profile Edit')): ?>

														<a href="<?php echo e(url('admin/profile/edit')); ?>" class="btn btn-secondary mt-3"><?php echo e(trans('langconvert.admindashboard.editprofile')); ?></a>
														<?php endif; ?>
														<?php if(Auth::user()->image != null): ?>

														<a href="javascript:void(0)" class="btn btn-light mt-3" id="delete-image"
															data-id="<?php echo e(Auth::id()); ?>">Delete Photo</a>
														<?php endif; ?>

													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header border-0">
											<h4 class="card-title"> <?php echo e(trans('langconvert.admindashboard.personaldetails')); ?></h4>
										</div>
										<div class="card-body px-0 pb-0">

											<div class="table-responsive tr-lastchild">
												<table class="table mb-0 table-information">
													<tbody>
														<tr>
															<td class="py-2">
																<span class="font-weight-semibold w-50"> <?php echo e(trans('langconvert.admindashboard.employeeiD')); ?></span>
															</td>
															<td class="py-2 ps-4"><?php echo e(Auth::user()->empid); ?></td>
														</tr>
														<tr>
															<td class="py-2">
																<span class="font-weight-semibold w-50"> <?php echo e(trans('langconvert.admindashboard.name')); ?> </span>
															</td>
															<td class="py-2 ps-4"><?php echo e(Auth::user()->name); ?></td>
														</tr>
														<tr>
															<td class="py-2">
																<span class="font-weight-semibold w-50"> <?php echo e(trans('langconvert.admindashboard.role')); ?> </span>
															</td>
															<td class="py-2 ps-4">
																<?php if(!empty(Auth::user()->getRoleNames()[0])): ?>

																 <?php echo e(Auth::user()->getRoleNames()[0]); ?>

																 <?php endif; ?>

															</td>
														</tr>
														<tr>
															<td class="py-2">
																<span class="font-weight-semibold w-50"> <?php echo e(trans('langconvert.admindashboard.email')); ?> </span>
															</td>
															<td class="py-2 ps-4"><?php echo e(Auth::user()->email); ?></td>
														</tr>
														<tr>
															<td class="py-2">
																<span class="font-weight-semibold w-50"> <?php echo e(trans('langconvert.admindashboard.phone')); ?> </span>
															</td>
															<td class="py-2 ps-4"><?php echo e(Auth::user()->phone); ?></td>
														</tr>
														<tr>
															<td class="py-2">
																<span class="font-weight-semibold w-50"> <?php echo e(trans('langconvert.admindashboard.languages')); ?> </span>
															</td>
															<td class="py-2 ps-4">
																<?php
																$values = explode(",", Auth::user()->languagues);

																?>

																<ul class="custom-ul">
																	<?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

																	<li class="tag mb-1"><?php echo e(ucfirst($value)); ?></li>

																	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

																</ul>
															</td>
														</tr>
														<tr>
															<td class="py-2">
																<span class="font-weight-semibold w-50"><?php echo e(trans('langconvert.admindashboard.skills')); ?> </span>
															</td>
															<td class="py-2 ps-4">
																<?php
																$values = explode(",", Auth::user()->skills);
																?>

																<ul class="custom-ul">
																	<?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

																	<li class="tag mb-1"><?php echo e(ucfirst($value)); ?></li>

																	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

																</ul>
															</td>
														</tr>
														<tr>
															<td class="py-2">
																<span class="font-weight-semibold w-50"> <?php echo e(trans('langconvert.admindashboard.location')); ?> </span>
															</td>
															<td class="py-2 ps-4"><?php echo e(Auth::user()->country); ?></td>
														</tr>

													</tbody>
												</table>
											</div>
										</div>
									</div>
									<?php if(setting('SPRUKOADMIN_P') == 'on'): ?>

									<div class="card">
										<div class="card-header border-0">
											<h4 class="card-title"> <?php echo e(trans('langconvert.admindashboard.personalsetting')); ?></h4>
										</div>
										<div class="card-body">
											<div class="switch_section">
												<div class="switch-toggle d-flex mt-4">
													<a class="onoffswitch2">
														<input type="checkbox" data-id="<?php echo e(Auth::id()); ?>" name="checkbox" id="myonoffswitch181" class=" toggle-class onoffswitch2-checkbox sprukoswitch"  <?php if(Auth::check() && Auth::user()->darkmode == 1): ?> checked="" <?php endif; ?>>
														<label for="myonoffswitch181" class="toggle-class onoffswitch2-label" data-id="<?php echo e(Auth::id()); ?>"></label>
													</a>
													<label class="form-label ps-3"> <?php echo e(trans('langconvert.admindashboard.switchdarkmode')); ?> </label>
												</div>
											</div>
										</div>
									</div>
									<?php endif; ?>

								</div>
								<div class="col-xl-9 col-lg-8 col-md-12">
									<div class="card ">
										<div class="card-header border-0">
											<h4 class="card-title"> <?php echo e(trans('langconvert.admindashboard.profiledetails')); ?></h4>
										</div>
										<div class="card-body">
											<?php echo csrf_field(); ?>
											<?php echo view('honeypot::honeypotFormFields'); ?>

											<div class="row">
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="form-label"> <?php echo e(trans('langconvert.admindashboard.firstname')); ?></label>
														<input type="text" class="form-control"
															name="firstname" value="<?php echo e(Auth::user()->firstname); ?>" disabled>
													</div>
												</div>
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="form-label"> <?php echo e(trans('langconvert.admindashboard.lastname')); ?></label>
														<input type="text" class="form-control"
															name="lastname" value="<?php echo e(Auth::user()->lastname); ?>" disabled>
													</div>
												</div>
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="form-label"> <?php echo e(trans('langconvert.admindashboard.emailaddress')); ?></label>
														<input type="email" class="form-control" Value="<?php echo e(Auth::user()->email); ?>" disabled>

													</div>
												</div>
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="form-label"> <?php echo e(trans('langconvert.admindashboard.employeeiD')); ?></label>
														<input type="email" class="form-control" Value="<?php echo e(Auth::user()->empid); ?>" disabled>

													</div>
												</div>
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="form-label"> <?php echo e(trans('langconvert.admindashboard.mobilenumber')); ?></label>
														<input type="text" class="form-control " name="phone"
															value="<?php echo e(old('phone',Auth::user()->phone)); ?>" disabled>
													</div>
												</div>
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="form-label"> <?php echo e(trans('langconvert.admindashboard.languages')); ?></label>
														<input type="text" class="form-control"
															value="<?php echo e(Auth::user()->languagues); ?>" name="languages" data-role="tagsinput" disabled />
													</div>
												</div>
												<div class=col-sm-6 col-md-6">
													<div class="form-group">
														<label class="form-label"> <?php echo e(trans('langconvert.admindashboard.skills')); ?></label>
														<input type="text" class="form-control"
															value="<?php echo e(Auth::user()->skills); ?>" name="skills" data-role="tagsinput" disabled />
													</div>
												</div>
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="form-label"> <?php echo e(trans('langconvert.admindashboard.country')); ?></label>
														<input type="text" class="form-control" value="<?php echo e(Auth::user()->country); ?>" disabled>

													</div>
												</div>
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="form-label"> <?php echo e(trans('langconvert.admindashboard.timezones')); ?></label>
														<input type="text" class="form-control" value="<?php echo e(Auth::user()->timezone); ?>" disabled>
													</div>
												</div>
											</div>
										</div>
									</div>
									<?php echo $__env->make('admin.auth.passwords.changepassword', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

								</div>
							</div>
							<!--End Profile Page-->
							<?php $__env->stopSection(); ?>

		<?php $__env->startSection('scripts'); ?>

		<!-- INTERNAL Vertical-scroll js-->
		<script src="<?php echo e(asset('assets/plugins/vertical-scroll/jquery.bootstrap.newsbox.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- INTERNAL Index js-->
		<script src="<?php echo e(asset('assets/js/support/support-sidemenu.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- INTERNAL Sweet-Alert js-->
		<script src="<?php echo e(asset('assets/plugins/sweet-alert/sweetalert.min.js')); ?>?v=<?php echo time(); ?>"></script>

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

				// Profile Rating
				$(".profilerating").starRating({
					readOnly: true,
					// totalStars: 5,
					starSize: 20,
					emptyColor  :  '#ffffff',
					activeColor :  '#F2B827',
					strokeColor :  '#F2B827',
  					strokeWidth :  15,
					useGradient : false

				});

				// DarkMode switch js
				$('.sprukoswitch').on('change', function() {
					var dark = $('#myonoffswitch181').prop('checked') == true ? '1' : '';
					var user_id = $(this).data('id');
					$.ajax({
						type: "GET",
						dataType: "json",
						url: '<?php echo e(url('/admin/usersettings')); ?>',
						data: {
							'dark': dark,
							'user_id': user_id
						},
						success: function(data){
							location.reload();
							toastr.success('<?php echo e(trans('langconvert.functions.updatecommon')); ?>');
						}
					});
				});

				<?php if(Auth::user()->image != null): ?>

				//Delete Image
				$('body').on('click', '#delete-image', function () {
					var _id = $(this).data("id");

					swal({
						title: `<?php echo e(trans('langconvert.functions.profileimageremove')); ?>`,
						icon: "warning",
						buttons: true,
						dangerMode: true,
					})
					.then((willDelete) => {
					if (willDelete) {
							$.ajax({
								type: "post",
								url: SITEURL + "/admin/image/remove/"+_id,
								success: function (data) {
								toastr.success(data.success);
								location.reload();
								},
								error: function (data) {
								console.log('Error:', data);
								}
							});
						}
					});
				});
				<?php endif; ?>

				
			})(jQuery);

		</script>

		<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/admin/profile/adminprofile.blade.php ENDPATH**/ ?>