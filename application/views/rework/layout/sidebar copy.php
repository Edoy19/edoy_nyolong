<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

	<!-- Brand Logo -->
	<a href="#" class="brand-link">
		<!-- <img src="<?php echo base_url() ?>assets/dist/img/Logo Denso DMIA.png" alt="AdminLTE Logo" style="opacity: .8"> -->
		<img src="<?php echo base_url() ?>assets/dist/img/Logo Denso DMIA.png" alt="AdminLTE Logo" style="opacity: .8;" class=" nav-link" data-widget="pushmenu" href="#">
		<span class="brand-text font-weight-light"> </span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">

		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">

			<div class="image">
				<img src="<?php echo base_url() ?>assets/foto/login1.jpg" class="img-circle elevation-3" alt="User Image" />
			</div>

			<!-- Menampilkan foto -->
			<div class="image">

				<?php

				if ($this->session->userdata('authenticated')) {

					// $data = base64_encode($this->session->userdata('ImageData'))    ;    
					// echo '<img src="data:image/gif;base64,' . $data . '" class="img-circle elevation-3" alt="User Image"  />';

				} else {

					// echo '<img src="assets/foto/login1.jpg" class="img-circle elevation-3" alt="User Image"  />';

				}

				?>

			</div>
			<div class="info">

				<a href="#" class="d-block">
					<?php
					if ($this->session->userdata('authenticated')) {
						echo $this->session->userdata('nama');
						// echo $this->session->userdata('name');
					} else {

						echo 'Anonymous';
					}

					?>
				</a>
				<!-- email -->
				<a href="#" class="d-block">
					<?php
					if ($this->session->userdata('authenticated')) {
						echo '( ' . $this->session->userdata('rolename') . ' )';
					} else {
						echo '';
					}
					?>
				</a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<!-- nav-pills -->
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

				<!-- Menu base on database -->
				<?php foreach ($menu_akses as $value) {  ?>

					<?php if ($value->parentid == '') {  ?>

						<!-- User Guide -->
						<li class="nav-item has-treeview">

							<!-- Ini apa ? -->
							<a href="#" class="nav-link">
								<i class="nav-icon fas <?php echo $value->icon ?>"></i>
								<p>
									<?php echo $value->menu_name ?>
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>

							<!-- UL User Setting -->
							<ul class="nav nav-treeview">

								<!-- Role  -->
								<?php foreach ($menu_akses as $value2) {  ?>

									<?php if ($value2->parentid == $value->menu_id) {  ?>

										<?php $menu_name = $value2->menu_name; ?>

										<li class="nav-item">
											<a href="<?php echo base_url() ?><?php echo $value2->controller ?>?var=<?php echo $value2->menu_id ?>&var2=<?php echo $menu_name ?>" class="nav-link">
												<i class="nav-icon fa <?php echo $value2->icon ?>"></i>
												<p><?php echo $value2->menu_name ?></p>
											</a>
										</li>

									<?php } ?>

								<?php } ?>

							</ul>
							<!-- /UL User Guide -->

						</li>
						<!-- /User Guide -->

					<?php } ?>

				<?php } ?>
				<!-- /Menu base on database -->

				<!-- User Guide -->
				<li class="nav-item has-treeview">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-book"></i>
						<p>
							User Guide
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>

					<!-- UL User Setting -->
					<ul class="nav nav-treeview">

						<!-- Role  -->

						<li class="nav-item">
							<a href="<?php echo base_url('assets/userguide/USER GUIDE DNCN.pdf') ?>" target="_blank" class="nav-link">
								<i class="nav-icon fa fa-user-cog"></i>
								<p>Manual Instruction (PDF)</p>
							</a>
						</li>




					</ul>
					<!-- User Guide -->

					<!-- Menu Setting -->
				<li class="nav-item has-treeview">

					<?php if ($this->session->userdata('rolename') == 'Super Admin') { ?>
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-tools"></i>
							<p>
								Menu Setting
								<i class="fas fa-angle-left right"></i>
							</p>
						</a>
					<?php } ?>

					<!-- UL User Setting -->
					<ul class="nav nav-treeview">

						<!-- Menu  -->
						<?php if ($this->session->userdata('rolename') == 'Super Admin') { ?>
							<li class="nav-item">
								<a href="<?php echo base_url() ?>C_Menu" class="nav-link">
									<i class="nav-icon fas fa-bars"></i>
									<p>Menu</p>
								</a>
							</li>
						<?php } ?>


					</ul>
					<!-- /UL User Setting -->

				</li>
				<!-- /Menu Setting -->

			</ul>
			<!-- /UL User Guide -->

			</li>
			<!-- /User Guide -->

		</nav>

		<!-- /.sidebar-menu -->

	</div>

	<!-- /.sidebar -->

</aside>