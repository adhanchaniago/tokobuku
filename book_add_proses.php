<?php
    $conn = mysqli_connect("localhost","root","","dbbookstore");

    if($_FILES['img']['error']==0){
        $isbn = $_POST['isbn'];
        $kategori = $_POST['category'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $price = $_POST['price'];
        $publisher = $_POST['publisher'];
        $image = $_FILES['img']['name'];
        $publish_date = $_POST['publish_date'];
    
        //path gambar
        $namafile = "image/".$image;
    
        if(move_uploaded_file($_FILES['img']['tmp_name'],$namafile) == true){
            $sql = "INSERT INTO tbl_mybooks VALUES(null,
                                                '$isbn',
                                                '$kategori',
                                                '$title',
                                                '$author',
                                                '$price',
                                                '$publisher',
                                                '$image',
                                                date('$publish_date')
                                                )";
            $res = mysqli_query($conn,$sql);
            if($res){
                echo "<script>alert('Data Berhasil Ditambah'); window.location='book.php';</script>";
                //header('location:index.php');
            }else{
                echo "UKURAN FILE TERLALU BESAR!";
            }
        }
    }else{
        echo "<script>alert('DATA HARUS DI ISI SEMUA!'); window.location='book_add.php';</script>";
    }
?>