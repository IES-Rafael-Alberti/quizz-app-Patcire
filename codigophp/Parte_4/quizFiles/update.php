<?php

include 'QuizClassP4.php';
$quiz = new QuizClassP4(1);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../P4.css">
    <title>Update Questions</title>
</head>
<body>

    <h1>What question do you want to update?</h1>
    <?php
    if (isset($_POST['handle_question'])){
        echo "<h2 style='background-color: #5fda5f' >Question is correctly modified. Go to the quiz to see it!</h2>";
    }
    ?>
    <a class="again" href="index.html">Menu</a>
    <?php $quiz->showQuestionsToUpdate();
    if (isset($_POST['handle_question'])){

        $quiz->updateQuestion($_POST['question_id']);

    }
    ?>

</body>
</html>
