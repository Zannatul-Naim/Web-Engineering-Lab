<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore - Login</title>
</head>
<body>
    <p>enter your details to login: </p>
    <form action="authenticate.php" method="post">
        <label>Username</label>
        <input type="text" name="username" placeholder="Enter your user name" id="" required> <br>
        <br>
        <label for="password">password</label>
        <input type="password" name="password" placeholder="Enter your password" required> <br> <br>
        <input type="submit" value="Login">
        
    </form>
</body>
</html>