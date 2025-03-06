<?php

use function cli\prompt;
use function cli\line;

function description()
{
    line("What number is missing in the progression?");
}

function generateQuestion(string $userName): array
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
