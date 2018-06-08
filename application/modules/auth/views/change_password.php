<!-- Common Pages -->
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1><?php echo lang('change_password_heading');?></h1>
				</section>

				<!-- Main content -->
				<section class="content">
					<!-- Your Page Content Here -->
					<?php if($message != '') { ?>
					<div class="alert alert-danger alert-dismissible">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<p><?php echo $message;?></p>
					</div>
					<?php } ?>
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Change Password</h3>
						</div>
						<!-- /.box-header -->
						<?php echo form_open("auth/change_password");?>
							<div class="box-body">
								<div class="form-group">
									<?php echo lang('change_password_old_password_label', 'old_password');?> <br />
									<?php echo form_input($old_password);?>
								</div>

								<div class="form-group">
									<label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label> <br />
									<?php echo form_input($new_password);?>
								</div>

								<div class="form-group">
									<?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> <br />
									<?php echo form_input($new_password_confirm);?>
								</div>
								<?php echo form_input($user_id);?>
							</div>
							<div class="box-footer">
								<?php echo form_submit('submit', lang('change_password_submit_btn'), 'class="btn btn-primary"');?>
							</div>
						<?php echo form_close();?>
					</div>
				</section>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->