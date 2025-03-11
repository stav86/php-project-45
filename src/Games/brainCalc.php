<?php

namespace BrainGames\Games\BrainCalc;

use function cli\prompt;
use function cli\line;

function showExercise()
{
        return 'What is the result of the expression?';
}

function ask()
{
    return function () {
        $number1 = rand(1, 10);
        $number2 = rand(1, 10);
        $operators = ['+', '-', '*'];
        $randomeOperators = array_rand($operators, 1);
        $sign = $operators[$randomeOperators];
        $question = "{$number1} $sign {$number2}";
        switch ($sign) {
            case '+':
                $rightAnswer = $number1 + $number2;
                break;
            case '-':
                $rightAnswer = $number1 - $number2;
                break;
            case '*':
                $rightAnswer = $number1 * $number2;
                break;
            default:
                $rightAnswer = null;
        }
        return [$question, $rightAnswer];
    };
}
