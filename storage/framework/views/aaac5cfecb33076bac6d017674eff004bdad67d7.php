
							<?php $__env->startSection('content'); ?>

                            <!--Page header-->
							<div class="page-header d-xl-flex d-block">
								<div class="page-leftheader">
									<h4 class="page-title"><span class="font-weight-normal text-muted ms-2"><?php echo e(trans('langconvert.newwordslang.appinfo')); ?></span></h4>
								</div>
							</div>
							<!--End Page header-->

                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <?php echo $output; ?>

                            </div>
                            
                            <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bahonbdc/public_html/ticket/Modules/Uhelpupdate/Resources/views/appinfo/index.blade.php ENDPATH**/ ?>