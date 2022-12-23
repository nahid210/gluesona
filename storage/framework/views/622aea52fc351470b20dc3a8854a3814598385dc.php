

                            <?php $__env->startSection('content'); ?>

                            <!--Page header-->
                            <div class="page-header d-xl-flex d-block">
                                <div class="page-leftheader">
                                    <h4 class="page-title"><span class="font-weight-normal text-muted ms-2"><?php echo e(trans('langconvert.adminmenu.groups')); ?></span></h4>
                                </div>
                            </div>
                            <!--End Page header-->
                            
                            <!-- Create Groups-->
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="card ">
                                    <div class="card-header border-0">
                                        <h4 class="card-title"><?php echo e(trans('langconvert.adminmenu.creategroup')); ?></h4>
                                    </div>
                                    <form method="POST" action="<?php echo e(url('/admin/groups/store' )); ?>">
                                        <?php echo csrf_field(); ?>

                                        <?php echo view('honeypot::honeypotFormFields'); ?>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label class="form-label"><?php echo e(trans('langconvert.admindashboard.name')); ?> <span class="text-red">*</span></label>
                                                <input type="text" class="form-control <?php $__errorArgs = ['groupname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="" name="groupname" value="">
                                                <?php $__errorArgs = ['groupname'];
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
                                                <label class="form-label"><?php echo e(trans('langconvert.admindashboard.selectemployee')); ?> </label>
                                                <div class="custom-controls-stacked d-md-flex" >
                                                    <select multiple="multiple" class="form-control  select2" data-placeholder="Select Employee" name="user_id[]" id="username" >
                                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                        <?php if($item->id != 1): ?>
                                                        
                                                        <option value="<?php echo e($item->id); ?>" ><?php echo e($item->name); ?> <?php if(!empty($item->getRoleNames()[0])): ?> (<?php echo e($item->getRoleNames()[0]); ?>) <?php endif; ?></option>
                                                        <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="form-group float-end">
                                                <input type="submit" class="btn btn-secondary"  value="<?php echo e(trans('langconvert.admindashboard.save')); ?>" onclick="this.disabled=true;this.form.submit();">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--End Create Groups-->
                            <?php $__env->stopSection(); ?>
        <?php $__env->startSection('scripts'); ?>

        <!-- INTERNAL Index js-->
        <script src="<?php echo e(asset('assets/js/select2.js')); ?>?v=<?php echo time(); ?>"></script>
        
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/admin/groups/create.blade.php ENDPATH**/ ?>