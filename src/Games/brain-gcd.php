<?php

use function cli\prompt;
use function cli\line;

function generateQuestion(): array
{
    line("Find the greatest common divisor of given numbers.");
    $number1 = rand(1, 100);
    $number2 = rand(1, 100);
    $question = "{$number1} {$number2}";
    $arrayNum = [$number1, $number2];
    $maxNum = max($number1, $number2);
    $minNum = min($number1, $number2);
    while ($min_num != 0) {
            $result = $maxNum % $minNum;
            $maxNum = $minNum;
            $minNum = $result;
    }
        return [$question, $maxNum];
}

play($name);
