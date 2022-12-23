


		<?php $__env->startSection('styles'); ?>

		<!-- INTERNAl Tag css -->
		<link href="<?php echo e(asset('assets/plugins/taginput/bootstrap-tagsinput.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />

		<?php $__env->stopSection(); ?>

							<?php $__env->startSection('content'); ?>

							<!--Page header-->
							<div class="page-header d-xl-flex d-block">
								<div class="page-leftheader">
									<h4 class="page-title"><span class="font-weight-normal text-muted ms-2"><?php echo e(trans('langconvert.admindashboard.editprofile')); ?></span></h4>
								</div>
							</div>
							<!--End Page header-->

							<!-- Edit Profile Page-->
							<div class="row">
								<div class="col-xl-12 col-lg-12 col-md-12">
									<div class="card ">
										<div class="card-header border-0">
											<h4 class="card-title"><?php echo e(trans('langconvert.admindashboard.editprofile')); ?></h4>
										</div>
										<div class="card-body" >
											<form method="POST" action="<?php echo e(url('/admin/profile')); ?>" enctype="multipart/form-data">
													<?php echo csrf_field(); ?>
													<?php echo view('honeypot::honeypotFormFields'); ?>

													<div class="row">
														<div class="col-sm-6 col-md-6">
															<div class="form-group">
																<label class="form-label"><?php echo e(trans('langconvert.admindashboard.firstname')); ?></label>
																<input type="text" class="form-control <?php $__errorArgs = ['firstname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="firstname" value="<?php echo e(Auth::user()->firstname); ?>">
																<?php $__errorArgs = ['firstname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
																
																	<span class="invalid-feedback" role="alert">
																		<strong><?php echo e($message); ?></strong>
																	</span>
																<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

															</div>
														</div>
														<div class="col-sm-6 col-md-6">
															<div class="form-group">
																<label class="form-label"><?php echo e(trans('langconvert.admindashboard.lastname')); ?></label>
																<input type="text" class="form-control <?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="lastname" value="<?php echo e(Auth::user()->lastname); ?>">
																<?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

																	<span class="invalid-feedback" role="alert">
																		<strong><?php echo e($message); ?></strong>
																	</span>
																<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

															</div>
														</div>
														<div class="col-sm-6 col-md-6">
															<div class="form-group">
																<label class="form-label"><?php echo e(trans('langconvert.admindashboard.emailaddress')); ?></label>
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
																<label class="form-label"><?php echo e(trans('langconvert.admindashboard.mobilenumber')); ?></label>
																<input type="text" class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="phone"  value="<?php echo e(old('phone',Auth::user()->phone)); ?>" >
																<?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

																	<span class="invalid-feedback" role="alert">
																		<strong><?php echo e($message); ?></strong>
																	</span>
																<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

															</div>
														</div>
														<div class="col-sm-6 col-md-6">
															<div class="form-group">
																<label class="form-label"><?php echo e(trans('langconvert.admindashboard.languages')); ?></label>
																<input type="text" class="form-control <?php $__errorArgs = ['languages'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> sprukotags" value="<?php echo e(old('languages', Auth::user()->languagues)); ?>" name="languages[]" data-role="tagsinput" />
																<?php $__errorArgs = ['languages'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

																	<span class="invalid-feedback" role="alert">
																		<strong><?php echo e($message); ?></strong>
																	</span>
																<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

															</div>
														</div>
														<div class="col-sm-6 col-md-6">
															<div class="form-group">
																<label class="form-label"><?php echo e(trans('langconvert.admindashboard.skills')); ?></label>
																<input type="text" class="form-control <?php $__errorArgs = ['skills'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> sprukotags" value="<?php echo e(old('skills', Auth::user()->skills)); ?>" name="skills[]" data-role="tagsinput" />
																<?php $__errorArgs = ['skills'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

																	<span class="invalid-feedback" role="alert">
																		<strong><?php echo e($message); ?></strong>
																	</span>
																<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

															</div>
														</div>
														<div class="col-sm-6 col-md-6">
															<div class="form-group">
																<label class="form-label"><?php echo e(trans('langconvert.admindashboard.uploadimage')); ?></label>
																<div class="input-group file-browser">
																	<input class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="image" type="file" accept="image/png, image/jpeg,image/jpg" >
																	<?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

																	<span class="invalid-feedback" role="alert">
																		<strong><?php echo e($message); ?></strong>
																	</span>
																	<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

																</div>
																<small class="text-muted"><i><?php echo e(trans('langconvert.admindashboard.filesize')); ?></i></small>
															</div>
														</div>
														<div class="col-md-12 card-footer ">
															<div class="form-group float-end mb-0">
																<input type="submit" class="btn btn-secondary" value="<?php echo e(trans('langconvert.admindashboard.savechanges')); ?>" onclick="this.disabled=true;this.form.submit();">
															</div>
														</div>
													</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							<!-- End Edit Profile Page-->
							<?php $__env->stopSection(); ?>

		<?php $__env->startSection('scripts'); ?>

		<!-- INTERNAL Vertical-scroll js-->
		<script src="<?php echo e(asset('assets/plugins/vertical-scroll/jquery.bootstrap.newsbox.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- INTERNAL Index js-->
		<script src="<?php echo e(asset('assets/js/support/support-sidemenu.js')); ?>?v=<?php echo time(); ?>"></script>
		<script src="<?php echo e(asset('assets/js/select2.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- INTERNAL TAG js-->
		<script src="<?php echo e(asset('assets/plugins/taginput/bootstrap-tagsinput.js')); ?>?v=<?php echo time(); ?>"></script>

		<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/admin/profile/adminprofileupdate.blade.php ENDPATH**/ ?>