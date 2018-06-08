<!-- Common Pages -->
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1><?php echo lang('edit_user_heading');?></h1>
				</section>

				<!-- Main content -->
				<section class="content">
					<!-- Your Page Content Here -->
					<?php if($message != '') { ?></div>
					<div class="alert alert-danger alert-dismissible">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<p><?php echo $message;?></p>
					</div>
					<?php } ?>
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title"><?php echo lang('edit_user_subheading');?></h3>
						</div>
						<!-- /.box-header -->
						<?php echo form_open(uri_string());?>
							<div class="box-body">
								<div class="form-group">
									<?php echo lang('edit_user_fname_label', 'first_name');?> <br />
									<?php echo form_input($first_name);?>
								</div>

								<div class="form-group">
									<?php echo lang('edit_user_lname_label', 'last_name');?> <br />
									<?php echo form_input($last_name);?>
								</div>

								<div class="form-group">
									<?php echo lang('edit_user_company_label', 'company');?> <br />
									<?php echo form_input($company);?>
								</div>

								<div class="form-group">
									<?php echo lang('edit_user_phone_label', 'phone');?> <br />
									<?php echo form_input($phone);?>
								</div>

								<div class="form-group">
									<?php echo lang('edit_user_password_label', 'password');?> <br />
									<?php echo form_input($password);?>
								</div>

								<div class="form-group">
									<?php echo lang('edit_user_password_confirm_label', 'password_confirm');?><br />
									<?php echo form_input($password_confirm);?>
								</div>

								<div class="form-group">
									<?php if ($this->ion_auth->is_admin()): ?>
    									<h3><?php echo lang('edit_user_groups_heading');?></h3>
    									<?php foreach ($groups as $group):?>
    									    <label class="checkbox">
    									    <?php
    									        $gID=$group['id'];
    									        $checked = null;
    									        $item = null;
    									        foreach($currentGroups as $grp) {
    									            if ($gID == $grp->id) {
    									                $checked= ' checked="checked"';
    									            break;
    									            }
    									        }
    									    ?>
    									    <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
    									    <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
    									    </label>
    									<?php endforeach?>
									<?php endif ?>
								</div>

								<?php echo form_hidden('id', $user->id);?>
      							<?php echo form_hidden($csrf); ?>
							</div>
							<div class="box-footer">
								<?php echo form_submit('submit', lang('edit_user_submit_btn'), 'class="btn btn-primary"');?>
							</div>
						<?php echo form_close();?>
					</div>
				</section>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->