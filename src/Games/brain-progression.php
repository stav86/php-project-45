<?php

use function cli\prompt;
use function cli\line;

function greeting()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line("What number is missing in the progression?");
    return $name;
}

function generateQuestion(): array
{
    $firstNum = rand(1, 30);
    $progress = rand(2, 6);
    $numberCount = 10;
    $arrayNum = [];
    for ($i = 0; $i < $numberCount; $i++) {
        $progressNum = $firstNum + $i * $progress;
        $arrayNum[] = $progressNum;
    }
    $randomeKey = array_rand($arrayNum, 1);
    $rightAnswer = $arrayNum[$randomeKey];
    $arrayNum[$randomeKey] = '..';
    $question = implode(" ", $arrayNum);
    return [$question, $rightAnswer];
}

$name = greeting();
play($name);
