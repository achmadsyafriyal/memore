  <!-- Page Wrapper -->
  <div id="wrapper">

  	<!-- Sidebar -->
  	<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  		<!-- Sidebar - Brand -->
  		<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
  			<div class="sidebar-brand-icon rotate-n-15">
  				<i class="fab fa-connectdevelop"></i>
  			</div>
  			<div class="sidebar-brand-text mx-3">MEMORE</div>
  		</a>

  		<!-- Divider -->
  		<hr class="sidebar-divider my-0">

  		<!-- Nav Item - Dashboard -->
  		<li class="nav-item">
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
  		<li class="nav-item ">
  			<a class="nav-link" href="<?php echo base_url('pemasukan') ?>">
  				<i class="fas fa-fw fa-chart-area"></i>
  				<span>Pemasukan</span></a>
  		</li>

  		<!-- Nav Item - Tables -->
  		<li class="nav-item active">
  			<a class="nav-link" href="<?php echo base_url('pengeluaran') ?>">
  				<i class="fas fa-fw fa-table"></i>
  				<span>Pengeluaran</span></a>
  		</li>

  		<!-- Divider -->
  		<hr class="sidebar-divider d-none d-md-block">

  		<!-- Sidebar Toggler (Sidebar) -->
  		<div class="text-center d-none d-md-inline">
  			<button class="rounded-circle border-0" id="sidebarToggle"></button>
  		</div>

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
  							<img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
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
  				<h1 class="h3 mb-4 text-gray-800">Pengeluaran</h1>



  				<div id="wrapper">


  					<div class="d-flex flex-column" id="content-wrapper">
  						<div id="content">
  							<!-- <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
					<div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button> -->
  							<!-- <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
							<div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
								<div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
							</div>
						</form> -->
  							<!-- <ul class="nav navbar-nav flex-nowrap ml-auto"> -->
  							<!-- <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a> -->
  							<!-- <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" role="menu" aria-labelledby="searchDropdown"> -->
  							<!-- <form class="form-inline mr-auto navbar-search w-100">
										<div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
											<div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
										</div>
									</form> -->
  							<!-- </div> -->
  							<!-- </li> -->
  							<!-- <li class="nav-item dropdown no-arrow mx-1" role="presentation">
								<div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="badge badge-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
									<div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in" role="menu">
										<h6 class="dropdown-header">alerts center</h6>
										<a class="d-flex align-items-center dropdown-item" href="#">
											<div class="mr-3">
												<div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
											</div>
											<div><span class="small text-gray-500">December 12, 2019</span>
												<p>A new monthly report is ready to download!</p>
											</div>
										</a>
										<a class="d-flex align-items-center dropdown-item" href="#">
											<div class="mr-3">
												<div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
											</div>
											<div><span class="small text-gray-500">December 7, 2019</span>
												<p>$290.29 has been deposited into your account!</p>
											</div>
										</a>
										<a class="d-flex align-items-center dropdown-item" href="#">
											<div class="mr-3">
												<div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
											</div>
											<div><span class="small text-gray-500">December 2, 2019</span>
												<p>Spending Alert: We've noticed unusually high spending for your account.</p>
											</div>
										</a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a>
									</div>
								</div>
							</li> -->
  							<!-- <li class="nav-item dropdown no-arrow mx-1" role="presentation">
								<div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-envelope fa-fw"></i><span class="badge badge-danger badge-counter">7</span></a>
									<div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in" role="menu">
										<h6 class="dropdown-header">alerts center</h6>
										<a class="d-flex align-items-center dropdown-item" href="#">
											<div class="dropdown-list-image mr-3"><img class="rounded-circle" src="<?php echo base_url('assets/img/avatars/avatar4.jpeg') ?>">
												<div class="bg-success status-indicator"></div>
											</div>
											<div class="font-weight-bold">
												<div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
												<p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
											</div>
										</a>
										<a class="d-flex align-items-center dropdown-item" href="#">
											<div class="dropdown-list-image mr-3"><img class="rounded-circle" src="<?php echo base_url('assets/img/avatars/avatar2.jpeg') ?>">
												<div class="status-indicator"></div>
											</div>
											<div class="font-weight-bold">
												<div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
												<p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
											</div>
										</a>
										<a class="d-flex align-items-center dropdown-item" href="#">
											<div class="dropdown-list-image mr-3"><img class="rounded-circle" src="<?php echo base_url('assets/img/avatars/avatar3.jpeg') ?>">
												<div class="bg-warning status-indicator"></div>
											</div>
											<div class="font-weight-bold">
												<div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
												<p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
											</div>
										</a>
										<a class="d-flex align-items-center dropdown-item" href="#">
											<div class="dropdown-list-image mr-3"><img class="rounded-circle" src="<?php echo base_url('assets/img/avatars/avatar2.jpeg') ?>">
												<div class="bg-success status-indicator"></div>
											</div>
											<div class="font-weight-bold">
												<div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
												<p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
											</div>
										</a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a>
									</div>
								</div>
								<div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
							</li> -->
  							<!-- <div class="d-none d-sm-block topbar-divider"></div>
							<li class="nav-item dropdown no-arrow" role="presentation">
								<div class="nav-item dropdown no-arrow"><a class="btn btn-danger btn-sm d-none d-sm-inline-block" role="button" href="<?php echo site_url('login/logout'); ?>"><i class="fas fa-logout fa-sm text-white-50"></i>&nbsp;Logout</a>
									<!-- <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a> -->
  							<!-- <a class="dropdown-item" role="presentation" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a> -->
  							<!-- <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a> -->
  							<!-- </div>
					</div> 
					</li> -->
  							<!-- </ul>
			</div>
			</nav> -->
  							<div class="container-fluid">
  								<!-- <div class="d-sm-flex justify-content-between align-items-center mb-4">
					<h3 class="text-dark mb-0">Dashboard</h3>
				</div> -->
  								<div class="row">
  									<div class="col-md-6 col-xl-3 mb-4">
  										<div class="card shadow border-left-primary py-2">
  											<div class="card-body">
  												<div class="row align-items-center no-gutters">
  													<div class="col mr-2">
  														<div class="text-uppercase text-success font-weight-bold text-xs mb-1"><span>Uang Masuk</span></div>
  														<div class="text-dark font-weight-bold h5 mb-0"><span>Rp. 50.000</span></div>
  													</div>
  													<div class="col-auto"><i class="fas fa-dollar-sign fa-2x text-gray-300"></i></div>
  												</div>
  											</div>
  										</div>
  									</div>
  									<div class="col-md-6 col-xl-3 mb-4">
  										<div class="card shadow border-left-success py-2">
  											<div class="card-body">
  												<div class="row align-items-center no-gutters">
  													<div class="col mr-2">
  														<div class="text-uppercase text-danger font-weight-bold text-xs mb-1"><span>Uang Keluar</span></div>
  														<div class="text-dark font-weight-bold h5 mb-0"><span>Rp. 40.000</span></div>
  													</div>
  													<div class="col-auto"><i class="fas fa-dollar-sign fa-2x text-gray-300"></i></div>
  												</div>
  											</div>
  										</div>
  									</div>

  									<!-- <div class="col-md-6 col-xl-3 mb-4">
						<div class="card shadow border-left-info py-2">
							<div class="card-body">
								<div class="row align-items-center no-gutters">
									<div class="col mr-2">
										<div class="text-uppercase text-info font-weight-bold text-xs mb-1"><span>Tasks</span></div>
										<div class="row no-gutters align-items-center">
											<div class="col-auto">
												<div class="text-dark font-weight-bold h5 mb-0 mr-3"><span>50%</span></div>
											</div>
											<div class="col">
												<div class="progress progress-sm">
													<div class="progress-bar bg-info" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="sr-only">50%</span></div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i></div>
								</div>
							</div>
						</div>
					</div> -->
  									<div class="col-md-6 col-xl-3 mb-4">
  										<div class="card shadow border-left-warning py-2">
  											<div class="card-body">
  												<div class="row align-items-center no-gutters">
  													<div class="col mr-2">
  														<div class="text-uppercase text-warning font-weight-bold text-xs mb-1"><span>Profit/Loss</span></div>
  														<div class="text-dark font-weight-bold h5 mb-0"><span>Rp. 10.000</span></div>
  													</div>
  													<div class="col-auto"><i class="fas fa-money-check fa-2x text-gray-300"></i></div>
  												</div>
  											</div>
  										</div>
  									</div>
  								</div>
  								<!-- <div class="row">
					<div class="col-lg-7 col-xl-8">
						<div class="card shadow mb-4">
							<div class="card-header d-flex justify-content-between align-items-center">
								<h6 class="text-primary font-weight-bold m-0">Earnings Overview</h6>
								<div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
									<div class="dropdown-menu shadow dropdown-menu-right animated--fade-in" role="menu">
										<p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" role="presentation" href="#">&nbsp;Action</a><a class="dropdown-item" role="presentation" href="#">&nbsp;Another action</a>
										<div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#">&nbsp;Something else here</a>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="chart-area"><canvas data-bs-chart="{&quot;type&quot;:&quot;line&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Jan&quot;,&quot;Feb&quot;,&quot;Mar&quot;,&quot;Apr&quot;,&quot;May&quot;,&quot;Jun&quot;,&quot;Jul&quot;,&quot;Aug&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Earnings&quot;,&quot;fill&quot;:true,&quot;data&quot;:[&quot;0&quot;,&quot;10000&quot;,&quot;5000&quot;,&quot;15000&quot;,&quot;10000&quot;,&quot;20000&quot;,&quot;15000&quot;,&quot;25000&quot;],&quot;backgroundColor&quot;:&quot;rgba(78, 115, 223, 0.05)&quot;,&quot;borderColor&quot;:&quot;rgba(78, 115, 223, 1)&quot;}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false},&quot;title&quot;:{},&quot;scales&quot;:{&quot;xAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;],&quot;drawOnChartArea&quot;:false},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;padding&quot;:20}}],&quot;yAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;]},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;padding&quot;:20}}]}}}"></canvas></div>
							</div>
						</div>
					</div>
					<div class="col-lg-5 col-xl-4">
						<div class="card shadow mb-4">
							<div class="card-header d-flex justify-content-between align-items-center">
								<h6 class="text-primary font-weight-bold m-0">Revenue Sources</h6>
								<div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
									<div class="dropdown-menu shadow dropdown-menu-right animated--fade-in" role="menu">
										<p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" role="presentation" href="#">&nbsp;Action</a><a class="dropdown-item" role="presentation" href="#">&nbsp;Another action</a>
										<div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#">&nbsp;Something else here</a>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="chart-area"><canvas data-bs-chart="{&quot;type&quot;:&quot;doughnut&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Direct&quot;,&quot;Social&quot;,&quot;Referral&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;&quot;,&quot;backgroundColor&quot;:[&quot;#4e73df&quot;,&quot;#1cc88a&quot;,&quot;#36b9cc&quot;],&quot;borderColor&quot;:[&quot;#ffffff&quot;,&quot;#ffffff&quot;,&quot;#ffffff&quot;],&quot;data&quot;:[&quot;50&quot;,&quot;30&quot;,&quot;15&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false},&quot;title&quot;:{}}}"></canvas></div>
								<div class="text-center small mt-4"><span class="mr-2"><i class="fas fa-circle text-primary"></i>&nbsp;Direct</span><span class="mr-2"><i class="fas fa-circle text-success"></i>&nbsp;Social</span><span class="mr-2"><i class="fas fa-circle text-info"></i>&nbsp;Refferal</span></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 mb-4">
						<div class="card shadow mb-4">
							<div class="card-header py-3">
								<h6 class="text-primary font-weight-bold m-0">Projects</h6>
							</div>
							<div class="card-body">
								<h4 class="small font-weight-bold">Server migration<span class="float-right">20%</span></h4>
								<div class="progress mb-4">
									<div class="progress-bar bg-danger" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"><span class="sr-only">20%</span></div>
								</div>
								<h4 class="small font-weight-bold">Sales tracking<span class="float-right">40%</span></h4>
								<div class="progress mb-4">
									<div class="progress-bar bg-warning" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"><span class="sr-only">40%</span></div>
								</div>
								<h4 class="small font-weight-bold">Customer Database<span class="float-right">60%</span></h4>
								<div class="progress mb-4">
									<div class="progress-bar bg-primary" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="sr-only">60%</span></div>
								</div>
								<h4 class="small font-weight-bold">Payout Details<span class="float-right">80%</span></h4>
								<div class="progress mb-4">
									<div class="progress-bar bg-info" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"><span class="sr-only">80%</span></div>
								</div>
								<h4 class="small font-weight-bold">Account setup<span class="float-right">Complete!</span></h4>
								<div class="progress mb-4">
									<div class="progress-bar bg-success" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"><span class="sr-only">100%</span></div>
								</div>
							</div>
						</div>
						<div class="card shadow mb-4">
							<div class="card-header py-3">
								<h6 class="text-primary font-weight-bold m-0">Todo List</h6>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item">
									<div class="row align-items-center no-gutters">
										<div class="col mr-2">
											<h6 class="mb-0"><strong>Lunch meeting</strong></h6><span class="text-xs">10:30 AM</span>
										</div>
										<div class="col-auto">
											<div class="custom-control custom-checkbox"><input class="custom-control-input" type="checkbox" id="formCheck-1"><label class="custom-control-label" for="formCheck-1"></label></div>
										</div>
									</div>
								</li>
								<li class="list-group-item">
									<div class="row align-items-center no-gutters">
										<div class="col mr-2">
											<h6 class="mb-0"><strong>Lunch meeting</strong></h6><span class="text-xs">11:30 AM</span>
										</div>
										<div class="col-auto">
											<div class="custom-control custom-checkbox"><input class="custom-control-input" type="checkbox" id="formCheck-2"><label class="custom-control-label" for="formCheck-2"></label></div>
										</div>
									</div>
								</li>
								<li class="list-group-item">
									<div class="row align-items-center no-gutters">
										<div class="col mr-2">
											<h6 class="mb-0"><strong>Lunch meeting</strong></h6><span class="text-xs">12:30 AM</span>
										</div>
										<div class="col-auto">
											<div class="custom-control custom-checkbox"><input class="custom-control-input" type="checkbox" id="formCheck-3"><label class="custom-control-label" for="formCheck-3"></label></div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col">
						<div class="row">
							<div class="col-lg-6 mb-4">
								<div class="card text-white bg-primary shadow">
									<div class="card-body">
										<p class="m-0">Primary</p>
										<p class="text-white-50 small m-0">#4e73df</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 mb-4">
								<div class="card text-white bg-success shadow">
									<div class="card-body">
										<p class="m-0">Success</p>
										<p class="text-white-50 small m-0">#1cc88a</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 mb-4">
								<div class="card text-white bg-info shadow">
									<div class="card-body">
										<p class="m-0">Info</p>
										<p class="text-white-50 small m-0">#36b9cc</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 mb-4">
								<div class="card text-white bg-warning shadow">
									<div class="card-body">
										<p class="m-0">Warning</p>
										<p class="text-white-50 small m-0">#f6c23e</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 mb-4">
								<div class="card text-white bg-danger shadow">
									<div class="card-body">
										<p class="m-0">Danger</p>
										<p class="text-white-50 small m-0">#e74a3b</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 mb-4">
								<div class="card text-white bg-secondary shadow">
									<div class="card-body">
										<p class="m-0">Secondary</p>
										<p class="text-white-50 small m-0">#858796</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> -->
  							</div>
  						</div>
  						<!-- <footer class="bg-white sticky-footer">
			<div class="container my-auto">
				<div class="text-center my-auto copyright"><span>Copyright © Brand 2019</span></div>
			</div>
		</footer> -->
  					</div>
  					<!-- <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a> -->
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
  				<a class="btn btn-primary" href="<?= base_url('Login') ?>">Logout</a>
  			</div>
  		</div>
  	</div>
  </div>
