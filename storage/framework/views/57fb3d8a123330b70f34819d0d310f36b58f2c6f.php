

<?php $__env->startSection('styles'); ?>

		<!-- INTERNAL owl-carousel css-->
		<link href="<?php echo e(asset('assets/plugins/owl-carousel/owl-carousel.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />


<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

							<!--Banner Section-->
							<section>
								<div class="banner-1 cover-image sptb-tab bg-background-support" data-bs-image-src="<?php echo e(asset('assets/images/photos/banner2.jpg')); ?>">
									<div class="header-text content-text mb-0">
										<div class="container">
											<div class="text-center text-white mb-7 mt-9">
												<h1 class="mb-2"><?php echo e($title->searchtitle); ?></h1>
												<p class="fs-18"><?php echo e($title->searchsub); ?></p>
											</div>
											<div class="row">
												<div class="col-xl-7 col-lg-12 col-md-12 d-block mx-auto">
													<div class="search-background p-0">
														<input type="text" class="form-control input-lg" name="search_name" id="search_name"  placeholder="Ask your Questions.....">
														<button class="btn"><i class="fe fe-search"></i></button>

														<div id="searchList">
															
														</div>
													</div>
													<?php echo csrf_field(); ?>

												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<!--Banner Section-->

							<!--Feature Box Section-->
							<section>
								<div class="cover-image sptb">
									<div class="container">
										<div class="section-title center-block text-center">
											<h2 class="wow fs-30" data-wow-delay="0.1s"><?php echo e($title->featuretitle); ?></h2>
											<p class="wow fs-18" data-wow-delay="0.15s"><?php echo e($title->featuresub); ?></p>
										</div>
										<div class="row row-deck featureboxcenter">
											<?php $__currentLoopData = $feature; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $box): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

												<div class="col-lg-4 col-md-4">
													<div class="support-card card text-center wow" data-wow-delay="0.2s">
														<div class="suuport-body">
															<div class="choose-icon">
																<?php if($box->image !== null): ?>

																<img src="<?php echo e(asset('uploads/featurebox/' .$box->image)); ?>" alt="img" class="<?php echo e($box->image); ?>">
																<?php else: ?>

																<img src="<?php echo e(asset('uploads/featurebox/noimage/noimage.svg')); ?>" alt="img" class="noimage">
																<?php endif; ?>

															</div>
															<div class="servic-data mt-3">
																<h4 class="font-weight-semibold mb-2"><?php echo e($box->title); ?></h4>
																<p class="text-muted mb-0"><?php echo e($box->subtitle); ?></p>
															</div>
														</div>
													</div>
												</div>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

										</div>
									</div>
								</div>
							</section>
							<!--Feature Box Section-->
						
						<?php if($call->callcheck == 'on'): ?>

							<!--Call Action Section-->
							<section>
								<div class="banner-2 cover-image" data-bs-image-src="<?php echo e(asset('assets/images/pattern/pattern2.png')); ?>">
									<div class="header-text content-text mb-0">
										<div class="container">
											<div class="row">
												<div class="col-md-7 sptb">
													<div class="text-white wow">
														<h2 class="mb-2 fs-30 font-weight-semibold"><?php echo e($call->title); ?></h2>
														<p class="fs-18 text-white-50"><?php echo e($call->subtitle); ?></p>
														<a href="<?php echo e($call->buttonurl); ?>" class="btn btn-secondary btn-lg" target="_blank"><?php echo e($call->buttonname); ?></a>
													</div>
												</div>
												<div class="col-md-5 d-flex align-items-center justify-content-center">
														<?php if($call->image !== null): ?>

														<img src="<?php echo e(asset('uploads/callaction/'.$call->image)); ?>" alt="img" class="header-text3 img-fluid">
														<?php else: ?>

														<img src="<?php echo e(asset('uploads/callaction/noimage/noimage.png')); ?>" alt="img" class="header-text3 img-fluid">
														<?php endif; ?>

												</div>
											</div>
										</div>
									</div><!-- /header-text -->
								</div>
							</section>
							<!--Call Action Section-->
						<?php endif; ?>
						<?php if($title->articlecheck == 'on'): ?>

							<!--Article Section-->
							<section>
								<div class="cover-image sptb">
									<div class="container">
										<div class="section-title center-block text-center">
											<h2 class="wow fs-30" data-wow-delay="0.1s"><?php echo e($title->articletitle); ?></h2>
											<p class="wow fs-18" data-wow-delay="0.15s"><?php echo e($title->articlesub); ?></p>
										</div>
										<div class="row row-deck">
											<?php if($article->isEmpty()): ?>

											<?php else: ?>
											
											<div class="col-xl-6">
												<div class="card">
													<div class="card-header border-bottom-0">
														<h4 class="fs-25 card-title"><?php echo e(trans('langconvert.admindashboard.recentarticles')); ?></h4>
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
														<h4 class="fs-25 card-title"><?php echo e(trans('langconvert.menu.populararticles')); ?></h4>
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
														<div class="card-header border-bottom-0 d-block">
															<h4 class="fs-25 card-title d-flex"><?php echo e($category->name); ?>

																<span class="card-options float-end font-weight-normal fs-14">
																	<?php if($category->articles()->where('status', 'Published')->simplepaginate(5) > '5'): ?>
	
																	<?php if($category->categoryslug != null): ?>

																	<a href="<?php echo e(url('/category/'. $category->categoryslug)); ?>" class="text-primary"><?php echo e(trans('langconvert.menu.viewall')); ?></a>
																	<?php else: ?>
			
																	<a href="<?php echo e(url('/category/'. $category->id)); ?>" class="text-primary"><?php echo e(trans('langconvert.menu.viewall')); ?></a>
																	<?php endif; ?>
	
																	<?php endif; ?>
																</span>
															</h4>
															
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
							<!--Article Section-->

						<?php endif; ?>
						<?php if($title->testimonialcheck == 'on'): ?>
							<!--Testimonial Section-->
							<section>
								<div class="cover-image sptb bg-white">
									<div class="container">
										<div class="section-title center-block text-center">
											<h2 class="wow fs-30" data-wow-delay="0.1s"><?php echo e($title->testimonialtitle); ?></h2>
											<p class="wow fs-18" data-wow-delay="0.15s"><?php echo e($title->testimonialsub); ?></p>
										</div>
										<div class="row">
											<div class="col-lg-12">
												<div>
													<div id="myCarousel1" class="owl-carousel testimonial-owl-carousel">
														<?php $__currentLoopData = $testimonial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonials): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

														<div class="item text-center">
															<div class="card-body">
																<div class="row">
																	<div class="col-xl-8 col-md-12 d-block mx-auto">
																		<div class="testimonia">
																			<div class="testimonia-img mx-auto mb-3">
																				<?php if($testimonials->image !== null): ?>

																				<img src="<?php echo e(asset('uploads/testimonial/'. $testimonials->image)); ?>" class="avatar avatar-xxl brround text-center mx-auto" alt="<?php echo e($testimonials->image); ?>">
																				<?php else: ?>
																				<img src="<?php echo e(asset('uploads/profile/user-profile.png')); ?>" class="avatar avatar-xxl brround text-center mx-auto" alt="default">
																				<?php endif; ?>

																			</div>
																			<p>
																				<i class="fa fa-quote-left"></i> <?php echo e($testimonials->description); ?>

																			</p>
																			<div class="testimonia-data">
																				<h4 class="fs-20 mb-1"><?php echo e($testimonials->name); ?></h4>
																				<p><?php echo e($testimonials->designation); ?></p>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<!--Testimonial Section-->
						<?php endif; ?>
						<?php if($title->faqcheck == 'on'): ?>

							<!--FAQ Section-->
							<section>
								<div class="cover-image sptb">
									<div class="container">
										<div class="section-title center-block text-center">
											<h2 class="wow fs-30" data-wow-delay="0.1s"><?php echo e($title->faqtitle); ?></h2>
											<p class="wow fs-18" data-wow-delay="0.15s"><?php echo e($title->faqsub); ?></p>
										</div>
										<div class="accordion suuport-accordion" id="accordion" >
											<?php $__currentLoopData = $faq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faqs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											
											<div class="row">
												<div class="col-md-12 d-block mx-auto mb-2">
													<div class="acc-card wow fadeInUp" data-wow-delay="0.2s">
														<div class="acc-header" id="heading<?php echo e($faqs->id); ?>" role="tablist">
															<h5 class="mb-0">
																<a aria-controls="collapse<?php echo e($faqs->id); ?>" aria-expanded="false" data-bs-toggle="collapse" href="#collapse<?php echo e($faqs->id); ?>">
																	<?php echo e($faqs->question); ?> <span class="float-end acc-angle"><i class="fe fe-chevron-right"></i></span>
																</a>
															</h5>
														</div>
														<div aria-labelledby="heading<?php echo e($faqs->id); ?>" class="collapse" data-bs-parent="#accordion" id="collapse<?php echo e($faqs->id); ?>" role="tabpanel">
															<div class="acc-body bg-white p-5">
																<?php if($faqs->privatemode == 1): ?>
																<?php if(Auth::guard('customer')->check() && Auth::guard('customer')->user()): ?>

																<?php echo $faqs->answer; ?>

																<?php else: ?>

																<div class="alert alert-light-warning">
																	<p class="privatearticle">
																	<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
																	You must be logged in and have valid account to access this content.
																	</p>
																</div>
																<?php endif; ?>
																<?php else: ?>
																
																<?php echo $faqs->answer; ?>

																<?php endif; ?>
															</div>
														</div>
													</div>
												</div>
											</div>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

										</div>
									</div>
								</div>
							</section>
							<!--FAQ Section-->

						<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

		<!--INTERNAL Owl-carousel js -->
		<script src="<?php echo e(asset('assets/plugins/owl-carousel/owl-carousel.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- INTERNAL Index js-->
		<script src="<?php echo e(asset('assets/js/support/support-landing.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- INTERNAL Index js-->
		<script src="<?php echo e(asset('assets/plugins/jquery/jquery-ui.js')); ?>?v=<?php echo time(); ?>"></script>

		<script type="text/javascript">
			"use strict";
			
			(function($){

				// close the data search
				document.querySelector('.page-main').addEventListener('click', ()=>{ 
					$('#searchList').fadeOut();
					$('#searchList').html(''); 
				});

				// search the data
				$('#search_name').keyup(function () {

					var data = $(this).val();
					if (data != '') {
						var _token = $('input[name="_token"]').val();
						$.ajax({
							url: "<?php echo e(url('/search')); ?>",
							method: "POST",
							data: {data: data, _token: _token},

							dataType:"json",

							success: function (data) {

								$('#searchList').fadeIn();
								$('#searchList').html(data);
								const ps3 = new PerfectScrollbar('.sprukohomesearch', {
									useBothWheelAxes:true,
									suppressScrollX:true,
								});
							},
							error: function (data) {

							}
						});
					}
				});

			})(jQuery);

		</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/home.blade.php ENDPATH**/ ?>