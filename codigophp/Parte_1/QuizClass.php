<?php

class QuizClass {

   private $questionsAndCorrectAnswers; // ej: $questionsAndCorrectAnswers = ["q1"=> ["question", "correctAnswer"],...]

   // Getter/Setter

    public function setQuestionsAndCorrectAnswers($questionsAndCorrectAnswers){
        $this->questionsAndCorrectAnswers = $questionsAndCorrectAnswers;
    }


    public function getQuestionsAndCorrectAnswers(){
        return $this->questionsAndCorrectAnswers;
    }


   private $userAnswers; // ej: $userAnswers = ["q1" => "a"]

    // Getter/Setter

    public function setUserAnswers($userAnswers){
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST)){
            $this->userAnswers = $_POST;
        }

    }

    public function getUserAnswers(){
        return $this->userAnswers;
    }


    public function __construct($questionsAndCorrectAnswers) {

        $this->questionsAndCorrectAnswers = $questionsAndCorrectAnswers;

    }


    public function handlePoints($userAnswers, $questionsAndCorrectAnswers) {

        $points = 0;
        foreach ($userAnswers as $answerKey => $answerValue){
            if ($questionsAndCorrectAnswers[$answerKey][1] === $answerValue) $points += 10;
            }

        $_SESSION["points"] = $points;

    }

    public function handleComments($userAnswers, $questionsAndCorrectAnswers){
        $comments = [];

        foreach ($userAnswers as $answerKey => $answerValue){
            if ($questionsAndCorrectAnswers[$answerKey][1] !== $answerValue) $comments[$answerKey] = "must study a bit more";
        }

        $_SESSION["commnets"] = $comments;


    }

    public function showError($questionKey){

    }



}