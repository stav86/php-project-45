<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

line('Welcome to the Brain Games!');
if (posix_isatty(STDIN)) {
    $name = cli\prompt('May I have your name?');
} else {
    $name = 'Default Name'; // или получить имя из переменной окружения
}
line("Hello, %s!", $name);
