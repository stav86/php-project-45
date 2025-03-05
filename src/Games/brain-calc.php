<?php

use function cli\prompt;
use function cli\line;

function greeting()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line("What is the result of the expression?");
    return $name;
}

function generateQuestion(): array
{
    $number1 = rand(1, 10);
    $number2 = rand(1, 10);
    $operators = ['+', '-', '*'];
    $randomeKeySign = array_rand($operators, 1);
    $sign = $operators[$randomeKeySign];
    $question = "{$number1} $sign {$number2}";
    switch ($sign) {
        case '+':
            $rightAnswer = $number1 + $number2;
            break;
        case '-':
            $rightAnswer = $number1 - $number2;
            break;
        case '*':
            $rightAnswer = $number1 * $number2;
            break;
    }
        return [$question, $rightAnswer];
}

$name = greeting();
play($name);
