<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1" />
<title>BOOK STORE</title>
<link rel="stylesheet" href="css/swiper.css">
<link rel="stylesheet" href="css/jquery.scrollbar.css">
<link rel="stylesheet" href="css/daterangepicker.css">
<link rel="stylesheet" href="css/select2.css">
<link rel="stylesheet" href="css/ion.rangeSlider.min.css">
<link rel="stylesheet" href="css/dashboard.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">  
</head>
<body>
<?php
	function header_web(){ 
?> <div class="dashboard-wrap">

	<header class="sidebar-header">
		<h1 class="sidebar-header__logo">B<span>OOK<strong>STORE</strong></span></h1>
	</header>
	
	<!-- Left Sidebar -->
	<div class="section section--sidebar" id="sidebar">
	
			<nav class="sidebar-menu"> 
				<ul>
					<li class="dashboard"><a href="dashboard.html"><b>BERANDA</b></a></li>
					<li class="components has-submenu"><a href="#"><b>KATEGORI <span class="submenu-arrow"></span></b></a>
						<ul class="sidebar-menu__submenu">
							<li><a href="dashboard__grid.html">ADD</a></li>
							<li><a href="dashboard__charts.html">VIEW</a></li>
						</ul>
					</li>
					<li class="components has-submenu"><a href="#"><b>PENERBIT <span class="submenu-arrow"></span></b></a>
						<ul class="sidebar-menu__submenu">
							<li><a href="dashboard__grid.html">ADD</a></li>
							<li><a href="dashboard__charts.html">VIEW</a></li>
						</ul>
					</li>
					
				</ul>
			</nav>
	
	</div>
	
	<!-- Content -->
	<div class="section section--content" id="content">
		<header class="content-header">
		
			<div class="sidebar-resize"></div>
			<div class="mobile-menu"><div class="st-burger-icon st-burger-icon--medium"><span></span></div></div>
			
			<div class="content-header__user content-header__dropdown">  
			    <div class="content-header__user-avatar content-header__dropdown-activate" data-dropdown="userdropdown">
					<div class="content-header__user-thumb"><img src="images/avatar-2.jpg" alt="" title=""/></div>
					<span class="content-header__user-name">AHMAD FAUZI</span>
			    </div>  
				<nav class="dropdown-menu dropdown-menu--header dropdown-menu--user-menu " id="userdropdown"> 	
				<h3 class="dropdown-menu__subtitle">User menu</h3>
				<ul>   
				  
				    <li class="logout"><a href="#" class="button button--general button--red-border">Logout</a></li>
				</ul>
				</nav>
			</div>
			
			<div class="mobile-submenu"></div>

			<nav class="content-header__menu">       
				<ul>
					<li class="prescription modal-toggle" data-openpopup="prescription"><a href="#">
					TAMBAH BUKU</a></li>
					<li class="reports modal-toggle" data-openpopup="reports"><a href="#">
					CARI BUKU</a></li>
				</ul>
			</nav>
			
		</header>
	
<?php
	}?>

		
		<div class="grid grid--margin">
			<div class="grid__row dashboard-intro">
			</div>
			
			<div class="grid__row">
				<div class="grid__col grid__col--23 grid__col--margin grid__col--padding bg-white">

			</div>
			</div>
		</div>
 	</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/Chart.min.js"></script>
<script src="js/chartjs-plugin-style.min.js"></script>
<script src="js/charts-custom-dashboard.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/jquery.scrollbar.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/daterangepicker.min.js"></script>
<script src="js/ion.rangeSlider.min.js"></script>
<script src="js/jquery.dashboard-custom.js"></script>
</body>
</html>



<?php
	function footer_web(){
?>
	<center>
		<p style="background-color: white; line-height:1.5; 
			position: absolute;
    		top: 650px;
    		right: 370px;}">
			Copyright &copy Ahmad Fauzi NS Teknik Informatika IKMI Cirebon, Indonesia 2018.</p>
	</center> 

<?php
	}
	function menu_admin(){ 
?> 
	
	<?php
	}
	function menu(){
	menu_admin();
	}

	// Koneksi DataBase
	function koneksi_db(){ 
		$host = "localhost"; 
		$database = "dbbookstore"; 
		$user = "root"; 
		$password = ""; 
		
		$link = mysqli_connect($host,$user,$password);

		mysqli_select_db($link,$database);
		 
		if(!$link) 
			echo "Error:".mysqli_error(); 
		return $link; 
	} 
?>

