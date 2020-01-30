<?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    include("lib_func.php"); 
?> 
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
<link href="css.css" rel="stylesheet" type="text/css"> 
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
                    
    <?php
    
    $conn = mysqli_connect("localhost","root","","dbbookstore");

    $sql = "SELECT * FROM tbl_mybooks JOIN tbl_categories ON tbl_mybooks.category_id = tbl_categories.category_id JOIN tbl_publishers ON tbl_mybooks.publisher_id = tbl_publishers.publisher_id ORDER BY tbl_mybooks.book_id";
    
    $res = mysqli_query($conn,$sql);
    $no = 1;
       
        $banyakrecord = mysqli_num_rows($res);
    
        if($banyakrecord > 0){
        ?> 
  
         <?php 
         $i=0; 
         while($data = mysqli_fetch_array($res)){
         $i++;
         $id = $data['book_id'];
         $tipe = $data['ISBN'];
         $fasilitas = $data['category_id'];
         $harga = $data['title'];
         $banyak_booking = $data['author'];
         $banyak_kosong = $data['price'];
         $pub = $data['publisher_name'];
         $gambar = $data['img'];
         $pubdate = $data['publish_date'];
         $bts = 20;
         $tpak = strlen($tipe);
         if($tpak > $bts) {
             $tp = substr($tipe, 0, $bts) . '...';
         }
         else {
             $tp = $tipe;
         }

        
         ?>

            <div class="kamar">
                <table border="0px">
                    <tr>
                        <td>
                            <center>
                            
                                <div class="idkamar">
                                    <?php echo "Harga : Rp. ".$banyak_kosong ?><br>
                                    <?php echo "No.ISBN :".$tp ?>
                                </div>
                                <div class="tipekamar"><b><?php echo $harga ?> </div></b>
                                <img src="image/<?php echo $gambar ?>" width="180px" height="120px"/>
                                
                                <div class="tipekamar2">Pengarang <?php echo $banyak_booking ?>  
                                || Penerbit <?php echo $pub ?> </div>
                                
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <center>
                                <a href="book_buy.php?id=<?php echo $id ?>"><button name="id_tipe" style="width:100px;background-color:rgb(26, 53, 207);color:white;font-weight:bold;padding:4px;;">BELI BUKU</button></a>
                                <a href="book_buy.php?id=<?php echo $id ?>">
                                <button style="width:100px;background:rgba(240, 38, 55, 0.884);color:white;font-weight:bold;padding:4px;">ORDER </button></a> 
                            </center>
                        </td>
                    </tr>
                </table>
            </div>
          </tr>
           <?php
            }
            ?> 
            
             <?php 
             } 
             else echo"<center>Tidak ada data pada tabel tipe kamar.";      
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
    
    