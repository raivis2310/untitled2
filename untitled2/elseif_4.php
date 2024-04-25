<?php

$number = -11;
$number2 = 20;

if ($number % 2 == 0) {
    echo "The number is even";
} elseif ($number >= 0) {
    echo "The number is positive";
} elseif ($number > $number2) {
    echo "The first number is bigger than second number";
} else {
    echo "No information about this number";
}