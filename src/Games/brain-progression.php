<?php

use function cli\prompt;

function greeting()
{
    echo "Welcome to the Brain Games!\n";
    $name = prompt('May I have your name?');
    echo "Hello, $name!\n";
    echo "What number is missing in the progression?\n";
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

require_once(__DIR__ . '/../Engine.php');

$name = greeting();
play($name);
