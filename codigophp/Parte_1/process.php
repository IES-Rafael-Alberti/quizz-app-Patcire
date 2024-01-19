<?php

if ($_SERVER["REQUEST_METHOD"] === "POST"){

    for ($i=0; $i<count($_POST); $i++) {

        $isAnswered = isset($_POST["q" . $i]);

        if (!$isAnswered) echo "<p>You must answer all questions!</p>";
    }
}