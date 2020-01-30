<?php
    $conn = mysqli_connect("localhost","root","","dbbookstore");

    $category_id = $_GET['category_id'];

    $sql = "DELETE FROM tbl_categories WHERE category_id='$category_id'";
    $res = mysqli_query($conn,$sql);
    if($res){
        echo "<script>alert('Data Berhasil Di Hapus'); window.location='categories.php';</script>";
        //header('location:index.php');
    }else{
        echo "data gagal di input";
    }

?>