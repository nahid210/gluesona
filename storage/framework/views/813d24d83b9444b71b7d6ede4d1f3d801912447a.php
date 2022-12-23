                                    <!--Change Password -->
                                    <div class="card">
										<form method="POST" action="<?php echo e(url('/admin/change-password')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <?php echo view('honeypot::honeypotFormFields'); ?>

                                        <div class="card-header border-0">
                                            <h4 class="card-title"><?php echo e(trans('langconvert.admindashboard.changepassword')); ?></h4>
                                        </div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2"><?php echo e(trans('langconvert.admindashboard.oldpassword')); ?> <span class="text-red">*</span></label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="password" class="form-control <?php $__errorArgs = ['current_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Password" value="" name="current_password" autocomplete="current_password">
                                                            <?php $__errorArgs = ['current_password'];
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
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2"><?php echo e(trans('langconvert.admindashboard.newpassword')); ?> <span class="text-red">*</span></label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Password" value=""name="password" autocomplete="password">
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
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label mb-0 mt-2"><?php echo e(trans('langconvert.admindashboard.confirmpassword')); ?> <span class="text-red">*</span></label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="password" class="form-control <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Confirm password" value=""name="password_confirmation" autocomplete="password_confirmation">
                                                            <?php $__errorArgs = ['password_confirmation'];
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
                                            <div class="card-footer text-end">
                                            <button type="submit" class="btn btn-secondary" onclick="this.disabled=true;this.form.submit();"><?php echo e(trans('langconvert.admindashboard.savechanges')); ?></button>
                                            </div>
                                        </form>
									</div>
                                    <!--End Change Password --><?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/admin/auth/passwords/changepassword.blade.php ENDPATH**/ ?>