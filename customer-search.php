<?php
	require('session.php');
	require('search.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PC Solutions - Customer</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<meta charset="utf-8">
		<meta name="description" content="Lakeside Books">
		<meta name="keywords" content="books, lakeside, cork, shop, online">
		
		<link rel="shortcut icon" href="favicon.ico"> 
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/global.css">
		
		<link rel="stylesheet" href="css/menu.css" />
		<script src="js/modernizr.custom.js"></script>
		
		
		<style>@import url(http://fonts.googleapis.com/css?family=Raleway:400,700); </style>
		
	</head>
	
	<body id="top" style="font-size: 62.5%;">
		<!-- BEGIN Header -->
		<header id="header-wrapper">
			
			<div id="top-bar" class="clearfix">
				
				<div id="top-bar-inner">
					
					<!-- Search Bar by http://www.paulund.co.uk/create-a-slide-out-search-box -->
					<div class="search_form">
						<form action="" method="post">
							<input type="text" name="search_box" id="search_box" placeholder="Search for a customer...">
						</form>
					</div>
					<!-- Search Bar by http://www.paulund.co.uk/create-a-slide-out-search-box -->
					
					
					<div class="topbar-right clearfix">
						
						<ul class="clearfix">
							<li class="login-user">
								<a title="<?php echo $login_session; ?>" href="#">
									<span class="icon"><i aria-hidden="true" class="icon-user"></i></span>
									<?php echo $login_session; ?>
								</a>
							</li>
						</ul>
						
						<div class="log-out">
							<!-- <p><a title="Sign out" href="#">Sign out</a></p> -->
							<p>
								<a href="logout.php" title="Sign out">
									<span>Đăng Xuất</span>
									<span class="icon"> 
										<i aria-hidden="true" class="icon-exit"></i>
									</span>
								</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="full-shadow"></div>
			
			
		</header>
		<!-- END Header -->
		
		
		<div class="main clearfix">
			
			<!-- START OF NAVIGATION -->
			<nav id="menu" class="nav">					
				<ul>
					<li>
						<a href="dashboard.php">
							<span class="icon">
								<i aria-hidden="true" class="icon-home"></i>
							</span>
							<span>Trang Chủ</span>
						</a>
					</li>
					<li class="active">
						<a href="customer.php">
							<span class="icon"> 
								<i aria-hidden="true" class="icon-users"></i>
							</span>
							<span>Khách Hàng</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="icon">
								<i aria-hidden="true" class="icon-hammer"></i>
							</span>
							<span>Sửa Chữa</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="icon">
								<i aria-hidden="true" class="icon-sigma"></i>
							</span>
							<span>Định Giá</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="icon">
								<i aria-hidden="true" class="icon-barcode"></i>
							</span>
							<span>Quản Lí Kho</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="icon">
								<i aria-hidden="true" class="icon-coin"></i>
							</span>
							<span>Hóa Đơn</span>
						</a>
					</li>
				</ul>
			</nav>
			<!-- END OF NAVIGATION -->
			
			
			<!--Breadcrumb -->
			<div class="bread dash"><h3>Khách Hàng</h3></div>
			<!--Breadcrumb -->
			
			
			<div class="floats">
				
				<!-- Easy access links -->
				<div class="widget-content full-widget">
					<?php  echo $customer; ?>
					<?php  echo $error; ?>
				</div>
				<!-- Easy access links -->
				
			</div>
		</div>
		
		
		<!-- SCRIPT FOR THE MENU -->
		<script src="js/menu.js"></script>
		<!-- SCRIPT FOR THE MENU -->
		
	</body>
	
</html> 				