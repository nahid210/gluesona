


<?php $__env->startSection('styles'); ?>

<!-- INTERNAl Summernote css -->
<link rel="stylesheet" href="<?php echo e(asset('assets/plugins/summernote/summernote.css')); ?>?v=<?php echo time(); ?>">

<!-- INTERNAl Dropzone css -->
<link href="<?php echo e(asset('assets/plugins/dropzone/dropzone.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />

<?php $__env->stopSection(); ?>

					<?php $__env->startSection('content'); ?>

					<!--Page header-->
					<div class="page-header d-xl-flex d-block">
						<div class="page-leftheader">
							<h4 class="page-title"><span class="font-weight-normal text-muted ms-2"><?php echo e(trans('langconvert.adminmenu.createticket')); ?></span></h4>
						</div>
					</div>
					<!--End Page header-->

					<!-- Create Ticket List-->
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="card ">
							<div class="card-header border-0">
								<h4 class="card-title"><?php echo e(trans('langconvert.admindashboard.newticket')); ?></h4>
							</div>
							<form method="post" id="admin_form" enctype="multipart/form-data">
								<?php echo view('honeypot::honeypotFormFields'); ?>

								<div class="card-body">
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2"><?php echo e(trans('langconvert.admindashboard.ticketsubject')); ?> <span class="text-red">*</span></label>
											</div>
											<div class="col-md-9">
												<input type="text" id="subject" class="form-control <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Subject" name="subject" value="<?php echo e(old('subject')); ?>">
												<span id="SubjectError" class="text-danger alert-message"></span>
												<?php $__errorArgs = ['subject'];
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
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2"><?php echo e(trans('langconvert.admindashboard.emailaddress')); ?> <span class="text-red">*</span></label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Email" value="<?php echo e(old('email')); ?>" name="email" id="email">
												<span id="EmailError" class="text-danger alert-message" ></span>
												<?php $__errorArgs = ['email'];
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
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2"><?php echo e(trans('langconvert.admindashboard.ticketcategory')); ?><span class="text-red">*</span></label>
											</div>
											<div class="col-md-9">
												<select  class="form-control select2-show-search  select2 <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  data-placeholder="Select Category" name="category" id="category">
													<option label="Select Category"></option>
													<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

														<option value="<?php echo e($category->id); ?>" <?php if(old('category') == $category->id): ?> selected <?php endif; ?>><?php echo e($category->name); ?></option>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

												</select>
												<span id="CategoryError" class="text-danger alert-message"></span>
												<?php $__errorArgs = ['category'];
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
									</div>
									<div class="form-group" id="selectssSubCategory" style="display: none;">
										
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2"><?php echo e(trans('langconvert.newwordslang.ticketsubcategory')); ?></label>
											</div>
											<div class="col-md-9">
												<select  class="form-control select2-show-search  select2"  data-placeholder="Select SubCategory" name="subscategory" id="subscategory" >

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
												<label class="form-label mb-0 mt-2"><?php echo e(trans('langconvert.admindashboard.ticketdescription')); ?><span class="text-red">*</span></label>
											</div>
											<div class="col-md-9">
												<textarea class="summernote form-control <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" rows="7" name="message"><?php echo e(old('message')); ?></textarea>
												<span id="MessageError" class="text-danger alert-message"></span>
												<?php $__errorArgs = ['message'];
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
									</div>
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
								</div>
								<div class="card-footer">
									<div class="form-group float-end">
										<input type="submit"  class="btn btn-secondary btn-lg purchasecode"  value="<?php echo e(trans('langconvert.adminmenu.createticket')); ?>" >
									</div>
								</div>
							</form>
						</div>
					</div>
					<!--End Create Ticket List-->
					<?php $__env->stopSection(); ?>

		<?php $__env->startSection('scripts'); ?>

		<!-- INTERNAL Vertical-scroll js-->
		<script src="<?php echo e(asset('assets/plugins/vertical-scroll/jquery.bootstrap.newsbox.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- INTERNAL Summernote js  -->
		<script src="<?php echo e(asset('assets/plugins/summernote/summernote.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- INTERNAL Index js-->
		<script src="<?php echo e(asset('assets/js/support/support-sidemenu.js')); ?>?v=<?php echo time(); ?>"></script>
		<script src="<?php echo e(asset('assets/js/support/support-createticket.js')); ?>?v=<?php echo time(); ?>"></script>
		<script src="<?php echo e(asset('assets/js/select2.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- INTERNAL Dropzone js-->
		<script src="<?php echo e(asset('assets/plugins/dropzone/dropzone.js')); ?>?v=<?php echo time(); ?>"></script>

		<script type="text/javascript">

			"use strict";

			// Image Upload
			var uploadedDocumentMap = {}
			Dropzone.options.documentDropzone = {
			url: '<?php echo e(route('imageuploadadmin')); ?>',
			maxFilesize: '<?php echo e(setting('FILE_UPLOAD_MAX')); ?>', // MB
			addRemoveLinks: true,
			acceptedFiles: '<?php echo e(setting('FILE_UPLOAD_TYPES')); ?>',
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
				} 
				else {
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

				this.on('error', function(file, errorMessage) {
					if (errorMessage.message) {
					
						var errorDisplay = document.querySelectorAll('[data-dz-errormessage]');
						errorDisplay[errorDisplay.length - 1].innerHTML = errorMessage.message;
					}
				});
			}
			}
				
			// Csrf field
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
						console.log(data);
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


			// summernote 
			$('.note-editable').on('keyup', function(e){
				localStorage.setItem('adminmessage', e.target.innerHTML)
			})

			// store subject to local
			$('#subject').on('keyup', function(e){
				localStorage.setItem('adminsubject', e.target.value)
			})
			// store email to local
			$('#email').on('keyup', function(e){
				localStorage.setItem('adminemail', e.target.value)
			})

			// onload get the data from local
			$(window).on('load', function(){
				if(localStorage.getItem('adminsubject') || localStorage.getItem('adminmessage') || localStorage.getItem('adminemail')){

					document.querySelector('#subject').value = localStorage.getItem('adminsubject');
					document.querySelector('#email').value = localStorage.getItem('adminemail');
					document.querySelector('.summernote').innerHTML = localStorage.getItem('adminmessage');
					document.querySelector('.note-editable').innerHTML = localStorage.getItem('adminmessage');
				}
			})

			// Create Ticket 
			$('body').on('submit', '#admin_form', function (e) {
				e.preventDefault();
				$('#SubjectError').html('');
				$('#MessageError').html('');
				$('#EmailError').html('');
				$('#CategoryError').html('');
				$('#verifyotpError').html('');
				var actionType = $('#btnsave').val();
				var fewSeconds = 2;
				$('#btnsave').html('Sending..');
				$('#btnsave').prop('disabled', true);
					setTimeout(function(){
						$('#btnsave').prop('disabled', false);
					}, fewSeconds*1000);
				var formData = new FormData(this);

				$.ajax({
					type:'post',
					url: '<?php echo e(url('/admin/createticket')); ?>',
					data: formData,
					cache:false,
					contentType: false,
					processData: false,
	
					success: (data) => {
						

						$('#SubjectError').html('');
						$('#MessageError').html('');
						$('#EmailError').html('');
						$('#CategoryError').html('');
						$('#verifyotpError').html('');
						toastr.success(data.success);
						if(localStorage.getItem('adminsubject') || localStorage.getItem('adminmessage') || localStorage.getItem('adminemail')){
							localStorage.removeItem("adminsubject");
							localStorage.removeItem("adminmessage");
							localStorage.removeItem("adminemail");
						}
						window.location.replace('<?php echo e(url('admin/')); ?>');
						
						
						
						
					},
					error: function(data){

						$('#SubjectError').html(data.responseJSON.errors.subject);
						$('#MessageError').html(data.responseJSON.errors.message);
						$('#EmailError').html(data.responseJSON.errors.email);
						$('#CategoryError').html(data.responseJSON.errors.category);
						$('#verifyotpError').html(data.responseJSON.errors.verifyotp);
						
					}
				});
				
			});

			<?php endif; ?>

		</script>

		<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/admin/viewticket/createticket.blade.php ENDPATH**/ ?>