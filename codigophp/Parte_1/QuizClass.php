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

            $this->userAnswers = $userAnswers;


    }

    public function getUserAnswers(){
        return $this->userAnswers;
    }


    public function __construct($questionsAndCorrectAnswers, $userAnswers) {

        $this->questionsAndCorrectAnswers = $questionsAndCorrectAnswers;
        $this->userAnswers = $userAnswers;

    }


    public function handlePoints(): int{

        $points = 0;

        foreach ( $this->userAnswers as $answerKey => $answerValue){
            if ($this->questionsAndCorrectAnswers[$answerKey][1] === $answerValue) $points += 10;
            }

        $_SESSION["points"] = $points;
        return $points;

    }

    public function handleComments(): array
    {
        $comments = [];

        foreach ($this->userAnswers as $answerKey => $answerValue){
            if ($this->questionsAndCorrectAnswers[$answerKey][1] !== $answerValue) $comments[$answerKey] = "must study a bit more";
        }

        $_SESSION["comments"] = $comments;
        return  $comments;


    }


    public function isChecked($questionKey, $response){
        return (isset($_POST[$questionKey]) && $_POST[$questionKey]== $response) ? "checked" : "";
    }

    public function isNotAnswered($questionKey){
         return $_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST[$questionKey]) ? "You must answer all questions" : "";
    }


}

// Now we check the class

$questionsAndCorrectAnswers = [
    "q1" => ["2 + 2?", "b"],
    "q2" => ["capital of France?", "a"],
];

$userAnswers = ["q1"=>"c", "q2"=>"c"];

$quiz = new QuizClass($questionsAndCorrectAnswers, $userAnswers);

$quiz->setUserAnswers(["q1"=>"c", "q2"=>"a"]);

echo $quiz->handlePoints();
echo implode(",",$quiz->handleComments());