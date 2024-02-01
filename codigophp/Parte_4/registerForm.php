<?php
    include 'User.php';

    function isnotAnswered($fieldName){
        return $_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST[$fieldName]) ? "<p class='p__error'>You must answer all questions</p>" : "";

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
        <?= isnotAnswered('newEmail')?>
        <label>Username: <input  type="text" name="newUsername" style="background-color: antiquewhite"></label>
        <?= isnotAnswered('newUsername')?>
        <label>Password: <input type="text" name="newPassword" style="background-color: antiquewhite"></label>
        <?= isnotAnswered('newPassword')?>

        <button type="submit" name="handleRegister" class="again">Register</button>
        <?php
        if (!empty($_POST['newEmail']) && !empty($_POST['newUsername']) && !empty($_POST['newPassword'])) {

            $newUser = new User($_POST['newUsername'], $_POST['newEmail'], $_POST['newPassword']);

            $newUser->register();
            echo "<p style='color: #5fda5f'>You are now registered!<p>";
        }

        ?>


    </form>


</body>
</html>



