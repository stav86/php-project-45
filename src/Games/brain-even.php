<?php

function greeting()
{
    echo "Welcome to the Brain Games!\n";
    echo "May I have your name? ";
    $name = trim(fgets(STDIN));
    echo "Hello, $name!\n";
    echo "\"yes\" if the number even, otherwise answer \"no\"\n";
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
