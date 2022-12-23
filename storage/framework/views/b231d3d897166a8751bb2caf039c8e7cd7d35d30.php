<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" >
	<head>
    	<?php echo $__env->make('includes.admin.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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

	<body class="app sidebar-mini 
	<?php if(str_replace('_', '-', app()->getLocale()) == 'عربى'): ?>
		rtl
	<?php endif; ?>
	<?php if(setting('SPRUKOADMIN_P') == 'off'): ?>
		<?php if(setting('DARK_MODE') == 1): ?> dark-mode <?php endif; ?>
	<?php else: ?>
	<?php if(Auth::check() && Auth::user()->darkmode == 1): ?> dark-mode <?php endif; ?>
	
	<?php endif; ?>">

		<div class="page">
			<div class="page-main">
					<?php echo $__env->make('includes.admin.verticalmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					<div class="app-content main-content">
						<div class="side-app">
							<?php echo $__env->make('includes.admin.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

							<?php echo $__env->yieldContent('content'); ?>

						</div>
					</div><!-- end app-content-->
			</div>
			<?php echo $__env->make('includes.admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		</div>

    	<?php echo $__env->make('includes.admin.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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

		<?php echo $__env->yieldContent('modal'); ?>

	</body>
</html>