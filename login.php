<?php
    // check if logged in or not. if logged in, send them back to the homepage! (does not work yet!)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>Project - Login</title>
</head>
<body>
<header>
    <div class="left">
        <div class="logo">
            <a href="./index.php">Project</a>
        </div>
    </div>
    <div class="right">
        <span class="signup">
            <a href="./signup.php">Sign Up</a>
        </span>
        <span class="login active">
            <a href="./login.php">Login</a>
        </span>
    </div>
</header>
<div class="content">
    <h1>Log In</h1>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br><br>
        <input type="submit" value="Log In">
    </form>
</div>
</body>
</html>