

		<?php $__env->startSection('styles'); ?>

		<!-- INTERNAl Summernote css -->
		<link rel="stylesheet" href="<?php echo e(asset('assets/plugins/summernote/summernote.css')); ?>?v=<?php echo time(); ?>">

		<!-- DropZone CSS -->
		<link href="<?php echo e(asset('assets/plugins/dropzone/dropzone.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />

		<!-- galleryopen CSS -->
		<link href="<?php echo e(asset('assets/plugins/simplelightbox/simplelightbox.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet">

		<!-- INTERNAL Sweet-Alert css -->
		<link href="<?php echo e(asset('assets/plugins/sweet-alert/sweetalert.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />

		<?php $__env->stopSection(); ?>

							<?php $__env->startSection('content'); ?>

							<!--Page header-->
							<div class="page-header d-xl-flex d-block">
								<div class="page-leftheader">
									<h4 class="page-title"><span class="font-weight-normal text-muted ms-2"><?php echo e(trans('langconvert.admindashboard.ticketinformation')); ?></span></h4>
								</div>
							</div>
							<!--End Page header-->

							<!--Row-->
							<div class="row">
								<div class="col-xl-12 col-md-12 col-lg-12">
									<div class="row">
										<div class="col-xl-9 col-lg-12 col-md-12">

											<?php if($ticket->purchasecode != null): ?>

											<!-- Purchase Code Details -->
											<div class="purchasecodes alert alert-light-warning br-13 ">
												<div class="ps-0 pe-0 pb-0">
													<div class="">
														<strong><?php echo e(trans('Puchase Code')); ?> :</strong>
														<?php if(Auth::check() && Auth::id() == '1'): ?>
														
														<span class=""><?php echo e($ticket->purchasecode); ?></span>
														<?php else: ?>
														<?php if(setting('purchasecode_on') == 'on'): ?>

														<span class=""><?php echo e($ticket->purchasecode); ?></span>
														<?php else: ?>

														<span class=""><?php echo e(Str::padLeft(Str::substr($ticket->purchasecode, -4), Str::length($ticket->purchasecode), Str::padLeft('*', 1))); ?></span>
														<?php endif; ?>
														<?php endif; ?>
														<button class="btn btn-sm btn-dark leading-tight ms-2" id="purchasecodebtn" data-id="<?php echo e($ticket->purchasecode); ?>">View Details</button>
														<?php if($ticket->purchasecodesupport == 'Supported'): ?>

														<span class="badge badge-success ms-2">Supported</span>
														<?php elseif($ticket->purchasecodesupport == 'Expired'): ?>

														<span class="badge badge-danger ms-2">Support Expired</span>
														<?php else: ?>
														<?php endif; ?>

													</div>	
												</div>
											</div>
											<!-- End Purchase Code Details -->
											
											<?php endif; ?>

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
												<div class="card-body pt-2 readmores px-6 mx-1"> 
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
											
											<?php if($ticket->status != 'Closed'): ?>

											<div class="card">
												<div class="card-header border-0">
													<h4 class="card-title"><?php echo e(trans('langconvert.admindashboard.replyticket')); ?></h4>
													
												</div>
												<form method="POST" action="<?php echo e(url('admin/ticket/'. $ticket->ticket_id)); ?>" enctype="multipart/form-data">
													<?php echo csrf_field(); ?>

													<?php echo view('honeypot::honeypotFormFields'); ?>
													<input type="hidden" name="ticket_id" value="<?php echo e($ticket->id); ?>">
													<div class="card-body status">
														<div class="col-md-7 col-sm-12 can_msg ps-0 ps-lg-1">
															<div class="d-flex flex-wrap align-items-center">
																<label class="form-label me-2"><?php echo e(trans('uhelpupdate::langconvert.newwordslang.cannedmessage')); ?></label>
																<div class="flex-1 mb-2 mb-lg-0">
																	<select name="cannedmessage" id="cannedmessagess" class="cannedmessage form-control mw"  data-placeholder="Select Canned Messages">
																		<option value="" label="Select Canned Messages"></option>
																		<?php $__currentLoopData = $cannedmessages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cannedmessage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		
																			<option value="<?php echo e($cannedmessage->messages); ?>"><?php echo e($cannedmessage->title); ?></option>
																		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		
																	</select>
																</div>
															</div>
														</div>
														<div class="form-group">
															<textarea class="summernote form-control <?php $__errorArgs = ['comment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="comment" rows="6" cols="100" aria-multiline="true"><?php echo e(old('comment')); ?></textarea>
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
														</div>
														<div class="form-group">
															<label class="form-label"><?php echo e(trans('langconvert.admindashboard.uploadimage')); ?></label>
															<div class="file-browser">
																<div class="needsclick dropzone" id="document-dropzone"></div>
															</div>
															<small class="text-muted"><i><?php echo e(trans('langconvert.admindashboard.filesizenotbe')); ?> <?php echo e(setting('FILE_UPLOAD_MAX')); ?><?php echo e(trans('langconvert.admindashboard.mb')); ?></i></small>
														</div>
														
														<div class="custom-controls-stacked d-md-flex" id="text">
															<label class="form-label mt-1 me-5"><?php echo e(trans('langconvert.admindashboard.status')); ?></label>
															<label class="custom-control form-radio success me-4">
																<?php if($ticket->status == 'Re-Open'): ?>

																<input type="radio" class="custom-control-input hold" name="status" value="Inprogress"
																<?php echo e($ticket->status == 'Re-Open' ? 'checked' : ''); ?> >
																<span class="custom-control-label"><?php echo e(trans('langconvert.newwordslang.inprogress')); ?></span>
																<?php elseif($ticket->status == 'Inprogress'): ?>

																<input type="radio" class="custom-control-input hold" name="status" value="<?php echo e($ticket->status); ?>"
																<?php echo e($ticket->status == 'Inprogress' ? 'checked' : ''); ?> >
																<span class="custom-control-label"><?php echo e(trans('langconvert.newwordslang.inprogress')); ?></span>
																<?php else: ?>

																<input type="radio" class="custom-control-input hold" name="status" value="Inprogress"
																<?php echo e($ticket->status == 'New' ? 'checked' : ''); ?> >
																<span class="custom-control-label"><?php echo e(trans('langconvert.newwordslang.inprogress')); ?></span>
																<?php endif; ?>

															</label>
															<label class="custom-control form-radio success me-4">
																<input type="radio" class="custom-control-input hold" name="status" value="Solved" >
																<span class="custom-control-label"><?php echo e(trans('langconvert.newwordslang.solved')); ?></span>
															</label>
															<label class="custom-control form-radio success me-4">
																<input type="radio" class="custom-control-input" name="status" id="onhold" value="On-Hold" <?php if(old('status') == 'On-Hold'): ?> checked <?php endif; ?> <?php echo e($ticket->status == 'On-Hold' ? 'checked' : ''); ?>>
																<span class="custom-control-label"><?php echo e(trans('langconvert.newwordslang.onhold')); ?></span>
															</label>
														</div>
													</div>
													
													<div class="card-footer">
														<div class="form-group float-end">
															<input type="submit" class="btn btn-secondary" value="<?php echo e(trans('langconvert.admindashboard.reply')); ?>" onclick="this.disabled=true;this.form.submit();">
														</div>
													</div>
												</form>
											</div>
											<?php else: ?>
											<?php endif; ?>
											

											
											<?php if($comments->isNOtEmpty()): ?>

											<div class="card  mb-0">
												<div class="card-header border-0">
													<h4 class="card-title"><?php echo e(trans('langconvert.admindashboard.conversions')); ?></h4>
												</div>
												<div class="suuport-convercontentbody" >
													<?php echo e(csrf_field()); ?>

													<div id="spruko_loaddata">
														<?php echo $__env->make('admin.viewticket.showticketdata', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
														
													</div>
												</div>
											</div>
											<?php endif; ?>
											
											
										</div>

										<div class="col-xl-3 col-lg-6 col-md-12">
											<div class="card">
												<div class="card-header  border-0">
													<div class="card-title"><?php echo e(trans('langconvert.admindashboard.ticketinformation')); ?></div>
												</div>
												<div class="card-body pt-2 ps-0 pe-0 pb-0">
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
																		<?php if($ticket->status != 'Closed'): ?>

																		<a href="javascript:void(0)" data-id="<?php echo e($ticket->ticket_id); ?>" class="p-1 sprukocategory border border-primary br-7 text-white bg-primary ms-2"> <i class="feather feather-edit-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Change Category"></i></a>
																		
																		<?php endif; ?>
																		<?php else: ?>

																		<a href="javascript:void(0)" data-id="<?php echo e($ticket->ticket_id); ?>" class="p-2 sprukocategory border border-primary br-7 text-white bg-primary ms-2" > <i class="feather feather-plus-square" data-toggle="tooltip" data-bs-placement="top" title="Add Category"></i></a>
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
																		<span class="font-weight-semibold"><?php echo e($ticket->subcategoriess->subcategoryname); ?></span>
																		
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
																<?php if($ticket->priority != null): ?>
																<tr>
																	<td>
																		<span class="w-50"><?php echo e(trans('langconvert.admindashboard.ticketpriority')); ?></span>
																	</td>
																	<td>:</td>
																	<td id="priorityid">
																		<?php if($ticket->priority == "Low"): ?>

																			<span class="badge badge-success-light" ><?php echo e($ticket->priority); ?></span>
																			<button  id="priority" class="p-1 border border-primary br-7 text-white bg-primary ms-2"> 
																				<i class="feather feather-edit-2" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Change priority" aria-label="Add priority"></i>
																			</button>
																		<?php elseif($ticket->priority == "High"): ?>

																			<span class="badge badge-danger-light"><?php echo e($ticket->priority); ?></span>
																			<button  id="priority" class="p-1 border border-primary br-7 text-white bg-primary ms-2"> 
																				<i class="feather feather-edit-2" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Change priority" aria-label="Add priority"></i>
																			</button>
																		<?php elseif($ticket->priority == "Critical"): ?>

																			<span class="badge badge-danger-dark"><?php echo e($ticket->priority); ?></span>
																			<button  id="priority" class="p-1 border border-primary br-7 text-white bg-primary ms-2"> 
																				<i class="feather feather-edit-2" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Change priority" aria-label="Add priority"></i>
																			</button>
																		<?php else: ?>

																			<span class="badge badge-warning-light"><?php echo e($ticket->priority); ?></span>
																			<button  id="priority" class="p-1 border border-primary br-7 text-white bg-primary ms-2"> 
																				<i class="feather feather-edit-2" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Change priority" aria-label="Add priority"></i>
																			</button>
																		<?php endif; ?>
																	</td>
																</tr>
																<?php else: ?>

																<tr>
																	<td>
																		<span class="w-50"><?php echo e(trans('langconvert.admindashboard.ticketpriority')); ?></span>
																	</td>
																	<td>:</td>
																	<td id="priorityid">
																		<button  id="priority" class="p-1 border border-primary br-7 text-white bg-primary ms-2"> 
																			<i class="feather feather-plus" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Change priority" aria-label="Add priority"></i>
																		</button>

																		
																	</td>
																</tr>
																<?php endif; ?>

																<tr>
																	<td>
																		<span class="w-50"><?php echo e(trans('langconvert.admindashboard.opendate')); ?></span>
																	</td>
																	<td>:</td>
																	<td>
																		<span class="font-weight-semibold"><?php echo e($ticket->created_at->timezone(Auth::user()->timezone)->format(setting('date_format'))); ?></span>
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
												<div class="card-footer  ticket-buttons">
													<?php if($ticket->status == 'Closed'): ?>

														<button class="btn btn-secondary my-1" id="reopen" data-id="<?php echo e($ticket->id); ?>"> <i class="feather feather-rotate-ccw"></i> <?php echo e(trans('langconvert.admindashboard.reopen')); ?></button>
														<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Ticket Assign')): ?>
														<?php if($ticket->toassignuser == null): ?>

														<button data-id="<?php echo e($ticket->id); ?>" id="assigned" class="btn btn-primary my-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Assign" disabled>
															<i class="feather feather-users"></i> <?php echo e(trans('langconvert.admindashboard.assign')); ?>

														</button>
														<?php else: ?>

															<?php if($ticket->toassignuser_id != null): ?>

															<div class="btn-group my-1" role="group" aria-label="Basic outlined example">
																<button  data-id="<?php echo e($ticket->id); ?>"  class="btn btn-primary" id="assigned" data-bs-toggle="tooltip" data-bs-placement="top" title="Change" disabled><?php echo e($ticket->toassignuser->name); ?></button>
																<button  data-id="<?php echo e($ticket->id); ?>" class="btn btn-primary" id="btnremove" data-bs-toggle="tooltip" data-bs-placement="top" title="Unassign"disabled><i class="fe fe-x" data-id="<?php echo e($ticket->id); ?>"></i></button>
															</div>
															<?php else: ?>

															<button data-id="<?php echo e($ticket->id); ?>" id="assigned" class="btn btn-primary my-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Assign" disabled>
																<i class="feather feather-users"></i> <?php echo e(trans('langconvert.admindashboard.assign')); ?>

															</button>
															<?php endif; ?>
														<?php endif; ?>
														<?php endif; ?>
													<?php else: ?>
														<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Ticket Assign')): ?>
														<?php if($ticket->toassignuser == null): ?>

															<button data-id="<?php echo e($ticket->id); ?>" id="assigned" class="btn btn-primary my-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Assign">
																<i class="feather feather-users"></i> <?php echo e(trans('langconvert.admindashboard.assign')); ?>

															</button>
														<?php else: ?>
															<?php if($ticket->toassignuser_id != null): ?>

															<div class="btn-group my-1" role="group" aria-label="Basic outlined example">
																<button  data-id="<?php echo e($ticket->id); ?>"  class="btn btn-primary" id="assigned" data-bs-toggle="tooltip" data-bs-placement="top" title="Change"><?php echo e($ticket->toassignuser->name); ?></button>
																<button  data-id="<?php echo e($ticket->id); ?>" class="btn btn-primary" id="btnremove"><i class="fe fe-x" data-id="<?php echo e($ticket->id); ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Unassign"></i></button>
															</div>
															<?php else: ?>

															<button data-id="<?php echo e($ticket->id); ?>" id="assigned" class="btn btn-primary my-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Assign">
																<i class="feather feather-users"></i> <?php echo e(trans('langconvert.admindashboard.assign')); ?>

															</button>
															<?php endif; ?>
														<?php endif; ?>
														<?php endif; ?>
														
													<?php endif; ?>

												</div>
											</div>
											<div class="card">
												<div class="card-header  border-0">
													<div class="card-title"><?php echo e(trans('langconvert.admindashboard.customerdetails')); ?></div>
												</div>
												<div class="card-body text-center pt-2 px-0 pb-0 py-0">
													<div class="profile-pic">
														<div class="profile-pic-img mb-2">
															<span class="bg-success dots" data-bs-toggle="tooltip" data-bs-placement="top" title="Online"></span>
															<?php if($ticket->cust->image == null): ?>

																<img src="<?php echo e(asset('uploads/profile/user-profile.png')); ?>"  class="brround avatar-xxl" alt="default">
															<?php else: ?>

																<img class="brround avatar-xxl" alt="<?php echo e($ticket->cust->image); ?>" src="<?php echo e(asset('uploads/profile/'. $ticket->cust->image)); ?>">
															<?php endif; ?>

														</div>
														<a href="#" class="text-dark">
															<h5 class="mb-1 font-weight-semibold2"><?php echo e($ticket->cust->username); ?></h5>
															<small class="text-muted "><?php echo e($ticket->cust->email); ?>

															</small>
														</a>
													</div>
													<div class="table-responsive text-start tr-lastchild">
														<table class="table mb-0 table-information">
															<tbody>
																<tr>
																	<td>
																		<span class="w-50"><?php echo e(trans('langconvert.admindashboard.ip')); ?></span>
																	</td>
																	<td>:</td>
																	<td>
																		<span class="font-weight-semibold"><?php echo e($ticket->cust->last_login_ip); ?></span>
																	</td>
																</tr>
																<tr>
																	<td>
																		<span class="w-50"><?php echo e(trans('langconvert.admindashboard.mobilenumber')); ?></span>
																	</td>
																	<td>:</td>
																	<td>
																		<span class="font-weight-semibold"><?php echo e($ticket->cust->phone); ?></span>
																	</td>
																</tr>
																<tr>
																	<td>
																		<span class="w-50"><?php echo e(trans('langconvert.admindashboard.country')); ?></span>
																	</td>
																	<td>:</td>
																	<td>
																		<span class="font-weight-semibold"><?php echo e($ticket->cust->country); ?></span>
																	</td>
																</tr>
																<tr>
																	<td>
																		<span class="w-50"><?php echo e(trans('langconvert.admindashboard.timezone')); ?></span>
																	</td>
																	<td>:</td>
																	<td>
																		<span class="font-weight-semibold"><?php echo e($ticket->cust->timezone); ?></span>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
											
											<div class="card">
												<div class="card-header  border-0">
													<div class="card-title"><?php echo e(trans('langconvert.admindashboard.ticketnote')); ?></div>
													<div class="card-options">
														<?php if($ticket->status != 'Closed'): ?>

														<a href="javascript:void(0)" class="btn btn-secondary " id="create-new-note"><i class="feather feather-plus"  ></i></a>
														<?php endif; ?>

													</div>
												</div>
												<?php $emptynote = $ticket->ticketnote()->get() ?>
												<?php if($emptynote->isNOtEmpty()): ?>
												<div class="card-body  item-user">
													<div id="refresh">
														<?php $__currentLoopData = $ticket->ticketnote()->latest()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

														<div class="alert alert-light-warning ticketnote" id="ticketnote_<?php echo e($note->id); ?>" role="alert">
															<?php if($note->user_id == Auth::id()): ?>

															<a href="javascript:" class="ticketnotedelete" data-id="<?php echo e($note->id); ?>" onclick="deletePost(event.target)">
																<i class="feather feather-x" data-id="<?php echo e($note->id); ?>" ></i>
															</a>
															<?php endif; ?>

															<p class="m-0"><?php echo e($note->ticketnotes); ?></p>
															<p class="text-end mb-0"><small><i><b><?php echo e($note->users->name); ?></b> <?php if(!empty($note->users->getRoleNames()[0])): ?> (<?php echo e($note->users->getRoleNames()[0]); ?>) <?php endif; ?></i></small></p>
														</div>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

													</div>
												</div>
												<?php else: ?>
												<div class="card-body">
													<div class="text-center ">
														<div class="avatar avatar-xxl empty-block mb-4">
															<svg xmlns="http://www.w3.org/2000/svg" height="50" width="50" viewBox="0 0 48 48"><path fill="#CDD6E0" d="M12.8 4.6H38c1.1 0 2 .9 2 2V46c0 1.1-.9 2-2 2H6.7c-1.1 0-2-.9-2-2V12.7l8.1-8.1z"/><path fill="#ffffff" d="M.1 41.4V10.9L11 0h22.4c1.1 0 2 .9 2 2v39.4c0 1.1-.9 2-2 2H2.1c-1.1 0-2-.9-2-2z"/><path fill="#CDD6E0" d="M11 8.9c0 1.1-.9 2-2 2H.1L11 0v8.9z"/><path fill="#FFD05C" d="M15.5 8.6h13.8v2.5H15.5z"/><path fill="#dbe0ef" d="M6.3 31.4h9.8v2.5H6.3zM6.3 23.8h22.9v2.5H6.3zM6.3 16.2h22.9v2.5H6.3z"/><path fill="#FFD15C" d="M22.8 35.7l-2.6 6.4 6.4-2.6z"/><path fill="#334A5E" d="M21.4 39l-1.2 3.1 3.1-1.2z"/><path fill="#FF7058" d="M30.1 18h5.5v23h-5.5z" transform="rotate(-134.999 32.833 29.482)"/><path fill="#40596B" d="M46.2 15l1 1c.8.8.8 2 0 2.8l-2.7 2.7-3.9-3.9 2.7-2.7c.9-.6 2.2-.6 2.9.1z"/><path fill="#F2F2F2" d="M39.1 19.3h5.4v2.4h-5.4z" transform="rotate(-134.999 41.778 20.536)"/></svg>
														</div>
														<h4 class="mb-2"><?php echo e(trans('langconvert.newwordslang.ticketnotetitle')); ?></h4>
														<span class="text-muted"><?php echo e(trans('langconvert.newwordslang.ticketnotedes')); ?></span>
													</div>
												</div>
												<?php endif; ?>
											</div>
											
										</div>
									</div>
								</div>
							</div>

						<?php $__env->stopSection(); ?>

		<?php $__env->startSection('scripts'); ?>
		
		<!-- INTERNAL Summernote js  -->
		<script src="<?php echo e(asset('assets/plugins/summernote/summernote.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- INTERNAL Index js-->
		<script src="<?php echo e(asset('assets/js/support/support-ticketview.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- DropZone JS -->
		<script src="<?php echo e(asset('assets/plugins/dropzone/dropzone.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- galleryopen JS -->
		<script src="<?php echo e(asset('assets/plugins/simplelightbox/simplelightbox.js')); ?>?v=<?php echo time(); ?>"></script>
		<script src="<?php echo e(asset('assets/plugins/simplelightbox/light-box.js')); ?>?v=<?php echo time(); ?>"></script>

		<!-- INTERNAL Sweet-Alert js-->
		<script src="<?php echo e(asset('assets/plugins/sweet-alert/sweetalert.min.js')); ?>?v=<?php echo time(); ?>"></script>	
		<script src="<?php echo e(asset('assets/js/select2.js')); ?>?v=<?php echo time(); ?>"></script>

		<!--Showmore Js-->
		<script src="<?php echo e(asset('assets/js/jquery.showmore.js')); ?>?v=<?php echo time(); ?>"></script>

		<script type="text/javascript">

			"use strict";

			// Image Upload
			var uploadedDocumentMap = {}
			Dropzone.options.documentDropzone = {
			  url: '<?php echo e(url('/admin/ticket/imageupload/' .$ticket->ticket_id)); ?>',
			  maxFilesize: '<?php echo e(setting('FILE_UPLOAD_MAX')); ?>', // MB
			  addRemoveLinks: true,
			  acceptedFiles: '<?php echo e(setting('FILE_UPLOAD_TYPES')); ?>',
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

			// Delete Media
			function deleteticket(event) {
                var id  = $(event).data("id");
                let _url = `<?php echo e(url('/admin/image/delete/${id}')); ?>`;

                let _token   = $('meta[name="csrf-token"]').attr('content');

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
								url: _url,
								type: 'DELETE',
								data: {
								_token: _token
								},
								success: function(response) {
									$("#imageremove"+id).remove();
									$('#imageremove'+ id).remove();
								},
								error: function (data) {
								console.log('Error:', data);
								}
							});
						}
					});
            }
	
			<?php if($ticket->status != "Closed"): ?>
			
			// onhold ticket status 
			let hold = document.getElementById('onhold');
			let text = document.querySelector('.status');
			let hold1 = document.querySelectorAll('.hold');
			let  status = false;

			hold.addEventListener('click',(e)=>{
				if( status == false)
					statusDiv();
					status = true;
			}, false)

			if(document.getElementById('onhold').hasAttribute("checked") == true){
				statusDiv();
				status = true;
			}
			
			function statusDiv(){
				let Div = document.createElement('div')
				Div.setAttribute('class','d-block pt-4');
				Div.setAttribute('id','holdremove');

				let newField = document.createElement('textarea');
				newField.setAttribute('type','text');
				newField.setAttribute('name','note');
				newField.setAttribute('class',`form-control <?php $__errorArgs = ['note'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>`);
				newField.setAttribute('rows',3);
				newField.setAttribute('placeholder','Leave a message for On-Hold');
				newField.innerText = `<?php echo e(old('note',$ticket->note)); ?>`;
				Div.append(newField);
				text.append(Div);
			}


			hold1.forEach((element,index)=>{
				element.addEventListener('click',()=>{
					let myobj = document.getElementById("holdremove");
					myobj?.remove();

					status = false
				}, false)
			})

			<?php endif; ?>

				// Variables
				var SITEURL = '<?php echo e(url('')); ?>';

				// Csrf field
				$.ajaxSetup({
					headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				/*  When user click add note button */
				$('#create-new-note').on('click', function () {
					$('#btnsave').val("create-product");
					$('#ticket_id').val(`<?php echo e($ticket->id); ?>`);
					$('#note_form').trigger("reset");
					$('.modal-title').html("Add Note");
					$('#addnote').modal('show');

				});

				// Note Submit button
				$('body').on('submit', '#note_form', function (e) {
					e.preventDefault();
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
						url: SITEURL + "/admin/note/create",
						data: formData,
						cache:false,
						contentType: false,
						processData: false,

						success: (data) => {
							$('#note_form').trigger("reset");
							$('#addnote').modal('hide');
							$('#btnsave').html('Save Changes');
							location.reload();
							toastr.success(data.success);

						},
						error: function(data){
							console.log('Error:', data);
							$('#btnsave').html('Save Changes');
						}
					});
				});

				// when user click its get modal popup to assigned the ticket
				$('body').on('click', '#assigned', function () {
					var assigned_id = $(this).data('id');
					$('.select1-show-search').select2({
						dropdownParent: ".sprukosearch",
						minimumResultsForSearch: '',
						placeholder: "Search",
						width: '100%'
					});

					$.post('ticketassigneds/' + assigned_id , function (data) {
						$('#AssignError').html('');
						$('#assigned_id').val(data.assign_data.id);
						$(".modal-title").text('Assign To Agent');
						$('#username').html(data.table_data);
						$('#addassigned').modal('show');
					});

				});
		
				// Assigned Button submit 
				$('body').on('submit', '#assigned_form', function (e) {
					e.preventDefault();
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
						url: SITEURL + "/admin/assigned/create",
						data: formData,
						cache:false,
						contentType: false,
						processData: false,
						success: (data) => {
							$('#AssignError').html('');
							$('#assigned_form').trigger("reset");
							$('#addassigned').modal('hide');
							$('#btnsave').html('Save Changes');
							toastr.success(data.success);
							location.reload();
						},
						error: function(data){
							$('#AssignError').html('');
							$('#AssignError').html(data.responseJSON.errors.assigned_user_id);
							$('#btnsave').html('Save Changes');
							
						}
					});	
				});

				// Remove the assigned from the ticket
				$('body').on('click', '#btnremove', function () {
					var asid = $(this).data("id");

					swal({
							title: `<?php echo e(trans('langconvert.admindashboard.agentremove')); ?>`,
							text: "<?php echo e(trans('langconvert.admindashboard.agentremove1')); ?>",
							icon: "warning",
							buttons: true,
							dangerMode: true,
						})
						.then((willDelete) => {
						if (willDelete) {

							$.ajax({
								type: "get",
								url: SITEURL + "/admin/assigned/update/"+asid,
								success: function (data) {
								toastr.error(data.error);
								location.reload();
								
								},
								error: function (data) {
								console.log('Error:', data);
								}
								});

						}
					});



				});

				// Reopen the ticket
				$('body').on('click', '#reopen', function(){
					var reopenid = $(this).data('id');
					$.ajax({
						type:'POST',
						url: SITEURL + "/admin/ticket/reopen/" + reopenid,
						data: {
							reopenid:reopenid
						},
						success:function(data){
							
							toastr.success(data.success);
							window.location.reload();
							
						},
						error:function(data){
							toastr.error(data);
						}
					});

				});

				// change priority
				$('#priority').on('click', function () {

					$('#PriorityError').html('');
					$('#btnsave').val("save");
					$('#priority_form').trigger("reset");
					$('.modal-title').html("Priority");
					$('#addpriority').modal('show');
					$('.select2_modalpriority').select2({
						dropdownParent: ".sprukopriority",
						minimumResultsForSearch: '',
						placeholder: "Search",
						width: '100%'
					});


				});

				$('body').on('submit', '#priority_form', function (e) {
					e.preventDefault();
					var actionType = $('#pribtnsave').val();
					var fewSeconds = 2;
					$('#btnsave').html('Sending..');
					var formData = new FormData(this);
					$.ajax({
					type:'POST',
					url: SITEURL + "/admin/priority/change",
					data: formData,
					cache:false,
					contentType: false,
					processData: false,

					success: (data) => {
					$('#PriorityError').html('');
					$('#priority_form').trigger("reset");
					$('#addpriority').modal('hide');
					$('#pribtnsave').html('Save Changes');
					location.reload();
					toastr.success(data.success);
					

					},
					error: function(data){
						$('#PriorityError').html('');
						$('#PriorityError').html(data.responseJSON.errors.priority_user_id);
						$('#btnsave').html('Save Changes');
					}
					});
				});
				// end priority

				// category list
				$('body').on('click', '.sprukocategory', function(){

					var category_id = $(this).data('id');
					$('.modal-title').html("Category");
					$('#CategoryError').html('');
					$('#addcategory').modal('show');

					
					$.ajax({
						type: "get",
						url: SITEURL + "/admin/category/list/" + category_id,
						success: function(data){
							$('.select4-show-search').select2({
								dropdownParent: ".sprukosearchcategory",
							});
							$('.subcategoryselect').select2({
								dropdownParent: ".sprukosearchcategory",
							});
							$('#sprukocategory').html(data.table_data);
							$('.ticket_id').val(data.ticket.id);
							
							if(data.ticket.project != null){
								$('#subcategory')?.empty();
								$('#selectSubCategory .removecategory')?.remove();
								let selectDiv = document.querySelector('#selectSubCategory');
								let Divrow = document.createElement('div');
								Divrow.setAttribute('class','removecategory');
								let selectlabel =  document.createElement('label');
								selectlabel.setAttribute('class','form-label')
								selectlabel.innerText = "Projects";
								let selecthSelectTag =  document.createElement('select');
								selecthSelectTag.setAttribute('class','form-control select2-shows-search');
								selecthSelectTag.setAttribute('id', 'subcategory');
								selecthSelectTag.setAttribute('name', 'project');
								selecthSelectTag.setAttribute('data-placeholder','Select Projects');
								let selectoption = document.createElement('option');
								selectoption.setAttribute('label','Select Projects')
								selectDiv.append(Divrow);
								Divrow.append(selectlabel);
								Divrow.append(selecthSelectTag);
								selecthSelectTag.append(selectoption);
								$('.select2-shows-search').select2({
									dropdownParent: ".sprukosearchcategory",
								});
								$('#subcategory').append(data.projectop);
								
							}

							if(data.ticket.purchasecode != null)
							{
								$('#envato_id')?.empty();
								$('#envatopurchase .row')?.remove();
								let selectDiv = document.querySelector('#envatopurchase');
								let Divrow = document.createElement('div');
								Divrow.setAttribute('class','row');
								let Divcol3 = document.createElement('div');
								let selectlabel =  document.createElement('label');
								selectlabel.setAttribute('class','form-label')
								selectlabel.innerHTML = "Envato Purchase Code <span class='text-red'>*</span>";
								let divcol9 = document.createElement('div');
								let selecthSelectTag =  document.createElement('input');
								selecthSelectTag.setAttribute('class','form-control');
								selecthSelectTag.setAttribute('type','search');
								selecthSelectTag.setAttribute('id', 'envato_id');
								selecthSelectTag.setAttribute('name', 'envato_id');
								selecthSelectTag.setAttribute('placeholder', 'Update Your Purchase Code');
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
							}

							if(data.ticket.subcategory != null){

								$('#selectssSubCategory').show()
								$('#subscategory').html(data.subcategoryt);
								
							}else{
								if(!data.subcategoryt){
									$('#selectssSubCategory').hide();
								}else{
									$('#selectssSubCategory').show()
									$('#subscategory').html(data.subcategoryt);
								}
							}
							
						},
						error: function(data){

						}
					});


				});


				// when category change its get the subcat list 
				$('body').on('change', '#sprukocategory', function(e) {
					var cat_id = e.target.value;
					$('#selectssSubCategory').hide();
					$.ajax({
						url:"<?php echo e(route('guest.subcategorylist')); ?>",
						type:"POST",
							data: {
							cat_id: cat_id
							},
						success:function (data) {

							if(data.subcategoriess)
							{
								$('#selectssSubCategory').show()
								$('#subscategory').html(data.subcategoriess)
							}
							else
							{
								$('#selectssSubCategory').hide();
								$('#subscategory').html('')
							}

							// Envato access
							if(data.envatosuccess.length >= 1)
							{
								
								$('.sprukoapiblock').attr('disabled', true);
								$('#envato_id')?.empty();
								$('#envatopurchase .row')?.remove();
								let selectDiv = document.querySelector('#envatopurchase');
								let Divrow = document.createElement('div');
								Divrow.setAttribute('class','row');
								let Divcol3 = document.createElement('div');
								let selectlabel =  document.createElement('label');
								selectlabel.setAttribute('class','form-label')
								selectlabel.innerHTML = "Envato Purchase Code <span class='text-red'>*</span>";
								let divcol9 = document.createElement('div');
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
								$('.sprukoapiblock').removeAttr('disabled');
								$('.purchasecode').removeAttr('disabled');
							}


							// projectlist
							if(data.subcategories.length >= 1){
							
								$('#subcategory')?.empty();
								$('#selectSubCategory .removecategory')?.remove();
								let selectDiv = document.querySelector('#selectSubCategory');
								let Divrow = document.createElement('div');
								Divrow.setAttribute('class','removecategory');
								let selectlabel =  document.createElement('label');
								selectlabel.setAttribute('class','form-label')
								selectlabel.innerText = "Projects";
								let selecthSelectTag =  document.createElement('select');
								selecthSelectTag.setAttribute('class','form-control select2-show-search');
								selecthSelectTag.setAttribute('id', 'subcategory');
								selecthSelectTag.setAttribute('name', 'project');
								selecthSelectTag.setAttribute('data-placeholder','Select Projects');
								let selectoption = document.createElement('option');
								selectoption.setAttribute('label','Select Projects')
								selectDiv.append(Divrow);
								Divrow.append(selectlabel);
								Divrow.append(selecthSelectTag);
								selecthSelectTag.append(selectoption);
								//
								$('.select2-show-search').select2();
								$.each(data.subcategories,function(index,subcategory){
								$('#subcategory').append('<option value="'+subcategory.name+'">'+subcategory.name+'</option>');
								})
							}
							else{
								$('#subcategory')?.empty();
								$('#selectSubCategory .removecategory')?.remove();
							}
						}
					})
				});


				// category submit form
				$('body').on('submit', '#sprukocategory_form', function(e){
					e.preventDefault();
					var actionType = $('#pribtnsave').val();
					var fewSeconds = 2;
					$('#btnsave').html('Sending..');
					var formData = new FormData(this);
					$.ajax({
						type:'POST',
						url: SITEURL + "/admin/category/change",
						data: formData,
						cache:false,
						contentType: false,
						processData: false,

						success: (data) => {
							$('#CategoryError').html('');
							$('#sprukocategory_form').trigger("reset");
							$('#addcategory').modal('hide');
							$('#pribtnsave').html('Save Changes');
							toastr.success(data.success);
							window.location.reload();
							

						},
						error: function(data){
							$('#CategoryError').html('');
							$('#CategoryError').html(data.responseJSON.errors.category);
							$('#btnsave').html('Save Changes');
						}
					});
				})

				<?php $module = Module::all(); ?>

				<?php if(in_array('Uhelpupdate', $module)): ?>

				// Purchase Code Validation
				$("body").on('keyup', '#envato_id', function() {
					let value = $(this).val();
					if (value != '') {
						var _token = $('input[name="_token"]').val();
						$.ajax({
							url: "<?php echo e(route('guest.envatoverify')); ?>",
							method: "POST",
							data: {data: value, _token: _token},

							dataType:"json",

							success: function (data) {
								if(data.valid == 'true'){
									$('#envato_id').attr('readonly', true);
									$('#envato_id').addClass('is-valid');
									$('.sprukoapiblock').removeAttr('disabled');
									$('#envato_id').css('border', '1px solid #02f577');
									$('#envato_support').val('Supported');
									toastr.success(data.message);
								}
								if(data.valid == 'expried'){
									<?php if(setting('ENVATO_EXPIRED_BLOCK') == 'on'): ?>
									
									$('.sprukoapiblock').attr('disabled', true);
									$('.purchasecode').attr('disabled', true);
									$('#envato_id').css('border', '1px solid #e13a3a');
									$('#envato_support').val('Expired');
									toastr.error(data.message);
									<?php endif; ?>
									<?php if(setting('ENVATO_EXPIRED_BLOCK') == 'off'): ?>
									$('.sprukoapiblock').removeAttr('disabled');
									$('#envato_id').addClass('is-valid');
									$('#envato_id').attr('readonly', true);
									$('.purchasecode').removeAttr('disabled');
									$('#envato_id').css('border', '1px solid #02f577');
									$('#envato_support').val('Expired');
									toastr.warning(data.message);
									<?php endif; ?>
								}
								if(data.valid == 'false'){
									$('.sprukoapiblock').attr('disabled', true);
									$('#envato_id').css('border', '1px solid #e13a3a');
									toastr.error(data.message);
								}
								
							
							},
							error: function (data) {

							}
						});
					}else{
						toastr.error('Purchase Code field is Required');
						$('.purchasecode').attr('disabled', true);
						$('#envato_id').css('border', '1px solid #e13a3a');
					}
				});

				<?php endif; ?>

			// delete note dunction
			function deletePost(event) {
				var id  = $(event).data("id");
				let _url = `<?php echo e(url('/admin/ticketnote/delete/${id}')); ?>`;

				let _token   = $('meta[name="csrf-token"]').attr('content');

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
							url: _url,
							type: 'DELETE',
							data: {
							_token: _token
							},
							success: function(response) {
								toastr.error(response.error);
								$("#ticketnote_"+id).remove();
							},
							error: function (data) {
								console.log('Error:', data);
							}
						});
					}
				});
			}

			// Scrolling Js Start
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
					console.log(data.html);
				})
				.fail(function(jqXHR, ajaxOptions, thrownError)
				{
					alert('server not responding...');
				});
			}

			// End Scrolling Js 

			// ReadMore JS
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

			// ReadMore Js End

			// PURCHASE CODE DETAILS GETS
			$('body').on('click', '#purchasecodebtn', function()
			{
				var envatopurchase_id = $(this).data('id');

				<?php if(Auth::check() && Auth::id() == '1'): ?>
				var envatopurchase_i = envatopurchase_id;
				<?php else: ?>
				<?php if(setting('purchasecode_on') == 'on'): ?>
				var envatopurchase_i = envatopurchase_id;
				<?php else: ?>
				var trailingCharsIntactCount = 4;

				var envatopurchase_i = new Array(envatopurchase_id.length - trailingCharsIntactCount + 1).join('*') + envatopurchase_id.slice( -trailingCharsIntactCount);
				<?php endif; ?>
				<?php endif; ?>

				$('.modal-title').html('Purchase Details');
				$('.purchasecode').html(envatopurchase_i);
				$('#addpurchasecode').modal('show');
				$('#purchasedata').html('');

				$.ajax({
					url:"<?php echo e(route('admin.ticketlicenseverify')); ?>",
					type:"POST",
					data: {
						envatopurchase_id: envatopurchase_id
					},
					success:function (data) {
						$('#purchasedata').html(data);
					},
					error:function(data){
						$('#purchasedata').html('');
					}

				});
			});

			// Canned Maessage Select2
			$('.cannedmessage').select2({
				minimumResultsForSearch: '',
				placeholder: "Search",
				width: '100%'
			});

			// On Change Canned Messages display
			$('body').on('change', '#cannedmessagess', function(){
				let optval = $(this).val();
				$('.note-editable').html(optval);
				$('.summernote').html(optval);
			})

		</script>

		<?php $__env->stopSection(); ?>

			<?php $__env->startSection('modal'); ?>
		
	  		<!-- Add note-->
			<div class="modal fade"  id="addnote" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" ></h5>
							<button  class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<form method="POST" enctype="multipart/form-data" id="note_form" name="note_form">
							<input type="hidden" name="ticket_id" id="ticket_id">
							<?php echo csrf_field(); ?>
							<?php echo view('honeypot::honeypotFormFields'); ?>
							<div class="modal-body">
								
								<div class="form-group">
									<label class="form-label">Note:</label>
									<textarea class="form-control" rows="4" name="ticketnote" id="note" required></textarea>
									<span id="noteError" class="text-danger alert-message"></span>
								</div>
								
							</div>
							<div class="modal-footer">
								<a href="#" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</a>
								<button type="submit" class="btn btn-secondary" id="btnsave"  >Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- End  Add note  -->
	
			<!-- Assigned Tickets-->
			<div class="modal fade sprukosearch"  id="addassigned" role="dialog" aria-hidden="true" >
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" ></h5>
							<button  class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<form method="POST" enctype="multipart/form-data" id="assigned_form" name="assigned_form">
							<?php echo csrf_field(); ?>
							<?php echo view('honeypot::honeypotFormFields'); ?>
							<input type="hidden" name="assigned_id" id="assigned_id">
							<?php echo csrf_field(); ?>
							<div class="modal-body">
	
								<div class="custom-controls-stacked d-md-flex" >
									<select class="form-control select1-show-search filll" data-placeholder="Select Agent" name="assigned_user_id" id="username" >
	
									</select>
								</div>
								<span id="AssignError" class="text-danger"></span>
							</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-secondary" id="btnsave"  >Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- End Assigned Tickets  -->


			<!-- Priority Tickets-->
			<div class="modal fade sprukopriority"  id="addpriority" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" ></h5>
							<button  class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<form method="POST" enctype="multipart/form-data" id="priority_form" name="priority_form">
							<?php echo csrf_field(); ?>
							<?php echo view('honeypot::honeypotFormFields'); ?>
							<input type="hidden" name="priority_id" id="priority_id" value="<?php echo e($ticket->id); ?>">
							<?php echo csrf_field(); ?>
							<div class="modal-body">
	
								<div class="custom-controls-stacked d-md-flex" >
									<select class="form-control select2_modalpriority" data-placeholder="Select Priority" name="priority_user_id" id="priority" >
										<option label="Select Priority"></option>
										<option value="Critical" <?php echo e(($ticket->priority == 'Critical')? 'selected' :''); ?>>Critical</option>
										<option value="High" <?php echo e(($ticket->priority == 'High')? 'selected' :''); ?>>High</option>
										<option value="Medium" <?php echo e(($ticket->priority == 'Medium')? 'selected' :''); ?>>Medium</option>
										<option value="Low" <?php echo e(($ticket->priority == 'Low')? 'selected' :''); ?>>Low</option>
									</select>	
								</div>
								<span id="PriorityError" class="text-danger"></span>
							</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-secondary" id="pribtnsave" >Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- End priority Tickets  -->

			<?php echo $__env->make('admin.viewticket.modalpopup.categorymodalpopup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

			<!-- PurchaseCode Modals -->
			<div class="modal fade sprukopurchasecode"  id="addpurchasecode" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" ></h5>
							<button  class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<input type="hidden" name="purchasecode_id" id="purchasecode_id" value="">
						<div class="modal-body">
							<div class="mb-4">
								<strong><?php echo e(trans('Puchase Code')); ?> :</strong>
								<span class="purchasecode"></span>
							</div>
							<div id="purchasedata">

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End PurchaseCode Modals   -->

			<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.adminmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/admin/viewticket/showticket.blade.php ENDPATH**/ ?>