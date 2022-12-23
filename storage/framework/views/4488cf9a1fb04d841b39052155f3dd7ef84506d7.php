
<?php $__env->startSection('content'); ?>
								
								<!--Forgot Password-->
                            	<div class="p-5 pt-0">
									<h1 class="mb-2"><?php echo e(trans('langconvert.menu.forgotpass')); ?></h1>
									<p class="text-muted"><?php echo e(trans('langconvert.menu.enteremail')); ?></p>
								</div>
								<form class="card-body pt-3" id="forgot" action="<?php echo e(url('customer/forgotpassword')); ?>" method="post">
                                <?php echo csrf_field(); ?>

								<?php echo view('honeypot::honeypotFormFields'); ?>

									<div class="form-group">
										<label class="form-label"><?php echo e(trans('langconvert.admindashboard.email')); ?></label>
										<input class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email" type="email">
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
									<div class="submit">
                                        <input class="btn btn-secondary btn-block" type="submit" value="<?php echo e(trans('langconvert.admindashboard.submit')); ?>" onclick="this.disabled=true;this.form.submit();">
									</div>
									<div class="text-center mt-4">
										<p class="text-dark mb-0"><a class="text-primary ms-1" href="<?php echo e(url('/')); ?>"><?php echo e(trans('langconvert.menu.sendmeback')); ?></a></p>
									</div>
								</form>

								<!--Forgot Password-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.custommaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/user/auth/passwords/forgotpassword.blade.php ENDPATH**/ ?>