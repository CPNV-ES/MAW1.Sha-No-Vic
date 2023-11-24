-- Insert Exercise 1 with 3 Questions
INSERT INTO `exercise_looper`.`exercises` (`title`, `status`)
VALUES ('Exercise 1', 'building');

INSERT INTO `exercise_looper`.`questions` (`exercises_id`, `title`, `type`)
VALUES (1, 'Question 1', 'single_line'),
       (1, 'Question 2', 'single_line_list'),
       (1, 'Question 3', 'multi_line');

-- Insert Fulfillment for Exercise 1
INSERT INTO `exercise_looper`.`fulfillments` (`exercises_id`)
VALUES (1);

-- Insert Answers for Exercise 1
INSERT INTO `exercise_looper`.`answers` (`questions_id`, `fulfillments_id`, `answer`)
VALUES (1, 1, 'Answer 1 for Question 1'),
       (2, 1, 'Answer 2 for Question 2'),
       (3, 1, 'Answer 3 for Question 3');

-- Insert Exercise 2 with 3 Questions
INSERT INTO `exercise_looper`.`exercises` (`title`, `status`)
VALUES ('Exercise 2', 'building');

INSERT INTO `exercise_looper`.`questions` (`exercises_id`, `title`, `type`)
VALUES (2, 'Question 4', 'single_line'),
       (2, 'Question 5', 'single_line_list'),
       (2, 'Question 6', 'multi_line');

-- Insert Fulfillment for Exercise 2
INSERT INTO `exercise_looper`.`fulfillments` (`exercises_id`)
VALUES (2);

-- Insert Answers for Exercise 2
INSERT INTO `exercise_looper`.`answers` (`questions_id`, `fulfillments_id`, `answer`)
VALUES (4, 2, 'Answer 4 for Question 4'),
       (5, 2, 'Answer 5 for Question 5'),
       (6, 2, 'Answer 6 for Question 6');

-- Insert Exercise 3 with 3 Questions
INSERT INTO `exercise_looper`.`exercises` (`title`, `status`)
VALUES ('Exercise 3', 'building');

INSERT INTO `exercise_looper`.`questions` (`exercises_id`, `title`, `type`)
VALUES (3, 'Question 7', 'single_line'),
       (3, 'Question 8', 'single_line_list'),
       (3, 'Question 9', 'multi_line');

-- Insert Fulfillment for Exercise 3
INSERT INTO `exercise_looper`.`fulfillments` (`exercises_id`)
VALUES (3);

-- Insert Answers for Exercise 3
INSERT INTO `exercise_looper`.`answers` (`questions_id`, `fulfillments_id`, `answer`)
VALUES (7, 3, 'Answer 7 for Question 7'),
       (8, 3, 'Answer 8 for Question 8'),
       (9, 3, 'Answer 9 for Question 9');