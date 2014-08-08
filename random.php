<?php
$food = [
    0 => "Sushi",
    1 => "Doughnuts",
    2 => "Hawaiian Pizza",
    3 => "Hamburgers",
    4 => "Burritos",
    5 => "Tacos"
];

$animals = [
    0 => "Dogs",
    1 => "Penguins",
    2 => "baby Elephants",
    3 => "Koalas",
    4 => "Mice",
    5 => "Owls",
    6 => "all kinds of Primates"
];

$music = [
    0 => "Daft Punk",
    1 => "Dire Straits",
    2 => "Coldplay",
    3 => "Cream",
    4 => "Deep Purple",
    5 => "Rush",
    6 => "ZZ Top",
    7 => "Daft Punk",
    8 => "Stevie Wonder"
];

$rand_food = array_rand($food, 1);
$rand_animal = array_rand($animals, 1);
$rand_music = array_rand($music, 1);

$choices = [
    0 => $food[$rand_food],
    1 => $animals[$rand_animal],
    2 => $music[$rand_music]
];
?>