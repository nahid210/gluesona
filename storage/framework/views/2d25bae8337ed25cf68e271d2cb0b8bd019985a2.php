




							<?php $__env->startSection('content'); ?>

							<!--Page header-->
							<div class="page-header d-xl-flex d-block">
								<div class="page-leftheader">
									<h4 class="page-title"><span class="font-weight-normal text-muted ms-2"><?php echo e(trans('langconvert.adminmenu.captchasetting')); ?></span></h4>
								</div>
							</div>
							<!--End Page header-->

							<!--Captcha Enable/Disable-->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card ">
									<div class="card-header border-0">
										<h4 class="card-title"><?php echo e(trans('langconvert.admindashboard.captchaenabledisable')); ?></h4>
									</div>
									<div class="card-body" >
										<div class="switch_section">
											<div class="switch-toggle d-flex d-md-max-block mt-4">
												<a class="onoffswitch2">
													<input type="radio"  name="CAPTCHATYPE" id="myonoffswitch181" class=" toggle-class onoffswitch2-checkbox sprukocaptcha" value="off" <?php if(setting('CAPTCHATYPE') == 'off'): ?> checked="" <?php endif; ?>>
													<label for="myonoffswitch181" class="toggle-class onoffswitch2-label"></label>
												</a>
												<label class="form-label ps-3 ps-md-max-0"><?php echo e(trans('langconvert.admindashboard.captchadisable')); ?></label>
												<small class="text-muted ps-1 ps-md-max-0"><i><?php echo e(trans('langconvert.admindashboard.captchadisablecontent')); ?></i></small>
											</div>
										</div>
										<div class="switch_section">
											<div class="switch-toggle d-flex d-md-max-block">
												<a class="onoffswitch2">
													<input type="radio"  name="CAPTCHATYPE" id="myonoffswitch180" class=" toggle-class onoffswitch2-checkbox sprukocaptcha" value="manual"  <?php if(setting('CAPTCHATYPE') == 'manual'): ?> checked="" <?php endif; ?>>
													<label for="myonoffswitch180" class="toggle-class onoffswitch2-label"></label>
												</a>
												<label class="form-label ps-3 ps-md-max-0"><?php echo e(trans('langconvert.admindashboard.manualcaptchaenable')); ?></label>
												<small class="text-muted ps-1 ps-md-max-0"><i><?php echo e(trans('langconvert.admindashboard.manualcaptchaenablecontent')); ?></i></small>
											</div>
										</div>
										<div class="switch_section">
											<div class="switch-toggle d-flex d-md-max-block">
												<a class="onoffswitch2">
													<input type="radio"  name="CAPTCHATYPE" id="myonoffswitch182" class=" toggle-class onoffswitch2-checkbox sprukocaptcha" value="google"  <?php if(setting('CAPTCHATYPE') == 'google'): ?> checked="" <?php endif; ?>>
													<label for="myonoffswitch182" class="toggle-class onoffswitch2-label"></label>
												</a>
												<label class="form-label ps-3 ps-md-max-0"><?php echo e(trans('langconvert.admindashboard.googlecaptchaenable')); ?></label>
												<small class="text-muted ps-1 ps-md-max-0"><i><?php echo e(trans('langconvert.admindashboard.googlecaptchaenablecontent')); ?></i></small>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--End Captcha Enable/Disable-->

							<!--Google Re-Captcha Setting-->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card ">
									<div class="card-header border-0">
										<h4 class="card-title"><?php echo e(trans('langconvert.admindashboard.googlerecaptchsetting')); ?></h4>
									</div>
									<form method="POST" action="<?php echo e(route('settings.captcha.store')); ?>" enctype="multipart/form-data">
										<div class="card-body" >
											<?php echo csrf_field(); ?>
											<?php echo view('honeypot::honeypotFormFields'); ?>
											<div class="row">
												<div class="col-sm-12 col-md-12 ">
													<div class="form-group <?php echo e($errors->has('googlerecaptchakey') ? ' has-danger' : ''); ?>">
														<label class="form-label"><?php echo e(trans('langconvert.admindashboard.sitekey')); ?></label>
														<input type="text" class="form-control <?php echo e($errors->has('googlerecaptchakey') ? ' is-invalid' : ''); ?>"  name="googlerecaptchakey" placeholder="<?php echo e(__('Site key')); ?>" value="<?php echo e(old('googlerecaptchakey', setting('GOOGLE_RECAPTCHA_KEY'))); ?>">
														<?php if($errors->has('googlerecaptchakey')): ?>
															<span class="invalid-feedback" role="alert">
																<strong><?php echo e($errors->first('googlerecaptchakey')); ?></strong>
															</span>
														<?php endif; ?>
													</div>
												</div>
												<div class="col-sm-12 col-md-12">
													<div class="form-group <?php echo e($errors->has('googlerecaptchasecret') ? ' has-danger' : ''); ?>">
														<label class="form-label"><?php echo e(trans('langconvert.admindashboard.secretkey')); ?></label>
														<input type="text" class="form-control <?php echo e($errors->has('googlerecaptchasecret') ? ' is-invalid' : ''); ?>" name="googlerecaptchasecret" placeholder="<?php echo e(__('Secret Key')); ?>" value="<?php echo e(old('googlerecaptchasecret', setting('GOOGLE_RECAPTCHA_SECRET'))); ?>">
														<?php if($errors->has('googlerecaptchasecret')): ?>
															<span class="invalid-feedback" role="alert">
																<strong><?php echo e($errors->first('googlerecaptchasecret')); ?></strong>
															</span>
														<?php endif; ?>
													</div>
												</div>
											</div>
										</div>
										<div class="card-footer ">
											<div class="form-group float-end">
												<input type="submit" class="btn btn-secondary" value="<?php echo e(trans('langconvert.admindashboard.savechanges')); ?>" onclick="this.disabled=true;this.form.submit();">
											</div>
										</div>
									</form>
								</div>
							</div>
							<!--End Google Re-Captcha Setting-->

							<!--Captcha Setting In Forms-->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card ">
									<div class="card-header border-0">
										<h4 class="card-title"><?php echo e(trans('langconvert.admindashboard.captchasettingfroms')); ?></h4>
									</div>
									<div class="card-body">
										<div class="switch_section">
											<div class="switch-toggle d-flex mt-4 d-md-max-block">
												<a class="onoffswitch2">
													<input type="checkbox" name="RECAPTCH_ENABLE_CONTACT" id="myonoffswitch12" class=" toggle-class onoffswitch2-checkbox" value="yes" <?php if(setting('RECAPTCH_ENABLE_CONTACT') == 'yes'): ?> checked="" <?php endif; ?>>
													<label for="myonoffswitch12" class="toggle-class onoffswitch2-label" ></label>
												</a>
												<label class="form-label ps-3 ps-md-max-0"><?php echo e(trans('langconvert.admindashboard.enablecontactform')); ?></label>
												<small class="text-muted ps-2 ps-md-max-0"><i><?php echo e(trans('langconvert.admindashboard.enablecontactformcontent')); ?></i></small>
											</div>
											
										</div>
										<div class="switch_section">
											<div class="switch-toggle d-flex mt-4 d-md-max-block">
												
												<a class="onoffswitch2">
													<input type="checkbox" name="RECAPTCH_ENABLE_REGISTER" id="myonoffswitch1" class=" toggle-class onoffswitch2-checkbox" value="yes" <?php if(setting('RECAPTCH_ENABLE_REGISTER') == 'yes'): ?> checked="" <?php endif; ?>>
													<label for="myonoffswitch1" class="toggle-class onoffswitch2-label" ></label>
												</a>
												<label class="form-label ps-3 ps-md-max-0"><?php echo e(trans('langconvert.admindashboard.enableregisterform')); ?></label>
												<small class="text-muted ps-2 ps-md-max-0"><i><?php echo e(trans('langconvert.admindashboard.enableregisterformcontent')); ?></i></small>
											</div>
										</div>
										<div class="switch_section">
											<div class="switch-toggle d-flex mt-4 d-md-max-block">
												<a class="onoffswitch2">
													<input type="checkbox" name="RECAPTCH_ENABLE_LOGIN" id="myonoffswitch11" class=" toggle-class onoffswitch2-checkbox" value="yes" <?php if(setting('RECAPTCH_ENABLE_LOGIN') == 'yes'): ?> checked="" <?php endif; ?>>
													<label for="myonoffswitch11" class="toggle-class onoffswitch2-label" ></label>
												</a>
												<label class="form-label ps-3 ps-md-max-0"><?php echo e(trans('langconvert.admindashboard.enableloginform')); ?></label>
												<small class="text-muted ps-2 ps-md-max-0"><i><?php echo e(trans('langconvert.admindashboard.enableloginformcontent')); ?></i></small>
											</div>
										</div>
										<div class="switch_section">
											<div class="switch-toggle d-flex mt-4 d-md-max-block">
												<a class="onoffswitch2">
													<input type="checkbox" name="RECAPTCH_ENABLE_GUEST" id="myonoffswitch112" class=" toggle-class onoffswitch2-checkbox" value="yes" <?php if(setting('RECAPTCH_ENABLE_GUEST') == 'yes'): ?> checked="" <?php endif; ?>>
													<label for="myonoffswitch112" class="toggle-class onoffswitch2-label" ></label>
												</a>
												<label class="form-label ps-3 ps-md-max-0"><?php echo e(trans('langconvert.admindashboard.enableguestticket')); ?></label>
												<small class="text-muted ps-2 ps-md-max-0"><i><?php echo e(trans('langconvert.admindashboard.enableguestticketconrent')); ?></i></small>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--End Captcha Setting In Forms-->

							<?php $__env->stopSection(); ?>

		<?php $__env->startSection('scripts'); ?>

	
		<script type="text/javascript">

			"use strict";

			(function($)  {

				// Csrf Field
				$.ajaxSetup({
					headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				// enable on captcha contact
				$('#myonoffswitch12').on('change', function() {
					var status = $(this).prop('checked') == true ? 'yes' : 'no';
					$.ajax({
						type: "post",
						dataType: "json",
						url: '<?php echo e(url('/admin/captchacontact')); ?>',
						data: {'RECAPTCH_ENABLE_CONTACT': status},
						success: function(data){
							if(toastr.success('Updated Successfully!')){
								location.reload();
							}
						},
						error: function(data){
							console.log(data);
						}
					});
				});

				// enable on captcha register
				$('#myonoffswitch1').on('change', function() {
					var status = $(this).prop('checked') == true ? 'yes' : 'no';
					$.ajax({
						type: "post",
						dataType: "json",
						url: '<?php echo e(url('/admin/captcharegister')); ?>',
						data: {'RECAPTCH_ENABLE_REGISTER': status},
						success: function(data){
							if(toastr.success('Updated Successfully!')){
								location.reload();
							}
						},
						error: function(data){
							console.log(data);
						}
					});
				});

				// enable on captcha login
				$('#myonoffswitch11').on('change', function() {
					var status = $(this).prop('checked') == true ? 'yes' : 'no';
					$.ajax({
						type: "post",
						dataType: "json",
						url: '<?php echo e(url('/admin/captchalogin')); ?>',
						data: {'RECAPTCH_ENABLE_LOGIN': status},
						success: function(data){
							if(toastr.success('Updated Successfully!')){
								location.reload();
							}
						},
						error: function(data){
							console.log(data);
						}
					});
				});

				// enable on captcha guest
				$('#myonoffswitch112').on('change', function() {
					var status = $(this).prop('checked') == true ? 'yes' : 'no';
					$.ajax({
						type: "post",
						dataType: "json",
						url: '<?php echo e(url('/admin/captchaguest')); ?>',
						data: {'RECAPTCH_ENABLE_GUEST': status},
						success: function(data){
							if(toastr.success('Updated Successfully!')){
								location.reload();
							}
						},
						error: function(data){
							console.log(data);
						}
					});
				});
				
				// enable on captcha type
				$('.sprukocaptcha').on('change', function(){
					var captchatype = $(this).val()
					$.ajax({
						type: "POST",
						dataType: "json",
						url: '<?php echo e(url('admin/captchatype')); ?>',
						data:{'captchatype':captchatype},
					
						success:function(data){
							toastr.success(data.success);
						},
						error:function(data){
							toastr.error('Setting Not Updated');
						}
					});

				});

			})(jQuery);
		</script>

		<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/admin/generalsetting/captchasetting.blade.php ENDPATH**/ ?>