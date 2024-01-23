<?php
include 'QuizClass.php';
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Quiz</title>
    <link rel="stylesheet" href="quiz.css">
</head>
<body>

<form method="post">
    <h1>PHP Quiz</h1>

    <?php

    $conection = mysqli_connect("db", "user", "user", "quizz-app");

    $sql = "select * from questions";
    $resultado = mysqli_query($conection, $sql);
    if (mysqli_num_rows($resultado) > 0){
        echo "pepeeeeee";
    }
    mysqli_close($conection);
    ?>

    <input type="submit" value="Submit">
</form>

<section class="results">
    
</section>

</body>
</html>
