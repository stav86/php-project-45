<?php

namespace BrainGames\Games\BrainProgression;

use function cli\prompt;
use function cli\line;

function showExercise()
{
        return  'What number is missing in the progression?';
}

function getProgression(int $firstNum, int $progress)
{
    $numberCount = 10;
    $listNum = [];
    for ($i = 0; $i < $numberCount; $i++) {
        $progressNum = $firstNum + $i * $progress;
        $listNum[] = $progressNum;
    }
    return $listNum;
}

function ask()
{
    return function () {
        $firstNum = rand(1, 30);
        $progress = rand(2, 6);
        $randomeNum = array_rand($listNum = getProgression($firstNum, $progress), 1);
        $rightAnswer = $listNum[$randomeNum];
        $listNum[$randomeNum] = '..';
        $question = implode(" ", $listNum);
        return [$question, $rightAnswer];
    };
}
