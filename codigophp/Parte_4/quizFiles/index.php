<?php
    session_start();
     function logout(){
        session_destroy();

    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["logout"])) {

        logout();
        header("Location: ../index.html");
        exit;

    }


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../P4.css">
    <title>Menu for P4</title>
</head>
<body>
    <h1>Forms P3</h1>
<section>
    <ul>
        <li><a href="quizP4.php">Quiz</a></li>
        <li><a href="create.php">Create question</a></li>
        <li><a href="delete.php">Delete question</a></li>
        <li><a href="update.php">Update question</a></li>
        <li><a href="read.php">Show Questions</a></li>
    </ul>
</section>

    <form method="post">
        <button type="submit" class="again" name="logout">Logout</button>
    </form>

</body>
</html>
