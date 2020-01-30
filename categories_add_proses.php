<?php
    $conn = mysqli_connect("localhost","root","","dbbookstore");

        $nama_kategori = $_POST['category_name'];
        
        $sql = "INSERT INTO tbl_categories VALUES(null,'$nama_kategori')";
            $res = mysqli_query($conn,$sql);
            if($res){
                echo "<script>alert('Data Berhasil Ditambah'); window.location='categories.php?halaman=categories';</script>";
                //header('location:index.php');
            }else{
                echo "data gagal di input";
            }
    ?> 