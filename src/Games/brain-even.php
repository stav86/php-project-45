<?php

use function cli\prompt;

function greeting()
{
    echo "Welcome to the Brain Games!\n";
    $name = prompt('May I have your name?');
    echo "Hello, $name!\n";
    echo "Answer \"yes\" if the number is even, otherwise answer \"no\".\n";
    return $name;
}


function generateQuestion(): array
{
    $number = rand(1, 100);
    $question = $number;
    $rightAnswer = ($number % 2 === 0) ? 'yes' : 'no';
    return [$question, $rightAnswer];
}

require_once(__DIR__ . '/../Engine.php');

$name = greeting();
play($name);
