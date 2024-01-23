<?php

class QuizClassP2{

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

        $this->userAnswers = $userAnswers;


    }

    public function getUserAnswers(){
        return $this->userAnswers;
    }

    /*
    public function __construct($questionsAndCorrectAnswers, $userAnswers) {

        $this->questionsAndCorrectAnswers = $questionsAndCorrectAnswers;
        $this->userAnswers = $userAnswers;

    }
    */



} // class end