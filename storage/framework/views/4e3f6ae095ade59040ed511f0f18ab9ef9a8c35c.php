


							<?php $__env->startSection('content'); ?>

							<!--Page header-->
							<div class="page-header d-xl-flex d-block">
								<div class="page-leftheader">
									<h4 class="page-title"><span class="font-weight-normal text-muted ms-2"><?php echo e(trans('langconvert.adminmenu.emailtoticket')); ?></span></h4>
								</div>
							</div>
							<!--End Page header-->

							<!--Email to Tickets-->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card ">
									<form action="<?php echo e(route('admin.emaitickets')); ?>" method="POST">
										<div class="card-header border-0">
											<h4 class="card-title"><?php echo e(trans('langconvert.adminmenu.emailtoticket')); ?></h4>
											<div class="card-options">
												<div class="form-group mb-0">
													<div class="switch_section m-0">
														<div class="switch-toggle d-flex mx-0 ps-0 mt-sm-0 mt-2">
															<a class="onoffswitch2">
																<input type="checkbox" id="myonoffswitch18" name="IMAP_STATUS" class=" toggle-class onoffswitch2-checkbox" value="on" <?php if(setting('IMAP_STATUS') == 'on'): ?> checked <?php endif; ?>>
																<label for="myonoffswitch18" class="toggle-class onoffswitch2-label"></label>
															</a>
															<label class="form-label ps-3"><?php echo e(trans('langconvert.admindashboard.enableemailtotickets')); ?></label>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="card-body" >
											<?php echo csrf_field(); ?>
												
											<div class="row">
												<div class="col-sm-12 col-md-12">
													
												</div>
												<div class="col-sm-12 col-md-12">
													<div class="form-group">
														<label class="form-label"><?php echo e(trans('langconvert.admindashboard.imaphost')); ?> <span class="text-red">*</span></label>
														<input type="text" class="form-control <?php $__errorArgs = ['imap_host'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="imap_host" Value="<?php echo e(old('IMAP_HOST', setting('IMAP_HOST'))); ?>">
														<?php $__errorArgs = ['imap_host'];
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
												<div class="col-sm-12 col-md-12">
													<div class="form-group">
														<label class="form-label"><?php echo e(trans('langconvert.admindashboard.imapport')); ?> <span class="text-red">*</span></label>
														<input type="text" class="form-control <?php $__errorArgs = ['imap_port'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="imap_port" Value="<?php echo e(old('IMAP_PORT', setting('IMAP_PORT'))); ?>">
														<?php $__errorArgs = ['imap_port'];
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
												<div class="col-sm-12 col-md-12">
													<div class="form-group">
														<label class="form-label"><?php echo e(trans('langconvert.admindashboard.imapencryption')); ?> <span class="text-red">*</span></label>
														<input type="text" class="form-control <?php $__errorArgs = ['imap_encryption'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="imap_encryption" Value="<?php echo e(old('IMAP_ENCRYPTION', setting('IMAP_ENCRYPTION'))); ?>">
														<?php $__errorArgs = ['imap_encryption'];
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
												<div class="col-sm-12 col-md-12">
													<div class="form-group">
														<label class="form-label"><?php echo e(trans('langconvert.admindashboard.imapprotocol')); ?> <span class="text-red">*</span></label>
														<input type="text" class="form-control <?php $__errorArgs = ['imap_protocol'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="imap_protocol" Value="<?php echo e(old('IMAP_PROTOCOL', setting('IMAP_PROTOCOL'))); ?>">
														<?php $__errorArgs = ['imap_protocol'];
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
												<div class="col-sm-12 col-md-12">
													<div class="form-group">
														<label class="form-label"><?php echo e(trans('langconvert.admindashboard.imapusername')); ?> <span class="text-red">*</span></label>
														<input type="text" class="form-control <?php $__errorArgs = ['imap_username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="imap_username" Value="<?php echo e(old('IMAP_USERNAME', setting('IMAP_USERNAME'))); ?>">
														<?php $__errorArgs = ['imap_username'];
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
												<div class="col-sm-12 col-md-12">
													<div class="form-group">
														<label class="form-label"><?php echo e(trans('langconvert.admindashboard.imappassword')); ?> <span class="text-red">*</span></label>
														<input type="password" class="form-control <?php $__errorArgs = ['imap_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="imap_password" Value="<?php echo e(old('IMAP_PASSWORD', setting('IMAP_PASSWORD'))); ?>">
														<?php $__errorArgs = ['imap_password'];
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
											</div>
										</div>
										<div class="col-md-12 card-footer ">
											<div class="form-group float-end ">
												<input type="submit" class="btn btn-secondary" value="<?php echo e(trans('langconvert.admindashboard.savechanges')); ?>" onclick="this.disabled=true;this.form.submit();">
											</div>
										</div>
									</form>
								</div>
							</div>
							<!-- End Email to Tickets-->
							<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.adminmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/admin/securitysetting/emailtoticket.blade.php ENDPATH**/ ?>