<?php

namespace src\Games\brainProgression;

use function cli\prompt;
use function cli\line;

function showExercise()
{
    line("What number is missing in the progression?");
}

function isProgression(int $firstNum, int $progress)
{
    $numberCount = 10;
    $listNum = [];
    for ($i = 0; $i < $numberCount; $i++) {
        $progressNum = $firstNum + $i * $progress;
        $listNum[] = $progressNum;
    }
    return $listNum;
}

function generatedQuestionAnswer(): array
{
    $firstNum = rand(1, 30);
    $progress = rand(2, 6);
    $randomeNum = array_rand($listNum = isProgression($firstNum, $progress), 1);
    $rightAnswer = $listNum[$randomeNum];
    $listNum[$randomeNum] = '..';
    $question = implode(" ", $listNum);
    return [$question, $rightAnswer];
}
