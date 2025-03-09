<?php

namespace BrainGames\Games\brainGcd;

use function cli\prompt;
use function cli\line;

function showExercise()
{
    return function () {
    return 'Find the greatest common divisor of given numbers.';
    };
}

function findGcd(int $number1, int $number2)
{
    while ($number2 != 0) {
        $result = $number1 % $number2;
        $number1 = $number2;
        $number2 = $result;
    }
    return $number1;
}

function ask()
{
    return function () {
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);
        $question = "{$number1} {$number2}";
        $rightAnswer = findGcd($number1, $number2);
        return [$question, $rightAnswer];
    };
}
