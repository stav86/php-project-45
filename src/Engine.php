<?php

use function cli\prompt;
use function cli\line;

function isCorrect(string $answer, string $rightAnswer): bool
{
    return $answer == $rightAnswer;
}

function play($name)
{
    $answerCount = 0;
    $rightAnswerCount = 3;

    for ($i = 0; $i < $rightAnswerCount; $i++) {
        list($question, $rightAnswer) = generateQuestion();

        line("Question: {$question}");
        $answer = prompt('Your answer?:');

        if (isCorrect($answer, $rightAnswer)) {
            line("Correct!");
            $answerCount++;
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$rightAnswer'.");
            line("Let's try again, $name!");
            return;
        }
    }
    if ($answerCount === $rightAnswerCount) {
        line("Congratulations, $name!");
    }
}
