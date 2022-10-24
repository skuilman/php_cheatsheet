<?php
// Simple Array
// $numbers = [1,44,55,22];
// $fruits = array('apple', 'orange', 'pear');

// print_r($fruits);
// var_dump($numbers);

// echo $fruits[1];

// Associative Array
// $colors = [
//    1 => 'red',
//    4 => 'blue',
//    6 => 'green'
//];

// echo $colors[4];

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];

// echo $hex['blue'];

$person = [
    'first_name' => 'Sjoerd',
    'last_name' => 'Kuilman',
    'email' => 'sjoerd@gmail.com'
];

// echo $person['first_name'];

$people = [
    [
        'first_name' => 'Sjoerd',
        'last_name' => 'Kuilman',
        'email' => 'sjoerd@gmail.com'
    ],
    [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'john@gmail.com'
    ],
    [
        'first_name' => 'Jane',
        'last_name' => 'Doe',
        'email' => 'jane@gmail.com'
    ] 
];

// echo $people[1]['email'];

// var_dump(json_encode($people));

