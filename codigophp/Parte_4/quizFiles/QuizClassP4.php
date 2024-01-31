<?php

class QuizClassP4{

    // Class properties and construct
    private $quiz_id;

    public function setQuizId($quiz_id): void{
        $this->quiz_id = $quiz_id;
    }

    public function getQuizId(){
        return $this->quiz_id;
    }

    public function __construct( $quiz_id) {

        $this->quiz_id = $quiz_id;

    }


    // General Methods

    public function getQuizFromDataBase(){

        $connection = mysqli_connect("db", "user", "user", "quizz-app");
        $sql = "select * from questions where fk_quiz_id = $this->quiz_id";
        $result = mysqli_query($connection, $sql);
        $infoQuestions = [];
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $infoQuestions[$row['question_id']] = $row;
            }
        }

        mysqli_close($connection);

        return $infoQuestions;

    }

    public function isChecked($question_id, $response){
        return (isset($_POST[$question_id]) && $_POST[$question_id]== $response) ? "checked" : "";
    }

    public function isNotAnswered($question_id){
        return $_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST[$question_id]) ? "<p class='p__error'>You must answer all questions</p>" : "";
    }

    public function showQuizFromDataBase(){

        $infoQuestions = $this->getQuizFromDataBase();
        foreach ($infoQuestions as $question) {?>
            <article class="question">
                <p> <?= $question['question_text']?> </p>
                <label>a)
                    <input type="radio" value="a" name="<?= $question["question_id"]?>" <?php echo $this->isChecked($question['question_id'], "a") ?>>
                    <?= $question["option_a"] ?>

                </label>
                <label> b)
                    <input type="radio" value="b" name="<?= $question["question_id"]?>"<?php echo $this->isChecked($question['question_id'], "b") ?>>
                    <?= $question["option_b"] ?>

                </label>
                <label> c)
                    <input type="radio" value="c" name="<?= $question["question_id"]?>" <?php echo $this->isChecked($question['question_id'], "c") ?>">
                    <?= $question["option_c"] ?>
                </label>

                <?php echo $this->isNotAnswered($question['question_id']) ?>

            </article>
        <?php }
    }

    public function  showResults($userAnswers){

        $results = [];
        $infoQuestions = $this->getQuizFromDataBase();
        $points = 0;

        if (count($infoQuestions) === count($userAnswers)) {

            echo "<h1>Resultados</h1>";
            foreach ($infoQuestions as $question) {
                if ($userAnswers[$question['question_id']] === $question['correct_option']) {
                    $points += 10;
                    $results[] = "Your answer was correct. +10 points!";
                }
                else{
                    $results[] = "fail. The correct answer is " . $question['correct_option'];
                }

            }

            $counter = 1;
            foreach ($results as $resultValue){

                echo "<p> <strong>Question $counter</strong>. $resultValue</p>";
                $counter++;

            }

            echo "<h3>Total points: $points/" . count($infoQuestions) *10 . "</h3>";
            echo "<button class='again' onclick=\"window.location.href='?retake=true'\">Solve again<button>";


        }
    }


    // CRUD Methods

    public function showOnlyquestions(){
        $infoQuestions = $this->getQuizFromDataBase();
        foreach ($infoQuestions as $question) {?>
            <form method="post">
                <input type="hidden" name="question_id" value="<?= $question['question_id'] ?>">
                <button type="submit" name="handle_question">
                    <p><?= $question['question_text'] ?></p>
                </button>
            </form>
            <?php
        }
    }


    public function deleteFromDB($question_id){
        $connection = mysqli_connect("db", "user", "user", "quizz-app");
        $sql = "delete from questions where question_id = ?";
        $prepared = mysqli_prepare($connection, $sql);

        mysqli_stmt_bind_param($prepared, "i", $question_id); // i for integer
        mysqli_stmt_execute($prepared);
        mysqli_stmt_close($prepared);
        mysqli_close($connection);

    }

    public  function showQuestionsToUpdate(){

        $infoQuestions = $this->getQuizFromDataBase();
        foreach ($infoQuestions as $question){?>
            <form method="post">
                <input type="hidden" name="question_id" value="<?= $question['question_id'] ?>">
                <label><input name="new_question_text" style="width: 500px" value="<?php echo $question['question_text'] ?>"></label>
                <label>a: <input  name="new_option_a" style="background-color: antiquewhite" value="<?php echo $question['option_a'] ?>"></label>
                <label>b: <input name="new_option_b" style="background-color: antiquewhite" value="<?php echo $question['option_b'] ?>"></label>
                <label>c: <input name="new_option_c" style="background-color: antiquewhite" value="<?php echo $question['option_c'] ?>"></label>
                <label>Correct option <input name="new_correct_option" style="background-color: #bdd7a5" value="<?php echo $question['correct_option'] ?>"></label>
                <button type="submit" name="handle_question" class="again">Update</button>
            </form>
            <?php
        }

    }

    public function updateQuestion($question_id){
        $connection = mysqli_connect("db", "user", "user", "quizz-app");
        $new_question_text = mysqli_real_escape_string($connection, $_POST['new_question_text']);
        $new_option_a = mysqli_real_escape_string($connection, $_POST['new_option_a']);
        $new_option_b = mysqli_real_escape_string($connection, $_POST['new_option_b']);
        $new_option_c = mysqli_real_escape_string($connection, $_POST['new_option_c']);
        $new_correct_option = mysqli_real_escape_string($connection, $_POST['new_correct_option']);

        $sql = "update questions set 
                question_text = '$new_question_text',
                option_a = '$new_option_a',
                option_b = '$new_option_b',
                option_c = '$new_option_c',
                correct_option = '$new_correct_option'
            where question_id = ?";

        $prepared = mysqli_prepare($connection, $sql);

        mysqli_stmt_bind_param($prepared, "i", $question_id);
        mysqli_stmt_execute($prepared);
        mysqli_stmt_close($prepared);
        mysqli_close($connection);

    }

    public function showFormToAddQuestion(){?>

        <form method="post">

            <label>Question: <input name="new_question_text" style="width: 500px"></label>
            <label>a: <input  name="new_option_a" style="background-color: antiquewhite"></label>
            <label>b: <input name="new_option_b" style="background-color: antiquewhite"></label>
            <label>c: <input name="new_option_c" style="background-color: antiquewhite"></label>
            <label>Correct option <input name="new_correct_option" style="background-color: #bdd7a5"></label>
            <button type="submit" name="handle_question" class="again">Add</button>
        </form>
        <?php
    }

    public function addQuestion(){
        $connection = mysqli_connect("db", "user", "user", "quizz-app");
        $new_question_text = mysqli_real_escape_string($connection, $_POST['new_question_text']);
        $new_option_a = mysqli_real_escape_string($connection, $_POST['new_option_a']);
        $new_option_b = mysqli_real_escape_string($connection, $_POST['new_option_b']);
        $new_option_c = mysqli_real_escape_string($connection, $_POST['new_option_c']);
        $new_correct_option = mysqli_real_escape_string($connection, $_POST['new_correct_option']);
        $sql = "insert into questions (fk_quiz_id, question_text, option_a, option_b, option_c, correct_option, question_type) values
                ('1',
                 '$new_question_text',
                '$new_option_a',
                '$new_option_b',
                '$new_option_c',
                '$new_correct_option',
                 'multiple_choice')";

        mysqli_query($connection, $sql);
        mysqli_close($connection);

    }


}