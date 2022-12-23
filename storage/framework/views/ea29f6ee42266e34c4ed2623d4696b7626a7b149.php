



							<?php $__env->startSection('content'); ?>


							<!--Page header-->
							<div class="page-header d-xl-flex d-block">
								<div class="page-leftheader">
									<h4 class="page-title"><span class="font-weight-normal text-muted ms-2"><?php echo e(trans('langconvert.admindashboard.externalchat')); ?></span></h4>
								</div>
							</div>
							<!--End Page header-->

							<!--External Chat-->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card ">
									<div class="card-header border-0">
										<h4 class="card-title"><?php echo e(trans('langconvert.admindashboard.externalchatsetting')); ?></h4>
									</div>
									<form method="POST" action="<?php echo e(route('settings.custom.chat')); ?>" enctype="multipart/form-data">
										<div class="card-body" >
											<?php echo csrf_field(); ?>

											<?php echo view('honeypot::honeypotFormFields'); ?>
											<div class="row">
												<div class="switch_section">
													<div class="switch-toggle d-flex ">
														<a class="onoffswitch2">
															<input type="checkbox"  name="CUSTOMCHATENABLE" id="myonoffswitch18" class=" toggle-class onoffswitch2-checkbox" value="enable" <?php if(customcssjs('CUSTOMCHATENABLE') =='enable'): ?> checked="" <?php endif; ?>>
															<label for="myonoffswitch18" class="toggle-class onoffswitch2-label"></label>
														</a>
														<div class="ps-3">
															<label class="form-label"><?php echo e(trans('langconvert.admindashboard.externalchatenabledisable')); ?></label>
															<small class="text-muted"><i><?php echo e(trans('langconvert.admindashboard.externalchatcontent')); ?></i></small>
														</div>
													</div>
												</div>
												<div class="switch_section">
													<div class="switch-toggle d-flex ">
														<a class="onoffswitch2">
															<input type="radio"  name="CUSTOMCHATUSER" id="myonoffswitch181" class=" toggle-class onoffswitch2-checkbox" value="public" <?php if(customcssjs('CUSTOMCHATUSER') == 'public'): ?> checked="" <?php endif; ?>>
															<label for="myonoffswitch181" class="toggle-class onoffswitch2-label"></label>
														</a>
														<div class="ps-3">
															<label class="form-label"><?php echo e(trans('langconvert.admindashboard.allusers')); ?></label>
															<small class="text-muted"><i><?php echo e(trans('langconvert.admindashboard.alluserscontent')); ?></i></small>
														</div>
													</div>
												</div>
												<div class="switch_section">
													<div class="switch-toggle d-flex ">
														<a class="onoffswitch2">
															<input type="radio"  name="CUSTOMCHATUSER" id="myonoffswitch180" class=" toggle-class onoffswitch2-checkbox" value="null"  <?php if(customcssjs('CUSTOMCHATUSER') == 'null'): ?> checked="" <?php endif; ?>>
															<label for="myonoffswitch180" class="toggle-class onoffswitch2-label"></label>
														</a>
														<div class="ps-3">
															<label class="form-label"><?php echo e(trans('langconvert.admindashboard.onlyregisteredusers')); ?></label>
															<small class="text-muted"><i><?php echo e(trans('langconvert.admindashboard.onlyregistereduserscontent')); ?></i></small>
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12">
													<div class="form-group">
														<label class="form-label"><?php echo e(trans('langconvert.admindashboard.externalchat')); ?></label>
														<textarea name="customchat" class="form-control <?php $__errorArgs = ['customchat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> cols="30" rows="10" placeholder="External Chat"><?php echo e(customcssjs('CUSTOMCHAT')); ?></textarea>

														<?php $__errorArgs = ['customchat'];
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
										<div class="card-footer">
											<div class="form-group float-end">
												<input type="submit" class="btn btn-secondary" value="<?php echo e(trans('langconvert.admindashboard.savechanges')); ?>" onclick="this.disabled=true;this.form.submit();">
											</div>
										</div>
									</form>
								</div>
							</div>
							<!--End External Chat-->


							<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.adminmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/admin/generalsetting/customchat.blade.php ENDPATH**/ ?>