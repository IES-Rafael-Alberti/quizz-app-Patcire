-- INSERT DATA OF PHP QUIZZ

INSERT INTO quizzes (quiz_id, title, description, created_at)
VALUES (1, 'PHP Quiz', 'A quiz to test your PHP knowledge', NOW());

INSERT INTO questions (question_id, fk_quiz_id, question_text, option_a, option_b, option_c, correct_option, question_type, question_details)
VALUES    (1, 1, 'What does PHP stand for?', 'Personal Home Page', 'PHP: Hypertext Preprocessor', 'PHP Hyper Markup Language', 'b', 'multiple_choice', NULL),
          (2, 1, 'What is the result of 2 + 2 in PHP?', '3', '4', '5', 'b', 'multiple_choice', NULL),
          (3, 1, 'What type of loop in PHP is used to iterate over a block of code a specific number of times?', 'for loop', 'while loop', 'foreach loop', 'a', 'multiple_choice', NULL),
          (4, 1, 'How can you declare a constant in PHP?', 'define()', 'const()', 'constant()', 'a', 'multiple_choice', NULL),
          (5, 1, 'What is the purpose of the "echo" statement in PHP?', 'Output text to the browser', 'Create a variable', 'Include a file', 'a', 'multiple_choice', NULL),
          (6, 1, 'How do you define a function in PHP?', 'function myFunction()', 'def myFunction():', 'define myFunction()', 'a', 'multiple_choice', NULL),
          (7, 1, 'What is the purpose of the "GET" method in form submissions?', 'Send data to the server as part of the URL', 'Encrypt data before sending', 'Submit data securely', 'a', 'multiple_choice', NULL),
          (8, 1, 'In PHP, how can you check if a variable is set and not null?', 'isset()', 'notnull()', 'isnull()', 'a', 'multiple_choice', NULL),
          (9, 1, 'How can you concatenate two strings in PHP?', '.concat()', 'concatenate()', '. (dot operator)', 'c', 'multiple_choice', NULL),
          (10, 1, 'What is the purpose of the "break" statement in a loop in PHP?', 'Skip', 'Exit the loop', 'Continue to the next iteration', 'b', 'multiple_choice', NULL);