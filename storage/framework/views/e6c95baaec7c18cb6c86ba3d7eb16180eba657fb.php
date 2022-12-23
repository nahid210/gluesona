


							<?php $__env->startSection('content'); ?>

							<!--Page header-->
							<div class="page-header d-xl-flex d-block">
								<div class="page-leftheader">
									<h4 class="page-title"><span class="font-weight-normal text-muted ms-2"><?php echo e(trans('langconvert.admindashboard.callaction')); ?></span></h4>
								</div>
							</div>
							<!--End Page header-->

							<!--Call Action Section -->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card ">
									<form method="POST" action="<?php echo e(url('/admin/call-to-action')); ?>" enctype="multipart/form-data">
										<?php echo csrf_field(); ?>

										<?php echo view('honeypot::honeypotFormFields'); ?>
										
										<div class="card-header border-0 d-sm-max-flex">
											<h4 class="card-title"><?php echo e(trans('langconvert.admindashboard.callactionsection')); ?></h4>
											<div class="card-options card-header-styles mt-sm-max-2">
												<small class="me-1 mt-1"><?php echo e(trans('langconvert.admindashboard.sectionhide')); ?></small>
												<div class="float-end mt-0">
													<div class="switch-toggle">
														<a class="onoffswitch2">
															<input type="checkbox"  name="callcheck" id="callchecks" class=" toggle-class onoffswitch2-checkbox" value="on" <?php if($callaction->callcheck == 'on'): ?>  checked=""  <?php endif; ?>>
															<label for="callchecks" class="toggle-class onoffswitch2-label" ></label>
														</a>
													</div>
												</div>
											</div>
										</div>
										<div class="card-body" >
											<input type="hidden" class="form-control" name="id" Value="<?php echo e($callaction->id); ?>">
											<div class="row">
												<div class="col-sm-12 col-md-12">
													<div class="form-group">
														<label class="form-label"><?php echo e(trans('langconvert.admindashboard.title')); ?> <span class="text-red">*</span></label>
														<input type="text" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="title" Value="<?php echo e($callaction->title); ?>">
														<?php $__errorArgs = ['title'];
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
														<label class="form-label"><?php echo e(trans('langconvert.admindashboard.subtitle')); ?></label>
														<input type="text" class="form-control <?php $__errorArgs = ['subtitle'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="subtitle" Value="<?php echo e($callaction->subtitle); ?>" >
														<?php $__errorArgs = ['subtitle'];
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
														<label class="form-label"><?php echo e(trans('langconvert.admindashboard.buttontext')); ?> <span class="text-red">*</span></label>
														<input type="text" class="form-control <?php $__errorArgs = ['buttonname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="buttonname" Value="<?php echo e($callaction->buttonname); ?>">
														<?php $__errorArgs = ['buttonname'];
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
														<label class="form-label"><?php echo e(trans('langconvert.admindashboard.buttonurl')); ?> <span class="text-red">*</span></label>
														<input type="text" class="form-control <?php $__errorArgs = ['buttonurl'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="buttonurl" placeholder="www.example.com" Value="<?php echo e($callaction->buttonurl); ?>">
														<?php $__errorArgs = ['buttonurl'];
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
												<div class="col-md-12">
													<div class="form-group ">
														<div class="<?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
															<label class="form-label"><?php echo e(trans('langconvert.admindashboard.uploadimage')); ?></label>
															<div class="input-group file-browser">
																<input class="form-control " name="image" type="file" >
															</div>
															<small class="text-muted"><i><?php echo e(trans('langconvert.admindashboard.Filemorethan')); ?></i></small>
														</div>
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
												</div>
											</div>
										</div>
										<div class="col-md-12 card-footer ">
											<div class="form-group float-end">
												<input type="submit" class="btn btn-secondary" value="<?php echo e(trans('langconvert.admindashboard.savechanges')); ?>" onclick="this.disabled=true;this.form.submit();">
											</div>
										</div>
									</form>
								</div>
							</div>
							<!--End Call Action Section -->
							<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/admin/callaction/index.blade.php ENDPATH**/ ?>