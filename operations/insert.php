<?php
        if (isset($_POST['post'])) {
            $galleryFile = $_FILES['gallery-image']['name'];
            $galleryTmp = $_FILES['gallery-image']['tmp_name'];
            $galleryPath = "../gallery/".$galleryFile;
            $comment = $_POST['comment'];
            include("../connection/conn.php");
            if(isset($con) && $con != null){
            $gallerySQL = mysqli_query($con, "INSERT INTO gallery(image_path, comment)
            VALUES('$galleryFile', '$comment')");
            if(move_uploaded_file($galleryTmp, $galleryPath)){
                header("Location: ../index.php");
                echo "<script> alert('Image uploaded to gallery');</script>";
            }else{
                header("Location: ../index.php");
                echo "<script> alert('An ERROR occured');</script>";
            }
        
        }
    
    }


        if (isset($_POST['list'])) {
            $imageName = $_FILES['image-sale']['name'];
            $tmpName = $_FILES['image-sale']['tmp_name'];
            $price = $_POST['price'];
            $descritpion = $_POST['description'];
            $path = "../images/".$imageName;
            include("../connection/conn.php");
            if(isset($con) && $con != null){
            $sql = mysqli_query($con, "INSERT INTO marketplace(image_path, price, description)
            VALUES('$imageName', '$price', '$descritpion')");
            if(move_uploaded_file($tmpName, $path)){  
                header("Location: ../index.php");  
                 echo "<script> alert('Upload Success.');</script>";
            }else{     
                header("Location: ../index.php");
                echo "<script> alert('An error occured.');</script>";
            }
        }
    }
        
?>
