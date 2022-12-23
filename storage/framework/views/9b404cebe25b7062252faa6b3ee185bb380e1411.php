				<!-- Header-->
				<div class="landingmain-header header">
					<div class="horizontal-main landing-header clearfix sticky">
						<div class="horizontal-mainwrapper container clearfix">
							<div class="d-flex">
								<div class="headerlanding-logo">
									<a class="header-brand" href="<?php echo e(url('/')); ?>">
										<?php if($title->image !== null): ?>

										<img src="<?php echo e(asset('uploads/logo/logo/'.$title->image)); ?>" class="header-brand-img light-logo"
											alt="<?php echo e($title->image); ?>">
										<?php else: ?>
										
										<img src="<?php echo e(asset('uploads/logo/logo/logo-white.png')); ?>" class="header-brand-img light-logo"
											alt="logo">
										<?php endif; ?>
										<?php if($title->image1 !== null): ?>

											<img src="<?php echo e(asset('uploads/logo/darklogo/'.$title->image1)); ?>" class="header-brand-img desktop-lgo"
											alt="<?php echo e($title->image1); ?>">
										<?php else: ?>
										
										<img src="<?php echo e(asset('uploads/logo/darklogo/logo.png')); ?>" class="header-brand-img desktop-lgo"
											alt="logo">

										<?php endif; ?>
										
									
									
									</a>

								</div>
								<nav class="horizontalMenu clearfix order-lg-2 my-auto ms-auto">
									<ul class="horizontalMenu-list custom-ul">
										<li>
											<a href="<?php echo e(url('/')); ?>"><?php echo e(trans('langconvert.menu.home')); ?></a>
										</li>
										<?php if(setting('KNOWLEDGE_ENABLE') == 'yes'): ?>

										<li>
											<a href="<?php echo e(url('/knowledge')); ?>" class="sub-icon"><?php echo e(trans('langconvert.menu.knowledge')); ?> </a>
										</li>
										<?php endif; ?>
										<?php if(setting('FAQ_ENABLE') == 'yes'): ?>

										<li>
											<a href="<?php echo e(url('/faq')); ?>" class="sub-icon"><?php echo e(trans('langconvert.menu.faq')); ?></a>
										</li>
										<?php endif; ?>
										<?php if(setting('CONTACT_ENABLE') == 'yes'): ?>

										<li>
											<a href="<?php echo e(url('/contact-us')); ?>"><?php echo e(trans('langconvert.menu.contact')); ?></a>
										</li>
										<?php endif; ?>

										<?php $__currentLoopData = $page; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pages): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<?php if($pages->status == '1'): ?>
										<?php if($pages->viewonpages == 'both' || $pages->viewonpages == 'header'): ?>

										<li>
											<a href="<?php echo e(url('page/' .$pages->pageslug)); ?>"><?php echo e($pages->pagename); ?></a>
										</li>

										<?php endif; ?>
										<?php endif; ?>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										
										<?php if(Auth::guard('customer')->check()): ?>

										<?php echo $__env->make('includes.user.notifynotication', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

										<li  class="dropdown header-flags text-capitalize">
											<a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
												<span class=""><?php echo e(app()->getLocale()); ?> </span>
											</a>
											<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow animated text-capitalize">
												
												<?php $__currentLoopData = getLanguages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

													<a href="<?php echo e(route('front.set_language', [$lang])); ?>" class="dropdown-item d-flex fs-13">
														<span class=""><?php echo e($lang); ?></span>
													</a>

												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

											</div>
										</li>

										<li class="dropdown profile-dropdown">
											<a href="#" class="nav-link pe-1 ps-0 py-0 mt-1 leading-none" data-bs-toggle="dropdown">
												<span>
													<?php if(Auth::guard('customer')->user()->image == null): ?>

													<img src="<?php echo e(asset('uploads/profile/user-profile.png')); ?>" class="avatar avatar-md bradius rounded-circle" alt="default">
													<?php else: ?>

													<img src="<?php echo e(asset('uploads/profile/'.Auth::guard('customer')->user()->image)); ?>" alt="<?php echo e(Auth::guard('customer')->user()->image); ?>" class="avatar avatar-md bradius">
													<?php endif; ?>

												</span>
											</a>
											<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
												<div class="p-3 text-center border-bottom">
													<a href="#" class="text-center user pb-0 font-weight-bold"><?php echo e(Auth::guard('customer')->user()->username); ?></a>
													<p class="text-center user-semi-title"><?php echo e(Auth::guard('customer')->user()->email); ?></p>
												</div>

												<a class="dropdown-item d-flex" href="<?php echo e(route('client.dashboard')); ?>">
													<i class="feather feather-grid me-3 fs-16 my-auto"></i>
													<div class="mt-1"><?php echo e(trans('langconvert.menu.dashboard')); ?></div>
												</a>
												<a class="dropdown-item d-flex" href="<?php echo e(route('client.profile')); ?>">
													<i class="feather feather-user me-3 fs-16 my-auto"></i>
													<div class="mt-1"><?php echo e(trans('langconvert.menu.profile')); ?></div>
												</a>
												<a class="dropdown-item d-flex" href="<?php echo e(route('activeticket')); ?>">
													<i class="ri-ticket-2-line me-3 fs-16 my-auto"></i>
													<div class="mt-1"><?php echo e(trans('langconvert.menu.ticket')); ?></div>
												</a>
												<form id="logout-form" action="<?php echo e(route('client.logout')); ?>" method="POST">
													<?php echo csrf_field(); ?>

													<button type="submit" class="dropdown-item d-flex">
														<i class="feather feather-power me-3 fs-16 my-auto"></i>
													<div class="mt-1"><?php echo e(trans('langconvert.menu.logout')); ?></div>
													</button>
											</form>

											</div>
										</li>

										<?php else: ?>
											<?php if(setting('REGISTER_POPUP') == 'yes'): ?>

											<li><a href="#" data-bs-toggle="modal" data-bs-target="#loginmodal"><?php echo e(trans('langconvert.menu.login')); ?></a></li>
											<?php if(setting('REGISTER_DISABLE') == 'on'): ?>

												<li><a href="#" data-bs-toggle="modal" data-bs-target="#registermodal"><?php echo e(trans('langconvert.menu.register')); ?></a></li>
											<?php endif; ?>
											<?php else: ?>

												<li><a href="<?php echo e(url('customer/login')); ?>" ><?php echo e(trans('langconvert.menu.login')); ?></a></li>
												<?php if(setting('REGISTER_DISABLE') == 'on'): ?>

												<li><a href="<?php echo e(url('customer/register')); ?>" ><?php echo e(trans('langconvert.menu.register')); ?></a></li>
												<?php endif; ?>
											<?php endif; ?>

											<li  class="dropdown header-flags text-capitalize">
												<a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
													<span class=""><?php echo e(app()->getLocale()); ?> </span>
												</a>
												<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow animated text-capitalize">
													
													<?php $__currentLoopData = getLanguages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	
														<a href="<?php echo e(route('front.set_language', [$lang])); ?>" class="dropdown-item d-flex fs-13">
															<span class=""><?php echo e($lang); ?></span>
														</a>
	
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	
												</div>
											</li>
											
											<?php if(setting('GUEST_TICKET') == 'yes'): ?>
											
											<li>
												<span class="menu-btn">
													<a class="btn btn-secondary m-0" href="<?php echo e(url('/guest/openticket')); ?>">
														<i class="fa fa-paper-plane-o me-1"></i>
														<?php echo e(trans('langconvert.menu.submitticket')); ?>

													</a>
												</span>
											</li>
											
											<?php endif; ?>
										<?php endif; ?>

									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<!--Header-->

<?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/includes/user/menu.blade.php ENDPATH**/ ?>