<?php

$number = 85;

switch ($number) {
    case $number < 50:
        echo "Low";
        break;
    case $number > 50 && $number < 100:
        echo "Medium";
        break;
    case $number > 100:
        echo "High";
        break;
    default:
        echo "ERROR";
        break;
}