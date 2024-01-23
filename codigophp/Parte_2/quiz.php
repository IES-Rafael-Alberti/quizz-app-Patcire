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

    <?php

    $connection = mysqli_connect("db", "user", "user", "quizz-app");

    $sql = "select * from questions";
    $result = mysqli_query($connection, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <article class="question">
            <p> <?= $row['question_text']?> </p>
            <label><input type="radio" name="question_<?= $row["question_id"]?>"> <?= $row["option_a"] ?>  </input></label>
            <label><input type="radio" name="question_<?= $row["question_id"]?>"> <?= $row["option_b"] ?>  </input></label>
            <label><input type="radio" name="question_<?= $row["question_id"]?>"> <?= $row["option_c"] ?>  </input></label>
        </article>
        <?php
    }
    mysqli_close($connection);
    ?>
    <input type="submit" value="Submit">
</form>


<section class="results">
    
</section>

</body>
</html>
