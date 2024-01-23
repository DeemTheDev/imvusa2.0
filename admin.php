<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Admin</title>
    <style>
        .heading{
            color: lightblue;
        }
    </style>
</head>
<body>
    <nav></nav>
    
    <section>
        <h3 class="heading">Marketplace</h3>
        <form action="./operations/insert.php" method="post" enctype="multipart/form-data">
            <label for="upload-sale">Upload Image</label>
            <input type="file" name="image-sale" id="">
            <label for="price">Price</label>
            <input type="text" name="price" id="">
            <label for="description">Description</label>
            <input type="text" name="description" id="">
            <input type="submit" value="List" name="list">
        </form>
        
        <?php
            include("./operations/insert.php");
        ?>
    </section>

    <section>
        <table>
            <thead>
                <tr> 
                    <th>Item No</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody> 
                <?php
                include("./connection/conn.php");
                $get = mysqli_query($con, "SELECT * FROM marketplace");
                while ($row = mysqli_fetch_array($get)) {
                ?>
                    <tr> 
                        <td><?php echo "ID: " . $row['id']; ?></td>
                        <td><img src="images/<?php echo $row['image_path']; ?>" alt="<?php echo $row['image_path']; ?>"></td>
                        <td>Price: <?php echo $row['price']; ?></td>
                        <td>Description: <?php echo $row['description']; ?></td>
                        <td>
                            <form action="./operations/delete.php" method="post">
                                <input type="hidden" name="delete_marketplace" value="<?php echo $row['id']; ?>">
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>

    <!-- Gallery section -->
    <section>
        <h3>Gallery</h3>
        <form action="./operations/insert.php" method="post" enctype="multipart/form-data">
            <label for="image">Upload Image</label>
            <input type="file" name="gallery-image" id="">
            <label for="comment">Comment</label>
            <input type="text" name="comment" id="">
            <input type="submit" value="Post" name="post" class="button">
        </form>
            <?php
                include("./operations/insert.php");
            ?>
        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Comment</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("./connection/conn.php");
                $getSQL = mysqli_query($con, "SELECT * FROM gallery");
                while ($col = mysqli_fetch_array($getSQL)) {
                ?>
                    <tr>
                        <td><img src="<?php echo 'gallery/' . $col['image_path']; ?>" alt=""></td>
                        <td><?php echo $col['comment']; ?></td>
                        <td>
                            <form action="./operations/delete.php" method="post">
                                <input type="hidden" name="gallery_delete" value="<?php echo $col['id']; ?>">
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>
</body>
</html>
