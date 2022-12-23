<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
	<head>
		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="<?php echo e(substr(strip_tags($articles->message),0,150) ? substr(strip_tags($articles->message),0,150) :''); ?>"
			name="description">
		<meta content="<?php echo e(substr($articles->title,0,60) ? substr($articles->title,0,60) :''); ?>" name="title">
		<meta name="keywords" content="<?php echo e($articles->tags ? $articles->tags :''); ?>" />
		<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

		<!-- Title -->
		<title><?php echo e($articles->title); ?></title>

		<?php if($title->image4 == null): ?>

		<!--Favicon -->
		<link rel="icon" href="<?php echo e(asset('uploads/logo/favicons/favicon.ico')); ?>" type="image/x-icon"/>
		<?php else: ?>

		<!--Favicon -->
		<link rel="icon" href="<?php echo e(asset('uploads/logo/favicons/'.$title->image4)); ?>" type="image/x-icon"/>  
		<?php endif; ?>

		<?php if(str_replace('_', '-', app()->getLocale()) == 'عربى'): ?>

		<!-- Bootstrap css -->
		<link href="<?php echo e(asset('assets/plugins/bootstrap/css/bootstrap.rtl.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />
		<?php else: ?>

		<!-- Bootstrap css -->
		<link href="<?php echo e(asset('assets/plugins/bootstrap/css/bootstrap.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />
		<?php endif; ?>

		<!-- Style css -->
		<link href="<?php echo e(URL::asset('assets/css/style.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />
		<link href="<?php echo e(URL::asset('assets/css/dark.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />
		<link href="<?php echo e(asset('assets/css/updatestyles.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />

		<!-- Animate css -->
		<link href="<?php echo e(URL::asset('assets/css/animated.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />

		<!-- P-scroll bar css-->
		<link href="<?php echo e(URL::asset('assets/plugins/p-scrollbar/p-scrollbar.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />

		<!---Icons css-->
		<link href="<?php echo e(URL::asset('assets/css/icons.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />

		<!-- Select2 css -->
		<link href="<?php echo e(URL::asset('assets/plugins/select2/select2.min.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />

		<!--INTERNAL Toastr css -->
		<link href="<?php echo e(URL::asset('assets/plugins/toastr/toastr.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />

		<!-- INTERNAL owl-carousel css-->
		<link href="<?php echo e(asset('assets/plugins/owl-carousel/owl-carousel.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />


		<!-- GALLERY CSS -->
		<link href="<?php echo e(asset('assets/plugins/simplelightbox/simplelightbox.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet">

		<!-- Color Change -->	
		<style>
			:root {
				--primary: <?php echo setting('theme_color') ?>;
				--secondary: <?php echo setting('theme_color_dark') ?>;
			}
		</style>

		<!-- Custom css-->
		<style>

			<?php echo customcssjs('CUSTOMCSS') ?>;

		</style>

		<?php if(setting('GOOGLEFONT_DISABLE') == 'off'): ?>
		
		<!-- Google Fonts -->
		<style>
			@import  url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');
		</style>

		<?php endif; ?>

	</head>
	<body class="<?php if(str_replace('_', '-', app()->getLocale()) == 'عربى'): ?>
		rtl
	<?php endif; ?>">

				<?php echo $__env->make('includes.user.mobileheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

				<?php echo $__env->make('includes.user.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

				<!--Article Page View -->
				<div class="page">
					<div class="page-main">
						<div class="containerheight">
							<!-- Section -->
							<section>
								<div class="bannerimg cover-image" data-bs-image-src="<?php echo e(asset('assets/images/photos/banner1.jpg')); ?>">
									<div class="header-text mb-0">
										<div class="container">
											<div class="row text-white">
												<div class="col my-2">
													<h1><?php echo e(trans('langconvert.menu.knowledge')); ?></h1>
												</div>
												<div class="col col-auto">
													<ol class="breadcrumb text-center">
														<li class="breadcrumb-item">
															<a href="#" class="text-white-50"><?php echo e(trans('langconvert.menu.home')); ?></a>
														</li>
														<li class="breadcrumb-item">
															<a href="<?php echo e(route('knowledge')); ?>" class="text-white"><?php echo e(trans('langconvert.menu.knowledge')); ?></a>
														</li>
														<?php if($articles->category->categoryslug != null): ?>

														<li class="breadcrumb-item ">
															<a href="<?php echo e(url('/category/'. $articles->category->categoryslug)); ?>" class="text-white"> <?php echo e($articles->category->name); ?></a>
														</li>
														<?php else: ?>
														
														<li class="breadcrumb-item ">
															<a href="<?php echo e(url('/category/'. $articles->category->id	)); ?>" class="text-white"> <?php echo e($articles->category->name); ?></a>
														</li>
														<?php endif; ?>
														
														<?php if($articles->subcategory != null): ?>

														<li class="breadcrumb-item ">
															<a href="#" class="text-white"><?php echo e($articles->subcategorys->subcategoryname); ?></a>
														</li>
														<?php endif; ?>
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
											<div class="col-xl-8">
												<div class="card">
													<div class="px-5 pb-0 pt-5 pos-relative">
														<div class="w-lg-90 w-md-lg-85 w-100">
															<h4 class="card-title mb-2"><?php echo e($articles->title); ?></h4>
															<ul class="mb-0 d-flex flex-wrap fs-13 custom-ul">
																<li class="me-5">
																	<span><i class="feather feather-clock text-muted me-1"></i><?php echo e(trans('langconvert.admindashboard.lastcreatedon')); ?> <span
																			class="text-muted"><?php echo e($articles->updated_at->format('M d, Y')); ?></span></span>
																</li>
																<li class="me-5" data-placement="top" data-bs-toggle="tooltip" title=""
																	data-bs-original-title="Views">
																	<span><i class="feather feather-eye text-muted me-1"></i><?php echo $articles->views; ?></span>
																</li>
															</ul>
														</div>	
														<div class="klview-icons btn-group">
															<span class="btn btn-white btn-sm"><i
																	class="fa fa-thumbs-up text-success"></i> <?php echo e($like->count()); ?></span>
															<span class="btn btn-white btn-sm"><i
																	class="fa fa-thumbs-down text-danger"></i> <?php echo e($dislike->count()); ?></span>
														</div>	
													</div>
													<div class="card-body pt-0">

														<?php if($articles->privatemode == 1): ?>
															<?php if(Auth::guard('customer')->check() && Auth::guard('customer')->user()): ?>
															<div class="mb-4 description mt-3">
																<?php if($articles->featureimage != null): ?>
																
																<img src="<?php echo e(asset('uploads/featureimage/'.$articles->featureimage)); ?>" alt="">
																<?php endif; ?>
																<div class="mt-3"><?php echo ucfirst($articles->message); ?></div>
																
																<div class="row">
																	<div class="col-xl-12">
																		<div class="row">
																			<?php $__currentLoopData = $articles->getMedia('article'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	
																			<div class="col-xl-3 col-md-4 col-sm-12">
																				<div class="tags  gallery me-3">
																				<a href="<?php echo e(url($article->getFullUrl())); ?>">
																					<span class="tag tag-attachments rounded-pill  tag-outline-primary mt-0">
																						<span class="me-2"><i class="mdi mdi-file-image tx-24"></i></span>
																						<?php echo e(Str::limit($article->file_name, 15, $end='.......')); ?>

																					</span>
																				</a>
																			</div>
																			
																			</div>
																			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
																		</div>
																	</div>
																</div>
															</div>
															<?php else: ?>
															
															<div class="alert alert-light-warning mt-3">
																<p class="privatearticle">
																<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
																You must be logged in and have valid account to access this content.
																</p>
															</div>
															<?php endif; ?>
														<?php else: ?>

															<div class="mb-4 description mt-3">
																<?php if($articles->featureimage != null): ?>
																
																<img src="<?php echo e(asset('uploads/featureimage/'.$articles->featureimage)); ?>" alt="">
																<?php endif; ?>
																<div class="mt-3"><?php echo ucfirst($articles->message); ?></div>
																
																<div class="row">
																	<div class="col-xl-12">
																		<div class="d-flex flex-wrap align-items-center">
																			<?php $__currentLoopData = $articles->getMedia('article'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

																			<div class="mb-2 gallery me-2">
																				<a href="<?php echo e(url($article->getFullUrl())); ?>">
																					<span class="tag tag-attachments br-7 tag-outline-gray mt-0">
																						<span class="me-2"><i class="mdi mdi-file-image tx-24"></i></span>
																						<?php echo e(Str::limit($article->file_name, 15, $end='.......')); ?>

																					</span>
																				</a>
																			</div>
																			
																			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
																		</div>
																	</div>
																</div>
															</div>
														<?php endif; ?>
													

													</div>
													<?php if(auth()->guard()->guest()): ?>

													<div class="card-body d-md-flex">
														<div class="ms-auto"><span><?php echo e(trans('langconvert.admindashboard.views')); ?>:</span><span class="font-weight-semibold ms-1"><?php echo $articles->views; ?></span></div>
													</div>
													<?php else: ?>

													<?php if(Auth::guard('customer')->check() && Auth::guard('customer')->user()): ?>
													<div class="card-body d-md-flex">
														<div> 
															<span class=""><?php echo e(trans('langconvert.admindashboard.articlehelpfull')); ?></span>
															<button class="btn btn-success btn-sm likedislike" value="like" data-name="<?php echo e($articles->id); ?>" <?php if($viewrating != null): ?> <?php echo e($viewrating->rating == '1' ? 'disabled' : ''); ?> <?php endif; ?>>
																<i class="fa fa-thumbs-up"></i>
															</button>
															<button class="btn btn-danger btn-sm likedislike" value="dislike" data-name="<?php echo e($articles->id); ?>" <?php if($viewrating != null): ?> <?php echo e($viewrating->rating == '-1' ? 'disabled' : ''); ?> <?php endif; ?>>
																<i class="fa fa-thumbs-down"></i>
															</button>
															<a href="<?php echo e(url('/likes/'.$articles->id)); ?>" >
																
															</a>
															<a href="<?php echo e(url('/dislikes/'.$articles->id)); ?>" >
																
															</a>
														</div>
													</div>
													<?php endif; ?>
													<?php endif; ?>

												</div>

											</div>
											<div class="col-xl-4">
												<div class="card p-0">
													<div class="search-background article-search p-0">
														<input type="text" class="form-control input-lg" name="search_name" id="search_name"  placeholder="Ask your Questions.....">
														<button class="btn"><i class="fe fe-search"></i></button>
							
														<div id="searchList">
															
														</div>
													</div>
													<?php echo csrf_field(); ?>
												</div>	

												<div class="card ">
													<div class="card-header  border-0">
														<h4 class="card-title"><?php echo e(trans('langconvert.admindashboard.recentarticles')); ?></h4>
													</div>
													<div class="card-body">
														<div class="list-catergory ">
															<ul class="item-list item-list-scroll mb-0 custom-ul">
																<?php $__currentLoopData = $recentarticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recentarticle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																<li class="item mb-4 position-relative">
																	<?php if($recentarticle->articleslug != null): ?>

																	<a href="<?php echo e(url('/article/' . $recentarticle->articleslug)); ?> " class=" admintickets"></a>
																
																	<?php else: ?>

																	<a href="<?php echo e(url('/article/' . $recentarticle->id)); ?> " class=" admintickets"></a>
																	<?php endif; ?>
																	<div class="d-flex">
																		<div class="me-7">
																			<i class="typcn typcn-document-text item-list-icon"></i>
																		
																		</div>
																		<div class="">
																			<span class=""><?php echo e(Str::limit($recentarticle->title,'40')); ?> </span>
																		</div>
																		<div class=" ms-auto">
																				<span class="badge badge-light badge-md fs-10"><i
																					class="fa fa-eye me-1"></i><?php echo e($recentarticle->views); ?></span>
																		</div>
																	</div>
																</li>
																<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					
															</ul>
														</div>
													</div>
												</div>
					
												<div class="card mb-0">
													<div class="card-header  border-0">
														<h4 class="card-title"><?php echo e(trans('langconvert.menu.populararticles')); ?></h4>
													</div>
													<div class="card-body">
														<div class="list-catergory">
															<ul class="item-list item-list-scroll mb-0 custom-ul">
																<?php $__currentLoopData = $populararticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $populararticle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																<li class="item mb-4 position-relative">
																	<?php if($populararticle->articleslug != null): ?>

																	<a href="<?php echo e(url('/article/' . $populararticle->articleslug)); ?> " class=" admintickets"></a>
																	<?php else: ?>

																	<a href="<?php echo e(url('/article/' . $populararticle->id)); ?> " class=" admintickets"></a>
																	<?php endif; ?>
																	<div class="d-flex">
																		<div class="me-7">
																			<i class="typcn typcn-document-text item-list-icon"></i>
																		</div>
																		<div class="">
																			<span class=""><?php echo e(Str::limit($populararticle->title, '40')); ?> </span>
																		</div>
																		<div class="ms-auto">
																				<span class="badge badge-light badge-md fs-10">
																					<i class="fa fa-eye me-1"></i><?php echo e($populararticle->views); ?></span>
																		</div>
																	</div>
																</li>
																<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					
															</ul>
														</div>
													</div>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<!--Section-->
						</div>
					</div>
				</div>
				<!--Article Page View -->
				
				<?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<!-- Back to top -->
		<a href="#top" id="back-to-top"><span class="feather feather-chevrons-up"></span></a>

		<!-- Jquery js-->
		<script src="<?php echo e(URL::asset('assets/plugins/jquery/jquery.min.js')); ?>?v=<?php echo time(); ?>"></script>

		<!--Moment js-->
		<script src="<?php echo e(URL::asset('assets/plugins/moment/moment.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- Bootstrap4 js-->
		<script src="<?php echo e(URL::asset('assets/plugins/bootstrap/popper.min.js')); ?>?v=<?php echo time(); ?>"></script>
		<script src="<?php echo e(URL::asset('assets/plugins/bootstrap/js/bootstrap.min.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- P-scroll js-->
		<script src="<?php echo e(URL::asset('assets/plugins/p-scrollbar/p-scrollbar.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- Select2 js -->
		<script src="<?php echo e(URL::asset('assets/plugins/select2/select2.full.min.js')); ?>?v=<?php echo time(); ?>"></script>

		<!--INTERNAL Horizontalmenu js -->
		<script src="<?php echo e(URL::asset('assets/plugins/horizontal-menu/horizontal-menu.js')); ?>?v=<?php echo time(); ?>"></script>

		<!--INTERNAL Sticky js -->
		<script src="<?php echo e(asset('assets/plugins/sticky/sticky2.js')); ?>?v=<?php echo time(); ?>"></script>

		<?php echo $__env->yieldContent('scripts'); ?>

		<!--INTERNAL Toastr js -->
		<script src="<?php echo e(URL::asset('assets/plugins/toastr/toastr.min.js')); ?>?v=<?php echo time(); ?>"></script>


		<!-- INTERNAL Vertical-scroll js-->
		<script src="<?php echo e(asset('assets/plugins/vertical-scroll/jquery.bootstrap.newsbox.js')); ?>?v=<?php echo time(); ?>"></script>


		<!-- GALLERY JS -->
		<script src="<?php echo e(asset('assets/plugins/simplelightbox/simplelightbox.js')); ?>?v=<?php echo time(); ?>"></script>
		<script src="<?php echo e(asset('assets/plugins/simplelightbox/light-box.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- Custom html js-->
		<script src="<?php echo e(URL::asset('assets/js/custom.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- Custom js-->	
		<script type="text/javascript">
			"use strict";

			<?php echo customcssjs('CUSTOMJS') ?>


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

		</script>

		<?php if(auth()->guard()->guest()): ?>
		<?php if(customcssjs('CUSTOMCHATENABLE') == 'enable'): ?>
		<?php if(customcssjs('CUSTOMCHATUSER') == 'public'): ?>

		<?php echo customcssjs('CUSTOMCHAT') ?>;

		<?php endif; ?>
		<?php endif; ?>
		<?php else: ?>
		<?php if(customcssjs('CUSTOMCHATENABLE') == 'enable'): ?>
		<?php if(Auth::guard('customer')->check() && Auth::guard('customer')->user()): ?>

		<?php echo customcssjs('CUSTOMCHAT') ?>;

		<?php endif; ?>
		<?php endif; ?>
		<?php endif; ?>
		<?php if(Session::has('error')): ?>

		<script>
			toastr.error("<?php echo Session::get('error'); ?>");
		</script>

		<?php elseif(Session::has('success')): ?>
		
		<script>
			toastr.success("<?php echo Session::get('success'); ?>");
		</script>

		<?php elseif(Session::has('info')): ?>

		<script>
			toastr.info("<?php echo Session::get('info'); ?>");
		</script>
		<?php elseif(Session::has('warning')): ?>

		<script>
			toastr.warning("<?php echo Session::get('warning'); ?>");
		</script>
		<?php endif; ?>

		<?php echo $__env->make('user.auth.modalspopup.register', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<?php echo $__env->make('user.auth.modalspopup.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		
		<?php echo $__env->make('user.auth.modalspopup.forgotpassword', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html><?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/knowledge-view.blade.php ENDPATH**/ ?>