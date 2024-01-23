<?php
include 'QuizClassP2.php';
$quiz = new QuizClassP2;
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

    <?php $quiz->showQuizFromDataBase(); ?>

    <input type="submit" value="Submit">
</form>


<section class="results">
    
</section>

</body>
</html>
