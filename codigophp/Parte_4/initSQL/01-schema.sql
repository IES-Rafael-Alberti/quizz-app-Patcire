--  tabla de cuestionarios
CREATE TABLE quizzes (
        quiz_id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255),
        description TEXT,
        created_at DATETIME
);

-- tabla de preguntas
CREATE TABLE questions (
        question_id INT  AUTO_INCREMENT PRIMARY KEY,
        fk_quiz_id INT,
        question_text TEXT,
        option_a VARCHAR(255),
        option_b VARCHAR(255),
        option_c VARCHAR(255),
        option_d VARCHAR(255),
        correct_option CHAR(1),
        question_type VARCHAR(50) NOT NULL,
        question_details TEXT,
        FOREIGN KEY (fk_quiz_id) REFERENCES quizzes(quiz_id)
);

CREATE TABLE users (
          user_id INT PRIMARY KEY AUTO_INCREMENT,
          username VARCHAR(255) NOT NULL UNIQUE,
          password VARCHAR(255) NOT NULL,
          email VARCHAR(255)
);

