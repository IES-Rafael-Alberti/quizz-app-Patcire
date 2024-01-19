
<?php
include "process.php";
$notAnsweredQuestions = [];
$messageError = "You must answer all questions";

for ($i=1; $i<11; $i++){
    $questionName = "q".$i;
    (checkQuestions($questionName)) ?
        $notAnsweredQuestions[$questionName] = true
        :
        $notAnsweredQuestions[$questionName] = false;


}

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Quiz</title>
    <link rel="stylesheet" href="quizz.css">
</head>
<body>

<form method="post">
    <h1>PHP Quiz</h1>

    <!-- Question 1 -->
    <article class="question">
        <p>1. What does PHP stand for?</p>
        <label><input type="radio" name="q1" value="a"> a) Personal Home Page</label>
        <label><input type="radio" name="q1" value="b"> b) PHP: Hypertext Preprocessor</label>
        <label><input type="radio" name="q1" value="c"> c) PHP Hyper Markup Language</label>
    </article>
    <p class="p__error"><?php if ($notAnsweredQuestions["q1"]) echo $messageError?></p>
    <!-- Question 2 -->
    <article class="question">
        <p>2. What is the result of 2 + 2 in PHP?</p>
        <label><input type="radio" name="q2" value="a"> a) 3</label>
        <label><input type="radio" name="q2" value="b"> b) 4</label>
        <label><input type="radio" name="q2" value="c"> c) 5</label>
    </article>
    <p class="p__error"><?php if ($notAnsweredQuestions["q2"]) echo $messageError?></p>
    <!-- Question 3 -->
    <article class="question">
        <p>3. What type of loop in PHP is used to iterate over a block of code a specific number of times?</p>
        <label><input type="radio" name="q3" value="a"> a) for loop</label>
        <label><input type="radio" name="q3" value="b"> b) while loop</label>
        <label><input type="radio" name="q3" value="c"> c) foreach loop</label>
    </article>
    <p class="p__error"><?php if ($notAnsweredQuestions["q3"]) echo $messageError?></p>
    <!-- Question 4 -->
    <article class="question">
        <p>4. How can you declare a constant in PHP?</p>
        <label><input type="radio" name="q4" value="a"> a) define()</label>
        <label><input type="radio" name="q4" value="b"> b) const()</label>
        <label><input type="radio" name="q4" value="c"> c) constant()</label>
    </article>
    <p class="p__error"><?php if ($notAnsweredQuestions["q4"]) echo $messageError?></p>
    <!-- Question 5 -->
    <article class="question">
        <p>5. What is the purpose of the "echo" statement in PHP?</p>
        <label><input type="radio" name="q5" value="a"> a) Output text to the browser</label>
        <label><input type="radio" name="q5" value="b"> b) Create a variable</label>
        <label><input type="radio" name="q5" value="c"> c) Include a file</label>
    </article>
    <p class="p__error"><?php if ($notAnsweredQuestions["q5"]) echo $messageError?></p>    <!-- Question 6 -->
    <article class="question">
        <p>6. How do you define a function in PHP?</p>
        <label><input type="radio" name="q6" value="a"> a) function myFunction()</label>
        <label><input type="radio" name="q6" value="b"> b) def myFunction():</label>
        <label><input type="radio" name="q6" value="c"> c) define myFunction()</label>
    </article>
    <p class="p__error"><?php if ($notAnsweredQuestions["q6"]) echo $messageError?></p>
    <!-- Question 7 -->
    <article class="question">
        <p>7. What is the purpose of the "GET" method in form submissions?</p>
        <label><input type="radio" name="q7" value="a"> a) Send data to the server as part of the URL</label>
        <label><input type="radio" name="q7" value="b"> b) Encrypt data before sending</label>
        <label><input type="radio" name="q7" value="c"> c) Submit data securely</label>
    </article>
    <p class="p__error"><?php if ($notAnsweredQuestions["q7"]) echo $messageError?></p>
    <!-- Question 8 -->
    <article class="question">
        <p>8. In PHP, how can you check if a variable is set and not null?</p>
        <label><input type="radio" name="q8" value="a"> a) isset()</label>
        <label><input type="radio" name="q8" value="b"> b) notnull()</label>
        <label><input type="radio" name="q8" value="c"> c) isnull()</label>
    </article>
    <p class="p__error"><?php if ($notAnsweredQuestions["q8"]) echo $messageError?></p>
    <!-- Question 9 -->
    <article class="question">
        <p>9. How can you concatenate two strings in PHP?</p>
        <label><input type="radio" name="q9" value="a"> a) .concat()</label>
        <label><input type="radio" name="q9" value="b"> b) concatenate()</label>
        <label><input type="radio" name="q9" value="c"> c) . (dot operator)</label>
    </article>
    <p class="p__error"><?php if ($notAnsweredQuestions["q9"]) echo $messageError?></p>
    <!-- Question 10 -->
    <article class="question">
        <p>10. What is the purpose of the "break" statement in a loop in PHP?</p>
        <label><input type="radio" name="q10" value="a"> a) Skip the next iteration and continue with the loop</label>
        <label><input type="radio" name="q10" value="b"> b) Exit the loop immediately</label>
        <label><input type="radio" name="q10" value="c"> c) Pause the loop and resume after a timeout</label>
    </article>
    <p class="p__error"><?php if ($notAnsweredQuestions["q10"]) echo $messageError?></p>
    <input type="submit" value="Submit">
</form>
</body>
</html>