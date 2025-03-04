<?php

use function cli\prompt;

function greeting()
{
    echo "Welcome to the Brain Games!\n";
    $name = prompt('May I have your name?');
    echo "Hello, $name!\n";
    echo "Answer \"yes\" if given number is prime. Otherwise answer \"no\".\n";
    return $name;
}

function generateQuestion(): array
{
    $number = rand(1, 100);
    $question = $number;
    $rightAnswer = 'yes';
    if ($number === 1) {
        $rightAnswer = 'no';
    } elseif ($number === 2) {
        $rightAnswer = 'yes';
    } elseif ($number > 2 && $number % 2 == 0) {
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

require_once(__DIR__ . '/../Engine.php');

$name = greeting();
play($name);
