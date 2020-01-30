<?php
    $conn = mysqli_connect("localhost","root","","dbbookstore");

        $nama_publisher = $_POST['publisher_name'];
        
        $sql = "INSERT INTO tbl_publishers VALUES(null,'$nama_publisher')";
            $res = mysqli_query($conn,$sql);
            if($res){
                echo "<script>alert('Data Berhasil Ditambah'); window.location='publishers.php';</script>";
                //header('location:index.php');
            }else{
                echo "data gagal di input";
            }
    ?> 