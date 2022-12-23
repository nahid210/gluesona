                                    <!--Notification Page-->
                                    <div class="dropdown me-0 pe-1 header-message">
                                        <a class="nav-link icon p-0 mt-1" data-bs-toggle="dropdown">
                                            <i class="feather feather-bell header-icon"></i>
                                            <!-- Counter - Alerts -->
                                            <span class="badge badge-success badge-counter"><?php echo e(auth()->guard('customer')->user()->unreadNotifications->count()); ?></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow p-0 notification-dropdown-container">
                                            <?php if(auth()->guard('customer')->user()): ?>
                                                <?php $__empty_1 = true; $__currentLoopData = auth()->guard('customer')->user()->unreadNotifications()->paginate(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    <?php if($notification->data['status'] == 'New'): ?>

                                                        <a class="dropdown-item border-bottom mark-as-read" href="<?php echo e($notification->data['clink']); ?>" data-id="<?php echo e($notification->id); ?>">
                                                            <div class="d-flex align-items-center">
                                                                <div class="">
                                                                    <span class="bg-success-transparent brround fs-12 notifications"><i class="feather  feather-bell sidemenu_icon fs-20"></i></span>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="ps-3">
                                                                        <h6 class="mb-1"><?php echo e($notification->data['title']); ?></h6>
                                                                        <p class="fs-13 mb-1 text-wrap">  <?php echo e(trans('langconvert.usermenu.newticket')); ?> <?php echo e($notification->data['ticket_id']); ?></p>
                                                                        <div class="small text-muted">
                                                                            <?php echo e($notification->created_at->diffForHumans()); ?>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    <?php endif; ?>
                                                    <?php if($notification->data['status'] == 'Closed'): ?>

                                                        <a class="dropdown-item border-bottom mark-as-read" href="<?php echo e($notification->data['clink']); ?>" data-id="<?php echo e($notification->id); ?>">
                                                            <div class="d-flex align-items-center">
                                                                <div class="">
                                                                    <span class="bg-success-transparent brround fs-12 notifications"><i class="feather  feather-bell sidemenu_icon fs-20"></i></span>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="ps-3">
                                                                        <h6 class="mb-1"><?php echo e($notification->data['title']); ?></h6>
                                                                        <p class="fs-13 mb-1 text-wrap">  <?php echo e(trans('langconvert.usermenu.closeticket')); ?> <?php echo e($notification->data['ticket_id']); ?></p>
                                                                        <div class="small text-muted">
                                                                            <?php echo e($notification->created_at->diffForHumans()); ?>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    <?php endif; ?>
                                                    <?php if($notification->data['status'] == 'On-Hold'): ?>

                                                        <a class="dropdown-item border-bottom mark-as-read" href="<?php echo e($notification->data['clink']); ?>" data-id="<?php echo e($notification->id); ?>">
                                                            <div class="d-flex align-items-center">
                                                                <div class="">
                                                                    <span class="bg-success-transparent brround fs-12 notifications"><i class="feather  feather-bell sidemenu_icon fs-20"></i></span>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="ps-3">
                                                                        <h6 class="mb-1"><?php echo e($notification->data['title']); ?></h6>
                                                                        <p class="fs-13 mb-1 text-wrap">  <?php echo e(trans('langconvert.usermenu.onholdticket')); ?> <?php echo e($notification->data['ticket_id']); ?></p>
                                                                        <div class="small text-muted">
                                                                            <?php echo e($notification->created_at->diffForHumans()); ?>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    <?php endif; ?>
                                                    <?php if($notification->data['status'] == 'Re-Open'): ?>

                                                        <a class="dropdown-item border-bottom mark-as-read" href="<?php echo e($notification->data['clink']); ?>" data-id="<?php echo e($notification->id); ?>">
                                                            <div class="d-flex align-items-center">
                                                                <div class="">
                                                                    <span class="bg-success-transparent brround fs-12 notifications"><i class="feather  feather-bell sidemenu_icon fs-20"></i></span>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="ps-3">
                                                                        <h6 class="mb-1"><?php echo e($notification->data['title']); ?></h6>
                                                                        <p class="fs-13 mb-1 text-wrap">  <?php echo e(trans('langconvert.usermenu.reopenticket')); ?> <?php echo e($notification->data['ticket_id']); ?></p>
                                                                        <div class="small text-muted">
                                                                            <?php echo e($notification->created_at->diffForHumans()); ?>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    <?php endif; ?>
                                                    <?php if($notification->data['status'] == 'Inprogress'): ?>

                                                        <a class="dropdown-item border-bottom mark-as-read" href="<?php echo e($notification->data['clink']); ?>" data-id="<?php echo e($notification->id); ?>">
                                                            <div class="d-flex align-items-center">
                                                                <div class="">
                                                                    <span class="bg-success-transparent brround fs-12 notifications"><i class="feather  feather-bell sidemenu_icon fs-20"></i></span>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="ps-3">
                                                                        <h6 class="mb-1"><?php echo e($notification->data['title']); ?></h6>
                                                                        <p class="fs-13 mb-1 text-wrap">  <?php echo e(trans('langconvert.usermenu.repliedticket')); ?> <?php echo e($notification->data['ticket_id']); ?></p>
                                                                        <div class="small text-muted">
                                                                            <?php echo e($notification->created_at->diffForHumans()); ?>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    <?php endif; ?>
                                                    <?php if($notification->data['status'] == 'overdue'): ?>

                                                        <a class="dropdown-item border-bottom mark-as-read" href="<?php echo e($notification->data['clink']); ?>" data-id="<?php echo e($notification->id); ?>">
                                                            <div class="d-flex align-items-center">
                                                                <div class="">
                                                                    <span class="bg-success-transparent brround fs-12 notifications"><i class="feather  feather-bell sidemenu_icon fs-20"></i></span>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="ps-3">
                                                                        <h6 class="mb-1"><?php echo e($notification->data['title']); ?></h6>
                                                                        <p class="fs-13 mb-1 text-wrap">  <?php echo e(trans('langconvert.usermenu.overdueticket')); ?> <?php echo e($notification->data['ticket_id']); ?></p>
                                                                        <div class="small text-muted">
                                                                            <?php echo e($notification->created_at->diffForHumans()); ?>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    <?php endif; ?>
                                                    <?php if($notification->data['status'] == 'mail'): ?>

                                                    <a class="dropdown-item border-bottom mark-as-read" href="<?php echo e(route('client.notification')); ?>" >
                                                        <div class="d-flex ">
                                                            <div class="">
                                                                <span class="bg-success-transparent brround fs-12 notifications"><i class="feather  feather-bell sidemenu_icon fs-20"></i></span>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="ps-3">
                                                                    <h6 class="mb-1"> <?php echo e($notification->data['mailsubject']); ?></h6>
                                                                    <p class="fs-13 mb-1 text-wrap">
                                                                        <?php echo e($notification->data['mailtext']); ?>

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
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <div class="d-flex">
                                                                <div class="ps-3 text-center">
                                                                    <img src="<?php echo e(asset('assets/images/nonotification.png')); ?>" alt="">
                                                                    <p class="fs-13 mb-1 text-muted"><?php echo e(trans('langconvert.usermenu.nonotify')); ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                <?php endif; ?>
                                            <?php endif; ?>

                                            <div class=" text-center p-2">
                                                <a href="<?php echo e(route('client.notification')); ?>" class=""><?php echo e(trans('langconvert.usermenu.allnotify')); ?> (<?php echo e(auth()->guard('customer')->user()->notifications->count()); ?>)</a>
                                            </div>
                                        </div>

                                    </div>
                                    <!--Notification Page--><?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/includes/user/mobilenotification.blade.php ENDPATH**/ ?>