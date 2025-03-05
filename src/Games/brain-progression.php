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
    $first_num = rand(1, 30);
    $progress = rand(2, 6);
    $array_num = [];
    for ($i = 0; $i < 10; $i++) {
        $progress_num = $first_num + $i * $progress;
        $array_num[] = $progress_num;
    }
    $randome_key = array_rand($array_num, 1);
    $rightAnswer = $array_num[$randome_key];
    $array_num[$randome_key] = '..';
    $question = implode(" ", $array_num);
    return [$question, $rightAnswer];
}

$name = greeting();
play($name);
