<?php

use function cli\prompt;

function greeting()
{
    echo "Welcome to the Brain Games!\n";
    $name = prompt('May I have your name?');
    echo "Hello, $name!\n";
    echo "Find the greatest common divisor of given numbers.\n";
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

require_once(__DIR__ . '/../Engine.php');

$name = greeting();
play($name);
