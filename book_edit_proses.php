<?php
    $conn = mysqli_connect("localhost","root","","dbbookstore");
    $book_id = $_POST['book_id'];
    $isbn = $_POST['isbn'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $price = $_POST['price'];
    $foto_buku = $_FILES['img']['name'];
    $folderimage = $_FILES['img']['tmp_name'];
    
    if(!empty($folderimage)){
        move_uploaded_file($folderimage,"image/$foto_buku");

        $sql = "UPDATE tbl_mybooks SET  ISBN = '$isbn',
                                  title = '$title',
                                  author = '$author',
                                  price = '$price',
                                  img = '$foto_buku'
                                  WHERE book_id = '$book_id'";
        $res = mysqli_query($conn,$sql); 
        if($res){
            echo "<script>alert('Data Berhasil DiUbah'); window.location='book.php';</script>";
            //header('location:index.php');
        }else{
            echo "data gagal di input";
        }                         
    }else{
        $sql = "UPDATE tbl_mybooks SET  ISBN = '$isbn',
                                  title = '$title',
                                  author = '$author',
                                  price = '$price'
                                  WHERE book_id = '$book_id'";
        $res = mysqli_query($conn,$sql);
        if($res){
            echo "<script>alert('Data Berhasil DiUbah'); window.location='book.php';
            </script>";
            //header('location:index.php');
        }else{
            echo "data gagal di input";
        }
    }

?>