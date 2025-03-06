<?php

use function cli\prompt;
use function cli\line;

function description()
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
}

function generateQuestion(string $userName): array
{
    $number = rand(1, 100);
    $question = $number;
    $rightAnswer = ($number % 2 === 0) ? 'yes' : 'no';
    return [$question, $rightAnswer];
}
