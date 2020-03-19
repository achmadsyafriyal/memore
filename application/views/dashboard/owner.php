  <!-- Page Wrapper -->
  <div id="wrapper">

  	<!-- Sidebar -->
  	<ul class="navbar-nav bg-gradient-white sidebar sidebar-light accordion" id="accordionSidebar">

  		<!-- Sidebar - Brand -->
  		<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
  			<div class="sidebar-brand-icon ">
				  <img class="img-profile rounded-circle" style="height:70px" src="<?php echo base_url(); ?>assets/images/logomemore.jpg">
  			</div>
  			<div class="sidebar-brand-text mx-3">MEMORE</div>
  		</a>

  		<!-- Divider -->
  		<hr class="sidebar-divider my-0">

  		<!-- Nav Item - Dashboard -->
  		<li class="nav-item active">
  			<a class="nav-link" href="<?php echo base_url('dashboard') ?>">
  				<i class="fas fa-fw fa-tachometer-alt"></i>
  				<span>Dashboard</span></a>
  		</li>

  		<!-- Divider -->
  		<hr class="sidebar-divider">

  		<!-- Heading -->
  		<div class="sidebar-heading">
  		</div>

  		<!-- Nav Item - Charts -->
  		<li class="nav-item">
  			<a class="nav-link" href="<?php echo base_url('pemasukan') ?>">
  				<i class="fas fa-fw fa-chart-area"></i>
  				<span>Pemasukan</span></a>
  		</li>

  		<!-- Nav Item - Tables -->
  		<li class="nav-item">
  			<a class="nav-link" href="<?php echo base_url('pengeluaran') ?>">
  				<i class="fas fa-fw fa-table"></i>
  				<span>Pengeluaran</span></a>
  		</li>

  		<!-- Divider -->
  		<hr class="sidebar-divider d-none d-md-block">

  		<!-- Sidebar Toggler (Sidebar) -->
  		<!-- <div class="text-center d-none d-md-inline">
  			<button class="rounded-circle border-0" id="sidebarToggle"></button>
  		</div> -->

  	</ul>
  	<!-- End of Sidebar -->

  	<!-- Content Wrapper -->
  	<div id="content-wrapper" class="d-flex flex-column">

  		<!-- Main Content -->
  		<div id="content">

  			<!-- Topbar -->
  			<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

  				<!-- Sidebar Toggle (Topbar) -->
  				<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
  					<i class="fa fa-bars"></i>
  				</button>

  				<!-- Topbar Navbar -->
  				<ul class="navbar-nav ml-auto">

  					<div class="topbar-divider d-none d-sm-block"></div>

  					<!-- Nav Item - User Information -->
  					<li class="nav-item dropdown no-arrow">
  						<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  							<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $username ?></span>
  							
				 			 <img class="img-profile rounded-circle"  src="<?php echo base_url(); ?>assets/images/logomemore.jpg">
  						</a>
  						<!-- Dropdown - User Information -->
  						<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
  							<a class="dropdown-item" href="#">
  								<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
  								Profile
  							</a>
  							<a class="dropdown-item" href="#">
  								<i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
  								Activity Log
  							</a>
  							<div class="dropdown-divider"></div>
  							<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
  								<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
  								Logout
  							</a>
  						</div>
  					</li>
  				</ul>

  			</nav>
  			<!-- End of Topbar -->

  			<!-- Begin Page Content -->
  			<div class="container-fluid">

  				<!-- Page Heading -->
  				<h1 class="h3 mb-4 text-gray-800">Dashboard</h1>



  				<div id="wrapper">


  					<div class="d-flex flex-column" id="content-wrapper">
  						<div id="content">
  					
  							<div class="container-fluid">
  						
  								<div class="row">
  									<div class="col-md-6 col-xl-4 mb-4">
  										<div class="card shadow border-left-success py-2">
  											<div class="card-body">
  												<div class="row align-items-center no-gutters">
  													<div class="col mr-2">
  														<div class="text-uppercase text-success font-weight-bold text-xs mb-1"><span>Uang Masuk</span></div>
  														<div class="text-dark font-weight-bold h5 mb-0"><span>Rp. <?php echo $jumlah; ?></span></div>
  													</div>
  													<div class="col-auto"><i class="fas fa-arrow-up fa-2x text-success"></i></div>
  												</div>
  											</div>
  										</div>
  									</div>
  									<div class="col-md-6 col-xl-4 mb-4">
  										<div class="card shadow border-left-danger py-2">
  											<div class="card-body">
  												<div class="row align-items-center no-gutters">
  													<div class="col mr-2">
  														<div class="text-uppercase text-danger font-weight-bold text-xs mb-1"><span>Uang Keluar</span></div>
  														<div class="text-dark font-weight-bold h5 mb-0"><span>Rp. 40.000</span></div>
  													</div>
  													<div class="col-auto"><i class="fas fa-arrow-down fa-2x text-danger"></i></div>
  												</div>
  											</div>
  										</div>
  									</div>

  									<div class="col-md-6 col-xl-4 mb-4">
  										<div class="card shadow border-left-warning py-2">
  											<div class="card-body">
  												<div class="row align-items-center no-gutters">
  													<div class="col mr-2">
  														<div class="text-uppercase text-warning font-weight-bold text-xs mb-1"><span>Profit/Loss</span></div>
  														<div class="text-dark font-weight-bold h5 mb-0"><span>Rp. 10.000</span></div>
  													</div>
  													<div class="col-auto"><i class="fas fa-money-check fa-2x text-warning"></i></div>
  												</div>
  											</div>
  										</div>
  									</div>
  								</div>
  		
  							</div>
  						</div>
  					
  					</div>
  					<a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
  				</div>






















  			</div>
  			<!-- /.container-fluid -->

  		</div>
  		<!-- End of Main Content -->
  	</div>
  	<!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
  	<i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog" role="document">
  		<div class="modal-content">
  			<div class="modal-header">
  				<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
  				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
  					<span aria-hidden="true">×</span>
  				</button>
  			</div>
  			<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
  			<div class="modal-footer">
  				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
  				<a class="btn btn-warning" href="<?= base_url('Login') ?>">Logout</a>
  			</div>
  		</div>
  	</div>
  </div>
