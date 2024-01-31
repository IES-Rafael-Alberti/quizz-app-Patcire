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
    <title>PHP Quiz</title>
        <link rel="stylesheet" href="../P4.css">
    <title>Delete</title>
</head>
<body>
    <?php
    $infoQuestions = $quiz->getQuizFromDataBase();
    if (isset($_POST['handle_question'])) {
        echo "<h2 style='background-color: #5fda5f' >Question is now deleted. Go to the quiz to see it!</h2>";
    }
    ?>
    <h1>Delete a question</h1>
    <a class="again" href="index.html">Menu</a>
    <?php $quiz->showOnlyquestions();
    if (isset($_POST['handle_question'])){
        $quiz->deleteFromDB($_POST['question_id']);

    }
    ?>

</body>
</html>
