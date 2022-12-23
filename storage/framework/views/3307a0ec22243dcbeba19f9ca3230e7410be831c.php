


		<?php $__env->startSection('styles'); ?>

		
		<!-- INTERNAl Summernote css -->
		<link rel="stylesheet" href="<?php echo e(asset('assets/plugins/summernote/summernote.css')); ?>?v=<?php echo time(); ?>">

		<!-- INTERNAl color css -->
		<link rel="stylesheet" href="<?php echo e(asset('assets/plugins/colorpickr/themes/nano.min.css')); ?>?v=<?php echo time(); ?>">

		<!-- INTERNAL Sweet-Alert css -->
		<link href="<?php echo e(asset('assets/plugins/sweet-alert/sweetalert.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />


		<?php $__env->stopSection(); ?>

							<?php $__env->startSection('content'); ?>


							<!--Page header-->
							<div class="page-header d-xl-flex d-block">
								<div class="page-leftheader">
									<h4 class="page-title"><span class="font-weight-normal text-muted ms-2"><?php echo e(trans('langconvert.adminmenu.generalsetting')); ?></span></h4>
								</div>
							</div>
							<!--End Page header-->

							<div class="row">
								<!-- App Title & Logos -->
								<div class="col-xl-12 col-lg-12 col-md-12">
									<div class="card ">
										<div class="card-header border-0">
											<h4 class="card-title"><?php echo e(trans('langconvert.admindashboard.apptitlelogos')); ?></h4>
										</div>
										<form method="POST" action="<?php echo e(url('/admin/general')); ?>" enctype="multipart/form-data">
										<div class="card-body" >
												<?php echo csrf_field(); ?>

												<?php echo view('honeypot::honeypotFormFields'); ?>
												<input type="hidden" class="form-control" name="id" Value="<?php echo e($basic->id); ?>">
												<div class="row">
													<div class="col-sm-12 col-md-12">
														<div class="form-group">
															<label class="form-label"><?php echo e(trans('langconvert.admindashboard.title')); ?> <span class="text-red">*</span></label>
															<input type="text" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="title" Value="<?php echo e($basic->title); ?>" >
															<?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

																<span class="invalid-feedback" role="alert">
																	<strong><?php echo e($message); ?></strong>
																</span>
															<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

														</div>
													</div>

													<div class="col-xl-4 col-sm-12 col-lg-12">
														<div class="spfileupload">
															<div class="row">
																<div class="col-xl-7 col-lg-9 col-md-9 col-sm-9">
																	<div class="form-group">
																		<div class="<?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> ">
																			<label class="form-label fs-16"><?php echo e(trans('langconvert.admindashboard.uploadlightlogo')); ?></label>
																			<div class="input-group file-browser">
																				<input class="form-control " name="image" type="file" >
																				
																			</div>
																			<small class="text-muted"><i><?php echo e(trans('langconvert.admindashboard.filesize')); ?></i></small>
																		</div>
																		<?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
			
																		<span class="invalid-feedback" role="alert">
																			<strong><?php echo e($message); ?></strong>
																		</span>
																		<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
																		
																	</div>
																</div>
																<div class="col-xl-5 col-lg-3 col-md-3 col-sm-3">
																	<div class="file-image-1 ms-sm-auto sprukologoss ms-sm-auto"> 
																		<div class="product-image sprukologoimages"> 
																			<?php if($title->image == null): ?>

																			
																			<img src="<?php echo e(asset('uploads/logo/logo/logo-white.png')); ?>" class="br-5" alt="logo">
																			<?php else: ?>

																			<button class="btn ticketnotedelete border-white text-gray logosdelete" value="logo1" data-id="<?php echo e($title->id); ?>">
																				<i class="feather feather-x" ></i>
																			</button>
																			<img src="<?php echo e(asset('uploads/logo/logo/'.$title->image)); ?>" class="br-5" alt=""> 
																			<?php endif; ?>
																		</div> 
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-sm-12 col-lg-12">
														<div class="spfileupload">
															<div class="row">
																<div class="col-xl-7 col-lg-9 col-md-9 col-sm-9">
																	<div class="form-group">
																		<div class="<?php $__errorArgs = ['image1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
																			<label class="form-label fs-16"><?php echo e(trans('langconvert.admindashboard.uploaddarklogo')); ?></label>
																			<div class="input-group file-browser">
																				<input class="form-control " name="image1" type="file" >
																			</div>
																			<small class="text-muted"><i><?php echo e(trans('langconvert.admindashboard.filesize')); ?></i></small>
																		</div>
																		<?php $__errorArgs = ['image1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
			
																		<span class="invalid-feedback" role="alert">
																			<strong><?php echo e($message); ?></strong>
																		</span>
																		<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
			
																	</div>
																</div>
																<div class="col-xl-5 col-lg-3 col-md-3 col-sm-3">
																	<div class="file-image-1 ms-sm-auto"> 
																		<div class="product-image sprukologoimages"> 
																			<?php if($title->image1 == null): ?>

																			<img src="<?php echo e(asset('uploads/logo/darklogo/logo.png')); ?>" class="br-5" alt="logo">
																			<?php else: ?> 

																			<button class="btn ticketnotedelete border-white text-gray logosdelete" value="logo2" data-id="<?php echo e($title->id); ?>">
																				<i class="feather feather-x" ></i>
																			</button>
																			<img src="<?php echo e(asset('uploads/logo/darklogo/'.$title->image1)); ?>" class="br-5" alt=""> 
																			<?php endif; ?>
																		</div> 
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-sm-12 col-lg-12">
														<div class="spfileupload">
															<div class="row">
																<div class="col-xl-7 col-lg-9 col-md-9 col-sm-9">
																	<div class="form-group">
																		<div class="<?php $__errorArgs = ['image2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
																			<label class="form-label fs-16"><?php echo e(trans('langconvert.admindashboard.darkicon')); ?></label>
																			<div class="input-group file-browser">
																				<input class="form-control " name="image2" type="file" >
																			</div>
																			<small class="text-muted"><i><?php echo e(trans('langconvert.admindashboard.filesize')); ?></i></small>
																		</div>
																		<?php $__errorArgs = ['image2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
			
																		<span class="invalid-feedback" role="alert">
																			<strong><?php echo e($message); ?></strong>
																		</span>
																		<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
			
																	</div>
																</div>
																<div class="col-xl-5 col-lg-3 col-md-3 col-sm-3">
																	<div class="file-image-1 ms-sm-auto"> 
																		<div class="product-image sprukologoimages"> 
																			<?php if($title->image2 == null): ?>

																			<img src="<?php echo e(asset('uploads/logo/icon/icon.png')); ?>" class="br-5" alt="logo">
																			<?php else: ?>

																			<button class="btn ticketnotedelete border-white text-gray logosdelete" value="logo3" data-id="<?php echo e($title->id); ?>">
																				<i class="feather feather-x" ></i>
																			</button>
																			<img src="<?php echo e(asset('uploads/logo/icon/'.$title->image2)); ?>" class="br-5" alt=""> 
																			<?php endif; ?>
																		</div> 
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-sm-12 col-lg-12">
														<div class="spfileupload">
															<div class="row">
																<div class="col-xl-7 col-lg-9 col-md-9 col-sm-9">
																	<div class="form-group">
																		<div class="<?php $__errorArgs = ['image3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
																			<label class="form-label fs-16"><?php echo e(trans('langconvert.admindashboard.lighticon')); ?></label>
																			<div class="input-group file-browser">
																				<input class="form-control " name="image3" type="file" >
																			</div>
																			<small class="text-muted"><i><?php echo e(trans('langconvert.admindashboard.filesize')); ?></i></small>
																		</div>
																		<?php $__errorArgs = ['image3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
			
																		<span class="invalid-feedback" role="alert">
																			<strong><?php echo e($message); ?></strong>
																		</span>
																		<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
			
																	</div>
																</div>
																<div class="col-xl-5 col-lg-3 col-md-3 col-sm-3">
																	<div class="file-image-1 ms-sm-auto"> 
																		<div class="product-image sprukologoimages"> 
																			<?php if($title->image3 == null): ?>

																			<img src="<?php echo e(asset('uploads/logo/darkicon/icon-white.png')); ?>" class="br-5" alt="logo">
																			<?php else: ?>

																			<button class="btn ticketnotedelete border-white text-gray logosdelete" value="logo4" data-id="<?php echo e($title->id); ?>">
																				<i class="feather feather-x" ></i>
																			</button>
																			<img src="<?php echo e(asset('uploads/logo/darkicon/'.$title->image3)); ?>" class="br-5" alt=""> 
																			<?php endif; ?>
																		</div> 
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-sm-12 col-lg-12">
														<div class="spfileupload">
															<div class="row">
																<div class="col-xl-7 col-lg-9 col-md-9 col-sm-9">
																	<div class="form-group">
																		<div class="<?php $__errorArgs = ['image4'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
																			<label class="form-label fs-16"><?php echo e(trans('langconvert.admindashboard.uploadfavicon')); ?></label>
																			<div class="input-group file-browser">
																				<input class="form-control " name="image4" type="file" >
																			</div>
																			<small class="text-muted"><i><?php echo e(trans('langconvert.admindashboard.filesize')); ?></i></small>
																		</div>
																		<?php $__errorArgs = ['image4'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
			
																		<span class="invalid-feedback" role="alert">
																			<strong><?php echo e($message); ?></strong>
																		</span>
																		<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
			
																	</div>
																</div>
																<div class="col-xl-5 col-lg-3 col-md-3 col-sm-3">
																	<div class="file-image-1 ms-sm-auto"> 
																		<div class="product-image sprukologoimages"> 
																			<?php if($title->image4 == null): ?>

																			<img src="<?php echo e(asset('uploads/logo/favicons/favicon.ico')); ?>" class="br-5" alt="logo">
																			<?php else: ?>

																			<button class="btn ticketnotedelete border-white text-gray logosdelete" value="logo5" data-id="<?php echo e($title->id); ?>">
																				<i class="feather feather-x" ></i>
																			</button>
																			<img src="<?php echo e(asset('uploads/logo/favicons/'.$title->image4)); ?>" class="br-5" alt=""> 
																			<?php endif; ?>
																		</div> 
																	</div>
																</div>
															</div>
														</div>
													</div>
													
												</div>
											</div>
											<div class="col-md-12 card-footer ">
												<div class="form-group float-end">
													<input type="submit" class="btn btn-secondary" value="<?php echo e(trans('langconvert.admindashboard.savechanges')); ?>" onclick="this.disabled=true;this.form.submit();">
												</div>
											</div>
										</form>
									</div>
								</div>
								<!-- End App Title & Logos -->


								<!-- Custom pages -->

								<div class="col-xl-6 col-lg-6 col-md-6">
									<div class="card ">
										<div class="card-header border-0">
											<h4 class="card-title"><?php echo e(trans('langconvert.newwordslang.seturl')); ?></h4>
										</div>
										<form action="<?php echo e(route('settings.url.urlset')); ?>" method="POST">
											<?php echo csrf_field(); ?>

											<div class="card-body" >
												<div class="row">
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="form-group ">
															<label for="" class="form-label"><?php echo e(trans('langconvert.newwordslang.termsurl')); ?> <span class="text-red">*</span></label>
															<input class="form-control <?php echo e($errors->has('terms_url') ? ' is-invalid' : ''); ?>" name="terms_url" type="text" value="<?php echo e(old('terms_url', setting('terms_url'))); ?>" >
					
															<?php if($errors->has('terms_url')): ?>

																<span class="invalid-feedback" role="alert">
																	<strong><?php echo e($errors->first('terms_url')); ?></strong>
																</span>
															<?php endif; ?>
					
														</div>
													</div>
												</div>	
											</div>
											<div class="col-md-12 card-footer ">
												<div class="form-group float-end ">
													<input type="submit" class="btn btn-secondary" value="<?php echo e(trans('langconvert.admindashboard.savechanges')); ?>" onclick="this.disabled=true;this.form.submit();">
												</div>
											</div>
										</form>
									</div>
								</div>
								<!-- End Custom pages -->

								<!-- Color Setting -->
								<div class="col-xl-6 col-lg-6 col-md-6">
									<div class="card ">
										<div class="card-header border-0">
											<h4 class="card-title"><?php echo e(trans('langconvert.admindashboard.colorsetting')); ?></h4>
										</div>
										<form action="<?php echo e(route('settings.color.colorsetting')); ?>" method="POST">
											<?php echo csrf_field(); ?>

											<div class="card-body" >
												<div class="row">
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group ">
															<label for="" class="form-label"><?php echo e(trans('langconvert.admindashboard.primarycolor')); ?> <span class="text-red">*</span></label>
															<input class="form-control <?php echo e($errors->has('theme_color') ? ' is-invalid' : ''); ?>" name="theme_color" type="text" value="<?php echo e(old('theme_color', setting('theme_color'))); ?>" id="theme_color-input">
					
															<?php if($errors->has('theme_color')): ?>

																<span class="invalid-feedback" role="alert">
																	<strong><?php echo e($errors->first('theme_color')); ?></strong>
																</span>
															<?php endif; ?>
					
														</div>
													</div>
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group ">
															<label for="" class="form-label"><?php echo e(trans('langconvert.admindashboard.secondarycolor')); ?> <span class="text-red">*</span></label>
															<input class="form-control <?php echo e($errors->has('theme_color_dark') ? ' is-invalid' : ''); ?>" name="theme_color_dark" type="text" value="<?php echo e(old('theme_color_dark', setting('theme_color_dark'))); ?>" id="theme_color_dark-input">
					
															<?php if($errors->has('theme_color_dark')): ?>

																<span class="invalid-feedback" role="alert">
																	<strong><?php echo e($errors->first('theme_color_dark')); ?></strong>
																</span>
															<?php endif; ?>
					
														</div>
													</div>
												</div>	
											</div>
											<div class="col-md-12 card-footer ">
												<div class="form-group float-end ">
													<input type="submit" class="btn btn-secondary" value="<?php echo e(trans('langconvert.admindashboard.savechanges')); ?>" onclick="this.disabled=true;this.form.submit();">
												</div>
											</div>
										</form>
									</div>
								</div>
								<!-- Color Setting -->

								<!-- Global Language Setting -->
								<div class="col-xl-6 col-lg-6 col-md-6">
									<div class="card ">
										<div class="card-header border-0">
											<h4 class="card-title"><?php echo e(trans('langconvert.admindashboard.globallanguage')); ?></h4>
										</div>
										<form action="<?php echo e(route('settings.lang.store')); ?>" method="POST">
											<?php echo csrf_field(); ?>

											<div class="card-body" >
												<div class="form-group mb-4">
												<label  class="form-label"><?php echo e(trans('langconvert.admindashboard.selectlanguage')); ?></label>
													<select name="default_lang" id="input-default_lang" class="form-control select2 select2-show-search" required>
														<?php $__currentLoopData = getLanguages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

															<option value="<?php echo e($lang); ?>" <?php echo e(old('default_lang', setting('default_lang'))==$lang ? 'selected' :''); ?>><?php echo e(Str::upper($lang)); ?></option>
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

													</select>
												</div>
											</div>
											<div class="col-md-12 card-footer ">
												<div class="form-group float-end ">
													<input type="submit" class="btn btn-secondary" value="<?php echo e(trans('langconvert.admindashboard.savechanges')); ?>" onclick="this.disabled=true;this.form.submit();">
												</div>
											</div>
										</form>
									</div>
								</div>
								<!-- Global Language Setting -->

								<!-- Date and Time Format -->
								<div class="col-xl-6 col-lg-6 col-md-6">
									<div class="card ">
										<div class="card-header border-0">
											<h4 class="card-title"><?php echo e(trans('langconvert.newwordslang.datetimeformat')); ?></h4>
										</div>
										<form action="<?php echo e(route('settings.timedateformat.store')); ?>" method="POST">
											<?php echo csrf_field(); ?>

											<div class="card-body" >
												<div class="row">
													<div class="col-6">
														<div class="form-group mb-4">
															<label  class="form-label"><?php echo e(trans('langconvert.newwordslang.selectdateformat')); ?></label>
															<select name="date_format" id="input-date_format" class="form-control select2 select2-show-search" required>
									
																<option value="d M, Y" <?php echo e(setting('date_format') == 'd M, Y' ? 'selected' : ''); ?>>d M, Y</option>
																<option value="m.d.y" <?php echo e(setting('date_format') == 'm.d.y' ? 'selected' : ''); ?>>m.d.y</option>
																<option value="Y-m-d" <?php echo e(setting('date_format') == 'Y-m-d' ? 'selected' : ''); ?>>Y-m-d</option>
																<option value="d-m-Y" <?php echo e(setting('date_format') == 'd-m-Y' ? 'selected' : ''); ?>>d-m-Y</option>
																<option value="d/m/Y" <?php echo e(setting('date_format') == 'd/m/Y' ? 'selected' : ''); ?>>d/m/Y</option>
																<option value="Y/m/d" <?php echo e(setting('date_format') == 'Y/m/d' ? 'selected' : ''); ?>>Y/m/d</option>
		
															</select>
														</div>
													</div>
													<div class="col-6">
														<div class="form-group mb-4">
															<label  class="form-label"><?php echo e(trans('langconvert.newwordslang.selecttimeformat')); ?></label>
															<select name="time_format" id="input-time_format" class="form-control select2 select2-show-search" required>
												
																<option value="h:i A" <?php echo e(setting('time_format') == 'h:i A' ? 'selected' : ''); ?>>03:00 PM</option>
																<option value="h:i:s A" <?php echo e(setting('time_format') == 'h:i:s A' ? 'selected' : ''); ?>>03:00:02 PM</option>
																<option value="H:i" <?php echo e(setting('time_format') == 'H:i' ? 'selected' : ''); ?>>15:00</option>
																<option value="H:i:s" <?php echo e(setting('time_format') == 'H:i:s' ? 'selected' : ''); ?>>15:00:02</option>
		
															</select>
														</div>
													</div>

												</div>
											</div>
											<div class="col-md-12 card-footer ">
												<div class="form-group float-end ">
													<input type="submit" class="btn btn-secondary" value="<?php echo e(trans('langconvert.admindashboard.savechanges')); ?>" onclick="this.disabled=true;this.form.submit();">
												</div>
											</div>
										</form>
									</div>
								</div>
								<!-- Date and Time Format -->
								
								<!-- Switches -->
								<div class="col-xl-12 col-lg-12 col-md-12">
									<div class="card ">
										<div class="card-header border-0">
											<h4 class="card-title"><?php echo e(trans('langconvert.admindashboard.appglobalsettings')); ?></h4>
										</div>
										<div class="card-body">
											<div class="switch_section">
												<div class="switch-toggle d-flex d-md-max-block mt-4">
													<a class="onoffswitch2">
														<input type="checkbox"  name="checkbox" id="sprukoadminp" class=" toggle-class onoffswitch2-checkbox sprukoregister" <?php if(setting('SPRUKOADMIN_P') == 'on'): ?> checked="" <?php endif; ?>>
														<label for="sprukoadminp" class="toggle-class onoffswitch2-label" ></label>
													</a>
													<label class="form-label ps-3 ps-md-max-0"><?php echo e(trans('langconvert.admindashboard.personalsettingadmin')); ?></label>
													<small class="text-muted ps-2 ps-md-max-0"><i><?php echo e(trans('langconvert.admindashboard.personaladminpanel')); ?></i></small>
												</div>
											</div>
											<div class="switch_section">
												<div class="switch-toggle d-flex d-md-max-block mt-4">
													<a class="onoffswitch2">
														<input type="checkbox"  name="checkbox" id="sprukoadminc" class=" toggle-class onoffswitch2-checkbox sprukoregister" <?php if(setting('SPRUKOADMIN_C') == 'on'): ?> checked="" <?php endif; ?>>
														<label for="sprukoadminc" class="toggle-class onoffswitch2-label" ></label>
													</a>
													<label class="form-label ps-3 ps-md-max-0"><?php echo e(trans('langconvert.admindashboard.personalsettingcustomer')); ?></label>
													<small class="text-muted ps-2 ps-md-max-0"><i><?php echo e(trans('langconvert.admindashboard.personalcustomerpanel')); ?></i></small>
												</div>
											</div>

											<div class="switch_section">
												<div class="switch-toggle d-flex d-md-max-block mt-4">
													<a class="onoffswitch2">
														<input type="checkbox"  name="checkbox" id="darkmode" class=" toggle-class onoffswitch2-checkbox sprukoregister" <?php if(setting('DARK_MODE') == '1'): ?> checked="" <?php endif; ?>>
														<label for="darkmode" class="toggle-class onoffswitch2-label" ></label>
													</a>
													<label class="form-label ps-3 ps-md-max-0"><?php echo e(trans('langconvert.admindashboard.enabledarkmode')); ?></label>
													<small class="text-muted ps-2 ps-md-max-0"><i><?php echo e(trans('langconvert.admindashboard.enabledarkcontent')); ?></i></small>
												</div>
											</div>
											<div class="switch_section">
												<div class="switch-toggle d-flex d-md-max-block mt-4">
													<a class="onoffswitch2">
														<input type="checkbox" name="REGISTER_POPUP" id="myonoffswitch1" class=" toggle-class onoffswitch2-checkbox sprukoregister" value="yes" <?php if(setting('REGISTER_POPUP') == 'yes'): ?> checked="" <?php endif; ?>>
														<label for="myonoffswitch1" class="toggle-class onoffswitch2-label" ></label>
													</a>
													<label class="form-label ps-3 ps-md-max-0"><?php echo e(trans('langconvert.admindashboard.enablepopupregisterlogin')); ?></label>
													<small class="text-muted ps-2 ps-md-max-0"><i><?php echo e(trans('langconvert.admindashboard.enablepopupregisterlogincontent')); ?></i></small>
												</div>
											</div>

											<div class="switch_section">
												<div class="switch-toggle d-flex d-md-max-block mt-4">
													<a class="onoffswitch2">
														<input type="checkbox"  name="REGISTER_DISABLE" id="REGISTER_DISABLE" class=" toggle-class onoffswitch2-checkbox sprukoregister" value="off" <?php if(setting('REGISTER_DISABLE') == 'off'): ?> checked="" <?php endif; ?>>
														<label for="REGISTER_DISABLE" class="toggle-class onoffswitch2-label" ></label>
													</a>
													<label class="form-label ps-3 ps-md-max-0"><?php echo e(trans('langconvert.admindashboard.disableregister')); ?></label>
													<small class="text-muted ps-2 ps-md-max-0"><i><?php echo e(trans('langconvert.admindashboard.disableregistercontent')); ?></i></small>
												</div>
											</div>

											<div class="switch_section">
												<div class="switch-toggle d-flex d-md-max-block mt-4">
													<a class="onoffswitch2">
														<input type="checkbox"  name="GOOGLEFONT_DISABLE" id="GOOGLEFONT_DISABLE" class=" toggle-class onoffswitch2-checkbox sprukoregister"  <?php if(setting('GOOGLEFONT_DISABLE') == 'on'): ?> checked="" <?php endif; ?>>
														<label for="GOOGLEFONT_DISABLE" class="toggle-class onoffswitch2-label" ></label>
													</a>
													<label class="form-label ps-3 ps-md-max-0"><?php echo e(trans('langconvert.admindashboard.disablegooglefont')); ?></label>
													<small class="text-muted ps-2 ps-md-max-0"><i><?php echo e(trans('langconvert.admindashboard.disablegooglefontcontent')); ?></i></small>
												</div>
											</div>
											<div class="switch_section">
												<div class="switch-toggle d-flex d-md-max-block mt-4">
													<a class="onoffswitch2">
														<input type="checkbox"  name="FORCE_SSL" id="FORCE_SSL" class=" toggle-class onoffswitch2-checkbox sprukoregister"  <?php if(setting('FORCE_SSL') == 'on'): ?> checked="" <?php endif; ?>>
														<label for="FORCE_SSL" class="toggle-class onoffswitch2-label" ></label>
													</a>
													<label class="form-label ps-3 ps-md-max-0"><?php echo e(trans('langconvert.admindashboard.enableforcessl')); ?></label>
													<small class="text-muted ps-2 ps-md-max-0"><i><?php echo e(trans('langconvert.admindashboard.enableforcesslcontent')); ?></i></small>
												</div>
											</div>

											<div class="switch_section">
												<div class="switch-toggle d-flex d-md-max-block mt-4">
													<a class="onoffswitch2">
														<input type="checkbox" name="KNOWLEDGE_ENABLE" id="myonoffswitch12" class=" toggle-class onoffswitch2-checkbox enablemenus" value="yes" <?php if(setting('KNOWLEDGE_ENABLE') == 'yes'): ?> checked="" <?php endif; ?>>
														<label for="myonoffswitch12" class="toggle-class onoffswitch2-label" ></label>
													</a>
													<label class="form-label ps-3 ps-md-max-0"><?php echo e(trans('langconvert.admindashboard.enableknowledge')); ?></label>
													<small class="text-muted ps-2 ps-md-max-0"><i><?php echo e(trans('langconvert.admindashboard.enableknowledgecontent')); ?></i></small>
												</div>
											</div>
											<div class="switch_section">
												<div class="switch-toggle d-flex d-md-max-block mt-4">
													<a class="onoffswitch2">
														<input type="checkbox" name="FAQ_ENABLE" id="faqs" class=" toggle-class onoffswitch2-checkbox enablemenus" value="yes" <?php if(setting('FAQ_ENABLE') == 'yes'): ?> checked="" <?php endif; ?>>
														<label for="faqs" class="toggle-class onoffswitch2-label" ></label>
													</a>
													<label class="form-label ps-3 ps-md-max-0"><?php echo e(trans('langconvert.admindashboard.enablefaq')); ?></label>
													<small class="text-muted ps-2 ps-md-max-0"><i><?php echo e(trans('langconvert.admindashboard.enablefaqcontent')); ?></i></small>
												</div>
											</div>
											<div class="switch_section">
												<div class="switch-toggle d-flex d-md-max-block mt-4">
													<a class="onoffswitch2">
														<input type="checkbox" name="CONTACT_ENABLE" id="contact" class=" toggle-class onoffswitch2-checkbox enablemenus" value="yes" <?php if(setting('CONTACT_ENABLE') == 'yes'): ?> checked="" <?php endif; ?>>
														<label for="contact" class="toggle-class onoffswitch2-label" ></label>
													</a>
													<label class="form-label ps-3 ps-md-max-0"><?php echo e(trans('langconvert.admindashboard.enablecontact')); ?></label>
													<small class="text-muted ps-2 ps-md-max-0"><i><?php echo e(trans('langconvert.admindashboard.enablecontactcontent')); ?></i></small>
												</div>
											</div>
											<div class="switch_section">
												<div class="switch-toggle d-flex d-md-max-block mt-4">
													
													<a class="onoffswitch2">
														<input type="checkbox" name="PROFILE_USER_ENABLE" id="myonoffswitch123" class=" toggle-class onoffswitch2-checkbox" value="yes" <?php if(setting('PROFILE_USER_ENABLE') == 'yes'): ?> checked="" <?php endif; ?>>
														<label for="myonoffswitch123" class="toggle-class onoffswitch2-label" ></label>
													</a>
													<label class="form-label ps-3 ps-md-max-0"><?php echo e(trans('langconvert.admindashboard.enableimageupload')); ?></label>
													<small class="text-muted ps-2 ps-md-max-0"><i><?php echo e(trans('langconvert.admindashboard.enableimageuploadcontent')); ?></i></small>
												</div>

											</div>

											<div class="switch_section">
												<div class="switch-toggle d-flex d-md-max-block mt-4">
													
													<a class="onoffswitch2">
														<input type="checkbox" name="envato_on" id="envato_on" class=" toggle-class onoffswitch2-checkbox sprukoregister" value="yes" <?php if(setting('ENVATO_ON') == 'on'): ?> checked="" <?php endif; ?>>
														<label for="envato_on" class="toggle-class onoffswitch2-label" ></label>
													</a>
													<label class="form-label ps-3 ps-md-max-0"><?php echo e(trans('uhelpupdate::langconvert.admindashboard.envato_on')); ?></label>
													<small class="text-muted ps-2 ps-md-max-0"><i><?php echo e(trans('uhelpupdate::langconvert.admindashboard.envato_on_content')); ?></i></small>
												</div>

											</div>

											<div class="switch_section">
												<div class="switch-toggle d-flex d-md-max-block mt-4">
													
													<a class="onoffswitch2">
														<input type="checkbox" name="ENVATO_EXPIRED_BLOCK" id="envato_expired_on" class=" toggle-class onoffswitch2-checkbox sprukoregister" value="yes" <?php if(setting('ENVATO_EXPIRED_BLOCK') == 'on'): ?> checked="" <?php endif; ?>>
														<label for="envato_expired_on" class="toggle-class onoffswitch2-label" ></label>
													</a>
													<label class="form-label ps-3 ps-md-max-0"><?php echo e(trans('uhelpupdate::langconvert.admindashboard.envato_expired_on')); ?></label>
													<small class="text-muted ps-2 ps-md-max-0"><i><?php echo e(trans('uhelpupdate::langconvert.admindashboard.envato_expired_on_content')); ?></i></small>
												</div>

											</div>

											<div class="switch_section">
												<div class="switch-toggle d-flex d-md-max-block mt-4">
													
													<a class="onoffswitch2">
														<input type="checkbox" name="purchasecode_on" id="purchasecode_on" class=" toggle-class onoffswitch2-checkbox sprukoregister" value="yes" <?php if(setting('purchasecode_on') == 'on'): ?> checked="" <?php endif; ?>>
														<label for="purchasecode_on" class="toggle-class onoffswitch2-label" ></label>
													</a>
													<label class="form-label ps-3 ps-md-max-0"><?php echo e(trans('langconvert.newwordslang.purchasecode_on')); ?></label>
													<small class="text-muted ps-2 ps-md-max-0"><i><?php echo e(trans('langconvert.newwordslang.purchasecode_on_content')); ?></i></small>
												</div>

											</div>

											<div class="switch_section">
												<div class="switch-toggle d-flex d-md-max-block mt-4">
													<a class="onoffswitch2">
														<input type="checkbox" name="defaultlogin_on" id="defaultlogin_on" class=" toggle-class onoffswitch2-checkbox sprukoregister" value="yes" <?php if(setting('defaultlogin_on') == 'on'): ?> checked="" <?php endif; ?>>
														<label for="defaultlogin_on" class="toggle-class onoffswitch2-label" ></label>
													</a>
													<label class="form-label ps-3 ps-md-max-0"><?php echo e(trans('langconvert.newwordslang.defaultlogin_on')); ?></label>
													<small class="text-muted ps-2 ps-md-max-0"><i><?php echo e(trans('langconvert.newwordslang.defaultlogin_on_content')); ?></i></small>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- End switches-->
								
								<!-- Footer Copyright Text -->
								<div class="col-xl-12 col-lg-12 col-md-12">
									<div class="card ">
										<div class="card-header border-0">
											<h4 class="card-title"><?php echo e(trans('langconvert.admindashboard.footercopyright')); ?></h4>
										</div>
										<form method="POST" action="<?php echo e(url('admin/footer/' )); ?>" enctype="multipart/form-data">
											<?php echo csrf_field(); ?>

											<?php echo view('honeypot::honeypotFormFields'); ?>
											<input type="hidden" name="id" value="1">

											<div class="card-body">
												<textarea class="summernote d-none <?php $__errorArgs = ['copyright'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="copyright" aria-multiline="true"><?php echo e($footertext->copyright); ?></textarea>
												<?php $__errorArgs = ['copyright'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

													<span class="invalid-feedback" role="alert">
														<strong><?php echo e($message); ?></strong>
													</span>
												<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

											</div>

											<div class="card-footer">
												<div class="form-group float-end ">
													<input type="submit" class="btn btn-secondary" value="<?php echo e(trans('langconvert.admindashboard.savechanges')); ?>" onclick="this.disabled=true;this.form.submit();">
												</div>
											</div>
										</form>	
									</div>
								</div>
								<!-- Footer Copyright Text -->
							</div>

							<?php $__env->stopSection(); ?>

		<?php $__env->startSection('scripts'); ?>

		
		<!-- INTERNAL Summernote js  -->
		<script src="<?php echo e(asset('assets/plugins/summernote/summernote.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- INTERNAL Index js-->
		<script src="<?php echo e(asset('assets/js/support/support-sidemenu.js')); ?>?v=<?php echo time(); ?>"></script>
		<script src="<?php echo e(asset('assets/js/select2.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- INTERNAL color pickr -->
		<script src="<?php echo e(asset('assets/plugins/colorpickr/pickr.min.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- INTERNAL Sweet-Alert js-->
		<script src="<?php echo e(asset('assets/plugins/sweet-alert/sweetalert.min.js')); ?>?v=<?php echo time(); ?>"></script>



		<script type="text/javascript">

			"use strict";

			(() => {

				//  color pickr code
				// Simple example, see optional options for more configuration.
				window.setColorPicker = (elem, defaultValue) => {
					elem = document.querySelector(elem);
					let pickr = Pickr.create({
						el: elem,
						default: defaultValue,
						theme: 'nano', // or 'monolith', or 'nano'
						useAsButton: true,
						swatches: [
							'#217ff3',
							'#11cdef',
							'#fb6340',
							'#f5365c',
							'#f7fafc',
							'#212529',
							'#2dce89'
						],
						components: {
							// Main components
							preview: true,
							opacity: true,
							hue: true,
							// Input / output Options
							interaction: {
								hex: true,
								rgba: true,
								// hsla: true,
								// hsva: true,
								// cmyk: true,
								input: true,
								clear: true,
								silent: true,
								preview: true,
							}
						}
					});
					pickr.on('init', pickr => {
						elem.value = pickr.getSelectedColor().toRGBA().toString(0);
					}).on('change', color => {
						elem.value = color.toRGBA().toString(0);
					});

					return pickr;

				}

				// Color Pickr variables
				let themeColor = setColorPicker('#theme_color-input', document.querySelector('#theme_color-input').value);
				let themeColorDark = setColorPicker('#theme_color_dark-input', document.querySelector('#theme_color_dark-input').value);

				// Csrf Field
				$.ajaxSetup({
					headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				// summernote js
				$('.summernote').summernote({
					placeholder: '',
					tabsize: 1,
					height: 200
				});

				// Multiple switch changes
				$('.sprukoregister').on('change', function() {
					var status = $('#myonoffswitch1').prop('checked') == true ? 'yes' : 'no';
					var registerdisable = $('#REGISTER_DISABLE').prop('checked') == true ? 'off' : 'on';
					var googledisable = $('#GOOGLEFONT_DISABLE').prop('checked') == true ? 'on' : 'off';
					var forcessl = $('#FORCE_SSL').prop('checked') == true ? 'on' : 'off';
					var darkmode = $('#darkmode').prop('checked') == true ? '1' : '0';
					var sprukoadminp = $('#sprukoadminp').prop('checked') == true ? 'on' : 'off';
					var sprukocustp = $('#sprukoadminc').prop('checked') == true ? 'on' : 'off';
					var envatoon = $('#envato_on').prop('checked') == true ? 'on' : 'off';
					var envatoexpiredon = $('#envato_expired_on').prop('checked') == true ? 'on' : 'off';
					var purchasecodeon = $('#purchasecode_on').prop('checked') == true ? 'on' : 'off';
					var defaultloginon = $('#defaultlogin_on').prop('checked') == true ? 'on' : 'off';
					$.ajax({
						type: "GET",
						dataType: "json",
						url: '<?php echo e(url('/admin/general/register')); ?>',
						data: {
							'status': status,
							'registerdisable' : registerdisable,
							'googledisable' : googledisable,
							'forcessl' : forcessl,
							'darkmode' : darkmode,
							'sprukoadminp' : sprukoadminp,
							'sprukocustp' : sprukocustp,
							'envatoon' : envatoon,
							'envatoexpiredon' : envatoexpiredon,
							'purchasecodeon' : purchasecodeon,
							'defaultloginon' : defaultloginon,
						},
						success: function(data){
							toastr.success('<?php echo e(trans('langconvert.functions.updatecommon')); ?>')
							window.location.reload();
						}
					});
				});

				// Enable Menus
				$('.enablemenus').on('change', function() {
					var status = $('#myonoffswitch12').prop('checked') == true ? 'yes' : 'no';
					var status1 = $('#faqs').prop('checked') == true ? 'yes' : 'no';
					var status2 = $('#contact').prop('checked') == true ? 'yes' : 'no';
					$.ajax({
						type: "post",
						dataType: "json",
						url: '<?php echo e(url('/admin/knowledge')); ?>',
						data: {
							'KNOWLEDGE_ENABLE': status,
							'FAQ_ENABLE': status1,
							'CONTACT_ENABLE': status2,
						},
						success: function(data){
							if(toastr.success('<?php echo e(trans('langconvert.functions.updatecommon')); ?>')){
								location.reload();
							}
						},
						error: function(data){
							console.log(data);
						}
					});
				});

				// user profile enable
				$('#myonoffswitch123').on('change', function() {
					var status1 = $('#myonoffswitch123').prop('checked') == true ? 'yes' : 'no';
					$.ajax({
						type: "post",
						dataType: "json",
						url: '<?php echo e(url('/admin/profileuser')); ?>',
						data: {'PROFILE_USER_ENABLE': status1},
						success: function(data){
							if(toastr.success('<?php echo e(trans('langconvert.functions.updatecommon')); ?>')){
								location.reload();
							}
						},
						error: function(data){
							console.log(data);
						}
					});
				});

				// employye profile enable
				$('#myonoffswitch124').on('change', function() {
					var status2 = $('#myonoffswitch124').prop('checked') == true ? 'yes' : 'no';
					$.ajax({
						type: "post",
						dataType: "json",
						url: '<?php echo e(url('/admin/profileagent')); ?>',
						data: {'PROFILE_AGENT_ENABLE': status2},
						success: function(data){
							if(toastr.success('<?php echo e(trans('langconvert.functions.updatecommon')); ?>')){
								location.reload();
							}
						},
						error: function(data){
							console.log(data);
						}
					});
				});

				// Logos Delete
				$('body').on('click', '.logosdelete', function(e){
					e.preventDefault();
					let id = $(this).data('id');
					let logo = $(this).val();
					swal({
						title: `<?php echo e(trans('langconvert.newwordslang.logoimageremove')); ?>`,
						icon: "warning",
						buttons: true,
						dangerMode: true,
					})
					.then((willDelete) => {
					if (willDelete) {
							$.ajax({
								type: "post",
								url: "<?php echo e(route('admin.logodelete')); ?>",
								data: {
									'id': id,
									'logo': logo

								},
								success: function (data) {
								toastr.success(data.success);
								location.reload();
								},
								error: function (data) {
								console.log('Error:', data);
								}
							});
						}
					});
				});
				
			})();

			
		</script>

		
		
		<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/admin/generalsetting/apptitle.blade.php ENDPATH**/ ?>