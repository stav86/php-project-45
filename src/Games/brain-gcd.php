<?php

use function cli\prompt;
use function cli\line;

function greeting()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line("Find the greatest common divisor of given numbers.");
    return $name;
}

function generateQuestion(): array
{
    $number_1 = rand(1, 100);
        $number_2 = rand(1, 100);
        $question = "{$number_1} {$number_2}";
        $array_num = [$number_1, $number_2];
        $max_num = max($number_1, $number_2);
        $min_num = min($number_1, $number_2);
    while ($min_num != 0) {
            $result = $max_num % $min_num;
            $max_num = $min_num;
            $min_num = $result;
    }
        return [$question, $max_num];
}

$name = greeting();
play($name);
