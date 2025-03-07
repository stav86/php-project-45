<?php

namespace src\Games\brainEven;

use function cli\prompt;
use function cli\line;

function showExercise()
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
}

function generatedQuestionAnswer(): array
{
    $number = rand(1, 100);
    $question = $number;
    $rightAnswer = ($number % 2 === 0) ? 'yes' : 'no';
    return [$question, $rightAnswer];
}
