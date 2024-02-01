<?php
    include 'User.php';

    if (isset($_POST['handleRegister'])){

        $newUser = new User($_POST['newUsername'], $_POST['newEmail'], $_POST['newPassword']);

        $newUser->register();
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

        <label>Email <input type="text" name="newEmail" style="width: 500px"></label>
        <label>Username: <input  type="text" name="newUsername" style="background-color: antiquewhite"></label>
        <label>Password: <input type="text" name="newPassword" style="background-color: antiquewhite"></label>

        <button type="submit" name="handleRegister" class="again">Register</button>
    </form>


</body>
</html>



