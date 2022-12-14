<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>

		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<!-- Title -->
		<title>Purchase Code Verification</title>

		<!--Favicon -->
		<link rel="icon" href="<?php echo e(asset('assets/images/brand/favicon.ico')); ?>" type="image/x-icon"/>

		<!-- Bootstrap css -->
		<link href="<?php echo e(asset('assets/plugins/bootstrap/css/bootstrap.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />

		<!-- Style css -->
		<link href="<?php echo e(asset('assets/css/style.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />
		<link href="<?php echo e(asset('assets/css/dark.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />
		<link href="<?php echo e(asset('assets/css/updatestyles.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />

		<!-- Animate css -->
		<link href="<?php echo e(asset('assets/css/animated.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />

		<!---Icons css-->
		<link href="<?php echo e(asset('assets/css/icons.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />

		<!-- Select2 css -->
		<link href="<?php echo e(asset('assets/plugins/select2/select2.min.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />

		<!-- P-scroll bar css-->
		<link href="<?php echo e(asset('assets/plugins/p-scrollbar/p-scrollbar.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />

		<?php if(setting('GOOGLEFONT_DISABLE') == 'off'): ?>
		<style>
			@import  url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');
		</style>
		<?php endif; ?>

	</head>

	<body>

		<div class="page error-bg">
			<div class="page-content m-0">
				<div class="container text-center">
					<div class="alert alert-danger">
						License code is already installed on maximum allowed product instance. Please Contact Support 
					</div>
				</div>
			</div>
		</div>

		<!-- Jquery js-->
		<script src="<?php echo e(asset('assets/plugins/jquery/jquery.min.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- Bootstrap4 js-->
		<script src="<?php echo e(asset('assets/plugins/bootstrap/popper.min.js')); ?>?v=<?php echo time(); ?>"></script>
		<script src="<?php echo e(asset('assets/plugins/bootstrap/js/bootstrap.min.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- Select2 js -->
		<script src="<?php echo e(asset('assets/plugins/select2/select2.full.min.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- P-scroll js-->
		<script src="<?php echo e(asset('assets/plugins/p-scrollbar/p-scrollbar.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- Custom js-->
		<script src="<?php echo e(asset('assets/js/custom.js')); ?>?v=<?php echo time(); ?>"></script>

	</body>
</html><?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/api/index.blade.php ENDPATH**/ ?>