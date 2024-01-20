<?php

$messageError = "You must answer all questions";
var_dump($_POST);


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
        <label>
            <input type="radio" name="q1" value="a"
                <?php if (isset($_POST["q1"]) && $_POST["q1"]== "a")  echo "checked" ?>> a) Personal Home Page</label>
        <label><input type="radio" name="q1" value="b"
                <?php if (isset($_POST["q1"]) && $_POST["q1"]== "b")  echo "checked" ?>> b) PHP: Hypertext Preprocessor</label>
        <label><input type="radio" name="q1" value="c"
                <?php if (isset($_POST["q1"]) && $_POST["q1"]== "c")  echo "checked" ?>> c) PHP Hyper Markup Language</label>
    </article>
    <p class="p__error"><?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST["q1"])) echo $messageError?></p>
    <!-- Question 2 -->
    <article class="question">
        <p>2. What is the result of 2 + 2 in PHP?</p>
        <label><input type="radio" name="q2" value="a"  <?php if (isset($_POST["q2"]) && $_POST["q2"]== "a")  echo "checked" ?>> a) 3</label>
        <label><input type="radio" name="q2" value="b" <?php if (isset($_POST["q2"]) && $_POST["q2"]== "b")  echo "checked" ?>> b) 4</label>
        <label><input type="radio" name="q2" value="c" <?php if (isset($_POST["q2"]) && $_POST["q2"]== "c")  echo "checked" ?>> c) 5</label>
    </article>
    <p class="p__error"><?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST["q2"])) echo $messageError?></p>
    <!-- Question 3 -->
    <article class="question">
        <p>3. What type of loop in PHP is used to iterate over a block of code a specific number of times?</p>
        <label><input type="radio" name="q3" value="a" <?php if (isset($_POST["q3"]) && $_POST["q3"]== "a")  echo "checked" ?>> a) for loop</label>
        <label><input type="radio" name="q3" value="b" <?php if (isset($_POST["q3"]) && $_POST["q3"]== "b")  echo "checked" ?>> b) while loop</label>
        <label><input type="radio" name="q3" value="c" <?php if (isset($_POST["q3"]) && $_POST["q3"]== "c")  echo "checked" ?>> c) foreach loop</label>
    </article>
    <p class="p__error"><?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST["q3"])) echo $messageError?></p>
    <!-- Question 4 -->
    <article class="question">
        <p>4. How can you declare a constant in PHP?</p>
        <label><input type="radio" name="q4" value="a" <?php if (isset($_POST["q4"]) && $_POST["q4"]== "a")  echo "checked" ?>> a) define()</label>
        <label><input type="radio" name="q4" value="b" <?php if (isset($_POST["q4"]) && $_POST["q4"]== "b")  echo "checked" ?>> b) const()</label>
        <label><input type="radio" name="q4" value="c" <?php if (isset($_POST["q4"]) && $_POST["q4"]== "c")  echo "checked" ?>> c) constant()</label>
    </article>
    <p class="p__error"><?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST["q4"])) echo $messageError?></p>
    <!-- Question 5 -->
    <article class="question">
        <p>5. What is the purpose of the "echo" statement in PHP?</p>
        <label><input type="radio" name="q5" value="a" <?php if (isset($_POST["q5"]) && $_POST["q5"]== "a")  echo "checked" ?>> a) Output text to the browser</label>
        <label><input type="radio" name="q5" value="b" <?php if (isset($_POST["q5"]) && $_POST["q5"]== "b")  echo "checked" ?>> b) Create a variable</label>
        <label><input type="radio" name="q5" value="c" <?php if (isset($_POST["q5"]) && $_POST["q5"]== "c")  echo "checked" ?>> c) Include a file</label>
    </article>
    <p class="p__error"><?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST["q5"])) echo $messageError?></p>
    <article class="question">
        <p>6. How do you define a function in PHP?</p>
        <label><input type="radio" name="q6" value="a" <?php if (isset($_POST["q6"]) && $_POST["q6"]== "a")  echo "checked" ?>> a) function myFunction()</label>
        <label><input type="radio" name="q6" value="b" <?php if (isset($_POST["q6"]) && $_POST["q6"]== "b")  echo "checked" ?>> b) def myFunction():</label>
        <label><input type="radio" name="q6" value="c" <?php if (isset($_POST["q6"]) && $_POST["q6"]== "c")  echo "checked" ?>> c) define myFunction()</label>
    </article>
    <p class="p__error"><?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST["q6"])) echo $messageError?></p>
    <!-- Question 7 -->
    <article class="question">
        <p>7. What is the purpose of the "GET" method in form submissions?</p>
        <label><input type="radio" name="q7" value="a" <?php if (isset($_POST["q7"]) && $_POST["q7"]== "a")  echo "checked" ?>> a) Send data to the server as part of the URL</label>
        <label><input type="radio" name="q7" value="b" <?php if (isset($_POST["q7"]) && $_POST["q7"]== "b")  echo "checked" ?>> b) Encrypt data before sending</label>
        <label><input type="radio" name="q7" value="c" <?php if (isset($_POST["q7"]) && $_POST["q7"]== "c")  echo "checked" ?>> c) Submit data securely</label>
    </article>
    <p class="p__error"><?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST["q7"])) echo $messageError?></p>
    <!-- Question 8 -->
    <article class="question">
        <p>8. In PHP, how can you check if a variable is set and not null?</p>
        <label><input type="radio" name="q8" value="a" <?php if (isset($_POST["q8"]) && $_POST["q8"]== "a")  echo "checked" ?>> a) isset()</label>
        <label><input type="radio" name="q8" value="b" <?php if (isset($_POST["q8"]) && $_POST["q8"]== "b")  echo "checked" ?>> b) notnull()</label>
        <label><input type="radio" name="q8" value="c" <?php if (isset($_POST["q8"]) && $_POST["q8"]== "c")  echo "checked" ?>> c) isnull()</label>
    </article>
    <p class="p__error"><?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST["q8"])) echo $messageError?></p>
    <!-- Question 9 -->
    <article class="question">
        <p>9. How can you concatenate two strings in PHP?</p>
        <label><input type="radio" name="q9" value="a" <?php if (isset($_POST["q9"]) && $_POST["q9"]== "a")  echo "checked" ?>> a) .concat()</label>
        <label><input type="radio" name="q9" value="b" <?php if (isset($_POST["q9"]) && $_POST["q9"]== "b")  echo "checked" ?>> b) concatenate()</label>
        <label><input type="radio" name="q9" value="c" <?php if (isset($_POST["q9"]) && $_POST["q9"]== "c")  echo "checked" ?>> c) . (dot operator)</label>
    </article>
    <p class="p__error"><?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST["q9"])) echo $messageError?></p>
    <!-- Question 10 -->
    <article class="question">
        <p>10. What is the purpose of the "break" statement in a loop in PHP?</p>
        <label><input type="radio" name="q10" value="a" <?php if (isset($_POST["q10"]) && $_POST["q10"]== "a")  echo "checked" ?>> a) Skip the next iteration and continue with the loop</label>
        <label><input type="radio" name="q10" value="b" <?php if (isset($_POST["q10"]) && $_POST["q10"]== "b")  echo "checked" ?>> b) Exit the loop immediately</label>
        <label><input type="radio" name="q10" value="c" <?php if (isset($_POST["q10"]) && $_POST["q10"]== "c")  echo "checked" ?>> c) Pause the loop and resume after a timeout</label>
    </article>
    <p class="p__error"><?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST["q10"])) echo $messageError?></p>
    <input type="submit" value="Submit">
</form>
</body>
</html>
