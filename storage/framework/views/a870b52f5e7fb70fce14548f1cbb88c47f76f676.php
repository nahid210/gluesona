                            
                            <?php $__env->startSection('content'); ?>

								<!--Admin Login -->
                                <div class="p-5 pt-0">
									<h1 class="mb-2"><?php echo e(trans('langconvert.menu.login')); ?></h1>
									<p class="text-muted"><?php echo e(trans('langconvert.menu.siginacc')); ?></p>
								</div>
								<form class="card-body pt-3" id="login" action="<?php echo e(route('login')); ?>" method="post">
									
									<?php echo csrf_field(); ?>

									<?php echo view('honeypot::honeypotFormFields'); ?>

									<div class="form-group">
										<label class="form-label"><?php echo e(trans('langconvert.admindashboard.email')); ?> <span class="text-red">*</span></label>
										<input class="form-control  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Email" type="email" value="<?php echo e(old('email')); ?>" name="email">
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
										<label class="form-label"><?php echo e(trans('langconvert.admindashboard.password')); ?> <span class="text-red">*</span></label>
										<input class="form-control  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="password" type="password" name="password">
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
										<label class="custom-control form-checkbox">
											<input type="checkbox" class="custom-control-input" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
											<span class="custom-control-label"><?php echo e(trans('langconvert.menu.rememberme')); ?></span>
										</label>
									</div>
									<div class="submit">
										<input class="btn btn-secondary btn-block"  type="submit" value="<?php echo e(trans('langconvert.menu.login')); ?>" onclick="this.disabled=true;this.form.submit();">
									</div>
									<div class="text-center mt-3">
										<p class="mb-2"><a href="<?php echo e(route('password.request')); ?>"><?php echo e(trans('langconvert.menu.forgotpass')); ?></a></p>
									</div>
								</form>
								<!-- End Admin Login -->
                            <?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.custommaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>