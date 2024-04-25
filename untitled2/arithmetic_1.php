<?php

$num1 = 13;
$num2 = 12;

if ($num1 == 15 || $num2 == 15) {
    echo "true";
} elseif ($num1 + $num2 == 15) {
    echo "true";
} elseif ($num1 - $num2 == 15 || $num2 - $num1 == 15) {
    echo "true";
} else {
    echo "false";
}