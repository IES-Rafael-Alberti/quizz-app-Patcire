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
    <title>Read questions</title>
    <link rel="stylesheet" href="../P4.css">
</head>
<body>

    <h1>read questions</h1>
    <a class="again" href="index.php">Menu</a>
    <?php $quiz->showOnlyquestions();?>
</body>
</html>
