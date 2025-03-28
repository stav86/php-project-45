<?php

namespace BrainGames\Games\BrainEven;

use function cli\prompt;
use function cli\line;

function showExercise()
{
        return 'Answer "yes" if the number is even, otherwise answer "no".';
}

function ask()
{
    return function () {
        $number = rand(1, 100);
        $question = $number;
        $rightAnswer = ($number % 2 === 0) ? 'yes' : 'no';
        return [$question, $rightAnswer];
    };
}
