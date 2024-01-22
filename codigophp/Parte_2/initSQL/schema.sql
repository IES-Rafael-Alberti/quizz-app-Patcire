--  tabla de cuestionarios
CREATE TABLE quizzes (
        quiz_id INT PRIMARY KEY,
        title VARCHAR(255),
        description TEXT,
        created_at DATETIME
);

-- tabla de preguntas
CREATE TABLE questions (
        question_id INT PRIMARY KEY,
        quiz_id INT,
        question_text TEXT,
        option_a VARCHAR(255),
        option_b VARCHAR(255),
        option_c VARCHAR(255),
        option_d VARCHAR(255),
        correct_option CHAR(1),
        FOREIGN KEY (quiz_id) REFERENCES quizzes(quiz_id)
);