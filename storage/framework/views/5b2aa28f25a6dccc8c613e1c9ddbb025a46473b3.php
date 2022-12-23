




							<?php $__env->startSection('content'); ?>


							<!--Page header-->
							<div class="page-header d-xl-flex d-block">
								<div class="page-leftheader">
									<h4 class="page-title"><span class="font-weight-normal text-muted ms-2"><?php echo e(trans('langconvert.adminmenu.googleanalytics')); ?></span></h4>
								</div>
							</div>
							<!--End Page header-->

							<!--Google Analytics-->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card ">
									<div class="card-header border-0">
										<h4 class="card-title"><?php echo e(trans('langconvert.adminmenu.googleanalytics')); ?></h4>
									</div>
									<form method="POST" action="<?php echo e(route('settings.googleanalytics')); ?>" enctype="multipart/form-data">
										<?php echo csrf_field(); ?>
										
										<?php echo view('honeypot::honeypotFormFields'); ?>
										<div class="card-body" >
											<div class="col-sm-6 col-md-6">
												<div class="switch_section">
													<div class="switch-toggle d-flex">
														<a class="onoffswitch2">
															<input type="checkbox" id="myonoffswitch18" name="GOOGLE_ANALYTICS_ENABLE" class=" toggle-class onoffswitch2-checkbox" <?php if(setting('GOOGLE_ANALYTICS_ENABLE') == 'yes'): ?> checked <?php endif; ?>>
															<label for="myonoffswitch18" class="toggle-class onoffswitch2-label"></label>
														</a>
														<label class="form-label ps-3"><?php echo e(trans('langconvert.admindashboard.enablegoogleanalytics')); ?></label>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-md-6 ">

												<div class="form-group <?php echo e($errors->has('FILE_UPLOAD_TYPES') ? ' has-danger' : ''); ?>">
													<label class="form-label"><?php echo e(trans('langconvert.admindashboard.trackingid')); ?></label>
													<input type="text"  class="form-control <?php echo e($errors->has('GOOGLE_ANALYTICS') ? ' is-invalid' : ''); ?>"  name="GOOGLE_ANALYTICS"  value="<?php echo e(old('GOOGLE_ANALYTICS', setting('GOOGLE_ANALYTICS'))); ?>">
													<?php if($errors->has('GOOGLE_ANALYTICS')): ?>

														<span class="invalid-feedback" role="alert">
															<strong><?php echo e($errors->first('GOOGLE_ANALYTICS')); ?></strong>
														</span>
													<?php endif; ?>

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
							<!--End Google Analytics-->
							<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.adminmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/admin/generalsetting/googleanalytics.blade.php ENDPATH**/ ?>