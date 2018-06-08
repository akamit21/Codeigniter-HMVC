<!-- Common Pages -->
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1><?php echo lang('create_user_heading');?></h1>
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
							<h3 class="box-title"><?php echo lang('create_user_subheading');?></h3>
						</div>
						<!-- /.box-header -->
						<?php echo form_open("auth/create_user");?>
							<div class="box-body">
								<div class="form-group">
									<?php echo lang('create_user_fname_label', 'first_name');?><br />
									<?php echo form_input($first_name);?>
								</div>

								<div class="form-group">
									<?php echo lang('create_user_lname_label', 'last_name');?> <br />
									<?php echo form_input($last_name);?>
								</div>

								<?php
								if($identity_column!=='email') {
									echo '<p>';
									echo lang('create_user_identity_label', 'identity');
									echo '<br />';
									echo form_error('identity');
									echo form_input($identity);
									echo '</p>';
								}
								?>
								<div class="form-group">
									<?php echo lang('create_user_company_label', 'company');?> <br />
									<?php echo form_input($company);?>
								</div>

								<div class="form-group">
									<?php echo lang('create_user_email_label', 'email');?> <br />
									<?php echo form_input($email);?>
								</div>

								<div class="form-group">
									<?php echo lang('create_user_phone_label', 'phone');?> <br />
									<?php echo form_input($phone);?>
								</div>

								<div class="form-group">
									<?php echo lang('create_user_password_label', 'password');?> <br />
									<?php echo form_input($password);?>
								</div>

								<div class="form-group">
									<?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
									<?php echo form_input($password_confirm);?>
								</div>
							</div>
							<div class="box-footer">
								<?php echo form_submit('submit', lang('create_user_submit_btn'), 'class="btn btn-primary"');?>
							</div>
						<?php echo form_close();?>
					</div>
				</section>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->