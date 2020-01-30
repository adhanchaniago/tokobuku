<?php
    $conn = mysqli_connect("localhost","root","","dbbookstore");

    $publisher_id = $_GET['publisher_id'];

    $sql = "DELETE FROM tbl_publishers WHERE publisher_id='$publisher_id'";
    $res = mysqli_query($conn,$sql);
    
    if($res){
        echo "<script>alert('Data Berhasil Di Hapus'); window.location='publishers.php';</script>";
        //header('location:index.php');
    }else{
        echo "data gagal di input";
    }

?>