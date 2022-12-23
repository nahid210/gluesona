


						<?php $__env->startSection('content'); ?>

							<!--Page header-->
							<div class="page-header d-xl-flex d-block">
								<div class="page-leftheader">
									<h4 class="page-title"><span class="font-weight-normal text-muted ms-2"><?php echo e(trans('langconvert.admindashboard.customer')); ?></span></h4>
								</div>
							</div>
							<!--End Page header-->

							<!-- Customer Edit -->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card ">
									<div class="card-header border-0">
										<h4 class="card-title"><?php echo e(trans('langconvert.admindashboard.editcustomer')); ?></h4>
									</div>
									<form method="POST" action="<?php echo e(url('/admin/customer/' . $user->id)); ?>" enctype="multipart/form-data">
										<div class="card-body" >
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
unset($__errorArgs, $__bag); ?>" name="firstname"  value="<?php echo e($user->firstname, old('firstname')); ?>" >
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
unset($__errorArgs, $__bag); ?>" name="lastname"  value="<?php echo e($user->lastname, old('lastname')); ?>" >
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
														<label class="form-label"><?php echo e(trans('langconvert.admindashboard.username')); ?></label>
														<input type="text" class="form-control" name="name"  value="<?php echo e($user->username); ?>" readonly>
													</div>
												</div>
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="form-label"><?php echo e(trans('langconvert.admindashboard.emailaddress')); ?></label>
														<input type="email <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" class="form-control" name="email" Value="<?php echo e($user->email, old('email')); ?>">
														<?php $__errorArgs = ['email'];
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
												<div class="col-md-6">
													<div class="form-group">
														<label class="form-label"><?php echo e(trans('langconvert.admindashboard.country')); ?></label>
														<input type="text" class="form-control "
																		Value="<?php echo e($user->country); ?>" name="timezone" readonly>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="form-label"><?php echo e(trans('langconvert.admindashboard.timezones')); ?></label>
														<input type="text" class="form-control "
																		Value="<?php echo e($user->timezone); ?>" name="timezone" readonly>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="form-label"><?php echo e(trans('langconvert.admindashboard.status')); ?></label>
														<select class="form-control  select2" data-placeholder="Select Status" name="status">
															<option label="Select Status"></option>
															<?php if($user->status === '1'): ?>

															<option value="<?php echo e($user->status); ?>" <?php if($user->status === '1'): ?> selected <?php endif; ?>>Active</option>
															<option value="0">Inactive</option>
															<?php else: ?>

															<option value="<?php echo e($user->status); ?>" <?php if($user->status === '0'): ?> selected <?php endif; ?>>Inactive</option>
															<option value="1">Active</option>
															<?php endif; ?>

														</select>
													</div>
												</div>
											</div>
										</div>
										<div class="card-footer">
											<div class="form-group float-end">
												<input type="submit" class="btn btn-secondary" value="<?php echo e(trans('langconvert.admindashboard.savechanges')); ?>" onclick="this.disabled=true;this.form.submit();">
											</div>
										</div>
									</form>
								</div>
							</div>
							<!-- End Customer Edit -->
			
							<?php $__env->stopSection(); ?>

		<?php $__env->startSection('scripts'); ?>
		
		<!-- INTERNAL select2 js-->
		<script src="<?php echo e(asset('assets/js/select2.js')); ?>"></script>
		<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/admin/customers/show.blade.php ENDPATH**/ ?>