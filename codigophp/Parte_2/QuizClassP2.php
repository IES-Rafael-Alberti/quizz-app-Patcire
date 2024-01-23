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

    public function showQuizFromDataBase(){

        $connection = mysqli_connect("db", "user", "user", "quizz-app");

        $sql = "select * from questions";
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {?>
                <article class="question">
                    <p> <?= $row['question_text']?> </p>
                    <label><input type="radio" name="question_<?= $row["question_id"]?>"> <?= $row["option_a"] ?></label>
                    <label><input type="radio" name="question_<?= $row["question_id"]?>"> <?= $row["option_b"] ?></label>
                    <label><input type="radio" name="question_<?= $row["question_id"]?>"> <?= $row["option_c"] ?></label>
                </article>
            <?php }
            mysqli_close($connection);
        }
    }

} // class end