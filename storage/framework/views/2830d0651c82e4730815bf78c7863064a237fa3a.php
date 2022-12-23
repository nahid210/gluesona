



		<?php $__env->startSection('content'); ?>

		<!-- Section -->
		<section>
			<div class="bannerimg cover-image" data-bs-image-src="<?php echo e(asset('assets/images/photos/banner1.jpg')); ?>">
				<div class="header-text mb-0">
					<div class="container">
						<div class="row text-white">
							<div class="col">
								<h1 class="mb-0"><?php echo e(trans('langconvert.menu.guestview')); ?></h1>
							</div>
							<div class="col col-auto">
								<ol class="breadcrumb text-center">
									<li class="breadcrumb-item">
										<a href="#" class="text-white-50"><?php echo e(trans('langconvert.menu.home')); ?></a>
									</li>
									<li class="breadcrumb-item active">
										<a href="#" class="text-white"><?php echo e(trans('langconvert.menu.guestview')); ?></a>
									</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Section -->

		<!--Section-->
		<section>
			<div class="cover-image sptb">
				<div class="container">
					<div class="row">
						<div class="col-md-6 justify-content-center mx-auto text-center">
                        
                            <div class="card">
                                <div class="card-body p-8 text-center">
                                    <img src="<?php echo e(asset('assets/images/svgs/check.svg')); ?>" alt="img" class="w-10">
                                    <h6 class="mt-5 fs-20 leading-normal"><?php echo e(trans('langconvert.menu.guestcontent')); ?></h6>
                                    <p class="mt-3 mb-5 fs-16"> <?php echo e(trans('langconvert.menu.guestcontent1')); ?> </p>
                                    <a class="btn ripple btn-primary" href="<?php echo e(route('gusetticket',$ticket->ticket_id)); ?>"><?php echo e(trans('langconvert.menu.viewticket')); ?></a>
								</div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</section>
		<!--Section-->

		<?php $__env->stopSection(); ?>


		
<?php echo $__env->make('layouts.usermaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/guestticket/viewticketdetails.blade.php ENDPATH**/ ?>