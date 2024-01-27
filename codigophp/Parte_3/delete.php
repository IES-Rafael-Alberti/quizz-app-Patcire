<?php
include 'QuizClassP3.php';
$quiz = new QuizClassP3(1);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>PHP Quiz</title>
        <link rel="stylesheet" href="quizP3.css">
    <title>Delete</title>
</head>
<body>
    <a class="again" href="index.html">Menu</a>
    <h1>Delete a question</h1>
    <?php $quiz->showOnlyquestions();
    if (isset($_POST['delete_question'])){
        $quiz->deleteFromDB($_POST['question_id']);
        unset($_POST['delete_question']);
         echo "<p class='p__error'>Question deleted!</p>";
    }
    ?>

</body>
</html>
