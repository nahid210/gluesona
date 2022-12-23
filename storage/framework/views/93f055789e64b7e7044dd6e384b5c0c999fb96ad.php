
											<!--Notification Page-->
											<div class="dropdown header-message">
												<a class="nav-link icon" data-bs-toggle="dropdown">
													<i class="feather feather-bell header-icon"></i>
													<!-- Counter - Alerts -->
													<span class="badge badge-success badge-counter"><?php echo e(auth()->user()->unreadNotifications->count()); ?></span>
												</a>
												<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow animated p-0 notification-dropdown-container">
													<div class="header-dropdown-list message-menu" id="message-menu">
												<?php if(auth()->user()): ?>
													<?php $__empty_1 = true; $__currentLoopData = auth()->user()->unreadNotifications()->paginate(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
														<?php if($notification->data['status'] == 'New'): ?>

															<a class="dropdown-item border-bottom mark-as-read" href="<?php echo e($notification->data['link']); ?>" data-id="<?php echo e($notification->id); ?>">
																<div class="d-flex align-items-center">
																	<div class="">
																		<span class="bg-success-transparent brround fs-12 notifications"><i class="feather  feather-bell sidemenu_icon fs-20 text-success"></i></span>
																	</div>
																	<div class="d-flex">
																		<div class="ps-3">
																			<h6 class="mb-1"><?php echo e(Str::limit($notification->data['title'], '30')); ?></h6>
																			<p class="fs-13 mb-1 text-wrap"> <?php echo e(trans('langconvert.adminmenu.newticket')); ?> <?php echo e($notification->data['ticket_id']); ?></p>
																			<div class="small text-muted">
																				<?php echo e($notification->created_at->diffForHumans()); ?>

																			</div>
																		</div>
																	</div>
																</div>
															</a>
														<?php endif; ?>
														<?php if($notification->data['status'] == 'Closed'): ?>

															<a class="dropdown-item border-bottom mark-as-read" href="<?php echo e($notification->data['link']); ?>" data-id="<?php echo e($notification->id); ?>">
																<div class="d-flex align-items-center">
																	<div class="">
																		<span class="bg-success-transparent brround fs-12 notifications"><i class="feather  feather-bell sidemenu_icon fs-20 text-success"></i></span>
																	</div>
																	<div class="d-flex">
																		<div class="ps-3">
																			<h6 class="mb-1"><?php echo e(Str::limit($notification->data['title'], '30')); ?></h6>
																			<p class="fs-13 mb-1 text-wrap"> <?php echo e(trans('langconvert.adminmenu.closeticket')); ?> <?php echo e($notification->data['ticket_id']); ?></p>
																			<div class="small text-muted">
																				<?php echo e($notification->created_at->diffForHumans()); ?>

																			</div>
																		</div>
																	</div>
																</div>
															</a>
														<?php endif; ?>
														<?php if($notification->data['status'] == 'On-Hold'): ?>

															<a class="dropdown-item border-bottom mark-as-read" href="<?php echo e($notification->data['link']); ?>" data-id="<?php echo e($notification->id); ?>">
																<div class="d-flex align-items-center">
																	<div class="">
																		<span class="bg-success-transparent brround fs-12 notifications"><i class="feather  feather-bell sidemenu_icon fs-20 text-success"></i></span>
																	</div>
																	<div class="d-flex">
																		<div class="ps-3">
																			<h6 class="mb-1"><?php echo e(Str::limit($notification->data['title'], '30')); ?></h6>
																			<p class="fs-13 mb-1 text-wrap"> <?php echo e(trans('langconvert.adminmenu.onholdticket')); ?> <?php echo e($notification->data['ticket_id']); ?></p>
																			<div class="small text-muted">
																				<?php echo e($notification->created_at->diffForHumans()); ?>

																			</div>
																		</div>
																	</div>
																</div>
															</a>
														<?php endif; ?>
														<?php if($notification->data['status'] == 'Re-Open'): ?>

															<a class="dropdown-item border-bottom mark-as-read" href="<?php echo e($notification->data['link']); ?>" data-id="<?php echo e($notification->id); ?>">
																<div class="d-flex align-items-center">
																	<div class="">
																		<span class="bg-success-transparent brround fs-12 notifications"><i class="feather  feather-bell sidemenu_icon fs-20 text-success"></i></span>
																	</div>
																	<div class="d-flex">
																		<div class="ps-3">
																			<h6 class="mb-1"><?php echo e(Str::limit($notification->data['title'], '30')); ?></h6>
																			<p class="fs-13 mb-1 text-wrap"> <?php echo e(trans('langconvert.adminmenu.reopenticket')); ?> <?php echo e($notification->data['ticket_id']); ?></p>
																			<div class="small text-muted">
																				<?php echo e($notification->created_at->diffForHumans()); ?>

																			</div>
																		</div>
																	</div>
																</div>
															</a>
														<?php endif; ?>
														<?php if($notification->data['status'] == 'Inprogress'): ?>

															<a class="dropdown-item border-bottom mark-as-read" href="<?php echo e($notification->data['link']); ?>" data-id="<?php echo e($notification->id); ?>">
																<div class="d-flex align-items-center">
																	<div class="">
																		<span class="bg-success-transparent brround fs-12 notifications"><i class="feather  feather-bell sidemenu_icon fs-20 text-success"></i></span>
																	</div>
																	<div class="d-flex">
																		<div class="ps-3">
																			<h6 class="mb-1"><?php echo e(Str::limit($notification->data['title'], '30')); ?></h6>
																			<p class="fs-13 mb-1 text-wrap"> <?php echo e(trans('langconvert.adminmenu.repliedticket')); ?> <?php echo e($notification->data['ticket_id']); ?></p>
																			<div class="small text-muted">
																				<?php echo e($notification->created_at->diffForHumans()); ?>

																			</div>
																		</div>
																	</div>
																</div>
															</a>
														<?php endif; ?>
														<?php if($notification->data['status'] == 'overdue'): ?>

															<a class="dropdown-item border-bottom mark-as-read" href="<?php echo e($notification->data['link']); ?>" data-id="<?php echo e($notification->id); ?>">
																<div class="d-flex align-items-center">
 																<div class="">
																	<span class="bg-success-transparent brround fs-12 notifications"><i class="feather  feather-bell sidemenu_icon fs-20 text-success"></i></span>
																</div>
																	<div class="d-flex">
																		<div class="ps-3">
																			<h6 class="mb-1"><?php echo e(Str::limit($notification->data['title'], '30')); ?></h6>
																			<p class="fs-13 mb-1 text-wrap"> <?php echo e(trans('langconvert.adminmenu.overdueticket')); ?> <?php echo e($notification->data['ticket_id']); ?></p>
																			<div class="small text-muted">
																				<?php echo e($notification->created_at->diffForHumans()); ?>

																			</div>
																		</div>
																	</div>
																</div>
															</a>
														<?php endif; ?>
														<?php if($notification->data['status'] == 'mail'): ?>
														
														<a class="dropdown-item border-bottom mark-as-read" href="#" >
															<div class="d-flex ">
																<div class="">
																	<span class="avatar avatar-md brround align-self-center cover-image" data-image-src="../../assets/images/users/1.jpg"></span>
																</div>
																<div class="d-flex">
																	<div class="ps-3">
																		<h6 class="mb-1"> <?php echo e($notification->data['mailsubject']); ?></h6>
																		<p class="fs-13 mb-1 text-wrap">
																			<?php echo e(Str::limit($notification->data['mailtext'], '100', '.......')); ?>

																		</p>
																		<div class="small text-muted">
																			<?php echo e($notification->created_at->diffForHumans()); ?>

																		</div>
																	</div>
																</div>
															</div>
														</a>
														<?php endif; ?>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

													<a class="dropdown-item border-bottom mark-as-read notification-dropdown" href="">
														<div class="d-flex justify-content-center">
															<div class="ps-3 text-center">
																<img src="<?php echo e(asset('assets/images/nonotification.png')); ?>" alt="">
																<p class="fs-13 mb-1 text-muted"><?php echo e(trans('langconvert.usermenu.nonotify')); ?></p>
															</div>
														</div>
													</a>
														
													<?php endif; ?>
												<?php endif; ?>
												
													</div>
													<div class="text-center p-2">
														<a href="<?php echo e(route('notificationpage')); ?>" class="smark-all"><?php echo e(trans('langconvert.usermenu.allnotify')); ?> (<?php echo e(auth()->user()->notifications->count()); ?>)</a>
													</div>
												</div>
											</div>
											<!--Notification Page-->