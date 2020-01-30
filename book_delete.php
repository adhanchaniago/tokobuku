<?php
    $conn = mysqli_connect("localhost","root","","dbbookstore");

    $book_id = $_GET['book_id'];

    $data = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM tbl_mybooks WHERE id_produk = '$book_id'"));
    $foto_buku = $data['img'];
    if(file_exists("image/$foto_buku")){
        unlink("image/$foto_buku");
    }

    $sql = "DELETE FROM tbl_mybooks WHERE book_id='$book_id'";
    $res = mysqli_query($conn,$sql);
    if($res){
        
        echo "<script>alert('Data Berhasil Di Hapus'); window.location='index.php';</script>";
        header('location:book.php');
    }else{
        echo "data gagal di hapus";
    }

?>