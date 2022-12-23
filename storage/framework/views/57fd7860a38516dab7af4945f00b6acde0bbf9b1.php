

		<?php $__env->startSection('styles'); ?>

		<link href="<?php echo e(asset('assets/plugins/taginput/bootstrap-tagsinput.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />

		<?php $__env->stopSection(); ?>

							<?php $__env->startSection('content'); ?>


							<!--Page header-->
							<div class="page-header d-xl-flex d-block">
								<div class="page-leftheader">
									<h4 class="page-title"><span class="font-weight-normal text-muted ms-2"><?php echo e(trans('langconvert.adminmenu.seo')); ?></span></h4>
								</div>
							</div>
							<!--End Page header-->

							<!--Seo -->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card ">
									<div class="card-header border-0">
										<h4 class="card-title"><?php echo e(trans('langconvert.adminmenu.seo')); ?></h4>
									</div>
									<form method="POST" action="<?php echo e(url('/admin/seo/create')); ?>" enctype="multipart/form-data">
										<?php echo csrf_field(); ?>

										<?php echo view('honeypot::honeypotFormFields'); ?>
										<input type="hidden" name="seo_id" value="1">
										<div class="card-body">
											<div class="form-group">
												<label class="form-label"><?php echo e(trans('langconvert.admindashboard.author')); ?> <span class="text-red">*</span></label>
												<input type="text" class="form-control <?php $__errorArgs = ['author'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($seopage->author ? $seopage->author : ''); ?>" name="author">
												<?php $__errorArgs = ['author'];
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
											<div class="form-group">
												<label class="form-label"><?php echo e(trans('langconvert.admindashboard.description')); ?> <span class="text-red">*</span></label>
												<input type="text" class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($seopage->description ? $seopage->description : ''); ?>" name="description">
												<?php $__errorArgs = ['description'];
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
											<div class="form-group">
												<label class="form-label"><?php echo e(trans('langconvert.admindashboard.keywords')); ?> <span class="text-red">*</span></label>
												<input type="text" id="tags" class="form-control <?php $__errorArgs = ['keywords'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($seopage->keywords ? $seopage->keywords : ''); ?>" name="keywords" data-role="tagsinput" />
												<?php $__errorArgs = ['keywords'];
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
										<div class="card-footer">
											<div class="form-group float-end">
												<input type="submit" class="btn btn-secondary "  value="<?php echo e(trans('langconvert.admindashboard.savechanges')); ?>" onclick="this.disabled=true;this.form.submit();">
											</div>
										</div>
									</form>
								</div>
							</div>
							<!--End Seo-->

							<?php $__env->stopSection(); ?>


		<?php $__env->startSection('scripts'); ?>
		
		<!--- bootstrap tag js -->
		<script src="<?php echo e(asset('assets/plugins/taginput/bootstrap-tagsinput.js')); ?>?v=<?php echo time(); ?>"></script>

		<script type="text/javascript">

			"use strict";

			// bootstrap js
			$('#tags').tagsinput({
				maxTags: 15
			});
			
		</script>
		<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/admin/seopage/index.blade.php ENDPATH**/ ?>