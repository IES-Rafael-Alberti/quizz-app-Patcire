<?php
    session_start();
    $arrayLength = count($_POST);
    $responses = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        for ($i=1; $i<=$arrayLength; $i++){
            $questionName = "q".$i;
            // $notAnsweredQuestions[$questionName]= empty($_POST[$questionName]);
             (empty($_POST[$questionName])) ?
                 $responses[$questionName] = false
                 :
                 $responses[$questionName] = $_POST[$questionName];

        }
    }

    $_SESSION["responses"]=$responses;
