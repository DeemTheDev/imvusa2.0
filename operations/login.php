<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
</head>
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
    </ul>
</nav>
<body>
    <fieldset style="width: 50%;">
        <legend> <h3>IMVUSA PLANT HIRE</h3> </legend>
        <form action="login.php" method="post">
            <label for="username">Username:
                <input type="text" name="username" id="">
            </label>
            <br>
            <label for="password">Password:
                <input type="password" name="password" id="">
            </label>
            <input type="submit" value="login" name="login">
        </form>
        <?php
        include("../connection/conn.php");
        if(isset($_POST['login'])){
            
            $username = mysqli_real_escape_string($con, $_POST['username']);
            $password = mysqli_real_escape_string($con, $_POST['password']);

            $loginSQL = "SELECT * FROM user_login WHERE username = '$username' AND password = '$password'";
            $getLogin = mysqli_query($con, $loginSQL);

            if($row = mysqli_fetch_assoc($getLogin)){
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['username'] = $row['username'];

                header("Location: ../admin.php");
            }else{
                echo "<script>alert('Incorrect Username or Password');</script>";
            }


        }
        mysqli_close($con);


        ?>
    </fieldset>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>