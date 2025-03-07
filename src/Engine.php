<?php

namespace src\Engine;

use function cli\prompt;
use function cli\line;

function checkCorrect(string $answer, string $rightAnswer): bool
{
    return $answer == $rightAnswer;
}

function play(callable $generatorFunction, string $userName)
{
    $rightAnswerCount = 3;
    for ($i = 0; $i < $rightAnswerCount; $i++) {
        list($question, $rightAnswer) = $generatorFunction($userName);

        line("Question: {$question}");
        $answer = prompt('Your answer?');

        if (!checkCorrect($answer, $rightAnswer)) {
            line("'$answer' is wrong answer ;(. Correct answer was '$rightAnswer'.");
            line("Let's try again, $userName!");
            return;
        }
        line("Correct!");
    }
        line("Congratulations, $userName!");
}
