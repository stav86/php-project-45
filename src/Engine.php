<?php

use function cli\prompt;
use function cli\line;

function isCorrect(string $answer, string $rightAnswer): bool
{
    return $answer == $rightAnswer;
}

function play($userName)
{
    $answerCount = 0;
    $rightAnswerCount = 3;
    for ($i = 0; $i < $rightAnswerCount; $i++) {
        list($question, $rightAnswer) = generateQuestion($userName);

        line("Question: {$question}");
        $answer = prompt('Your answer?');

        if (isCorrect($answer, $rightAnswer)) {
            line("Correct!");
            $answerCount++;
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$rightAnswer'.");
            line("Let's try again, $userName!");
            return;
        }
    }
    if ($answerCount === $rightAnswerCount) {
        line("Congratulations, $userName!");
    }
}
