<?php

$numbers = [56,89,46,3,15,97];

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] % 3 == 0) {
        echo $numbers[$i] . " ";
    }
}