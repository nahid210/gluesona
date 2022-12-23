
												<?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												
													<?php if($comment->user_id != null): ?>
														<?php if($loop->first): ?>

															<div class="card-body">
																<div class="d-sm-flex">
																	<div class="d-flex me-3">
																		<a href="#">
																			<?php if($comment->user != null): ?>
																			<?php if($comment->user->image == null): ?>

																			<img src="<?php echo e(asset('uploads/profile/user-profile.png')); ?>"  class="media-object brround avatar-lg" alt="default">
																			<?php else: ?>

																			<img class="media-object brround avatar-lg" alt="<?php echo e($comment->user->image); ?>" src="<?php echo e(asset('uploads/profile/'. $comment->user->image)); ?>">
																			<?php endif; ?>
																			<?php else: ?>

																			<img src="<?php echo e(asset('uploads/profile/user-profile.png')); ?>"  class="media-object brround avatar-lg" alt="default">
																			<?php endif; ?>

																		</a>
																	</div>
																	<div class="media-body">
																		<?php if($comment->user != null): ?>

																		<h5 class="mt-1 mb-1 font-weight-semibold"><?php echo e($comment->user->name); ?><?php if(!empty($comment->user->getRoleNames()[0])): ?><span class="badge badge-primary-light badge-md ms-2"><?php echo e($comment->user->getRoleNames()[0]); ?></span><?php endif; ?></h5>
																		<?php else: ?>

																		<h5 class="mt-1 mb-1 font-weight-semibold text-muted">~</h5>
																		<?php endif; ?>
																		
																		<small class="text-muted"><i class="feather feather-clock"></i> <?php echo e($comment->created_at->diffForHumans()); ?></small>
																		<div class="fs-13 mb-0 mt-1">
																			<?php echo $comment->comment; ?>

																		</div>
																		<div class="editsupportnote-icon animated" id="supportnote-icon-<?php echo e($comment->id); ?>">
																			<form action="<?php echo e(url('admin/ticket/editcomment/'.$comment->id)); ?>" method="POST">
																				<?php echo csrf_field(); ?>

																				<textarea class="editsummernote" name="editcomment"> <?php echo e($comment->comment); ?></textarea>
																			<div class="btn-list mt-1">
																				<input type="submit" class="btn btn-secondary" onclick="this.disabled=true;this.form.submit();" value="Update">
																			</div>
																			</form>
																		</div>
                                                                        
																		<?php if(Auth::id() == $comment->user_id): ?>
																		
																			<div class="row galleryopen">
																				<?php $__currentLoopData = $comment->getMedia('comments'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $commentss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

																				<div class="file-image-1  removespruko<?php echo e($commentss->id); ?>" id="imageremove<?php echo e($commentss->id); ?>">
																					<div class="product-image  ">
																						<a href="<?php echo e($commentss->getFullUrl()); ?>" class="imageopen">
																							<img src="<?php echo e($commentss->getFullUrl()); ?>" class="br-5" alt="<?php echo e($commentss->file_name); ?>">
																						</a>
																						<ul class="icons">
																							<li><a href="javascript:(0);" class="bg-danger " onclick="deleteticket(event.target)" data-id="<?php echo e($commentss->id); ?>"><i class="fe fe-trash" data-id="<?php echo e($commentss->id); ?>"></i><?php echo csrf_field(); ?></a></li>
																						</ul>
																					</div>
																					<span class="file-name-1">
																						<?php echo e(Str::limit($commentss->file_name, 10, $end='.......')); ?>

																					</span>
																				</div>
																				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

																			</div>
																		<?php else: ?>

																			<div class="row galleryopen">
																				<?php $__currentLoopData = $comment->getMedia('comments'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $commentss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

																				<div class="file-image-1  removespruko<?php echo e($commentss->id); ?>" id="imageremove<?php echo e($commentss->id); ?>">
																					<div class="product-image  ">
																						<a href="<?php echo e($commentss->getFullUrl()); ?>" class="imageopen">
																							<img src="<?php echo e($commentss->getFullUrl()); ?>" class="br-5" alt="<?php echo e($commentss->file_name); ?>">
																						</a>
																					</div>
																					<span class="file-name-1">
																						<?php echo e(Str::limit($commentss->file_name, 10, $end='.......')); ?>

																					</span>
																				</div>
																				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

																			</div>
																		<?php endif; ?>

																	</div>
																	<?php if(Auth::id() == $comment->user_id): ?>
																	<?php if($comment->display != null): ?>

																	<div class="ms-auto">
																		<span class="action-btns supportnote-icon" onclick="showEditForm('<?php echo e($comment->id); ?>')"><i class="feather feather-edit text-primary fs-16"></i></span>
																	</div>
																    <?php endif; ?>
																    <?php endif; ?>

																</div>
															</div>
														<?php else: ?>

															<div class="card-body">
																<div class="d-sm-flex">
																	<div class="d-flex me-3">
																		<a href="#">
																			<?php if($comment->user != null): ?>
																			<?php if($comment->user->image == null): ?>

																			<img src="<?php echo e(asset('uploads/profile/user-profile.png')); ?>"  class="media-object brround avatar-lg" alt="default">
																			<?php else: ?>

																			<img class="media-object brround avatar-lg" alt="<?php echo e($comment->user->image); ?>" src="<?php echo e(asset('uploads/profile/'. $comment->user->image)); ?>">
																			<?php endif; ?>
																			<?php else: ?>

																			<img src="<?php echo e(asset('uploads/profile/user-profile.png')); ?>"  class="media-object brround avatar-lg" alt="default">
																			<?php endif; ?>

																		</a>
																	</div>
																	<div class="media-body">
																		<?php if($comment->user != null): ?>

																		<h5 class="mt-1 mb-1 font-weight-semibold"><?php echo e($comment->user->name); ?><?php if(!empty($comment->user->getRoleNames()[0])): ?><span class="badge badge-primary-light badge-md ms-2"><?php echo e($comment->user->getRoleNames()[0]); ?></span><?php endif; ?></h5>
																		<?php else: ?>

																		<h5 class="mt-1 mb-1 font-weight-semibold text-muted">~</h5>
																		<?php endif; ?>

																		<small class="text-muted"><i class="feather feather-clock"></i> <?php echo e($comment->created_at->diffForHumans()); ?></small>
																		<div class="fs-13 mb-0 mt-1">
																			<?php echo $comment->comment; ?>

																		</div>
																		<div class="row galleryopen">
																			<?php $__currentLoopData = $comment->getMedia('comments'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $commentss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

																				<div class="file-image-1  removespruko<?php echo e($commentss->id); ?>" id="imageremove<?php echo e($commentss->id); ?>">
																					<div class="product-image  ">
																						<a href="<?php echo e($commentss->getFullUrl()); ?>" class="imageopen">
																							<img src="<?php echo e($commentss->getFullUrl()); ?>" class="br-5" alt="<?php echo e($commentss->file_name); ?>">
																						</a>
																					</div>
																					<span class="file-name-1">
																						<?php echo e(Str::limit($commentss->file_name, 10, $end='.......')); ?>

																					</span>
																				</div>
																			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

																		</div>
																	</div>
																</div>
															</div>
														<?php endif; ?>
														

														
														<?php else: ?>

															<div class="card-body">
																<div class="d-sm-flex">
																	<div class="d-flex me-3">
																		<a href="#">
																			<?php if($comment->cust->image == null): ?>

																			<img src="<?php echo e(asset('uploads/profile/user-profile.png')); ?>"  class="media-object brround avatar-lg" alt="default">
																			<?php else: ?>

																			<img class="media-object brround avatar-lg" alt="<?php echo e($comment->cust->image); ?>" src="<?php echo e(asset('uploads/profile/'. $comment->cust->image)); ?>">
																			<?php endif; ?>

																		</a>
																	</div>
																	<div class="media-body">
																		<h5 class="mt-1 mb-1 font-weight-semibold"><?php echo e($comment->cust->username); ?><span class="badge badge-danger-light badge-md ms-2"><?php echo e($comment->cust->userType); ?></span></h5>
																		<small class="text-muted"><i class="feather feather-clock"></i> <?php echo e($comment->created_at->diffForHumans()); ?></small>
																		<div class="fs-13 mb-0 mt-1">
																			<?php echo $comment->comment; ?>


																		</div>
																		<div class="row galleryopen">
																			<?php $__currentLoopData = $comment->getMedia('comments'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $commentss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

																			<div class="file-image-1  removespruko<?php echo e($commentss->id); ?>" id="imageremove<?php echo e($commentss->id); ?>">
																				<div class="product-image  ">
																					<a href="<?php echo e($commentss->getFullUrl()); ?>" class="imageopen">
																						<img src="<?php echo e($commentss->getFullUrl()); ?>" class="br-5" alt="<?php echo e($commentss->file_name); ?>">
																					</a>
																				</div>
																				<span class="file-name-1">
																					<?php echo e(Str::limit($commentss->file_name, 10, $end='.......')); ?>

																					
																				</span>
																			</div>
																			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

																		</div>
																	</div>
																</div>
															</div>
															
														<?php endif; ?>
													
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												<?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/admin/viewticket/showticketdata.blade.php ENDPATH**/ ?>