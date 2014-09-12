<?php


if ($argc == 3) {
    $min = $argv[1];
    $max = $argv[2];

    $answer = rand($min, $max);
} else {
    $answer = rand(1,100);
}

$number_of_guesses = 0;

fwrite (STDOUT, "Welcome to the HIGHER OR LOWER game.".PHP_EOL);

do {
    fwrite (STDOUT, "Guess a number.  ");

    $guess = trim(fgets(STDIN));

    $number_of_guesses++;

    if ($guess== $answer) {
        fwrite (STDOUT, "GOOD GUESS! HIP HIP HOORAY!!!! Rock on.".PHP_EOL);
    } elseif ($guess > $answer) {
        fwrite(STDOUT, "$guess is too HIGH. guess again.  ".PHP_EOL);
    } else {
        fwrite (STDOUT, "$guess is too LOW. guess again  ".PHP_EOL);
    }
} while ($guess != $answer);

usleep (500000);

fwrite(STDOUT, "It took you $number_of_guesses guesses to figure it out.  ".PHP_EOL);
