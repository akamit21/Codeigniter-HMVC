<!-- Left Side Menu/Navbar -->		
			<!-- Left side column. contains the logo and sidebar -->
			<aside class="main-sidebar">
				<!-- sidebar: style can be found in sidebar.less -->
				<section class="sidebar">					
					<!-- Sidebar Menu -->
					<ul class="sidebar-menu">
						<li class="header">MENU</li>
						<!-- Optionally, you can add icons to the links -->
						<li class="treeview">
							<a href="#"><i class="fa fa-link"></i> <span>Users</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo base_url();?>index.php/auth">User List</a></li>
								<li><a href="<?php echo base_url();?>index.php/auth/create_user">Create User</a></li>
								<li><a href="<?php echo base_url();?>index.php/auth/create_group">Create Group</a></li>
							</ul>
						</li>
						<li><a href="<?php echo base_url();?>index.php/auth/change_password"><i class="fa fa-link"></i> <span>Change Password</span></a></li>
					</ul>
					<!-- /.sidebar-menu -->
				</section>
				<!-- /.sidebar -->
			</aside>