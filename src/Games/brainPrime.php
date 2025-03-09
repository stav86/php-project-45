<?php

namespace BrainGames\Games\brainPrime;

use function cli\prompt;
use function cli\line;

function showExercise()
{
    return function () {
        return 'Answer "yes" if given number is prime. Otherwise answer "no".';
    };
}

function isPrime(int $number)
{
    if ($number === 1) {
        return false;
    } elseif ($number === 2) {
        return true;
    } elseif ($number % 2 == 0) {
        return false;
    }

    for ($i = 3; $i <= sqrt($number); $i += 2) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function ask()
{
    return function () {
        $number = rand(1, 100);
        $question = $number;
        $rightAnswer = isPrime($number) ? 'yes' : 'no';
        return [$question, $rightAnswer];
    };
}
