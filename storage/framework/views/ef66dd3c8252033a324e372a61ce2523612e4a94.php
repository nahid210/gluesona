


<?php $__env->startSection('content'); ?>


						<!-- Section -->
						<section>
							<div class="bannerimg cover-image" data-bs-image-src="<?php echo e(asset('assets/images/photos/banner1.jpg')); ?>">
								<div class="header-text mb-0">
									<div class="container">
										<div class="row text-white">
											<div class="col">
												<h1 class="mb-0"><?php echo e(trans('langconvert.menu.knowledge')); ?></h1>
											</div>
											<div class="col col-auto">
												<ol class="breadcrumb text-center">
													<li class="breadcrumb-item">
														<a href="#" class="text-white-50"><?php echo e(trans('langconvert.menu.home')); ?></a>
													</li>
													<li class="breadcrumb-item active">
														<a href="#" class="text-white"><?php echo e(trans('langconvert.menu.knowledge')); ?></a>
													</li>
												</ol>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<!-- Section -->

						<!--Article Page-->
						<section>
							<div class="cover-image sptb mb-5">
								<div class="container">
									<div class="row row-deck">

										<?php if($article->isEmpty()): ?>
										
										<div class="row">
											<div class="card no-articles mx-3">
												<div class="card-body p-8">
													<div class="main-content text-center">
														<div class="notification-icon-container p-4">
															<img src="<?php echo e(asset('assets/images/noarticle.png')); ?>" alt="">
														</div>
														<h4 class="mb-1"><?php echo e(trans('langconvert.admindashboard.noarticlecontent')); ?></h4>
														<p class="text-muted"><?php echo e(trans('langconvert.admindashboard.noarticlecontentsub')); ?></p>
													</div>
												</div>  
											</div>
										</div>	
										<?php else: ?>

											<div class="col-xl-6">
												<div class="card">
													<div class="card-header border-bottom-0">
														<h4 class="card-title fs-25"><?php echo e(trans('langconvert.admindashboard.recentarticles')); ?></h4>
													</div>
													<div class="card-body">
														<ul class="list-unstyled list-article mb-0">
															<?php $__currentLoopData = $article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

															<?php if($articles->articleslug != null): ?>
															
															<li>
																<a class="" href="<?php echo e(url('/article/' . $articles->articleslug)); ?>"><i class="typcn typcn-document-text"></i><span class="categ-text"><?php echo e(Str::limit($articles->title, '100')); ?></span></a>
															</li>
															<?php else: ?>

															<li>
																<a class="" href="<?php echo e(url('/article/' . $articles->id)); ?>"><i class="typcn typcn-document-text"></i><span class="categ-text"><?php echo e(Str::limit($articles->title, '100')); ?></span></a>
															</li>
															<?php endif; ?>
															<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

														</ul>
													</div>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="card">
													<div class="card-header border-bottom-0">
														<h4 class="card-title fs-25"><?php echo e(trans('langconvert.menu.populararticles')); ?></h4>
													</div>
													<div class="card-body">
														<ul class="list-unstyled list-article mb-0">
															<?php $__currentLoopData = $populararticle; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $populararticles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

															<?php if($populararticles->articleslug != null): ?>

															<li>
																<a class="" href="<?php echo e(url('/article/' . $populararticles->id)); ?>"><i class="typcn typcn-document-text"></i><span class="categ-text"><?php echo e(Str::limit($populararticles->title,'100')); ?></span></a>
															</li>
															<?php else: ?>

															<li>
																<a class="" href="<?php echo e(url('/article/' . $populararticles->id)); ?>"><i class="typcn typcn-document-text"></i><span class="categ-text"><?php echo e(Str::limit($populararticles->title,'100')); ?></span></a>
															</li>
															<?php endif; ?>
															<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

														</ul>
													</div>
												</div>
											</div>
										<?php endif; ?>
										<?php $__currentLoopData = $categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<?php if($category->articles->isNotEmpty()): ?>

										<div class="col-xl-4">
											<div class="card">
												<div class="card-header border-bottom-0">
													<h4 class="card-title fs-25"><?php echo e($category->name); ?></h4>
													<div class="card-options me-0">
														<?php if($category->articles()->where('status', 'Published')->simplepaginate(5) > '5'): ?>

														<?php if($category->categoryslug != null): ?>

														<a href="<?php echo e(url('/category/'. $category->categoryslug)); ?>" class="text-primary"><?php echo e(trans('langconvert.menu.viewall')); ?></a>
														<?php else: ?>

														<a href="<?php echo e(url('/category/'. $category->id)); ?>" class="text-primary"><?php echo e(trans('langconvert.menu.viewall')); ?></a>
														<?php endif; ?>
														<?php endif; ?>
													</div>
												</div>
												<div class="card-body">
													<ul class="list-unstyled list-article mb-0">
														<?php $__currentLoopData = $category->articles()->where('status', 'Published')->latest()->simplepaginate(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articless): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

															<?php if($articless->articleslug != null): ?>

															<li>
																<a class="" href="<?php echo e(url('/article/' . $articless->articleslug)); ?>"><i class="typcn typcn-document-text"></i><span class="categ-text"><?php echo e(Str::limit($articless->title,'50')); ?></span></a>
															</li>
															<?php else: ?>

															<li>
																<a class="" href="<?php echo e(url('/article/' . $articless->id)); ?>"><i class="typcn typcn-document-text"></i><span class="categ-text"><?php echo e(Str::limit($articless->title,'50')); ?></span></a>
															</li>
															<?php endif; ?>
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

													</ul>
												</div>
											</div>
										</div>
										<?php endif; ?>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

									</div>
								</div>
							</div>
						</section>
						<!--Article Page-->


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.usermaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/knowledge.blade.php ENDPATH**/ ?>