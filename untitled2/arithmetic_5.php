<?php

$random = (rand(1, 100));
$int = (int)readline("Write a number: ");

if ($random == $int) {
    echo "You guessed it!  What are the odds?!?" . "\n";
} elseif ($random < $int) {
    echo "Sorry, you are too high.  I was thinking of " . $random . ".\n";
} elseif ($random > $int) {
    echo "Sorry, you are too low.  I was thinking of " . $random . ".\n";
}