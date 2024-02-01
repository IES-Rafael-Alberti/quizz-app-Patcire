<?php
include 'User.php';

    function isnotAnswered($fieldName){
        return $_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST[$fieldName]) ? "<p class='p__error'>You must answer all questions</p>" : "";
    }


    if (!empty($_POST['username']) && !empty($_POST['password'])) {

        $newUser = new User($_POST['username'], $_POST['email'], $_POST['password']);

        $newUser->login();


    }


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="P4.css">
    <title>Register</title>
</head>
<body>
<h1>Register</h1>
<a class="again" href="index.html">Menu</a>
<form method="post">


    <label>Username: <input  name="username" style="background-color: antiquewhite"></label>
    <?= isnotAnswered('username')?>
    <label>Email: <input name="email" style="background-color: antiquewhite"></label>
    <?= isnotAnswered('email')?>
    <label>Password: <input name="password" style="background-color: antiquewhite"></label>
    <?= isnotAnswered('username')?>

    <button type="submit" name="handleLogin" class="again">Login</button>
</form>


</body>
</html>


