<?php

namespace BrainGames\Engine;

use function cli\prompt;
use function cli\line;

function checkCorrect(string $answer, string $rightAnswer): bool
{
    return $answer == $rightAnswer;
}


function startPlay(callable $generatorFunction, $showExercise)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($showExercise);
    $rightAnswerCount = 3;
    for ($i = 0; $i < $rightAnswerCount; $i++) {
        list($question, $rightAnswer) = $generatorFunction($name);

        line("Question: {$question}");
        $answer = prompt('Your answer?');

        if (!checkCorrect($answer, $rightAnswer)) {
            line("'$answer' is wrong answer ;(. Correct answer was '$rightAnswer'.");
            line("Let's try again, $name!");
            return;
        }
        line("Correct!");
    }
        line("Congratulations, $name!");
}
