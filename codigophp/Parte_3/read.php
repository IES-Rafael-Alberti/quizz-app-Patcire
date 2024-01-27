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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read questions</title>
    <link rel="stylesheet" href="quizP3.css">
</head>
<body>

    <h1>read questions</h1>
    <a class="again" href="index.html">Menu</a>
    <?php $quiz->showOnlyquestions();?>
</body>
</html>
