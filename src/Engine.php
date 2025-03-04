<?php

function isCorrect(string $answer, string $rightAnswer): bool
{
    return $answer == $rightAnswer;
}
function play(string $name)
{
    $correctAnswer = 0;

    for ($i = 0; $i < 3; $i++) {
        list($question, $rightAnswer) = generateQuestion();

        echo "Question: {$question}\n";
        echo "Your answer: ";
        $input = fgets(STDIN);
        if ($input !== false) {
            $answer = trim($input);
        }

        if (isCorrect($answer, $rightAnswer)) {
            echo "Correct!\n";
            $correctAnswer++;
        } else {
            echo "'$answer' is wrong answer ;(. Correct answer was '$rightAnswer'.\n";
            echo "Let's try again, $name!\n";
            break;
        }
    }
    if ($correctAnswer === 3) {
        echo "Congratulations, $name!\n";
    }
}
