<?php
// DELETE FROM MARKETPLACE
include("../connection/conn.php");

if (isset($_POST['delete_marketplace'])) {
    $marketplace_id = $_POST['delete_marketplace'];

    if (isset($con) && $con !== null) {
        $delMarketplace = mysqli_query($con, "DELETE FROM marketplace WHERE id = '$marketplace_id'");
        
        if ($delMarketplace) {
            header("Location: ../index.php");
            echo "<script>alert('Listing deleted.');</script>";
        } else {
            echo "<script>alert('An Error occurred, could not delete listing.');</script>";
        }
    } else {
        echo "<script>alert('Database connection not available.');</script>";
    }
}

// DELETE FROM GALLERY
if (isset($_POST['gallery_delete'])) {
    include("../connection/conn.php");
    $image_id = $_POST['gallery_delete'];

    if (isset($con) && $con !== null) {
        $deleteSQL = mysqli_query($con, "DELETE FROM gallery WHERE id = '$image_id'");
        
        if ($deleteSQL) {
            echo "<script> alert('Image deleted. '); </script>";
            header("Location: ../index.php");
        } else {
            echo "<script> alert('Deletion Error. '); </script>";
            header("Location: ../index.php");
        }
    } else {
        echo "<script> alert('Database Connection Error!'); </script>";
        header("Location: ../index.php");
    }
}
?>
