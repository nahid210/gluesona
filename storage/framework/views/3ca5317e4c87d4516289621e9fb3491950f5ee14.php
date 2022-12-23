
<?php $__env->startSection('content'); ?>

								<!--Reset Password-->
								<div class="p-5 pt-0">
									<h1 class="mb-2"><?php echo e(trans('langconvert.menu.resetpass')); ?></h1>
								</div>
								<form class="card-body pt-3" method="POST" action="<?php echo e(url('customer/reset-password')); ?>" >
                                <?php echo csrf_field(); ?>
								<?php echo view('honeypot::honeypotFormFields'); ?>

                                <input type="hidden" name="token" value="<?php echo e($token); ?>">
									<div class="form-group">
										<label class="form-label"  for="email" ><?php echo e(trans('langconvert.admindashboard.email')); ?></label>
										<input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e($user->email ?? old('email')); ?>" autocomplete="email" placeholder="john@gmail.com" autofocus readonly>

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
									<div class="form-group">
										<label class="form-label" for="password" ><?php echo e(trans('langconvert.admindashboard.newpassword')); ?></label>
										<input class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="password" name="password" placeholder="password" type="password">
                                        <?php $__errorArgs = ['password'];
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
										<label class="form-label" for="password-confirm" ><?php echo e(trans('langconvert.admindashboard.confirmpassword')); ?></label>
										<input class="form-control" placeholder="password" id="password-confirm"  name="password_confirmation" type="password">
									</div>
									<div class="submit">
                                    <button type="submit" class="btn btn-secondary btn-block" onclick="this.disabled=true;this.form.submit();">
                                        <?php echo e(trans('langconvert.menu.resetpass')); ?>

                                    </button>
									</div>
									<div class="text-center mt-4">
										<p class="text-dark mb-0"><?php echo e(trans('langconvert.menu.remberpass')); ?><a class="text-primary ms-1" href="<?php echo e(url('/login')); ?>"><?php echo e(trans('langconvert.menu.login')); ?>Login</a></p>
									</div>
								</form>
								<!--Reset Password-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.custommaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/user/auth/passwords/resetpassword.blade.php ENDPATH**/ ?>