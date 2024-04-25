<?php

$items = [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50,
            "birthday" => "July 19",
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41,
            "birthday" => "August 5",
        ],
        [
            "name" => "Raivis",
            "surname" => "Rusins",
            "age" => 33,
            "birthday" => "October 23",
        ],
        [
            "name" => "Karlis",
            "surname" => "Kocins",
            "age" => 16,
            "birthday" => "January 26",
        ]
];

foreach ($items as $item) {
    echo $item["name"] . " " . $item["surname"] . " " . $item["age"] . " " . $item["birthday"] . PHP_EOL;
}