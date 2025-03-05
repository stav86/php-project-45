<?php

use function cli\prompt;
use function cli\line;

function generateQuestion(): array
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $number = rand(1, 100);
    $question = $number;
    $rightAnswer = ($number % 2 === 0) ? 'yes' : 'no';
    return [$question, $rightAnswer];
}


play($name);
