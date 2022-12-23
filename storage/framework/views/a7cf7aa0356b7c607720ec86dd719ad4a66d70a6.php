


		<?php $__env->startSection('styles'); ?>

		<!-- INTERNAl Tag css -->
		<link href="<?php echo e(asset('assets/plugins/taginput/bootstrap-tagsinput.css')); ?>?v=<?php echo time(); ?>" rel="stylesheet" />

		<?php $__env->stopSection(); ?>


							<?php $__env->startSection('content'); ?>

							<!--Page header-->
							<div class="page-header d-xl-flex d-block">
								<div class="page-leftheader">
									<h4 class="page-title"><span class="font-weight-normal text-muted ms-2"><?php echo e(trans('langconvert.adminmenu.ticketsetting')); ?></span></h4>
								</div>
							</div>
							<!--End Page header-->


							<!-- Ticket Settings-->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card ">
									<div class="card-header border-0">
										<h4 class="card-title"><?php echo e(trans('langconvert.adminmenu.ticketsetting')); ?></h4>
									</div>
									<form method="POST" action="<?php echo e(route('settings.ticket.store')); ?>" enctype="multipart/form-data">
										<div class="card-body" >
											<?php echo csrf_field(); ?>

											<?php echo view('honeypot::honeypotFormFields'); ?>
											<div class="row">
												<!---RE-OPEN TICKET--->
												<div class="border-bottom">
													<div class="col-sm-12 col-md-12">
														<div class="form-group <?php echo e($errors->has('USER_REOPEN_ISSUE') ? ' has-danger' : ''); ?>">
															<div class="switch_section">
																<div class="switch-toggle d-flex mt-4">
																	<a class="onoffswitch2">
																		<input type="checkbox" id="myonoffswitch18" name="USER_REOPEN_ISSUE" value="yes"  class=" toggle-class onoffswitch2-checkbox"  <?php if(setting('USER_REOPEN_ISSUE') == 'yes'): ?> checked="" <?php endif; ?>>
																		<label for="myonoffswitch18" class="toggle-class onoffswitch2-label" ></label>
																	</a>
																	<div class="ps-3">
																		<label class="form-label"><?php echo e(trans('langconvert.admindashboard.customerreopenticket')); ?></label>
																		<small class="text-muted ">
																			<i><?php echo e(trans('langconvert.admindashboard.customerreopenticketcontent')); ?></i></small>
																	</div>
																</div>
															</div>
															<?php if($errors->has('USER_REOPEN_ISSUE')): ?>

																<span class="invalid-feedback" role="alert">
																	<strong><?php echo e($errors->first('USER_REOPEN_ISSUE')); ?></strong>
																</span>
															<?php endif; ?>

														</div>
													</div>
													<div class="col-sm-12 col-md-12 ms-7 ps-3 ">
														<div class="form-group d-flex d-md-max-block <?php echo e($errors->has('userreopentime') ? ' is-invalid' : ''); ?>">
															<input type="number" maxlength="2" class="form-control wd-5 w-lg-max-30 ms-2 "  name="userreopentime"  value="<?php echo e(old('userreopentime', setting('USER_REOPEN_TIME'))); ?>">
															<label class="form-label mt-2 ms-2"><?php echo e(trans('langconvert.admindashboard.reopendays')); ?></label>
														</div>
														<?php if($errors->has('userreopentime')): ?>

															<span class="invalid-feedback" role="alert">
																<strong><?php echo e($errors->first('userreopentime')); ?></strong>
															</span>
														<?php endif; ?>

													</div>
												</div>
												<!---END RE-OPEN TICKET--->
												<!---AUTO CLOSE TICKET--->
												<div class="border-bottom">
													<div class="col-sm-12 col-md-12">
														<div class="form-group <?php echo e($errors->has('AUTO_CLOSE_TICKET') ? ' has-danger' : ''); ?>">
															<div class="switch_section">
																<div class="switch-toggle d-flex mt-4">
																	<a class="onoffswitch2">
																		<input type="checkbox" id="myonoffswitch1" name="AUTO_CLOSE_TICKET" value="yes"  class=" toggle-class onoffswitch2-checkbox"  <?php if(setting('AUTO_CLOSE_TICKET') == 'yes'): ?> checked="" <?php endif; ?>>
																		<label for="myonoffswitch1" class="toggle-class onoffswitch2-label" ></label>
																	</a>
																	<div class="ps-3">
																	<label class="form-label"><?php echo e(trans('langconvert.admindashboard.autocloseticket')); ?></label>
																	<small class="text-muted ">
																		<i><?php echo e(trans('langconvert.admindashboard.autocloseticketcontent')); ?></i></small>
																</div>
																</div>
															</div>
															<?php if($errors->has('AUTO_CLOSE_TICKET')): ?>

																<span class="invalid-feedback" role="alert">
																	<strong><?php echo e($errors->first('AUTO_CLOSE_TICKET')); ?></strong>
																</span>
															<?php endif; ?>

														</div>
													</div>
													
													<div class="col-sm-12 col-md-12 ms-7">
														<div class="form-group d-flex d-md-max-block <?php echo e($errors->has('autoclosetickettime') ? ' is-invalid' : ''); ?>">
															<input type="number" maxlength="2" class="form-control wd-5 w-lg-max-30 ms-2"  name="autoclosetickettime"  value="<?php echo e(old('autoclosetickettime', setting('AUTO_CLOSE_TICKET_TIME'))); ?>">
															<label class="form-label  mt-2 ms-2"><?php echo e(trans('langconvert.admindashboard.autoclosedays')); ?></label>
														</div>
														<?php if($errors->has('autoclosetickettime')): ?>

															<span class="invalid-feedback" role="alert">
																<strong><?php echo e($errors->first('autoclosetickettime')); ?></strong>
															</span>
														<?php endif; ?>
													</div>
												</div>
												<!--- END AUTO CLOSE TICKET--->
												<!---AUTO OVERDUE TICKET--->
												<div class="border-bottom">
													<div class="col-sm-12 col-md-12">
														<div class="form-group <?php echo e($errors->has('AUTO_OVERDUE_TICKET') ? ' has-danger' : ''); ?>">
															<div class="switch_section">
																<div class="switch-toggle d-flex mt-4">
																	<a class="onoffswitch2">
																		<input type="checkbox" id="myonoffswitch1" name="AUTO_OVERDUE_TICKET" value="yes"  class=" toggle-class onoffswitch2-checkbox"  <?php if(setting('AUTO_OVERDUE_TICKET') == 'yes'): ?> checked="" <?php endif; ?>>
																		<label for="myonoffswitch1" class="toggle-class onoffswitch2-label" ></label>
																	</a>
																	<div class="ps-3">
																		<label class="form-label"><?php echo e(trans('langconvert.admindashboard.autoticketoverdue')); ?></label>
																		<small class="text-muted ">
																			<i><?php echo e(trans('langconvert.admindashboard.autoticketoverduecontent')); ?></i></small>
																	</div>
																</div>
															</div>
															<?php if($errors->has('AUTO_OVERDUE_TICKET')): ?>

																<span class="invalid-feedback" role="alert">
																	<strong><?php echo e($errors->first('AUTO_OVERDUE_TICKET')); ?></strong>
																</span>
															<?php endif; ?>

														</div>
													</div>
													<div class="col-sm-12 col-md-12 ms-7">
														<div class="form-group d-flex d-md-max-block <?php echo e($errors->has('autooverduetickettime') ? ' is-invalid' : ''); ?>">
															<input type="number" maxlength="2" class="form-control wd-5 w-lg-max-30 ms-2 "  name="autooverduetickettime"  value="<?php echo e(old('autooverduetickettime', setting('AUTO_OVERDUE_TICKET_TIME'))); ?>">
															<label class="form-label  mt-2 ms-2"><?php echo e(trans('langconvert.admindashboard.autooverduedays')); ?></label>
														</div>
														<?php if($errors->has('autooverduetickettime')): ?>

															<span class="invalid-feedback" role="alert">
																<strong><?php echo e($errors->first('autooverduetickettime')); ?></strong>
															</span>
														<?php endif; ?>

													</div>
												</div>
												<!--- END AUTO OVERDUE TICKET--->
												<!---AUTO RESPONSETIME TICKET--->
												<div class="border-bottom">
													<div class="col-sm-12 col-md-12">
														<div class="form-group <?php echo e($errors->has('AUTO_RESPONSETIME_TICKET') ? ' has-danger' : ''); ?>">
															<div class="switch_section">
																<div class="switch-toggle d-flex mt-4">
																	<a class="onoffswitch2">
																		<input type="checkbox" id="responsetime" name="AUTO_RESPONSETIME_TICKET" value="yes"  class=" toggle-class onoffswitch2-checkbox"  <?php if(setting('AUTO_RESPONSETIME_TICKET') == 'yes'): ?> checked="" <?php endif; ?>>
																		<label for="responsetime" class="toggle-class onoffswitch2-label" ></label>
																	</a>
																	<div class="ps-3">
																		<label class="form-label"><?php echo e(trans('langconvert.admindashboard.ticketresponsetime')); ?></label>
																		<small class="text-muted ">
																			<i><?php echo e(trans('langconvert.admindashboard.ticketresponsetimecontent')); ?></i></small>
																	</div>
																</div>
															</div>
															<?php if($errors->has('AUTO_RESPONSETIME_TICKET')): ?>

																<span class="invalid-feedback" role="alert">
																	<strong><?php echo e($errors->first('AUTO_RESPONSETIME_TICKET')); ?></strong>
																</span>
															<?php endif; ?>

														</div>
													</div>
													<div class="col-sm-12 col-md-12 ms-7">
														<div class="form-group d-flex d-md-max-block <?php echo e($errors->has('autoresponsetickettime') ? ' is-invalid' : ''); ?>">
															<input type="number" maxlength="2" class="form-control wd-5 w-lg-max-30 ms-2"  name="autoresponsetickettime"  value="<?php echo e(old('autoresponsetickettime', setting('AUTO_RESPONSETIME_TICKET_TIME'))); ?>">
															<label class="form-label mt-2 ms-2"><?php echo e(trans('langconvert.admindashboard.autoreplystatushours')); ?></label>
														</div>
														<?php if($errors->has('autoresponsetickettime')): ?>

															<span class="invalid-feedback" role="alert">
																<strong><?php echo e($errors->first('autoresponsetickettime')); ?></strong>
															</span>
														<?php endif; ?>

													</div>
												</div>
												<!--- END AUTO RESPONSE TICKET--->
												<!---AUTO NOTIFY DELETE TICKET--->
												<div class="border-bottom">
													<div class="col-sm-12 col-md-12">
														<div class="form-group ">
															<div class="switch_section">
																<div class="switch-toggle d-flex mt-4">
																	<a class="onoffswitch2">
																		<input type="checkbox" id="responsetime" name="AUTO_NOTIFICATION_DELETE_ENABLE" value="on"  class=" toggle-class onoffswitch2-checkbox"  <?php if(setting('AUTO_NOTIFICATION_DELETE_ENABLE') == 'on'): ?> checked="" <?php endif; ?>>
																		<label for="responsetime" class="toggle-class onoffswitch2-label" ></label>
																	</a>
																	<div class="ps-3">
																		<label class="form-label"><?php echo e(trans('langconvert.admindashboard.autonotificationsdelete')); ?></label>
																		<small class="text-muted ">
																			<i><?php echo e(trans('langconvert.admindashboard.autonotificationsdeletecontent')); ?></i></small>
																	</div>
																</div>
															</div>
															<?php if($errors->has('AUTO_NOTIFICATION_DELETE_ENABLE')): ?>

																<span class="invalid-feedback" role="alert">
																	<strong><?php echo e($errors->first('AUTO_NOTIFICATION_DELETE_ENABLE')); ?></strong>
																</span>
															<?php endif; ?>

														</div>
													</div>
													<div class="col-sm-12 col-md-12 ms-7">
														<div class="form-group d-flex d-md-max-block <?php echo e($errors->has('autonotificationdeletedays') ? ' is-invalid' : ''); ?>">
															<input type="number" maxlength="2" class="form-control wd-5 w-lg-max-30 ms-2"  name="autonotificationdeletedays"  value="<?php echo e(old('autonotificationdeletedays', setting('AUTO_NOTIFICATION_DELETE_DAYS'))); ?>">
															<label class="form-label mt-2 ms-2"><?php echo e(trans('langconvert.admindashboard.autonotificationdays')); ?></label>
														</div>
														<?php if($errors->has('autonotificationdeletedays')): ?>

															<span class="invalid-feedback" role="alert">
																<strong><?php echo e($errors->first('autonotificationdeletedays')); ?></strong>
															</span>
														<?php endif; ?>

													</div>
												</div>
												<!--- END AUTO  NOTIFY DELETE TICKET--->

												<!---Customer TICKET ID--->
												<div class="border-bottom">
													<div class="col-sm-12 col-md-12 ">
														<div class="form-group mt-2 ms-7 <?php echo e($errors->has('CUSTOMER_TICKETID') ? ' has-danger' : ''); ?>">
															<div class="pb-2">
																<label class="form-label pb-0 mb-0"> <?php echo e(trans('langconvert.admindashboard.customticketid')); ?> <span class="text-red">*</span></label>
																<small class="text-muted "><i><?php echo e(trans('langconvert.admindashboard.customticketidcontent')); ?></i></small>
															</div>
																<input type="text" class="form-control w-20 w-lg-max-30 ms-2 <?php echo e($errors->has('ticketid') ? ' is-invalid' : ''); ?>"  name="ticketid"  value="<?php echo e(old('CUSTOMER_TICKETID', setting('CUSTOMER_TICKETID'))); ?>" required="">
															<?php if($errors->has('ticketid')): ?>

																<span class="invalid-feedback" role="alert">
																	<strong><?php echo e($errors->first('ticketid')); ?></strong>
																</span>
															<?php endif; ?>

														</div>
													</div>
												</div>
												<!---  End Customer TICKET ID--->


												<!--- GUEST TICKET --->
												<div class="col-sm-12 col-md-12">
													<div class="form-group <?php echo e($errors->has('GUEST_TICKET') ? ' has-danger' : ''); ?>">
														<div class="switch_section">
															<div class="switch-toggle d-flex mt-4">
																<a class="onoffswitch2">
																	<input type="checkbox" id="myonoffswitch2" name="GUEST_TICKET" value="yes"  class=" toggle-class onoffswitch2-checkbox"  <?php if(setting('GUEST_TICKET') == 'yes'): ?> checked="" <?php endif; ?>>
																	<label for="myonoffswitch2" class="toggle-class onoffswitch2-label" ></label>
																</a>
																<div class="ps-3">
																	<label class="form-label"><?php echo e(trans('langconvert.admindashboard.guestticketcontrol')); ?></label>
																	<small class="text-muted"><i><?php echo e(trans('langconvert.admindashboard.guestticketcontrolcontent')); ?></i></small>
																</div>
															</div>
														</div>
														<?php if($errors->has('GUEST_TICKET')): ?>

															<span class="invalid-feedback" role="alert">
																<strong><?php echo e($errors->first('GUEST_TICKET')); ?></strong>
															</span>
														<?php endif; ?>

													</div>
												</div>
												<!--- END GUEST TICKET --->
												
												<div class="col-sm-12 col-md-12">
													<div class="form-group <?php echo e($errors->has('USER_FILE_UPLOAD_ENABLE') ? ' has-danger' : ''); ?>">
														<div class="switch_section">
															<div class="switch-toggle d-flex mt-4">
																<a class="onoffswitch2">
																	<input type="checkbox" id="myonoffswitch1823" name="USER_FILE_UPLOAD_ENABLE" value="yes"  class=" toggle-class onoffswitch2-checkbox"  <?php if(setting('USER_FILE_UPLOAD_ENABLE') == 'yes'): ?> checked="" <?php endif; ?>>
																	<label for="myonoffswitch1823" class="toggle-class onoffswitch2-label" ></label>
																</a>
																<div class="ps-3">
																	<label class="form-label"><?php echo e(trans('langconvert.admindashboard.customerfileupload')); ?></label>
																	<small class="text-muted"><i><?php echo e(trans('langconvert.admindashboard.customerfileuploadcontent')); ?></i></small>
																</div>
															</div>
														</div>
														<?php if($errors->has('USER_FILE_UPLOAD_ENABLE')): ?>

															<span class="invalid-feedback" role="alert">
																<strong><?php echo e($errors->first('USER_FILE_UPLOAD_ENABLE')); ?></strong>
															</span>
														<?php endif; ?>

													</div>
												</div>
												<div class="col-sm-12 col-md-12">
													<div class="form-group <?php echo e($errors->has('GUEST_FILE_UPLOAD_ENABLE') ? ' has-danger' : ''); ?>">
														<div class="switch_section">
															<div class="switch-toggle d-flex mt-4">
																<a class="onoffswitch2">
																	<input type="checkbox" id="myonoffswitch1825" name="GUEST_FILE_UPLOAD_ENABLE" value="yes"  class=" toggle-class onoffswitch2-checkbox"  <?php if(setting('GUEST_FILE_UPLOAD_ENABLE') == 'yes'): ?> checked="" <?php endif; ?>>
																	<label for="myonoffswitch1825" class="toggle-class onoffswitch2-label" ></label>
																</a>
																<div class="ps-3">
																	<label class="form-label"><?php echo e(trans('langconvert.admindashboard.guestuserfileupload')); ?></label>
																	<small class="text-muted "><i><?php echo e(trans('langconvert.admindashboard.guestuserfileuploadcontent')); ?></i></small>
																</div>
															</div>
														</div>
														<?php if($errors->has('GUEST_FILE_UPLOAD_ENABLE')): ?>

															<span class="invalid-feedback" role="alert">
																<strong><?php echo e($errors->first('GUEST_FILE_UPLOAD_ENABLE')); ?></strong>
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
							<!-- End Ticket Settings-->

							<!-- File Setting-->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card ">
									<div class="card-header border-0">
										<h4 class="card-title"><?php echo e(trans('langconvert.admindashboard.filesetting')); ?></h4>
									</div>
									<form method="POST" action="<?php echo e(route('settings.file.store')); ?>" enctype="multipart/form-data">
										<div class="card-body" >
											<?php echo csrf_field(); ?>

											<?php echo view('honeypot::honeypotFormFields'); ?>
											<div class="row">
												<div class="col-sm-12 col-md-4">
													<div class="form-group <?php echo e($errors->has('maxfileupload') ? ' has-danger' : ''); ?>">
														<label class="form-label"><?php echo e(trans('uhelpupdate::langconvert.admindashboard.maxfilesupload')); ?></label>
														<div class="d-flex justify-content-center align-items-center">
														<input type="number" maxlength="2"  class="form-control <?php echo e($errors->has('maxfileupload') ? ' is-invalid' : ''); ?>"  name="maxfileupload"  value="<?php echo e(old('maxfileupload', setting('MAX_FILE_UPLOAD'))); ?>">
														
														</div>
														<?php if($errors->has('maxfileupload')): ?>

															<span class="invalid-feedback" role="alert">
																<strong><?php echo e($errors->first('maxfileupload')); ?></strong>
															</span>
														<?php endif; ?>

													</div>
												</div>
												<div class="col-sm-12 col-md-4">
													<div class="form-group <?php echo e($errors->has('fileuploadmax') ? ' has-danger' : ''); ?>">
														<label class="form-label"><?php echo e(trans('langconvert.admindashboard.maxfilesizeupload')); ?></label>
														<div class="d-flex justify-content-center align-items-center">
														<input type="number" maxlength="2"  class="form-control <?php echo e($errors->has('fileuploadmax') ? ' is-invalid' : ''); ?>"  name="fileuploadmax"  value="<?php echo e(old('fileuploadmax', setting('FILE_UPLOAD_MAX'))); ?>">
														<span class="ms-2 font-weight-bold"><?php echo e(trans('langconvert.admindashboard.mb')); ?></span>
														</div>
														<?php if($errors->has('fileuploadmax')): ?>

															<span class="invalid-feedback" role="alert">
																<strong><?php echo e($errors->first('fileuploadmax')); ?></strong>
															</span>
														<?php endif; ?>

													</div>
												</div>

												<div class="col-sm-12 col-md-4">
													<div class="form-group <?php echo e($errors->has('fileuploadtypes') ? ' has-danger' : ''); ?>">
														<label class="form-label"><?php echo e(trans('langconvert.admindashboard.allowfiletypes')); ?></label>
														<div class="d-flex">
															<input type="text"  class="form-control <?php echo e($errors->has('fileuploadtypes') ? ' is-invalid' : ''); ?>" id="tags" data-role="tagsinput"  name="fileuploadtypes"  value="<?php echo e(old('fileuploadtypes', setting('FILE_UPLOAD_TYPES'))); ?>">
															<?php if($errors->has('fileuploadtypes')): ?>

																<span class="invalid-feedback" role="alert">
																	<strong><?php echo e($errors->first('fileuploadtypes')); ?></strong>
																</span>
															<?php endif; ?>
														</div>	
														
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
							<!-- End File Setting-->
			
							<?php $__env->stopSection(); ?>
		<?php $__env->startSection('scripts'); ?>
		
		<!-- INTERNAL TAG js-->
		<script src="<?php echo e(asset('assets/plugins/taginput/bootstrap-tagsinput.js')); ?>?v=<?php echo time(); ?>"></script>

		<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bahonbdc/public_html/ticket/resources/views/admin/generalsetting/ticketsetting.blade.php ENDPATH**/ ?>