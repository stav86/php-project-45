<?php

use function cli\prompt;
use function cli\line;

function generateQuestion(): array
{
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    $number = rand(1, 100);
    $question = $number;
    $rightAnswer = 'yes';
    if ($number === 1) {
        $rightAnswer = 'no';
    } elseif ($number === 2) {
        $rightAnswer = 'yes';
    } elseif ($number % 2 == 0) {
        $rightAnswer = 'no';
    } else {
        for ($i = 3; $i <= sqrt($number); $i += 2) {
            if ($number % $i == 0) {
                $rightAnswer = 'no';
                break;
            }
        }
    }
    return [$question, $rightAnswer];
}

play($name);
