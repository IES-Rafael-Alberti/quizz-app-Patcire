<?php

function checkQuestions($q)
{

    return $_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST[$q]);

}
?>