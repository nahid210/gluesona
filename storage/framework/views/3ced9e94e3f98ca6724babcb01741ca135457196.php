<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
	<head>
		<?php echo $__env->make('includes.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		
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

	<body class="<?php if(str_replace('_', '-', app()->getLocale()) == 'عربى'): ?>
		rtl
	<?php endif; ?>
	<?php if(setting('SPRUKOADMIN_C') == 'off'): ?>
		<?php if(setting('DARK_MODE') == 1): ?> dark-mode <?php endif; ?>
	<?php else: ?>
		<?php if(Auth::guard('customer')->check()): ?>
			<?php if(Auth::guard('customer')->check() && Auth::guard('customer')->user()->custsetting != null): ?>
			<?php if(Auth::guard('customer')->check() && Auth::guard('customer')->user()->custsetting->darkmode == 1): ?> dark-mode <?php endif; ?>
			<?php endif; ?>
		<?php else: ?> 
			<?php if(setting('DARK_MODE') == 1): ?> dark-mode <?php endif; ?>
		<?php endif; ?>
	<?php endif; ?>
		">

				<?php echo $__env->make('includes.user.mobileheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

				<?php echo $__env->make('includes.user.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

				<div class="page">
					<div class="page-main">

							<?php echo $__env->yieldContent('content'); ?>


					</div>
				</div>

				<?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo $__env->make('includes.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<?php if(auth()->guard()->guest()): ?>
	<?php if(customcssjs('CUSTOMCHATENABLE') == 'enable'): ?>
	<?php if(customcssjs('CUSTOMCHATUSER') == 'public'): ?>
	<?php echo customcssjs('CUSTOMCHAT') ?>;
	<?php endif; ?>
	<?php endif; ?>
	<?php else: ?>
	<?php if(customcssjs('CUSTOMCHATENABLE') == 'enable'): ?>
	<?php if(Auth::check() && Auth::user()->role_id == "4"): ?>
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

	<?php if(setting('REGISTER_POPUP') == 'yes'): ?>
	<?php if(!Auth::guard('customer')->check()): ?>

	<?php echo $__env->make('user.auth.modalspopup.register', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<?php echo $__env->make('user.auth.modalspopup.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<?php echo $__env->make('user.auth.modalspopup.forgotpassword', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php endif; ?>
	<?php endif; ?>

	<?php if(setting('GUEST_TICKET') == 'yes'): ?>

		<?php echo $__env->make('guestticket.guestmodal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<?php endif; ?>
	
	<?php echo $__env->yieldContent('modal'); ?>

</body>

</html><?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/layouts/usermaster.blade.php ENDPATH**/ ?>