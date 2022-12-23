<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" dir="ltr">
	<head>

		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="<?php echo e($seopage->description ? $seopage->description :''); ?>" name="description">
		<meta content="<?php echo e($seopage->author ? $seopage->author :''); ?>" name="author">
		<meta name="keywords" content="<?php echo e($seopage->keywords ? $seopage->keywords :''); ?>"/>
		<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
		
		<!-- Title -->
		<title><?php echo e($title->title); ?></title>

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
		<link href="<?php echo e(asset('assets/css/style.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />
		<link href="<?php echo e(asset('assets/css/dark.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />
		<link href="<?php echo e(asset('assets/css/skin-modes.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />
		<link href="<?php echo e(asset('assets/css/updatestyles.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />
		
		<!-- Animate css -->
		<link href="<?php echo e(asset('assets/css/animated.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />

		<!---Icons css-->
		<link href="<?php echo e(asset('assets/css/icons.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />

		<!--INTERNAL Toastr css -->
		<link href="<?php echo e(asset('assets/plugins/toastr/toastr.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />

		<style>
			:root {
		--primary:<?php echo setting('theme_color') ?>;
		--secondary:<?php echo setting('theme_color_dark') ?>;
			}

		</style>

		<style>
					
			<?php echo customcssjs('CUSTOMCSS'); ?>

		</style>

		<?php if(setting('GOOGLEFONT_DISABLE') == 'off'): ?>

		<style>
			@import  url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');

		</style>

		<?php endif; ?>

		<?php if(setting('GOOGLE_ANALYTICS_ENABLE') == 'yes'): ?>  
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo e(setting('GOOGLE_ANALYTICS')); ?>"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', '<?php echo e(setting('GOOGLE_ANALYTICS')); ?>');
		</script>
		<?php endif; ?>

	</head>

	<body class="<?php if(setting('DARK_MODE') == 1): ?> dark-mode <?php endif; ?> <?php if(str_replace('_', '-', app()->getLocale()) == 'عربى'): ?>
		rtl
	<?php endif; ?>">

		<div class="page login-bg1">
			<div class="page-single">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-4 col-lg-7 col-md-8 col-sm-9 col-10 p-md-0">
							<div class="card p-5">
								<div class="ps-4 pt-4 pb-2">
									<a class="header-brand" href="<?php echo e(url('/')); ?>">
										<?php if($title->image !== null): ?>

										<img src="<?php echo e(asset('uploads/logo/logo/'.$title->image)); ?>" class="header-brand-img custom-logo-dark"
											alt="<?php echo e($title->image); ?>">
										<?php else: ?>
										<img src="<?php echo e(asset('uploads/logo/logo/logo-white.png')); ?>" class="header-brand-img custom-logo-dark"
											alt="logo">
										<?php endif; ?>
										<?php if($title->image1 !== null): ?>

											<img src="<?php echo e(asset('uploads/logo/darklogo/'.$title->image1)); ?>" class="header-brand-img custom-logo"
											alt="<?php echo e($title->image1); ?>">
										<?php else: ?>
										
										<img src="<?php echo e(asset('uploads/logo/darklogo/logo.png')); ?>" class="header-brand-img custom-logo"
											alt="logo">

										<?php endif; ?>
									
									</a>
								</div>
								
							   <?php echo $__env->yieldContent('content'); ?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Jquery js-->
		<script src="<?php echo e(asset('assets/plugins/jquery/jquery.min.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- Bootstrap4 js-->
		<script src="<?php echo e(asset('assets/plugins/bootstrap/popper.min.js')); ?>?v=<?php echo time(); ?>"></script>
		<script src="<?php echo e(asset('assets/plugins/bootstrap/js/bootstrap.min.js')); ?>?v=<?php echo time(); ?>"></script>

		<script>

			<?php echo customcssjs('CUSTOMJS') ?>
			
		</script>

		<!--INTERNAL Toastr js -->
		<script src="<?php echo e(asset('assets/plugins/toastr/toastr.min.js')); ?>?v=<?php echo time(); ?>"></script>

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
			
			<?php echo $__env->yieldContent('scripts'); ?>
			
			<?php echo $__env->yieldContent('modal'); ?>
	</body>
</html><?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/layouts/custommaster.blade.php ENDPATH**/ ?>