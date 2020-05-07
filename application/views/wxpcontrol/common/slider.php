<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">

		<ul class="sidebar-menu" data-widget="tree">
			<!--  <li class="header">MAIN NAVIGATION</li>
			-->
			<!-- <li class="active treeview">
			-->
			<?php
			$sessionUserType = $this->session->userdata('user_type');
			if ($sessionUserType == 1) {
				?>
				<li
						<?php if ($this->uri->segment(2) == 'dashboard') {
							echo 'class="active"';
						} ?>>
					<a href="
					<?php echo base_url(); ?>admin/dashboard">
						<i class="fa fa-dashboard"></i>
						<span>Dashboard</span>
					</a>
				</li>

				<li
						<?php if ($this->uri->segment(2) == 'projects') {
							echo 'class="active"';
						} ?>>
					<a href="
					<?php echo base_url(); ?>admin/projects">
						<i class="fa fa-dashboard"></i>
						<span>Projects</span>
					</a>
				</li>

				<li
						<?php if ($this->uri->segment(2) == 'employees') {
							echo 'class="active"';
						} ?>>
					<a href="
					<?php echo base_url(); ?>admin/employees">
						<i class="fa fa-dashboard"></i>
						<span>Employees</span>
					</a>
				</li>

				<li
						<?php if ($this->uri->segment(2) == 'vendors') {
							echo 'class="active"';
						} ?>>
					<a href="
					<?php echo base_url(); ?>admin/vendors">
						<i class="fa fa-dashboard"></i>
						<span>Vendors</span>
					</a>
				</li>

				<li
						<?php if ($this->uri->segment(2) == 'available_stoke') {
							echo 'class="active"';
						} ?>>
					<a href="
					<?php echo base_url(); ?>admin/AvailableStoke">
						<i class="fa fa-dashboard"></i>
						<span>Available Stoke</span>
					</a>
				</li>

				<!--<li <?php /*if ($this->uri->segment(2) == 'changePwd') {
					echo 'class="treeview active"';
				} else {
					echo 'class="treeview"';
				} */ ?>" >
				<a href="#">
					<i class="fa fa-share"></i>
					<span>Setting</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li <?php /*if ($this->uri->segment(2) == 'changePwd') {
						echo 'class="active"';
					} */ ?>><a href="<?php /*echo base_url(); */ ?>admin/changePwd"><i class="fa fa-circle-o"></i> Change
							Password</a></li>

					<li <?php /*if ($this->uri->segment(2) == 'logout') {
						echo 'class="active"';
					} */ ?>><a href="<?php /*echo base_url(); */ ?>admin/logout"><i class="fa fa-circle-o"></i> Logout</a></li>
				</ul>
				</li>-->


			<?php } else if ($sessionUserType == 2) { ?>
				<li
						<?php if ($this->uri->segment(2) == 'dashboard') {
							echo 'class="active"';
						} ?>>
					<a href="
					<?php echo base_url(); ?>admin/dashboard">
						<i class="fa fa-dashboard"></i>
						<span>Dashboard</span>
					</a>
				</li>

				<li
						<?php if ($this->uri->segment(2) == 'projects') {
							echo 'class="active"';
						} ?>>
					<a href="
					<?php echo base_url(); ?>admin/projects">
						<i class="fa fa-dashboard"></i>
						<span>Projects</span>
					</a>
				</li>

				<li
						<?php if ($this->uri->segment(2) == 'required_material') {
							echo 'class="active"';
						} ?>>
					<a href="
					<?php echo base_url(); ?>admin/RequiredMaterial">
						<i class="fa fa-dashboard"></i>
						<span>Required Material</span>
					</a>
				</li>
				}?>


			<?php } else if ($sessionUserType == 3) { ?>
				<li
						<?php if ($this->uri->segment(2) == 'dashboard') {
							echo 'class="active"';
						} ?>>
					<a href="
					<?php echo base_url(); ?>admin/dashboard">
						<i class="fa fa-dashboard"></i>
						<span>Scheduled PO</span>
					</a>
				</li>

				<li
						<?php if ($this->uri->segment(2) == 'follow_up') {
							echo 'class="active"';
						} ?>>
					<a href="
					<?php echo base_url(); ?>admin/FollowUp">
						<i class="fa fa-dashboard"></i>
						<span>Follow Up</span>
					</a>
				</li>

				<li
						<?php if ($this->uri->segment(2) == 'add_vendor') {
							echo 'class="active"';
						} ?>>
					<a href="
					<?php echo base_url(); ?>admin/AddVendor">
						<i class="fa fa-dashboard"></i>
						<span>Add Vendor</span>
					</a>
				</li>

				<li
						<?php if ($this->uri->segment(2) == 'add_category') {
							echo 'class="active"';
						} ?>>
					<a href="
					<?php echo base_url(); ?>admin/AddCategory">
						<i class="fa fa-dashboard"></i>
						<span>Add Category</span>
					</a>
				</li>

				<li
						<?php if ($this->uri->segment(2) == 'add_qty_unit') {
							echo 'class="active"';
						} ?>>
					<a href="
					<?php echo base_url(); ?>admin/AddQtyUnit">
						<i class="fa fa-dashboard"></i>
						<span>Add Qty Unit</span>
					</a>
				</li>

				<li
						<?php if ($this->uri->segment(2) == 'add_item') {
							echo 'class="active"';
						} ?>>
					<a href="
					<?php echo base_url(); ?>admin/AddItem">
						<i class="fa fa-dashboard"></i>
						<span>Add Item</span>
					</a>
				</li>


			<?php } ?>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>
