<?php

use function cli\prompt;
use function cli\line;

function greeting()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    return $name;
}


function generateQuestion(): array
{
    $number = rand(1, 100);
    $question = $number;
    $rightAnswer = ($number % 2 === 0) ? 'yes' : 'no';
    return [$question, $rightAnswer];
}

$name = greeting();
play($name);
