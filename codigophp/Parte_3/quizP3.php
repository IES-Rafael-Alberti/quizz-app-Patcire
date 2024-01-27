<?php

include 'QuizClassP3.php';
$quiz = new QuizClassP3(1);
$userAnswers = [];
(isset($_GET['retake']) && $_GET['retake']) && $userAnswers = [];
!empty($_POST) && $userAnswers = $_POST;

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Quiz</title>
    <link rel="stylesheet" href="quizP3.css">
</head>
<body>
    <a class="again" href="index.html">Menu</a>
    <form method="post">

        <h1>PHP Quiz</h1>
        <?php $quiz->showQuizFromDataBase(); ?>
        <input type="submit" value="Submit">

    </form>


    <section class="results">

        <?php $quiz->showResults($userAnswers);?>
    </section>

</body>
</html>
