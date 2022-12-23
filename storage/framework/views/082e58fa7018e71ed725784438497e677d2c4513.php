


		<?php $__env->startSection('styles'); ?>

		<!-- INTERNAl Summernote css -->
		<link rel="stylesheet" href="<?php echo e(asset('assets/plugins/summernote/summernote.css')); ?>?v=<?php echo time(); ?>">

		<link href="<?php echo e(asset('assets/plugins/dropzone/dropzone.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />

		<link href="<?php echo e(asset('assets/plugins/wowmaster/css/animate.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />

		<?php $__env->stopSection(); ?>

		<?php $__env->startSection('content'); ?>

		<!-- Section -->
		<section>
			<div class="bannerimg cover-image" data-bs-image-src="<?php echo e(asset('assets/images/photos/banner1.jpg')); ?>">
				<div class="header-text mb-0">
					<div class="container">
						<div class="row text-white">
							<div class="col">
								<h1 class="mb-0"><?php echo e(trans('langconvert.menu.guestticket')); ?></h1>
							</div>
							<div class="col col-auto">
								<ol class="breadcrumb text-center">
									<li class="breadcrumb-item">
										<a href="<?php echo e(url('/')); ?>" class="text-white-50"><?php echo e(trans('langconvert.menu.home')); ?></a>
									</li>
									<li class="breadcrumb-item active">
										<a href="#" class="text-white"><?php echo e(trans('langconvert.menu.guestticket')); ?></a>
									</li>
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
					<div class="row justify-content-center">
						<div class="col-xl-9">
							<div class="card">
								<div class="card-header  border-0">
									<h4 class="card-title"><?php echo e(trans('langconvert.menu.guestticket')); ?></h4>
								</div>
								<form  method="post" id="guest_form" enctype="multipart/form-data">
						
									<?php echo view('honeypot::honeypotFormFields'); ?>
									<div class="card-body">
										<div class="form-group">
											<div class="row">
												<div class="col-md-3">
													<label class="form-label mb-0 mt-2"><?php echo e(trans('langconvert.admindashboard.emailaddress')); ?> <span class="text-red">*</span></label>
												</div>
												<div class="col-md-9">
													<div class="is-loading">
														<input type="text" class="form-control" placeholder="Email" name="email" value="" id="email">
														<div class="spinner-border spinner-border-sm" style="display: none;" id="spinnerenable"></div>
														<span id="EmailError" class="text-danger alert-message" ></span>
														<div class="alert alert-light-warning mt-3 py-1 px-2 fs-14" id="emailalerroff" style="display: none;">
															<p class="privatearticle" >
															<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail me-1"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
															<span id="alertemailerror"></span>
															</p>
														</div>
													</div>	
												</div>
											</div>
										</div>
										<div class="form-group" id="verifyottp" style="display: none">
											<div class="row">
												<div class="col-md-3">
													<label class="form-label mb-0 mt-2"><?php echo e(trans('langconvert.newwordslang.verifyotp')); ?></label>
												</div>
												<div class="col-md-9">
													<input type="otp" class="form-control" placeholder="Enter Otp" name="verifyotp" value="" id="verifyotp">
													<span id="verifyotpError" class="text-danger alert-message"></span>
												</div>
											</div>
										</div>
										<div  class="verifyotp">
										<div class="form-group ">
											<div class="row">
												<div class="col-md-3">
													<label class="form-label mb-0 mt-2"><?php echo e(trans('langconvert.admindashboard.ticketsubject')); ?> <span class="text-red">*</span></label>
												</div>
												<div class="col-md-9">
													<input type="text" id="subject" class="form-control" placeholder="Subject" name="subject" value="<?php echo e(old('subject')); ?>" >
													<span id="SubjectError" class="text-danger alert-message"></span>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-md-3">
													<label class="form-label mb-0 mt-2"><?php echo e(trans('langconvert.admindashboard.ticketcategory')); ?> <span class="text-red">*</span></label>
												</div>
												<div class="col-md-9">
													<select  class="form-control select2-show-search  select2"  data-placeholder="Select Category" name="category" id="category">
														<option label="Select Category"></option>
														<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
														
														<option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
													</select>
													<span id="CategoryError" class="text-danger alert-message"></span>
												</div>
											</div>
										</div>
										<div class="form-group" id="selectssSubCategory" style="display: none;">
										
											<div class="row">
												<div class="col-md-3">
													<label class="form-label mb-0 mt-2"><?php echo e(trans('langconvert.newwordslang.ticketsubcategory')); ?></label>
												</div>
												<div class="col-md-9">
													<select  class="form-control select2-show-search select2 asdf"  data-placeholder="Select SubCategory" name="subscategory" id="subscategory" >

													</select>
													<span id="subsCategoryError" class="text-danger alert-message"></span>
												</div>
											</div>

										</div>
										<div class="form-group" id="selectSubCategory">
										</div>
										<div class="form-group" id="envatopurchase">
										</div>
										<div class="form-group ticket-summernote ">
											<div class="row">
												<div class="col-md-3">
													<label class="form-label mb-0 mt-2"><?php echo e(trans('langconvert.admindashboard.ticketdescription')); ?> <span class="text-red">*</span></label>
												</div>
												<div class="col-md-9">
													<textarea class=" form-control summernote" name="message"></textarea>
													<span id="MessageError" class="text-danger alert-message"></span>
												</div>
											</div>
										</div>
										<?php if(setting('GUEST_FILE_UPLOAD_ENABLE') == 'yes'): ?>
										<div class="form-group">
											<div class="row">
												<div class="col-md-3">
													<label class="form-label mb-0 mt-2"><?php echo e(trans('langconvert.admindashboard.uploadimage')); ?></label>
												</div>
												<div class="col-md-9">
													<div class="form-group mb-0">
														<div class="needsclick dropzone" id="document-dropzone"></div>
													</div>
													<small class="text-muted"><i><?php echo e(trans('langconvert.admindashboard.filesizenotbe')); ?> <?php echo e(setting('FILE_UPLOAD_MAX')); ?><?php echo e(trans('langconvert.admindashboard.mb')); ?></i></small>
												</div>
											</div>
										</div>
										<?php endif; ?>

										<?php if(setting('CAPTCHATYPE')=='manual'): ?>
                                            <?php if(setting('RECAPTCH_ENABLE_GUEST')=='yes'): ?>
											<div class="form-group mt-4">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label mb-0 mt-2"><?php echo e(trans('langconvert.menu.entercaptcha')); ?> <span class="text-red">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group row">
															<div class="col-md-6">
																<input type="text" id="captcha" class="form-control <?php $__errorArgs = ['captcha'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Enter Captcha" name="captcha">
																<?php $__errorArgs = ['captcha'];
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
															<div class="col-md-6">
																<div class="captcha">
																	<span><?php echo captcha_img(''); ?></span>
																	<button type="button" class="btn btn-outline-info btn-sm captchabtn"><i class="fe fe-refresh-cw"></i></button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
                                            <?php endif; ?>
                                        <?php endif; ?>

										<!--- if Enable the Google ReCaptcha --->
										<?php if(setting('CAPTCHATYPE')=='google'): ?>
										<?php if(setting('RECAPTCH_ENABLE_GUEST')=='yes'): ?>
										<div class="form-group">
											<div class="row">
												<div class="col-md-3">
												</div>
												<div class="col-md-9">
													<div class="form-group mb-0 mt-4">
														<div class="g-recaptcha" data-sitekey="<?php echo e(setting('GOOGLE_RECAPTCHA_KEY')); ?>"></div>
														<?php if($errors->has('g-recaptcha-response')): ?>
															<span class="invalid-feedback" role="alert">
																<strong><?php echo e($errors->first('g-recaptcha-response')); ?></strong>
															</span>
														<?php endif; ?>
													</div>
												</div>
											</div>
										</div>
										
										<?php endif; ?>
										<?php endif; ?>
									</div>
									</div>
									<div  class="verifyotp">
									<div class="card-footer">
										<div class="form-group float-end">
											<button type="submit" class="btn btn-secondary btn-lg purchasecode" ><i class="fa fa-paper-plane-o me-1"></i> <?php echo e(trans('langconvert.adminmenu.createticket')); ?> </button>
										</div>
									</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Section-->

		<?php $__env->stopSection(); ?>

		<?php $__env->startSection('scripts'); ?>

		<!-- INTERNAL Vertical-scroll js-->
		<script src="<?php echo e(asset('assets/plugins/vertical-scroll/jquery.bootstrap.newsbox.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- INTERNAL Summernote js  -->
		<script src="<?php echo e(asset('assets/plugins/summernote/summernote.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- INTERNAL Index js-->
		<script src="<?php echo e(asset('assets/js/support/support-sidemenu.js')); ?>?v=<?php echo time(); ?>"></script>
		<script src="<?php echo e(asset('assets/js/select2.js')); ?>"></script>

		<!-- INTERNAL Dropzone js-->
		<script src="<?php echo e(asset('assets/plugins/dropzone/dropzone.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- wowmaster js-->
		<script src="<?php echo e(asset('assets/plugins/wowmaster/js/wow.min.js')); ?>?v=<?php echo time(); ?>"></script>

		<script type="text/javascript">

			"use strict";

			(function($)  {

				// Variables
				var SITEURL = '<?php echo e(url('')); ?>';

				// Ajax Setup
				$.ajaxSetup({
					headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				// when category change its get the subcat list 
				$('#category').on('change',function(e) {
					var cat_id = e.target.value;
					$('#selectssSubCategory').hide();
					$.ajax({
						url:"<?php echo e(route('guest.subcategorylist')); ?>",
						type:"POST",
							data: {
							cat_id: cat_id
							},
							cache : false,
							async: true,
						success:function (data) {
							if(data.subcategoriess != ''){
								$('#subscategory').html(data.subcategoriess)
								$('#selectssSubCategory').show()
							}
							else{
								$('#selectssSubCategory').hide();
								$('#subscategory').html('')
							}
							//projectlist
							if(data.subcategories.length >= 1){
								
								$('#subcategory')?.empty();
								$('#selectSubCategory .row')?.remove();
								let selectDiv = document.querySelector('#selectSubCategory');
								let Divrow = document.createElement('div');
								Divrow.setAttribute('class','row mt-4');
								let Divcol3 = document.createElement('div');
								Divcol3.setAttribute('class','col-md-3');
								let selectlabel =  document.createElement('label');
								selectlabel.setAttribute('class','form-label mb-0 mt-2')
								selectlabel.innerText = "Projects";
								let divcol9 = document.createElement('div');
								divcol9.setAttribute('class', 'col-md-9');
								let selecthSelectTag =  document.createElement('select');
								selecthSelectTag.setAttribute('class','form-control select2-show-search');
								selecthSelectTag.setAttribute('id', 'subcategory');
								selecthSelectTag.setAttribute('name', 'project');
								selecthSelectTag.setAttribute('data-placeholder','Select Projects');
								let selectoption = document.createElement('option');
								selectoption.setAttribute('label','Select Projects')
								selectDiv.append(Divrow);
								Divrow.append(Divcol3);
								Divcol3.append(selectlabel);
								divcol9.append(selecthSelectTag);
								selecthSelectTag.append(selectoption);
								Divrow.append(divcol9);
								$('.select2-show-search').select2();
								$.each(data.subcategories,function(index,subcategory){
								$('#subcategory').append('<option value="'+subcategory.name+'">'+subcategory.name+'</option>');
								})
							}
							else{
								$('#subcategory')?.empty();
								$('#selectSubCategory .row')?.remove();
							}
							//Envato Access
							if(data.envatosuccess.length >= 1){
								$('#envato_id')?.empty();
								$('#envatopurchase .row')?.remove();
								let selectDiv = document.querySelector('#envatopurchase');
								let Divrow = document.createElement('div');
								Divrow.setAttribute('class','row mt-4');
								let Divcol3 = document.createElement('div');
								Divcol3.setAttribute('class','col-md-3');
								let selectlabel =  document.createElement('label');
								selectlabel.setAttribute('class','form-label mb-0 mt-2')
								selectlabel.innerHTML = "Envato Purchase Code <span class='text-red'>*</span>";
								let divcol9 = document.createElement('div');
								divcol9.setAttribute('class', 'col-md-9');
								let selecthSelectTag =  document.createElement('input');
								selecthSelectTag.setAttribute('class','form-control');
								selecthSelectTag.setAttribute('type','search');
								selecthSelectTag.setAttribute('id', 'envato_id');
								selecthSelectTag.setAttribute('name', 'envato_id');
								selecthSelectTag.setAttribute('placeholder', 'Enter Your Purchase Code');
								let selecthSelectInput =  document.createElement('input');
								selecthSelectInput.setAttribute('type','hidden');
								selecthSelectInput.setAttribute('id', 'envato_support');
								selecthSelectInput.setAttribute('name', 'envato_support');
								selectDiv.append(Divrow);
								Divrow.append(Divcol3);
								Divcol3.append(selectlabel);
								divcol9.append(selecthSelectTag);
								divcol9.append(selecthSelectInput);
								Divrow.append(divcol9);
								$('.purchasecode').attr('disabled', true);
								
							}else{
								$('#envato_id')?.empty();
								$('#envatopurchase .row')?.remove();
								$('.purchasecode').removeAttr('disabled');
							}
						},
						error:(data)=>{

						}
					});
				});

				<?php $module = Module::all(); ?>

				<?php if(in_array('Uhelpupdate', $module)): ?>

				// Purchase Code Validation
				$("body").on('keyup', '#envato_id', function() {
					let value = $(this).val();
					if (value != '') {
						if(value.length == '36'){
							var _token = $('input[name="_token"]').val();
						$.ajax({
							url: "<?php echo e(route('guest.envatoverify')); ?>",
							method: "POST",
							data: {data: value, _token: _token},

							dataType:"json",

							success: function (data) {
								if(data.valid == 'true'){
									$('#envato_id').addClass('is-valid');
									$('#envato_id').attr('readonly', true);
									$('.purchasecode').removeAttr('disabled');
									$('#envato_id').css('border', '1px solid #02f577');
									$('#envato_support').val('Supported');
									toastr.success(data.message);
								}
								if(data.valid == 'expried'){
									<?php if(setting('ENVATO_EXPIRED_BLOCK') == 'on'): ?>
									
									$('.purchasecode').attr('disabled', true);
									$('#envato_id').css('border', '1px solid #e13a3a');
									$('#envato_support').val('Expired');
									toastr.error(data.message);
									<?php endif; ?>
									<?php if(setting('ENVATO_EXPIRED_BLOCK') == 'off'): ?>
									$('#envato_id').addClass('is-valid');
									$('#envato_id').attr('readonly', true);
									$('.purchasecode').removeAttr('disabled');
									$('#envato_id').css('border', '1px solid #02f577');
									$('#envato_support').val('Expired');
									toastr.warning(data.message);
									<?php endif; ?>
									
								}
								if(data.valid == 'false'){
									$('.purchasecode').attr('disabled', true);
									$('#envato_id').css('border', '1px solid #e13a3a');
									toastr.error(data.message);
								}
								
							
							},
							error: function (data) {

							}
						});
						}
					}else{
						toastr.error('Purchase Code field is Required');
						$('.purchasecode').attr('disabled', true);
						$('#envato_id').css('border', '1px solid #e13a3a');
					}
				});

				<?php endif; ?>
				
				// Captcha Js when refresh the its gets the new captcha
				$(".captchabtn").on('click', function(e){
					e.preventDefault();
					$.ajax({
						type:'GET',
						url:'<?php echo e(route('captcha.reload')); ?>',
						success: function(res){
							$(".captcha span").html(res.captcha);
						}
					});
				});

				// Summernote
				$('.summernote').summernote({
					placeholder: '',
					tabsize: 1,
					height: 200,
					toolbar: [['style', ['style']], ['font', ['bold', 'underline', 'clear']], // ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
					['fontname', ['fontname']], ['fontsize', ['fontsize']], ['color', ['color']], ['para', ['ul', 'ol', 'paragraph']], // ['height', ['height']],
					['table', ['table']], ['insert', ['link']], ['view', ['fullscreen']], ['help', ['help']]]
				});

				$('body').on('submit', '#guest_form', function (e) {
					e.preventDefault();
					$('#SubjectError').html('');
					$('#MessageError').html('');
					$('#EmailError').html('');
					$('#CategoryError').html('');
					var actionType = $('#btnsave').val();
					var fewSeconds = 2;
					$('#btnsave').html('Sending..');
					$('#btnsave').prop('disabled', true);
						setTimeout(function(){
							$('#btnsave').prop('disabled', false);
						}, fewSeconds*1000);
					var formData = new FormData(this);

					$.ajax({
						type:'POST',
						url: SITEURL + "/guest/openticket",
						data: formData,
						cache:false,
						contentType: false,
						processData: false,
		
						success: (data) => {
							
							if(data.guest == 'pass'){
								$('#SubjectError').html('');
								$('#MessageError').html('');
								$('#EmailError').html('');
								$('#CategoryError').html('');
								toastr.success(data.success);
								window.location.replace('<?php echo e(url('guest/ticketdetails/')); ?>' + '/' + data.data.id)
							}
							
							
						},
						error: function(data){

							$('#SubjectError').html(data.responseJSON.errors.subject);
							$('#MessageError').html(data.responseJSON.errors.message);
							$('#EmailError').html(data.responseJSON.errors.email);
							$('#CategoryError').html(data.responseJSON.errors.category);
							
						}
					});
					
				});


				$('.verifyotp').css('pointer-events', 'none');
				$('.verifyotp').css('opacity', '0.5');
				$('.verifyotp').css('cursor', 'not-allowed');
				$('.verifyotp').css('user-select', 'none');

				$('#email').on('keyup', function(e){
					var EmailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{3,4})+$/;
					let email = e.target.value
					var stop = $(this);
					$('#EmailError').html('');
					if(EmailRegex.test(email)){
						$('#email').attr('readonly', true);
						$('#email').css('pointer-events', 'none');
						$('#email').removeClass('is-invalid');
						$('#spinnerenable').show();
						
						
						$.ajax({
							url:"<?php echo e(route('guest.emailsvalidate')); ?>",
							method: "post",
							data: {
								email : email,
							},
							success: (data) => {
								$('#email').removeAttr('readonly', 'readonly');
								$('#email').attr('disabled', true);
								$('#spinnerenable').hide();
								$('#email').removeClass('is-invalid');
								$('#email').addClass('is-valid');
								$('#emailalerroff').fadeIn();
								$('#alertemailerror').html(' An OTP (One Time Password) has been sent to your email ID. Please enter the OTP below to submit your guest ticket.')
								$('#verifyottp').show();
							},
							
							error: (data) => {
								
								$('#verifyottp').hide();
								$('#EmailError').html('');
							}
						});
					}else if(!EmailRegex.test(email)){
						
						$('#email').addClass('is-invalid');
					}
					
				})
				
				$('#verifyotp').on('keyup', function(e){
					let otpvalue = e.target.value;
					let otplength = otpvalue.length;
					let result = otpvalue.match(/[0-9]/g);	
					var stop = $(this);
					$('#verifyotpError').html('');
					if(result){
						if(otplength == '4')
						{
							$('#verifyotp').attr('disabled', true);
							$('#verifyotp').css('pointer-events', 'none');
							$('#emailalerroff').fadeOut();
							$.ajax({
								url: '<?php echo e(route('guest.verifyotp')); ?>',
								method: 'post',
								data:{
									otpvalue : otpvalue,
								},
								success:(data) => {
									if(data.success){

										$('#email').removeAttr('disabled', 'disabled');
										$('#email').attr('readonly', true);
										$('#verifyotp').removeAttr('disabled', 'disabled');
										$('#verifyotp').attr('readonly', true);
										$('#verifyotp').removeClass('is-invalid');
										$('#verifyotp').addClass('is-valid');
										// $('#verifyotpError').html(data.success);
										$('.verifyotp').css('pointer-events', 'visible');
										$('.verifyotp').css('opacity', '1');
										$('.verifyotp').css('cursor', 'auto');
										$('.verifyotp').css('user-select', 'auto');
									}
									if(data.error)
									{
										
										$('#verifyotp').addClass('is-invalid');
										$('#verifyotp').removeAttr('disabled', 'disabled');
										$('#verifyotp').css('pointer-events', 'auto');
										toastr.error(data.error);
										// $('#verifyotpError').html(data.error);
										$('.verifyotp').css('pointer-events', 'none');
										$('.verifyotp').css('opacity', '0.5');
										$('.verifyotp').css('cursor', 'not-allowed');
										$('.verifyotp').css('user-select', 'none');
									}
									
								}, 
								
								error:(data) => {
									$('#verifyotpError').html('');
								}
							});
							
						}
					}
				})
			
			})(jQuery);

			<?php if(setting('GUEST_FILE_UPLOAD_ENABLE') == 'yes'): ?>

			// Image Upload
			var uploadedDocumentMap = {}
			Dropzone.options.documentDropzone = {
			  url: '<?php echo e(route('guest.imageupload')); ?>',
			  maxFilesize: '<?php echo e(setting('FILE_UPLOAD_MAX')); ?>', // MB
			  addRemoveLinks: true,
			  acceptedFiles: '<?php echo e(setting('FILE_UPLOAD_TYPES')); ?>',
			  maxFiles: '<?php echo e(setting('MAX_FILE_UPLOAD')); ?>',
			  headers: {
				'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>"
			  },
			  success: function (file, response) {
				$('form').append('<input type="hidden" name="ticket[]" value="' + response.name + '">')
				uploadedDocumentMap[file.name] = response.name
			  },
			  removedfile: function (file) {
				file.previewElement.remove()
				var name = ''
				if (typeof file.file_name !== 'undefined') {
				  name = file.file_name
				} else {
				  name = uploadedDocumentMap[file.name]
				}
				$('form').find('input[name="ticket[]"][value="' + name + '"]').remove()
			  },
			  init: function () {
				<?php if(isset($project) && $project->document): ?>
				  var files =
					<?php echo json_encode($project->document); ?>

				  for (var i in files) {
					var file = files[i]
					this.options.addedfile.call(this, file)
					file.previewElement.classList.add('dz-complete')
					$('form').append('<input type="hidden" name="ticket[]" value="' + file.file_name + '">')
				  }
				<?php endif; ?>
			  }
			}
			<?php endif; ?>


			
			
		</script>

		<!--- Captcha Google js -->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
		

		<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.usermaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/guestticket/index.blade.php ENDPATH**/ ?>