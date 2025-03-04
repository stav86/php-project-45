<?php

use function cli\prompt;

function greeting()
{
    echo "Welcome to the Brain Games!\n";
    $name = prompt('May I have your name?');
    echo "Hello, $name!\n";
    echo "What is the result of the expression?\n";
    return $name;
}

function generateQuestion(): array
{
    $number_1 = rand(1, 10);
    $number_2 = rand(1, 10);
    $sign_array = ['+', '-', '*'];
    $randome_key_sign = array_rand($sign_array, 1);
    $sign = $sign_array[$randome_key_sign];
    $question = "{$number_1} $sign {$number_2}";
    switch ($sign) {
        case '+':
            $rightAnswer = $number_1 + $number_2;
            break;
        case '-':
            $rightAnswer = $number_1 - $number_2;
            break;
        case '*':
            $rightAnswer = $number_1 * $number_2;
            break;
    }
        return [$question, $rightAnswer];
}

require_once(__DIR__ . '/../Engine.php');

$name = greeting();
play($name);
