<?php

namespace src\Games\brainGcd;

use function cli\prompt;
use function cli\line;

function showExercise()
{
        line("Find the greatest common divisor of given numbers.");
}

function findGcd($number1, $number2)
{
    while ($number2 != 0) {
        $result = $number1 % $number2;
        $number1 = $number2;
        $number2 = $result;
    }
    return $number1;
}

function generatedQuestionAnswer(): array
{
    $number1 = rand(1, 100);
    $number2 = rand(1, 100);
    $question = "{$number1} {$number2}";
    $rightAnswer = findGcd($number1, $number2);
    return [$question, $rightAnswer];
}
