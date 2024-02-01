<?php

include 'QuizClassP4.php';
$quiz = new QuizClassP4(1);
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
    <link rel="stylesheet" href="../P4.css">
</head>
<body>
    <?php
    $infoQuestions = $quiz->getQuizFromDataBase();
    if (count($infoQuestions) === count($userAnswers)) {
        echo "<h2 style='background-color: #5fda5f' >Your results are at the end of the page!</h2>";
    }
    ?>
    <a class="again" href="index.php">Menu</a>
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
