

		<?php $__env->startSection('styles'); ?>

		<!-- INTERNAl Summernote css -->
		<link rel="stylesheet" href="<?php echo e(asset('assets/plugins/summernote/summernote.css')); ?>?v=<?php echo time(); ?>">

		<!-- INTERNAl Dropzone css -->
		<link href="<?php echo e(asset('assets/plugins/dropzone/dropzone.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />

		<!-- GALLERY CSS -->
		<link href="<?php echo e(asset('assets/plugins/simplelightbox/simplelightbox.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet">

		<?php $__env->stopSection(); ?>

							<?php $__env->startSection('content'); ?>

							<!-- Section -->
							<section>
								<div class="bannerimg cover-image" data-bs-image-src="<?php echo e(asset('assets/images/photos/banner1.jpg')); ?>">
									<div class="header-text mb-0">
										<div class="container ">
											<div class="row text-white">
												<div class="col">
													<h1 class="mb-0"><?php echo e(trans('langconvert.userdashboard.ticketview')); ?></h1>
												</div>
												<div class="col col-auto">
													<ol class="breadcrumb text-center">
														<li class="breadcrumb-item">
															<a href="#" class="text-white-50"><?php echo e(trans('langconvert.menu.home')); ?></a>
														</li>
														<li class="breadcrumb-item active">
															<a href="#" class="text-white"><?php echo e(trans('langconvert.userdashboard.ticketview')); ?></a>
														</li>
													</ol>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<!-- Section -->

							<!--Ticket Show-->
							<section>
								<div class="cover-image sptb">
									<div class="container ">
										<div class="row">
											<div class="col-xl-4">
												<div id="scroll-stickybar" class="w-100 pos-sticky-scroll">
													<div class="card">
														<div class="card-body text-center item-user">
															<div class="profile-pic">
																<div class="profile-pic-img mb-2">
																	<span class="bg-success dots" data-bs-toggle="tooltip" data-placement="top" title=""
																		data-bs-original-title="online"></span>
																	<?php if(Auth::user()->image == null): ?>

																	<img src="<?php echo e(asset('uploads/profile/user-profile.png')); ?>" class="brround avatar-xxl"
																		alt="default">
																	<?php else: ?>

																	<img class="brround avatar-xxl" alt="<?php echo e(Auth::user()->image); ?>"
																		src="<?php echo e(asset('uploads/profile/'.Auth::user()->image)); ?>">
																	<?php endif; ?>

																</div>
																<a href="#" class="text-dark">
																	<h5 class="mb-1 font-weight-semibold2"><?php echo e(Auth::user()->username); ?></h5>
																</a>
																<small class="text-muted "><?php echo e(Auth::user()->email); ?></small>
															</div>
														</div>
													</div>

													<?php if($ticket->purchasecode != null): ?>
		
													<!-- Purchase Code Details -->
													<div class="purchasecodes alert alert-light-warning br-13 mb-5">
														<div class="ps-0 pe-0 pb-0">
															<div class="">
																<strong><?php echo e(trans('Puchase Code')); ?> :</strong>
																<span class=""><?php echo e(Str::padLeft(Str::substr($ticket->purchasecode, -4), Str::length($ticket->purchasecode), Str::padLeft('*', 1))); ?></span>
																<?php if($ticket->purchasecodesupport == 'Supported'): ?>
						
																<span class="badge badge-success ms-auto float-end">Support Active</span>
																<?php elseif($ticket->purchasecodesupport == 'Expired'): ?>
						
																<span class="badge badge-danger ms-auto float-end">Support Expired</span>
																<p class="mb-0 mt-3">
																<small>Your support for this item has expired. You may still leave a comment but please renew support if you are asking the author for help. View the item support policy</small>
																</p>
																<?php else: ?>
																<?php endif; ?>
																
															</div>	
														</div>
													</div>
													<!-- End Purchase Code Details -->
													
													<?php endif; ?>

													<div class="card">
														<div class="card-header  border-0">
															<div class="card-title"><?php echo e(trans('langconvert.admindashboard.ticketinformation')); ?></div>
															<input type="hidden" name="" data-id="<?php echo e($ticket->id); ?>" id="ticket">
															<div class="float-end ms-auto"><a href="<?php echo e(route('client.ticket')); ?>" class="btn btn-white btn-sm ms-auto"><i class="fa fa-paper-plane-o me-2 fs-14"></i><?php echo e(trans('langconvert.adminmenu.createticket')); ?></a></div>
														</div>
														<div class="card-body pt-2 px-0 pb-0">
															<div class="table-responsive tr-lastchild">
																<table class="table mb-0 table-information">
																	<tbody>
																		<tr>
																			<td>
																				<span class="w-50"><?php echo e(trans('langconvert.admindashboard.ticketid')); ?></span>
																			</td>
																			<td>:</td>
																			<td>
																				<span class="font-weight-semibold">#<?php echo e($ticket->ticket_id); ?></span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<span class="w-50"><?php echo e(trans('langconvert.admindashboard.ticketcategory')); ?></span>
																			</td>
																			<td>:</td>
																			<td>
																				<?php if($ticket->category_id != null): ?>

																				<span class="font-weight-semibold"><?php echo e($ticket->category->name); ?></span>
																				<?php endif; ?>

																			</td>
																		</tr>
																		<?php if($ticket->subcategory != null): ?>
																		<tr>
																			<td>
																				<span class="w-50"><?php echo e(trans('langconvert.newwordslang.ticketsubcategory')); ?></span>
																			</td>
																			<td>:</td>
																			<td>
																				<span class="font-weight-semibold"><?php echo e($ticket->subcategories->subcatlists->subcategoryname); ?></span>
																				
																			</td>
																		</tr>
																		<?php endif; ?>
																		<?php if($ticket->project != null): ?>

																		<tr>
																			<td>
																				<span class="w-50"><?php echo e(trans('langconvert.admindashboard.ticketproject')); ?></span>
																			</td>
																			<td>:</td>
																			<td>
																				<span class="font-weight-semibold"><?php echo e($ticket->project); ?></span>
																			</td>
																		</tr>
																		<?php endif; ?>

																		<tr>
																			<td>
																				<span class="w-50"><?php echo e(trans('langconvert.admindashboard.opendate')); ?></span>
																			</td>
																			<td>:</td>
																			<td>
																				<span class="font-weight-semibold"><?php echo e($ticket->created_at->format(setting('date_format'))); ?></span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<span class="w-50"><?php echo e(trans('langconvert.admindashboard.status')); ?></span>
																			</td>
																			<td>:</td>
																			<td>
																				<?php if($ticket->status == "New"): ?>

																				<span class="badge badge-success"><?php echo e($ticket->status); ?></span>
																				<?php elseif($ticket->status == "Re-Open"): ?>

																				<span class="badge badge-teal"><?php echo e($ticket->status); ?></span>
																				<?php elseif($ticket->status == "Inprogress"): ?>

																				<span class="badge badge-info"><?php echo e($ticket->status); ?></span>
																				<?php elseif($ticket->status == "On-Hold"): ?>

																				<span class="badge badge-warning"><?php echo e($ticket->status); ?></span>
																				<?php else: ?>

																				<span class="badge badge-danger"><?php echo e($ticket->status); ?></span>
																				<?php endif; ?>

																			</td>
																		</tr>
																		<?php if($ticket->replystatus != null): ?>

																		<tr>
																			<td>
																				<span class="w-50"><?php echo e(trans('langconvert.admindashboard.replystatus')); ?></span>
																			</td>
																			<td>:</td>
																			<td>
																				<?php if($ticket->replystatus == "Solved"): ?>

																				<span class="badge badge-success"><?php echo e($ticket->replystatus); ?></span>
																				<?php elseif($ticket->replystatus == "Unanswered"): ?>

																				<span class="badge badge-danger-light"><?php echo e($ticket->replystatus); ?></span>
																				<?php elseif($ticket->replystatus == "Waiting for response"): ?>

																				<span class="badge badge-warning"><?php echo e($ticket->replystatus); ?></span>
																				<?php else: ?>
																				<?php endif; ?>

																			</td>
																		</tr>
																		<?php endif; ?>

																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-xl-8">
												<div class="card">
													<div class="card-header border-0 mb-1 d-block">
														<div class="d-sm-flex d-block">
															<div>
																<h4 class="card-title mb-1 fs-22"><?php echo e($ticket->subject); ?> </h4>
															</div>
															<div class="card-options float-sm-end ticket-status">
																<?php if($ticket->status == "New"): ?>
	
																<span class="badge badge-success"><?php echo e($ticket->status); ?></span>
																<?php elseif($ticket->status == "Re-Open"): ?>
	
																<span class="badge badge-teal"><?php echo e($ticket->status); ?></span>
																<?php elseif($ticket->status == "Inprogress"): ?>
	
																<span class="badge badge-info"><?php echo e($ticket->status); ?></span>
																<?php elseif($ticket->status == "On-Hold"): ?>
																
																<span class="badge badge-warning"><?php echo e($ticket->status); ?></span>
																<?php else: ?>
	
																<span class="badge badge-danger"><?php echo e($ticket->status); ?></span>
																<?php endif; ?>
															</div>
														</div>
														<small class="fs-13"><i class="feather feather-clock text-muted me-1"></i><?php echo e(trans('langconvert.admindashboard.lastupdatedon')); ?> <span class="text-muted"><?php echo e($ticket->updated_at->diffForHumans()); ?></span></small>
													</div>
													<div class="card-body readmores pt-2 px-6 mx-1"> 
														<div>
															<span><?php echo $ticket->message; ?></span>
															<div class="row galleryopen">
																<?php $__currentLoopData = $ticket->getMedia('ticket'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticketss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

																<div class="file-image-1  removespruko<?php echo e($ticketss->id); ?>" id="imageremove<?php echo e($ticketss->id); ?>">
																	<div class="product-image">
																		<a href="<?php echo e($ticketss->getFullUrl()); ?>" class="imageopen">
																			<img src="<?php echo e($ticketss->getFullUrl()); ?>" class="br-5" alt="<?php echo e($ticketss->file_name); ?>">
																		</a>
																	</div>
																	<span class="file-name-1">
																		<?php echo e(Str::limit($ticketss->file_name, 10, $end='.......')); ?>

																	</span>
																</div>
																<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

															</div>
														</div>
													</div>
												</div>
									
									<?php if($ticket->status == 'Closed'): ?>
										<?php if(setting('USER_REOPEN_ISSUE') == 'yes'): ?>
											<?php if(setting('USER_REOPEN_TIME') == '0'): ?>

												<div class="card">
													<form method="POST" action="<?php echo e(url('customer/closed/' .$ticket->ticket_id)); ?>">
														<?php echo csrf_field(); ?>
														<?php echo view('honeypot::honeypotFormFields'); ?>

														<input type="hidden" name="ticket_id" value="<?php echo e($ticket->id); ?>">
														<div class="card-body">
															<p><?php echo e(trans('langconvert.userdashboard.ticketclosedreopen')); ?>

																<input type="submit" class="btn btn-secondary" value="<?php echo e(trans('langconvert.admindashboard.reopen')); ?>"
																	onclick="this.disabled=true;this.form.submit();">
															</p>
														</div>
													</form>
												</div>
											<?php else: ?>
												<?php if($ticket->closing_ticket != null): ?>
												<?php if(now()->format('Y-m-d') <= $ticket->closing_ticket->adddays(setting('USER_REOPEN_TIME'))->format('Y-m-d')): ?>

												<div class="card">
													<form method="POST" action="<?php echo e(url('customer/closed/' .$ticket->ticket_id)); ?>">
														<?php echo csrf_field(); ?>
														<?php echo view('honeypot::honeypotFormFields'); ?>
														
														<input type="hidden" name="ticket_id" value="<?php echo e($ticket->id); ?>">
														<div class="card-body">
															<p><?php echo e(trans('langconvert.userdashboard.ticketclosedreopen')); ?>

																<input type="submit" class="btn btn-secondary" value="<?php echo e(trans('langconvert.admindashboard.reopen')); ?>"
																	onclick="this.disabled=true;this.form.submit();">
															</p>
														</div>
													</form>
												</div>
												<?php endif; ?>
												<?php endif; ?>
											<?php endif; ?>
										<?php endif; ?>
									<?php elseif($ticket->status == 'On-Hold'): ?>
								
												<div class="alert alert-light-warning note" role="alert">
													<p class="m-0"><b><?php echo e(trans('langconvert.admindashboard.note')); ?>:-</b> <?php echo e($ticket->note); ?></p>
												</div>
									<?php else: ?>

												<div class="card">
													<div class="card-header border-0">
														<h4 class="card-title"><?php echo e(trans('langconvert.admindashboard.replyticket')); ?></h4>
													</div>
													<form method="POST" action="<?php echo e(route('client.comment', $ticket->ticket_id)); ?>"
														enctype="multipart/form-data">
														<?php echo csrf_field(); ?>
														<?php echo view('honeypot::honeypotFormFields'); ?>

														<input type="hidden" name="ticket_id" value="<?php echo e($ticket->id); ?>">
														<div class="card-body">
															<textarea class="summernote form-control  <?php $__errorArgs = ['comment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
																name="comment" rows="6" cols="100" aria-multiline="true"></textarea>
																
															<?php $__errorArgs = ['comment'];
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

															<?php if(setting('USER_FILE_UPLOAD_ENABLE') == 'yes'): ?>

															<div class="form-group mt-3">
																<label class="form-label"><?php echo e(trans('langconvert.admindashboard.uploadimage')); ?></label>
																<div class="file-browser">
																	<div class="needsclick dropzone" id="document-dropzone"></div>
																</div>
																<small class="text-muted"><i><?php echo e(trans('langconvert.admindashboard.filesizenotbe')); ?>

																	<?php echo e(setting('FILE_UPLOAD_MAX')); ?><?php echo e(trans('langconvert.admindashboard.mb')); ?></i></small>
															</div>
															<?php endif; ?>

															<div class="custom-controls-stacked d-md-flex mt-3">
																<label class="form-label mt-1 me-5"><?php echo e(trans('langconvert.admindashboard.status')); ?></label>
																<label class="custom-control form-radio success me-4">
																	<?php if($ticket->status == 'Re-Open'): ?>
																	
																	<input type="radio" class="custom-control-input" name="status"
																		value="Inprogress" <?php echo e($ticket->status == 'Re-Open' ? 'checked' : ''); ?>>
																	<span class="custom-control-label"><?php echo e(trans('langconvert.newwordslang.inprogress')); ?></span>
																	<?php elseif($ticket->status == 'Inprogress'): ?>

																	<input type="radio" class="custom-control-input" name="status"
																		value="<?php echo e($ticket->status); ?>" <?php echo e($ticket->status == 'Inprogress' ? 'checked' :
																	''); ?>>
																	<span class="custom-control-label"><?php echo e(trans('langconvert.newwordslang.leaveascurrent')); ?></span>
																	<?php else: ?>

																	<input type="radio" class="custom-control-input" name="status"
																		value="<?php echo e($ticket->status); ?>" <?php echo e($ticket->status == 'New' ? 'checked' : ''); ?>>
																	<span class="custom-control-label"><?php echo e(trans('langconvert.newwordslang.new')); ?></span>
																	<?php endif; ?>

																</label>
																<label class="custom-control form-radio success">
																	<input type="radio" class="custom-control-input" name="status" value="Closed">
																	<span class="custom-control-label"><?php echo e(trans('langconvert.newwordslang.solved')); ?></span>
																</label>
															</div>
														</div>
														<div class="card-footer">
															<div class="form-group float-end">
																<input type="submit" class="btn btn-secondary" value="<?php echo e(trans('langconvert.admindashboard.reply')); ?>"
																onclick="this.disabled=true;this.form.submit();">
															</div>
														</div>
													</form>
												</div>
											
									<?php endif; ?>

												<!---- End Reply Ticket Display ---->

												<?php if($comments->isNotEmpty()): ?>

												<!---- Comments Display ---->

												<div class="card support-converbody">
													<div class="card-header border-0">
														<h4 class="card-title"><?php echo e(trans('langconvert.admindashboard.conversions')); ?></h4>
													</div>
													<div id="spruko_loaddata">

														<?php echo $__env->make('user.ticket.showticketdata', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

													</div>
												</div>

												<!--- End Comments Display -->
													<?php endif; ?>

											</div>
										</div>
									</div>
								</div>
							</section>
							<!--Ticket Show-->

							<?php $__env->stopSection(); ?>

		<?php $__env->startSection('scripts'); ?>


		<!-- INTERNAL Vertical-scroll js-->
		<script src="<?php echo e(asset('assets/plugins/vertical-scroll/jquery.bootstrap.newsbox.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- INTERNAL Summernote js  -->
		<script src="<?php echo e(asset('assets/plugins/summernote/summernote.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- INTERNAL Index js-->
		<script src="<?php echo e(asset('assets/js/support/support-ticketview.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- INTERNAL DropZone js-->
		<script src="<?php echo e(asset('assets/plugins/dropzone/dropzone.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- GALLERY JS -->
		<script src="<?php echo e(asset('assets/plugins/simplelightbox/simplelightbox.js')); ?>?v=<?php echo time(); ?>"></script>
		<script src="<?php echo e(asset('assets/plugins/simplelightbox/light-box.js')); ?>?v=<?php echo time(); ?>"></script>

		<!--Showmore Js-->
		<script src="<?php echo e(asset('assets/js/jquery.showmore.js')); ?>?v=<?php echo time(); ?>"></script>
		<script src="<?php echo e(asset('assets/plugins/jquerysticky/jquery-sticky/jquery-sticky.js')); ?>?v=<?php echo time(); ?>"></script>
		<script src="<?php echo e(asset('assets/plugins/jquerysticky/jquery-sticky.js')); ?>?v=<?php echo time(); ?>"></script>

		<script type="text/javascript">
            "use strict";
			
			(function($){

				// Delete Media
				$('body').on('click', '.imgdel', function () {
					var product_id = $('.imgdel').data("id");
					swal({
						title: `<?php echo e(trans('langconvert.admindashboard.wanttocontinue')); ?>`,
						text: "<?php echo e(trans('langconvert.admindashboard.eraserecordspermanently')); ?>",
						icon: "warning",
						buttons: true,
						dangerMode: true,
					})
					.then((willDelete) => {
						if (willDelete) {
							$.ajax({
								type: "DELETE",
								url: SITEURL + "/customer/image/delete/"+product_id,
								success: function (data) {
									//  table.draw();
									$('#imageremove'+ product_id).remove();
								},
								data: {
								"_token": "<?php echo e(csrf_token()); ?>",

								},
								error: function (data) {
									console.log('Error:', data);
								}
							});
						}
					});			
				});
			})(jQuery);


			<?php if(setting('USER_FILE_UPLOAD_ENABLE') == 'yes'): ?>

			// Image Upload
			var uploadedDocumentMap = {}
			Dropzone.options.documentDropzone = {
				url: '<?php echo e(route('client.ticket.image' ,$ticket->ticket_id)); ?>',
				maxFilesize: '<?php echo e(setting('FILE_UPLOAD_MAX')); ?>', // MB
				addRemoveLinks: true,
				acceptedFiles: '<?php echo e(setting('FILE_UPLOAD_TYPES')); ?>',
				maxFiles: '<?php echo e(setting('MAX_FILE_UPLOAD')); ?>',
				headers: {
						'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>"
				},
				success: function (file, response) {
					$('form').append('<input type="hidden" name="comments[]" value="' + response.name + '">')
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
					$('form').find('input[name="comments[]"][value="' + name + '"]').remove()
				},
				init: function () {
					<?php if(isset($project) && $project->document): ?>
					var files =
					<?php echo json_encode($project->document); ?>

					for (var i in files) {
						var file = files[i]
						this.options.addedfile.call(this, file)
						file.previewElement.classList.add('dz-complete')
							$('form').append('<input type="hidden" name="comments[]" value="' + file.file_name + '">')
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

			<?php endif; ?>

			// Scrolling Effect
			var page = 1;
			$(window).scroll(function() {
				if($(window).scrollTop() + $(window).height() >= $(document).height()) {
					page++;
					loadMoreData(page);
				}
			});

			function loadMoreData(page){
				$.ajax(
				{
					url: '?page=' + page,
					type: "get",
					
				})
				.done(function(data)
				{
					$("#spruko_loaddata").append(data.html);
				})
				.fail(function(jqXHR, ajaxOptions, thrownError)
				{
					alert('server not responding...');
				});
			}

			// Edit Form
			function showEditForm(id) {
				var x = document.querySelector(`#supportnote-icon-${id}`);

				if (x.style.display == "block") {
					x.style.display = "none";
				}
				else {

					x.style.display = "block";
				}
			}

			// Readmore
			let readMore = document.querySelectorAll('.readmores')
			readMore.forEach(( element, index)=>{
				if(element.clientHeight <= 200)    {
					element.children[0].classList.add('end')
				}
				else{
					element.children[0].classList.add('readMore')
				}
			})

			$(`.readMore`).showmore({
				closedHeight: 60,
				buttonTextMore: 'Read More',
				buttonTextLess: 'Read Less',
				buttonCssClass: 'showmore-button',
				animationSpeed: 0.5
			});

		</script>

		<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.usermaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/user/ticket/showticket.blade.php ENDPATH**/ ?>