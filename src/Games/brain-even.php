<?php

function description()
{
    echo "Answer \"yes\" if the number is even, otherwise answer \"no\".\n";
}

description();

function generateQuestion(): array
{
    $number = rand(1, 100);
    $question = $number;
    $rightAnswer = ($number % 2 === 0) ? 'yes' : 'no';
    return [$question, $rightAnswer];
}

require_once(__DIR__ . '/../Engine.php');

play($name);
