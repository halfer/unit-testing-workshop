<?php

$projectRoot = realpath(__DIR__ . '/..');
require_once $projectRoot . '/src/Dice.php';
require_once $projectRoot . '/src/RandomGenerator.php';

$generator = new RandomGenerator();
$dice = new Dice($generator);

for ($throw = 1; $throw <= 12; $throw++)
{
    echo $dice->getDiceResultString() . "\n";
}

