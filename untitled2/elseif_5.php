<?php

$number = 50;
$y = 100;
$z = 60;

if ($number >= $y && $number <= $z) {
    echo "Correct!";
} elseif ($number <= $y && $number >= $z) {
    echo "Correct!";
} else {
    echo "Wrong!";
}
