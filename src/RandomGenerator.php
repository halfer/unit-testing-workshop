<?php

class RandomGenerator
{
    public function generateDiceValue($sidesCount)
    {
        return random_int(1, $sidesCount);
    }
}
