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
                    
     <h3>DATA PENERBIT</h3>
        <?php
            $conn = mysqli_connect("localhost","root","","dbbookstore");

            $sql = "SELECT * FROM tbl_publishers";
            $res = mysqli_query($conn,$sql);
            $no = 1;
            $str ="";
            while($data = mysqli_fetch_array($res)){
                $str .= "<tr>";
                $str .= "<td>".$no."</td>";
                $str .= "<td>".$data['publisher_name']."</td>";
                $str .= "<td>
                                <a href='publishers_delete.php?=&publisher_id=$data[publisher_id]' onClick='return confirm(\"Anda Yakin Ingin Mengapus $data[publisher_name]\")'><button style='width:100px;background-color:rgba(240, 38, 55, 0.884);color:white;font-weight:bold;padding:4px;'>HAPUS</button></a></td>";
                $str .= "</tr>";

                $no++;
            }

            echo "
                <table cellpadding=0 cellspacing=0>
                    <tr>
                        <th>No</th>
                        <th>Publisher</th>
                        <th>Action</th>
                        $str
                    </tr>
                </table>
            ";

        ?>
                    
                </div>
            </div>
        </div>
        <center>
        <p style="line-height:1.5; 
            position: absolute;
            top: 650px;
            right: 600px;}">
            Copyright &copy Ahmad Fauzi NS Teknik Informatika IKMI Cirebon, Indonesia 2098.</p>
    </center> 
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
