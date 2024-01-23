<?php
include 'QuizClass.php';
$questionsAndCorrectAnswers = [
    "q1" => "b",
    "q2" => "b",
    "q3" => "a",
    "q4" => "a",
    "q5" => "a",
    "q6" => "a",
    "q7" => "a",
    "q8" => "a",
    "q9" => "c",
    "q10" => "b"
];

$userAnswers = [];

(isset($_GET['retake']) && $_GET['retake']) && $userAnswers = [];
!empty($_POST) && $userAnswers = $_POST;

$quiz = new QuizClass($questionsAndCorrectAnswers, $userAnswers);

//var_dump($quiz->getUserAnswers());

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

    <!-- Question 1 -->
    <article class="question">
        <p>1. What does PHP stand for?</p>
        <label>
            <input type="radio" name="q1" value="a"
                <?php echo $quiz->isChecked("q1", "a") ?>> a) Personal Home Page</label>
        <label><input type="radio" name="q1" value="b"
                <?php echo $quiz->isChecked("q1", "b") ?>> b) PHP: Hypertext Preprocessor</label>
        <label><input type="radio" name="q1" value="c"
                <?php echo $quiz->isChecked("q1", "c") ?>> c) PHP Hyper Markup Language</label>
    </article>
    <p class="p__error"><?php echo $quiz->isNotAnswered("q1")?></p>
    <!-- Question 2 -->
    <article class="question">
        <p>2. What is the result of 2 + 2 in PHP?</p>
        <label><input type="radio" name="q2" value="a"  <?php echo $quiz->isChecked("q2", "a") ?>> a) 3</label>
        <label><input type="radio" name="q2" value="b" <?php echo $quiz->isChecked("q2", "b") ?>> b) 4</label>
        <label><input type="radio" name="q2" value="c" <?php echo $quiz->isChecked("q2", "c") ?>> c) 5</label>
    </article>
    <p class="p__error"><?php echo $quiz->isNotAnswered("q2")?></p>
    <!-- Question 3 -->
    <article class="question">
        <p>3. What type of loop in PHP is used to iterate over a block of code a specific number of times?</p>
        <label><input type="radio" name="q3" value="a" <?php echo $quiz->isChecked("q3", "a") ?>> a) for loop</label>
        <label><input type="radio" name="q3" value="b" <?php echo $quiz->isChecked("q3", "b") ?>> b) while loop</label>
        <label><input type="radio" name="q3" value="c" <?php echo $quiz->isChecked("q3", "c") ?>> c) foreach loop</label>
    </article>
    <p class="p__error"><?php echo $quiz->isNotAnswered("q3")?></p>
    <!-- Question 4 -->
    <article class="question">
        <p>4. How can you declare a constant in PHP?</p>
        <label><input type="radio" name="q4" value="a" <?php echo $quiz->isChecked("q4", "a") ?>> a) define()</label>
        <label><input type="radio" name="q4" value="b" <?php echo $quiz->isChecked("q4", "b") ?>> b) const()</label>
        <label><input type="radio" name="q4" value="c" <?php echo $quiz->isChecked("q4", "c") ?>> c) constant()</label>
    </article>
    <p class="p__error"><?php echo $quiz->isNotAnswered("q4")?></p>
    <!-- Question 5 -->
    <article class="question">
        <p>5. What is the purpose of the "echo" statement in PHP?</p>
        <label><input type="radio" name="q5" value="a" <?php echo $quiz->isChecked("q5", "a") ?>> a) Output text to the browser</label>
        <label><input type="radio" name="q5" value="b" <?php echo $quiz->isChecked("q5", "b") ?>> b) Create a variable</label>
        <label><input type="radio" name="q5" value="c" <?php echo $quiz->isChecked("q5", "c") ?>> c) Include a file</label>
    </article>
    <p class="p__error"><?php echo $quiz->isNotAnswered("q5")?></p>
    <!-- Question 6 -->
    <article class="question">
        <p>6. How do you define a function in PHP?</p>
        <label><input type="radio" name="q6" value="a" <?php echo $quiz->isChecked("q6", "a") ?>> a) function myFunction()</label>
        <label><input type="radio" name="q6" value="b" <?php echo $quiz->isChecked("q6", "b") ?>> b) def myFunction():</label>
        <label><input type="radio" name="q6" value="c" <?php echo $quiz->isChecked("q6", "c") ?>> c) define myFunction()</label>
    </article>
    <p class="p__error"><?php echo $quiz->isNotAnswered("q6")?></p>
    <!-- Question 7 -->
    <article class="question">
        <p>7. What is the purpose of the "GET" method in form submissions?</p>
        <label><input type="radio" name="q7" value="a" <?php echo $quiz->isChecked("q7", "a") ?>> a) Send data to the server as part of the URL</label>
        <label><input type="radio" name="q7" value="b" <?php echo $quiz->isChecked("q7", "b") ?>> b) Encrypt data before sending</label>
        <label><input type="radio" name="q7" value="c" <?php echo $quiz->isChecked("q7", "c") ?>> c) Submit data securely</label>
    </article>
    <p class="p__error"><?php echo $quiz->isNotAnswered("q7")?></p>
    <!-- Question 8 -->
    <article class="question">
        <p>8. In PHP, how can you check if a variable is set and not null?</p>
        <label><input type="radio" name="q8" value="a" <?php echo $quiz->isChecked("q8", "a") ?>> a) isset()</label>
        <label><input type="radio" name="q8" value="b" <?php echo $quiz->isChecked("q8", "b") ?>> b) notnull()</label>
        <label><input type="radio" name="q8" value="c" <?php echo $quiz->isChecked("q8", "c") ?>> c) isnull()</label>
    </article>
    <p class="p__error"><?php echo $quiz->isNotAnswered("q8")?></p>
    <!-- Question 9 -->
    <article class="question">
        <p>9. How can you concatenate two strings in PHP?</p>
        <label><input type="radio" name="q9" value="a" <?php echo $quiz->isChecked("q9", "a") ?>> a) .concat()</label>
        <label><input type="radio" name="q9" value="b" <?php echo $quiz->isChecked("q9", "b") ?>> b) concatenate()</label>
        <label><input type="radio" name="q9" value="c" <?php echo $quiz->isChecked("q9", "c") ?>> c) . (dot operator)</label>
    </article>
    <p class="p__error"><?php echo $quiz->isNotAnswered("q9")?></p>
    <!-- Question 10 -->
    <article class="question">
        <p>10. What is the purpose of the "break" statement in a loop in PHP?</p>
        <label><input type="radio" name="q10" value="a" <?php echo $quiz->isChecked("q10", "a") ?>> a) Skip the next iteration and continue with the loop</label>
        <label><input type="radio" name="q10" value="b" <?php echo $quiz->isChecked("q10", "b") ?>> b) Exit the loop immediately</label>
        <label><input type="radio" name="q10" value="c" <?php echo $quiz->isChecked("q10", "c") ?>> c) Pause the loop and resume after a timeout</label>
    </article>
    <p class="p__error"><?php echo $quiz->isNotAnswered("q10")?></p>
    <input type="submit" value="Submit">
</form>

<section class="results">

<?php

if ($quiz->allQuestionAnswered()){
    echo "<h1>Resultados</h1>";
    $results = $quiz->showResultsWithComments();
    $counter = 1;
    foreach ($results as $questionKey => $resultValue){

        echo "<p> <strong>Question $counter</strong>. $resultValue</p>";
        $counter++;

    }
    $points = $quiz->handlePoints()."/100";
    echo "<h3>Total points: $points</h3>";
    echo "<button class='again' onclick=\"window.location.href='?retake=true'\">Solve again<button>";
}

?>
</section>

</body>
</html>
