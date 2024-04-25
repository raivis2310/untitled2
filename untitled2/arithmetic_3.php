<?php

$lowerBound = 1;
$upperBound = 100;

$result = 0;

for($i = $lowerBound; $i <= $upperBound; $i++){
    $result = $result + $i;
}

echo "The sum of 1 to 100 is " . $result . "\n";
echo "The average is " . (($lowerBound+$upperBound)/2) . "\n";