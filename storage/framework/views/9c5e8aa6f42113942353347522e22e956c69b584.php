




							<?php $__env->startSection('content'); ?>

							<!--Page header-->
							<div class="page-header d-xl-flex d-block">
								<div class="page-leftheader">
									<h4 class="page-title"><span class="font-weight-normal text-muted ms-2"><?php echo e(trans('langconvert.adminmenu.customjscss')); ?></span></h4>
								</div>
							</div>
							<!--End Page header-->
							
							<!--Custom CSS & JS-->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card ">
									<div class="card-header border-0">
										<h4 class="card-title"><?php echo e(trans('langconvert.adminmenu.customjscss')); ?></h4>
									</div>
									<form method="POST" action="<?php echo e(route('settings.custom.cssjs')); ?>" enctype="multipart/form-data">
										<?php echo csrf_field(); ?>
										
										<?php echo view('honeypot::honeypotFormFields'); ?>

										<div class="card-body" >
											<input type="hidden" class="form-control" name="id" Value="">
											<div class="col-sm-12 col-md-12">
												<div class="form-group">
													<label class="form-label"><?php echo e(trans('langconvert.admindashboard.customcss')); ?></label>
													<textarea name="customcss" class="form-control <?php $__errorArgs = ['customcss'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> cols="30" rows="10" placeholder="Custom Css"><?php echo e(customcssjs('CUSTOMCSS')); ?></textarea>
													<?php $__errorArgs = ['customcss'];
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
													<label class="form-label"><?php echo e(trans('langconvert.admindashboard.customjs')); ?></label>
													<textarea name="customjs" class="form-control <?php $__errorArgs = ['customjs'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> cols="30" rows="10" placeholder="Custom Js"><?php echo e(customcssjs('CUSTOMJS')); ?></textarea>
													<?php $__errorArgs = ['customjs'];
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
										<div class="col-md-12 card-footer ">
											<div class="form-group float-end">
												<input type="submit" class="btn btn-secondary" value="<?php echo e(trans('langconvert.admindashboard.savechanges')); ?>" onclick="this.disabled=true;this.form.submit();">
											</div>
										</div>
									</form>
								</div>
							</div>
							<!--End Custom CSS & JS-->
							<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.adminmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/admin/generalsetting/customcssjs.blade.php ENDPATH**/ ?>