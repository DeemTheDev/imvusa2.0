<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
</head>
<body style="display: flex; align-items: center; margin-right: 1rem;">
    <fieldset style="width: 50%;">
        <legend> <h3>IMVUSA PLANT HIRE</h3> </legend>
        <form action="login.php" method="post">
            <label for="username">Username:
                <input type="text" name="username" id="">
            </label>
            <br>
            <label for="password">Password:
                <input type="text" name="password" id="">
            </label>
            <input type="submit" value="login" name="login">
        </form>
    </fieldset>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>