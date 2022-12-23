


							<?php $__env->startSection('content'); ?>

							<!--Page header-->
							<div class="page-header d-xl-flex d-block">
								<div class="page-leftheader">
									<h4 class="page-title"><span class="font-weight-normal text-muted ms-2"><?php echo e(trans('langconvert.admindashboard.banner')); ?> </span></h4>
								</div>
							</div>
							<!--End Page header-->
							
							<!--Banner Section-->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card ">
									<div class="card-header border-0">
										<h4 class="card-title"><?php echo e(trans('langconvert.admindashboard.bannersection')); ?></h4>
									</div>
									<form method="POST" action="<?php echo e(url('/admin/bannerstore')); ?>" enctype="multipart/form-data">
										<div class="card-body" >
											<?php echo csrf_field(); ?>

											<?php echo view('honeypot::honeypotFormFields'); ?>
											<input type="hidden" class="form-control" name="id" Value="<?php echo e($basic->id); ?>">
											<div class="row">
												<div class="col-sm-12 col-md-12">
													<div class="form-group">
														<label class="form-label"><?php echo e(trans('langconvert.admindashboard.title')); ?> <span class="text-red">*</span></label>
														<input type="text" class="form-control <?php $__errorArgs = ['searchtitle'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="searchtitle" Value="<?php echo e($basic->searchtitle); ?>">
														<?php $__errorArgs = ['searchtitle'];
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
														<input type="text" class="form-control <?php $__errorArgs = ['searchsub'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="searchsub" Value="<?php echo e($basic->searchsub); ?>" >
														<?php $__errorArgs = ['searchsub'];
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
										<div class="card-footer ">
											<div class="form-group float-end">
												<input type="submit" class="btn btn-secondary" value="<?php echo e(trans('langconvert.admindashboard.savechanges')); ?>" onclick="this.disabled=true;this.form.submit();">
											</div>
										</div>
									</form>
								</div>
							</div>
							<!--EndBanner Section-->
							<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/admin/generalsetting/bannerpage.blade.php ENDPATH**/ ?>