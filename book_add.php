<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1" />
<title>UMI BOOK STORE</title>
<link rel="stylesheet" href="css/swiper.css">
<link rel="stylesheet" href="css/jquery.scrollbar.css">
<link rel="stylesheet" href="css/daterangepicker.css">
<link rel="stylesheet" href="css/select2.css">
<link rel="stylesheet" href="css/ion.rangeSlider.min.css">
<link rel="stylesheet" href="css/dashboard.min.css">
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">  
</head>
<body>

<div class="dashboard-wrap">

    <div class="dashboard-wrap">

    <header class="sidebar-header">
        <h1 class="sidebar-header__logo">U<span>MI<strong>STORE</strong></span></h1>
    </header>
    
    <!-- Left Sidebar -->
    <div class="section section--sidebar" id="sidebar">
    
            <nav class="sidebar-menu"> 
                <ul>
                    <li class="dashboard"><a href="home.php"><b>BERANDA</b></a></li>
                    <li class="components has-submenu"><a href="#"><b>KATEGORI <span class="submenu-arrow"></span></b></a>
                        <ul class="sidebar-menu__submenu">
                            <li><a href="categories_add.php">ADD</a></li>
                            <li><a href="categories.php">VIEW</a></li>
                        </ul>
                    </li>
                    <li class="components has-submenu"><a href="#"><b>PENERBIT <span class="submenu-arrow"></span></b></a>
                        <ul class="sidebar-menu__submenu">
                            <li><a href="publisher_add.php">ADD</a></li>
                            <li><a href="publishers.php">VIEW</a></li>
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
                    <div class="content-header__user-thumb"><img src="images/avatar-2.png" alt="" title=""/></div>
                    <span class="content-header__user-name">AHMAD FAUZI</span>
                </div>  
                <nav class="dropdown-menu dropdown-menu--header dropdown-menu--user-menu " id="userdropdown">   
                <h3 class="dropdown-menu__subtitle">User menu</h3>
                <ul>   
                  
                    <li class="logout"><a href="index.php" class="button button--general button--red-border">Logout</a></li>
                </ul>
                </nav>
            </div>
            
            <div class="mobile-submenu"></div>

            <nav class="content-header__menu">       
                <ul>
                    <li class="prescription" data-openpopup="prescription"><a href="book_add.php">
                    TAMBAH BUKU</a></li>
                    <li class="reports" data-openpopup="reports"><a href="book.php">
                    CARI BUKU</a></li>
                    <li class="reports" data-openpopup="reports"><a href="book_view.php">
                    KATALOG BUKU</a></li>
                </ul>
            </nav>
            
        </header>
    
        
        <div class="grid grid--margin">
            <div class="grid__row dashboard-intro">
            </div>
            
            <div class="grid__row">
                <div class="grid__col grid__col--23 grid__col--margin grid__col--padding bg-white">
                    
    
<h2>TAMBAH DATA BUKU </h2>
<form method="POST" enctype="multipart/form-data" action="book_add_proses.php">   
<table class="table" align="center">

    <tr>
        <td>ISBN</td>
        <td>:</td>
        <td><input type="text" name="isbn"></td>
    </tr>
    <tr>        
        <td>Category</td>
        <td>:</td>
        <td>
            <select name="category">
                 <option value="">--Pilih Kategori--</option>
                    <?php
                        $conn = mysqli_connect("localhost","root","","dbbookstore");
                        $sql = "SELECT * FROM tbl_categories ORDER BY category_id";
                        $res = mysqli_query($conn,$sql);
                        while($data = mysqli_fetch_array($res)){
                            echo "<option value=\"".$data['category_id']."\">".$data['category_name']."</option>";
                        }
                    ?>
              </select>
        </td>
    </tr>          
    <tr>
        <td>Title</td>
        <td>:</td> 
        <td><input type='text' name="title"></td>
    </tr>
    <tr>    
        <td>Author</td>
        <td>:</td>
        <td><input type="text" name="author"></td>
    </tr> 
    <tr>   
        <td>Price</td>
        <td>:</td>
        <td><input type="number" name="price"></td>
    </tr>
    <tr>        
        <td>Publishers</td>
        <td>:</td>
        <td>
            <select name="publisher" >
                 <option value="">--Pilih Publisher--</option>
                    <?php
                        $conn = mysqli_connect("localhost","root","","dbbookstore");
                        $sql = "SELECT * FROM tbl_publishers ORDER BY publisher_id";
                        $res = mysqli_query($conn,$sql);
                        while($data = mysqli_fetch_array($res)){
                            echo "<option value=\"".$data['publisher_id']."\">".$data['publisher_name']."</option>";
                        }
                    ?>
              </select>
        </td>
    </tr> 
    <tr>   
        <td>Book Image</td>
        <td>:</td>
        <td><input type="file" name="img"></td>
    </tr>
    <tr>  
        <td>Publish Date</td>
        <td>:</td>
        <td><input type="date" name="publish_date"></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td colspan="3"> 
            <input type="submit" name="add" value="Tambah" class="tombol1" > 
            <input type="reset" name="Reset" value="Reset" class="tombol">
        </td>
    </tr>

        <center>
        <p style="line-height:1.5; 
            position: absolute;
            top: 530px;
            right: 560px;}">
            Copyright &copy Ahmad Fauzi NS Teknik Informatika IKMI Cirebon, Indonesia 2019.</p>
    </center> 
    </div>
</table>
</form>


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




