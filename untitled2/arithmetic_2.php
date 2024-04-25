<?php

$check = 16;

if ($check % 2 == 0) {
    echo "Even Number" . PHP_EOL;
    echo "Bye!" . PHP_EOL;
} elseif ($check % 2 !== 0) {
    echo "Odd Number" . PHP_EOL;
    echo "Bye!" . PHP_EOL;
}